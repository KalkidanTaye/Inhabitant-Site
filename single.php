<?php get_header(); ?>

<div class="journal-sidebar">
<div class="journal">
<?php if(have_posts() ):
//The WordPress Loop: loads post content
    while(have_posts() ):
        the_post(); ?>
        <h2 class="header-journal-page"><?php the_title(); ?> </h2>
        <?php echo get_the_post_thumbnail(); ?>
   <p class="journal-content"><?php the_content();?></p>
<!-- loop ends -->
    <?php endwhile;?>
    </div>
    <?php the_posts_navigation();?>

<?php else : ?>
        <p> No Posts found</p>
<?php endif;?>
<div class="sidebar">
    
 <?php dynamic_sidebar('sidebar-1');?>
 
 </div>
 </div>
 

<?php get_footer(); ?>