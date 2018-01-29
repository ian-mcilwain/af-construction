<?php

/*
	Template Name: Home Page
*/

get_header();  ?>
<div class="main">
    <div class="hero">
        <div class="heroInner">
            <h1>Ontario's Leading Contracting Business</h1>
            <h2>AFC Inc. delivers high-quality construction services to meet commercial and municipal requirements and budget</h2>
            <div class="cta">^</div>
        </div>
    </div>
    <div class="services">
        <h2>Services</h2>
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
                    <img class="example-image" src="<?php the_post_thumbnail_url('full'); ?>"/>
                    <?php if( get_field('service_title') ): ?>
                    <?php $text = get_field('service_title'); ?>
                    <h2><?php echo $text; ?></h2>
                    <?php endif; ?>
                    <?php if( get_field('service_description') ): ?>
                    <?php $text = get_field('service_description'); ?>
                    <p><?php echo $text; ?></p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else:  ?>
        <?php endif; ?>
        </div>
    </div>

    <div class="grid">
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
                <div class="grid-item">
                    <a href="<?php the_post_thumbnail_url('full'); ?>" class="example-image-link" data-fancybox="gallery1" data-caption="<?php the_content() ?>">
                    <img class="example-image" src="<?php the_post_thumbnail_url('full'); ?>"/>
                    </a>
                <div class="caption">
                    <?php the_content() ?>
                </div>
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

    </div> <!-- grid ends here -->
    <div class="clients">
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
    </div> <!-- clients ends -->
    <div class="aboutUs">

    </div> <!-- about us ends -->
            
</div> <!-- /.main -->
<?php get_footer(); ?>

