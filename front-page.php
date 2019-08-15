<?php get_header(); 
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
    // echo $term->name; // dont forget to uncomment
    // echo get_term_link($term); // dont forget to uncomment
endforeach;

// print_r(get_post($args)); 

$posts = (get_posts($args));
foreach($posts as $post):
    setup_postdata($post);
    the_title();
    the_content();
endforeach;

var_dump($blogs);
//Custom Loop using WP query
$blogs = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3, // -1 displays everything
    'order_by' => 'date',
    'order' => 'ASC',
));
while($blogs->have_posts()) :
    $blogs->the_post();
    echo '<h2>', the_title() , '</h2>';
endwhile;
?>


    <h1 class="my-site">My Site</h1>
    <?php if(have_posts() ):

    // echo "hello";
    // echo get_template_directory_uri(). "/assets/images/inhabitent-logo-tent.svg";
    // echo "<i class='fab fa-facebook-f'></i>";

    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
            
        <h2><?php the_title(); ?> </h2>
        <!-- <h3><?php the_author();?></h3>  -->
        <!-- <h3><?php the_permalink();?></h3>  -->
        <?php the_content();?>
    <!-- loop ends -->
        <?php endwhile;?>


        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>

<!-- call in sidebar -->
<?php dynamic_sidebar('sidebar-1');?>
    <?php get_footer(); ?>