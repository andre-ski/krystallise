<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <?php wp_head();?>

</head>
<body <?php body_class('test');?>>
    
<header>
    <div class="container">

        <div class="col d-flex align-items-center justify-content-between">
                <a href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_directory');?>/images/logo.png" class="img-fluid logo">
                </a>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-menu',
                        )
                    );
                ?>
        
        </div>
    </div>
</header>