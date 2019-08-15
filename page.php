<?php get_header(); ?>

  
    <?php if(have_posts() ):
    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
            
        <h2><?php the_title(); ?> </h2>
        <!-- <h3><?php the_author();?></h3>  -->
        <!-- <h3><?php the_permalink();?></h3>  -->
        <?php the_content();?>
    <!-- loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>

<!-- call in sidebar -->
<?php dynamic_sidebar('sidebar-1');?>

    <?php get_footer(); ?>