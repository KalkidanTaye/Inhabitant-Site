<?php get_header(); ?>


<?php if(have_posts() ):
//The WordPress Loop: loads post content
    while(have_posts() ):
        the_post(); ?>
        <h2 class="header"><?php the_title(); ?> </h2>
        <?php echo get_the_post_thumbnail(); ?>
    <?php the_content();?>
<!-- loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p> No Posts found</p>
<?php endif;?>



<?php get_footer(); ?>