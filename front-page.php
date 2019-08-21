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
<div class="container">
<?php
while($blogs->have_posts()) :
    $blogs->the_post();
   
   echo '<div class="journal_img">', get_the_post_thumbnail() , '</div>'; 
   echo '<h5>', the_title() , '</h5>';
endwhile;
?>
</div>


    <?php if(have_posts() ):

    // echo "hello";
    // echo get_template_directory_uri(). "/assets/images/inhabitent-logo-tent.svg";
    // echo "<i class='fab fa-facebook-f'></i>";

    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
            
        <!-- <h2><?php the_title(); ?> </h2> -->
        <!-- <h3><?php the_author();?></h3>  -->
        <!-- <h3><?php the_permalink();?></h3>  -->
        <!-- <?php the_content();?> -->
    <!-- loop ends -->
        <?php endwhile;?>


        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>

<!-- call in sidebar -->

    <?php get_footer(); ?>