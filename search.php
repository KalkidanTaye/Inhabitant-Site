<?php get_header(); ?>

    <?php if(have_posts() ):



    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
            
        <h2><?php the_title(); ?> </h2>
        <?php the_post_thumbnail();?>
        <?php the_content();?>
    <!-- loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

<?php else : ?>

            <h2> No Posts found</h2>
 <?php endif;?>



    <?php get_footer(); ?>