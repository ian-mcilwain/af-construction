<?php

/*
	Template Name: Privacy Policy
*/

get_header();  ?>
<div class="main">
    <div class="hero" id="home" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>') ">
        <div class="heroInner">
            <div class="container">
                <h1>Terms of Use and <br> Privacy Policy</h1>
            </div>
        </div>
    </div> <!-- hero ends -->
    <div class="privacyPolicy">
        <div class="container">
            <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; // end the loop?>
        </div>
    </div>
    
</div> <!-- /.main -->
<?php get_footer(); ?>

