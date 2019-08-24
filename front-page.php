<?php get_header(); ?>
<div class ="banner"></div>
<h1 class ="front_header"> Shop Stuff</h1>
<div class="shop_stuff_container">
    <div class="inner-container">
        <div class="do">
            <p class="do_p">Get back to nature with all the tools 
                            and toys you need to enjoy the great outdoors.</p>
        </div>
    </div>
    <div class="inner-container">
        <div class="eat">
        <p class="do_p">Nothing beats food cooked over a fire. 
                        We have all you need for good camping eats.
        </p>
        </div>
    </div>
    <div class="inner-container">
        <div class="sleep">
            <p class="do_p">
                Get a good night's rest in the wild in 
                a home away from home that travels well.
            </p> 
        </div>
    </div>
    <div class="inner-container">
        <div class="wear">
        <p class="do_p">From flannel shirts to toques, look the 
            part while roughing it in the great outdoors.</p>
        </div>
    </div>
</div>
<?php
// Get catagory names and links for product
$terms = get_terms(array(
'taxonomy' => 'product-type',
'hide-empty' => 0
));

//Custom WP Loop to Display Latest 3 blog Posts
$args =array(
    'tpost_type' => 'product',
    'numberposts' => 3,
    'order' => 'ASC'
);

// print_r($terms[0]);
foreach($terms as $term) :
    // echo $term->name; // dont forget to uncomment?>
    <!-- // echo get_term_link($term); // dont forget to uncomment -->
    <button id="shop_stuff" class="shop_button" type="button"><a class ="read_more_shop" href= "<?php echo get_term_link($term);?>"> <?php echo $term->name; ?> Stuff</a></button>
  <?php
endforeach;


// print_r(get_post($args)); 

$posts = (get_posts($args));
foreach($posts as $post):
    setup_postdata($post);
    // the_title();
    // the_content();
endforeach;

// var_dump($blogs);
//Custom Loop using WP query
$blogs = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3, // -1 displays everything
    'order_by' => 'date',
    'order' => 'DSC',
));
?>
<h1 class ="front_header"> Inhabitent Journal</h1>
<div class="outer-container">
<?php
while($blogs->have_posts()) :
    $blogs->the_post();?>

 <?php  echo '<div class="journal_img">', get_the_post_thumbnail() , '</div>'; ?>
 
 <?php endwhile;
?>
</div>
<div class="outer-title-container">
 <?php
while($blogs->have_posts()) :
    $blogs->the_post();?>
  <div class="title-container">
  <a class= "journal-link" href= "<?php the_permalink();?>">
  <?php echo '<h5 class"journal-title">', the_title() , '</h5>';?></a>

   <button type="button"><a class ="read_more journal-button" href= "<?php the_permalink();?>">Read Entry</a></button>
   </div>
<?php endwhile;
?>
</div>


<!-- Pulling out the Adventure Posts-->
<h1 class ="front_header"> Latest Adventures</h1>


<div class="adventure-container">
    
<?php 

//Custom WP Loop to Display Custom Posts

$args1 =array(
    'post_type' => 'adventures',
    'numberposts' => -1,
    'order' => 'DSC'
);

// print_r(get_post($args)); 
$i = 1;
$posts = (get_posts($args1));
foreach($posts as $post):
    setup_postdata($post);?>
   <a href= "<?php the_permalink();?>"> <h5 class="adventure-title"><?php the_title();?> </h5></a>
    <div class="adventure_img<?php echo $i; ?>"> <?php the_post_thumbnail();?> </div>
    <button type="button" class="read-more-btn"><a class="read-more" href= "<?php the_permalink();?>">Read More</a></button>
<?php
$i++;
endforeach;
?>
 

</div>   
    <?php get_footer(); ?>