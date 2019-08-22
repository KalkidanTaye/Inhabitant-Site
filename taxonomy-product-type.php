<?php get_header(); ?>
<h1 class ="front_header"><?php echo $term->name;?></h1>
<p> <?php echo category_description(); ?> </p>
    <?php if(have_posts() ):?>


    
<div class="shop_container">             
<?php
    //The WordPress Loop: loads post content

        while(have_posts() ):
            the_post(); ?>
        <div class="shop_images"> 
        <a class= "journal-link" href= "<?php the_permalink();?>">
        <?php echo get_the_post_thumbnail();?>
        </a>
        <div class="price-title">
     <?php the_title(); echo ' .........'?> 
      <!-- <hr class="price"> -->
        <?php echo '$' . get_field('price'); ?>
     
    </div>
    </div>
        <?php endwhile;?>
        
    </div>

        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>



    <?php get_footer(); ?>