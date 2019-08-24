<?php get_header(); ?>
<h2>OOPS! THAT PAGE CAN’T BE FOUND. </h2>
<p>It looks like nothing was found at this location. 
    Maybe try one of the links below or a search?</p>
    <div class="header-search">
    <?php get_search_form();?>
    </div>
    <div class="journal-sidebar">
<div class="journal">
     
    <?php if(have_posts() ):?>
      <?php  while(have_posts() ):
            the_post(); ?>
            
        <h2 class="header-journal-page"><?php the_title(); ?> </h2>
        
      
    <!-- loop ends -->
        <?php endwhile;?>
      </div>
        <?php the_posts_navigation();?>

<?php else : ?>
            <p> No Posts found</p>
 <?php endif;?>
 <div class="sidebar">
    
 <!-- <?php dynamic_sidebar('sidebar-1');?> -->
 
 </div>
 </div>
 <?php get_footer(); ?>