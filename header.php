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

<?php wp_nav_menu( array(
    'theme_location' => 'primary'
)); ?>
<!-- <h1> <?php bloginfo('name');?></h1> -->