<?php get_header(); ?>
<h2>OOPS! THAT PAGE CAN’T BE FOUND. </h2>
<p>It looks like nothing was found at this location. 
    Maybe try one of the links below or a search?</p>
    <div class="header-search">
    <?php get_search_form();?>
    </div>
   <?php $posts = (get_posts($args));
foreach($posts as $post):
    setup_postdata($post);?>
    <a href= "<?php the_permalink();?>"><h5 class="404-title">  <?php the_title();?> </h5></a>
   <?php

 echo get_category_by_slug( $slug ); 
endforeach;?>


<h2>Archives</h2>
Try Looking in the Monthly Archives<br>
<?php get_post_type_archive_link('august 2019')?>

<select>
<option value="">Select Month</option>
 <a href ="<?php get_post_type_archive_link('august')?>" > <option value="August 2019">August 2019</option></a>

</select>

<div class="sidebar">
  
<?php dynamic_sidebar('sidebar-1');?>
    </div>
    <!-- </div> -->
    
 <?php get_footer(); ?>