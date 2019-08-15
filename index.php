<?php get_header(); ?>

    <h1>My Site</h1>
    <?php if(have_posts() ):

    // echo "hello";

    // echo "<i class='fab fa-facebook-f'></i>";

    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
            
        <!-- <h2><?php the_title(); ?> </h2> -->
        <!-- <h3><?php the_author();?></h3>  -->
        <!-- <h3><?php the_permalink();?></h3>  -->
        <?php the_content();?>
    <!-- loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>



    <?php get_footer(); ?>