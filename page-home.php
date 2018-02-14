<?php

/*
	Template Name: Home Page
*/

get_header();  ?>
<div class="main">
    <div class="hero" id="home" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>') ">
        <div class="heroInner">
            <div class="container">
                <h1>Ontario's Leading <br> Contracting Business</h1>
                <h2>AFC Inc. delivers high-quality construction services to meet commercial and municipal requirements and budget</h2>
                <div class="cta"><a href="#services"><i class="fa fa-chevron-down"></i></a></div>
            </div>
        </div>
    </div> <!-- hero ends -->
    
    <div class="services" id="services" style="background-image: url('<?php the_field('services_background'); ?>')">
        <div class="container">
        <h2 class="title">Services</h2>
        <p>AFC Inc. builds and supplies a wide range of products guaranteed to suit any project.  When delivering the following services, we focus on exceeding your construction expectations--no matter how high.</p>
        <div class="slider">

        <?php
        $projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 
        $featuredQuery2 = new WP_Query( 
        array( 
            'post_type' => 'service', 
            ) 
            );  ?>
            <?php if ( $featuredQuery2->have_posts() ) : ?>
                <?php while ($featuredQuery2->have_posts()) : $featuredQuery2->the_post(); ?>
                <?php if ( has_post_thumbnail() ) : ?>
                <div class="slide">
                    <div class="imageBox">
                    <img class="example-image" src="<?php the_post_thumbnail_url('full'); ?>"/>
                    </div>
                    <?php if( get_field('service_title') ): ?>
                    <?php $text = get_field('service_title'); ?>
                    <h2><?php echo $text; ?></h2>
                    <?php endif; ?>
                    <?php if( get_field('service_description') ): ?>
                    <?php $text = get_field('service_description'); ?>
                    <p><?php echo $text; ?></p>
                    <?php endif; ?>
                    <a href="#contactUs">Contact Us</a>
                </div>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else:  ?>
        <?php endif; ?>
        </div>
        </div>
    </div>  <!-- services ends -->  
    <div class="ourWork" id="ourWork">
        <div class="container">
            <h2 class="title">Our Work</h2>
<div class="grid"> <!-- our work starts      -->
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
        <?php

        $projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 

        $featuredQuery = new WP_Query( 
        array( 
            'post_type' => 'project', 
            ) 
            );  ?>
            <?php if ( $featuredQuery->have_posts() ) : ?>
                <?php while ($featuredQuery->have_posts()) : $featuredQuery->the_post(); ?>
                
                <?php if ( has_post_thumbnail() ) : ?>
                <div class="grid-item <?php if( get_field('image_width') ): ?>double<?php endif; ?> <?php if( get_field('double_height') ): ?>doubleHeight<?php endif; ?>">
                    <a href="<?php the_post_thumbnail_url('full'); ?>" class="example-image-link" data-fancybox="gallery1" data-caption="<?php the_title() ?>" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
                        <div class="caption">
                            <p><?php the_title() ?></p>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
                <div class="additionalPhotos">    
                <?php if( get_field('image_2') ): ?>
                    <!-- <div class="grid-item"> -->
                    <?php $image = get_field('image_2'); ?>
                    <a href="<?php echo $image['url']; ?>" class="example-image-link" data-fancybox="gallery1" data-caption="<?php the_content() ?>">
                    <img class="example-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <!-- </div> -->
                <?php endif; ?>
                <?php if( get_field('image_3') ): ?>
                    <!-- <div class="grid-item"> -->
                    <?php $image = get_field('image_3'); ?>
                    <a href="<?php echo $image['url']; ?>" class="example-image-link" data-fancybox="gallery1" data-caption="<?php the_content() ?>">
                    <img class="example-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <!-- </div> -->
                <?php endif; ?>
                <?php if( get_field('image_4') ): ?>
                    <!-- <div class="grid-item"> -->
                    <?php $image = get_field('image_4'); ?>
                    <a href="<?php echo $image['url']; ?>" class="example-image-link" data-fancybox="gallery1" data-caption="<?php the_content() ?>">
                    <img class="example-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <!-- </div> -->
                <?php endif; ?>
                
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else:  ?>
        <?php endif; ?>
    </div> <!-- our work ends here -->
    </div>
    </div>


    <div class="clients" id="clients">
        <div class="container">
        <h2 class="title">Clients</h2>
        <p>AFC Inc. is a leading Ontario contractor business that delivers high-quality and afffordable construction services.</p>
        <div class="clientSlider">
            <?php
            $projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 
            $featuredQuery3 = new WP_Query( 
            array( 
            'post_type' => 'client', 
            ) 
            );  ?>
            <?php if ( $featuredQuery3->have_posts() ) : ?>
            <?php while ($featuredQuery3->have_posts()) : $featuredQuery3->the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="slide">
            <img class="clientImage" src="<?php the_post_thumbnail_url('full'); ?>"/>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
            <?php endif; ?>
        </div>
        </div>
    </div> <!-- clients ends -->
    <div class="aboutUs" id="about">
        <div class="container">
        <div class="leftSide" style="background-image: url('<?php the_field('about_background'); ?>')">
        </div>
        <div class="rightSide">
            <h2 class="title">About Us</h2>
            <p>We are honest, loyal, and dedicated to completing commercial and municipal projects on time and within your required budget. We build with a variety of materials including lumber, steel, and concrete, and we are always ready to adapt our designs to meet every customer’s needs.</p>
        </div>
        </div>
    </div> <!-- about us ends -->

    <div class="contactUs" id="contactUs">
        <div class="container">
        <h2 class="title">Contact Us</h2>
        <p>We'd love to work with you on your construction project.  If you have any questions or would like additional information, please contact us today.</p>
        <div class="addressForm">
            <div class="leftSide">
                <div class="column column1">
                    <div class="contactMethod">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/phone.png" alt="">
                        <div>
                            <h3>Phone</h3>
                            <p>(905) 729-1077</p>
                        </div>
                    </div>
                    <div class="contactMethod">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/email.png" alt="">
                        <div>
                            <h3>Email</h3>
                            <p>anthony@afconstruction.ca</p>
                        </div>
                    </div>
                    <div class="contactMethod">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fax.png" alt="">
                        <div>
                            <h3>Fax</h3>
                            <p>(905) 729-0424</p>
                        </div>
                    </div>
                </div>
                <div class="column column2">
                    <div class="contactMethod">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shipping-address.png" alt="">
                        <div>
                            <h3>Shipping Address</h3>
                            <p>5683 11th Line</p>
                            <p>New Tecumseth, ON</p>
                            <p>L0G 1A0</p>
                        </div>
                    </div>
                    <div class="contactMethod">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mailing-address.png" alt="">
                        <div>
                            <h3>Mailing Address</h3>
                            <p>14 Cherry Lane</p>
                            <p>New Tecumseth, ON</p>
                            <p>L9R OM1</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightSide">
                <h3>Send Us a Message</h3>
                <?php echo do_shortcode( '[contact-form-7 id="32" title="Send Us a Message"]' ); ?>
            </div>
        </div>
        </div>
    </div>  <!-- contact us ends -->
           
</div> <!-- /.main -->
<?php get_footer(); ?>

