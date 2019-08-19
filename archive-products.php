<?php get_header(); ?>

    <h1>this is the product/shop page</h1>
    <?php
// Get catagory names and links for product
$terms = get_terms(array(
'taxonomy' => 'product-type',
'hide-empty' => 0
));
// print_r($terms[0]);
foreach($terms as $term) :
    ?>
    <a href=<?php echo get_term_link($term);?> > <?php echo $term->name;?></a>
<?php
endforeach;
?>
<div class="product-container">
    <div class= "products">
        <div></div>
    </div>
</div>

    <?php if(have_posts() ):

    // echo "hello";

    // echo "<i class='fab fa-facebook-f'></i>";

    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
            
    <div class="shop_container"> 
      <div class="shop_items">  
        <?php echo get_the_post_thumbnail(); ?>
        <!-- <h2 class="shop-header"><?php the_title(); ?> </h2> -->
        <!-- <?php echo '$' . get_field('price'); ?> -->
        </div>
    </div>
    <!-- loop ends -->
        <?php endwhile;?>

        <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>

 <h1>this is the product/shop page</h1>

    <?php get_footer(); ?>