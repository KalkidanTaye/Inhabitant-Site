<?php get_header(); ?>
<h1 class ="front_header"> Shop Stuff</h1>
   
    <?php
// Get catagory names and links for product
$terms = get_terms(array(
'taxonomy' => 'product-type',
'hide-empty' => 0
));
// print_r($terms[0]);

foreach($terms as $term) :
    ?>   
    <div class="shop-link">
     <a class ="shop_stuff" href=<?php echo get_term_link($term);?> > <?php echo $term->name;?></a>
</div>
<?php
endforeach;
?>
<hr class="shop-line">

<!-- <div class="product-container">
    <div class= "products">
        <div></div>
    </div>
</div> -->

    <?php if(have_posts() ):?>

<section class="shop_container"> 
      <div class="shop_items"> 
          <div class="shop_images"> 
             
<?php

    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
        
        <?php echo get_the_post_thumbnail();?>
     <!-- <?php the_title(); ?>  -->
      <!-- <hr class="price"> -->
        <!-- <?php echo '$' . get_field('price'); ?> -->
       
    <!-- loop ends -->
        <?php endwhile;?>
       
        </div>
        </div>
        </section>
        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>



    <?php get_footer(); ?>