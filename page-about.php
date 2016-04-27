<?php

/*
	Template Name: About Page
*/

get_header();  ?>

<div class="main">
  <div class="container aboutContainer">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <div class="contactInfo">
      	
      <p class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
      <p class="phoneNumber"><?php the_field('phone_number'); ?></p>
      	
      </div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>