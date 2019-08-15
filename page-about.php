<?php get_header(); ?>

<div class="about-hero">
<h2><?php the_title(); ?> </h2>
</div>
    <?php if(have_posts() ):

    //The WordPress Loop: loads post content

        while(have_posts() ):
            the_post(); ?>
            
        
     
        <?php the_content();?>
        <!-- loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>



    <?php get_footer(); ?>

       <!-- <h3><?php the_author();?></h3> 
        <h3><?php the_permalink();?></h3>  -->