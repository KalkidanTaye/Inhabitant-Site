<?php get_header(); ?>

<div class="contact-container">
    <div class="contact-inner">
    <?php if(have_posts() ):
    //The WordPress Loop: loads post content
        while(have_posts() ):
            the_post(); ?>
            
        <h2><?php the_title(); ?> </h2>
        <?php the_content();?>
    <!-- loop ends -->
        <?php endwhile;?>
        </div>
        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>

<!-- call in sidebar -->

<div class="sidebar">
    
 <?php dynamic_sidebar('sidebar-1');?>
</div>
 </div>

    <?php get_footer(); ?>