<?php

/*
	Template Name: work
*/
get_header();  ?>
<div class="heroImage">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lindsayLogo.png" alt="" id="lindsayLogo">
</div>

<div class="work">
<h1>Lindsay Guscott Food Stylist</h1>

<div class="grid">
<div class="grid-sizer"></div>
<div class="gutter-sizer"></div>
<?php

// $projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 

$featuredQuery = new WP_Query( 
array( 
    'post_type' => 'project', 
    ) 
    );  ?>
    <?php if ( $featuredQuery->have_posts() ) : ?>
        <?php while ($featuredQuery->have_posts()) : $featuredQuery->the_post(); ?>
          <div class="grid-item typeRecipe">
            <div class="gridItemLink">
            <?php the_post_thumbnail('full'); ?>
            <div class="caption">
            <?php the_content() ?>
            </div>
            <div class="exit">
                <h2><a class="fakeExit" href="">X</a></h2>
            </div>
            </div>
          </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else:  ?>
<?php endif; ?>

</div> <!-- grid ends here -->


</div> <!-- /.main -->

<?php get_footer(); ?>