<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a88829749c.js"></script>
    <title><?php bloginfo('title');?></title>
</head>
<body <?php body_class(); ?>>
<?php 
    if(is_front_page() || is_page() || is_single() ){ ?>
        <nav>
        <div class="nav-container">
    <?php echo' <a href="http://localhost:3000/Inhabitant/"> <img class="home-nav-white" src="../../../../Inhabitant/wp-content/themes/Inhabitant/assets/images/logos/inhabitent-logo-tent-white.svg"> </a>'?>
    <?php echo' <a href="http://localhost:3000/Inhabitant/"> <img class="home-nav1" src=""> </a>'?>
    <?php wp_nav_menu( array(
        'theme_location' => 'primary')); ?>
    </div></nav>
   <?php }
   else { ?>
   <nav>
    <div class="fixed-header">
        <div class="nav-container">
        <?php echo' <a href="http://localhost:3000/Inhabitant/"> <img class="home-nav" src="../../../../Inhabitant/wp-content/themes/Inhabitant/assets/images/logos/inhabitent-logo-tent.svg"> </a>'?>
        <?php wp_nav_menu( array(
            'theme_location' => 'primary')); ?>
        </div> </div>
   <?php }
   
   
   ?>
   <div class="nav-container">
<?php ?>

    <div class="header-search">
    <!-- <?php get_search_form();?> -->
    </div>
</nav>
