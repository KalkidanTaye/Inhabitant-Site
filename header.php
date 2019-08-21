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
<body <?php body_class();?>>

<nav>
    <div class="nav-container">
<?php echo' <a href="http://localhost:3000/Inhabitant/"> <img class="home-nav" src="../../../../Inhabitant/wp-content/themes/Inhabitant/assets/images/logos/inhabitent-logo-tent-white.svg"> </a>'?>
<?php wp_nav_menu( array(
    'theme_location' => 'primary')); ?>
</div>
    <div class="header-search">
    <!-- <?php get_search_form();?> uncomment this  -->
    </div>
</nav>
<!-- <h1> <?php bloginfo('name');?></h1> -->