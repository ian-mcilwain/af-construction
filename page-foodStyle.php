<?php

/*
	Template Name: Food Styling
*/

get_header();  ?>

<div class="work">

<div class="grid">
<div class="grid-sizer"></div>
<div class="gutter-sizer"></div>
<?php

$projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 

$featuredQuery = new WP_Query( 
array( 
    'post_type' => 'food-styling', 
    ) 
    );  ?>
    <?php if ( $featuredQuery->have_posts() ) : ?>
        <?php while ($featuredQuery->have_posts()) : $featuredQuery->the_post(); ?>
          <div class="grid-item typeRecipe">
            <a href="" class="gridItemLink">
            <?php the_post_thumbnail('full'); ?>   
            </a>
          </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else:  ?>
<?php endif; ?>

</div> <!-- grid ends here -->


</div> <!-- /.main -->

<?php get_footer(); ?>