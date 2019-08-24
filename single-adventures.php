<?php get_header(); ?>

   
    <?php if(have_posts() ):?>

    <!-- //The WordPress Loop: loads post content -->
     <?php   while(have_posts() ):
            the_post(); ?>
        <?php echo get_the_post_thumbnail();?>
        <h2 class ="orange-title"><?php the_title(); ?>
        
        <p><?php the_content();?></p>
        <button class ="single-button" type="button"><i class="fab fa-facebook-f"></i>Like</button>
        <button class ="single-button" type="button"><i class="fab fa-twitter"></i>Tweet</button>
        <button class ="single-button" type="button"><i class="fab fa-pinterest-p"></i>Pin</button>
    
        
       
    <!-- loop ends -->
        <?php endwhile;?>
       
     
        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>
 <?php get_footer(); ?>
