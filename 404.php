<?php get_header(); ?>
<div class="pagenot-found-container"> 
    <div class="pagenot-found-inner">

<h2>OOPS! THAT PAGE CAN’T BE FOUND. </h2>
<p>It looks like nothing was found at this location. 
    Maybe try one of the links below or a search?</p>
    <div class="header-search">
    <?php get_search_form();?>
    </div>
    <h2>Recent Posts</h2>
    
   <?php $posts = (get_posts($args));
foreach($posts as $post):
    setup_postdata($post);?>
   
    <a class="journal-link" href= "<?php the_permalink();?>"><h5 class="journal-title">  <?php the_title();?> </h5></a>
   <?php

 echo get_category_by_slug( $slug ); 
endforeach;?>


<h2>Archives</h2>
<p>Try Looking in the Monthly Archives</p><br>


<select>
<option value="">Select Month</option>
 <a href ="<?php echo get_post_type_archive_link('/Y/m/')?>" > <option value="August 2019">August 2019</option></a>

</select>
</div>
<div class="sidebar">
  
<?php dynamic_sidebar('sidebar-1');?>
    </div>
</div>
    
 <?php get_footer(); ?>