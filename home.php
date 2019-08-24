<?php get_header(); ?>

   
    <?php if(have_posts() ):?>

  <div class="journal-sidebar">
<div class="journal">
    
      <?php  while(have_posts() ):
            the_post(); ?>
            
        <h2 class="header-journal-page"><?php the_title(); ?> </h2>
        
        <?php echo get_the_post_thumbnail(); ?>
       <p class="journal-content"> <?php echo wp_trim_words( get_the_content(), 53, ' [...]' ); ?> </p>
        <button type="button"><a class ="read_more" href= "<?php the_permalink();?>">Read More &rarr;</a></button>
        
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