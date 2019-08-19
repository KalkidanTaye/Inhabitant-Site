<?php get_header(); ?>

   
    <?php if(have_posts() ):

    // echo "hello";

    // echo "<i class='fab fa-facebook-f'></i>";

    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
            
        <h2 class="header"><?php the_title(); ?> </h2>
        <!-- <h3><?php the_author();?></h3> 
        <h3><?php the_permalink();?></h3>  -->
        <?php the_content();?> 
        <?php echo wp_trim_words( get_the_content(), 53, ' [...]' ); ?>
        <button type="button">Read More &rarr;</button>
        <!-- <?php echo '$' . get_field('price'); ?> -->
    <!-- loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>
 <?php dynamic_sidebar('sidebar-1');?>
 <?php get_footer(); ?>