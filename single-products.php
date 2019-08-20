<?php get_header(); ?>

   
    <?php if(have_posts() ):?>

  

    <!-- // echo "<i class='fab fa-facebook-f'></i>"; -->

<div class= "single-container">
    

    <!-- //The WordPress Loop: loads post content -->
     <?php   while(have_posts() ):
            the_post(); ?>
       <div class="single-product"> <?php echo get_the_post_thumbnail();?></div>
        <div class="shop-content">   <h2 class ="orange-title"><?php the_title(); ?> </h2>
        <p class="price"><?php echo '$' . get_field('price'); ?></p>
        <p class="content"><?php the_content();?></p> 
        <button class ="single-button" type="button"><i class="fab fa-facebook-f"></i>Like</button>
        <button class ="single-button" type="button"><i class="fab fa-twitter"></i>Tweet</button>
        <button class ="single-button" type="button"><i class="fab fa-pinterest-p"></i>Pin</button>
    </div>
        
       
    <!-- loop ends -->
        <?php endwhile;?>
       
     </div>
        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>
 <?php get_footer(); ?>
