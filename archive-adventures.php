<?php get_header(); ?>
<h1 class ="front_header"> Shop Stuff</h1>

<hr class="shop-line">

    <?php if(have_posts() ):?>
     
<?php
    //The WordPress Loop: loads post content

        while(have_posts() ):
            the_post(); ?>
      
       <?php the_permalink();?>">
        <?php echo get_the_post_thumbnail();?>
       
       
     <?php the_title();?> 
    
        <?php endwhile;?>
        
    </div>

    
      
        
        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>



    <?php get_footer(); ?>