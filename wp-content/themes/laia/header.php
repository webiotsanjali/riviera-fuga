<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package laia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <style type="text/css" media="print">
		@page {
			size: auto;  
			margin: 0;  
		}
	</style>
    
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="80">
    <?php wp_body_open(); ?>


    <!-- header start -->
    <div class="main-header">
        <div class="menu-top">
            <div class="container-fluid">
        <header>
            <div class="language-list">
              
                    <?php dynamic_sidebar('header-3') ?>
            </div>
            <div class="navbar-brand">
                    <a href="<?php echo get_home_url(); ?>"><img
                            src="<?php echo get_template_directory_uri();?>/assets/images/logo.svg" class="img-fluid"
                            alt="logo image"></a>
                </div>
            <div class="menu-bar">
                <div class="bar-icon">
                    <a href="javascript:void(0)" class="menu-toggle">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/1.svg"
                            class="img-fluid" alt="bar icon">
                    </a>
                    <a href="javascript:void(0)" class="menu-close">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/close.svg"
                            class="img-fluid" alt="close icon">
                    </a>
                </div>
            </div>
        </header>
    </div>
        </div>
             
    <div class="menu">
        <div class="container-fluid">
            <div class="row w-100 h-100 mx-0">
            <div class="col-lg-4 px-0">
                <div class="row row-cols-lg-5 yellow-line">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="col-lg-4 px-0">
                <nav class="navbar">
                    <?php
							wp_nav_menu(
								array(
									'theme_location'  => 'menu-1',
									'container'       => 'div',
									'container_class' => '"navbar-nav',
									'container_id'    => '',
									'menu_class'      => 'navbar-nav',
									'menu_id'         => 'mymenu',
									'depth'	          =>  '', // Level of Dropdown Menu
									'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
									'walker'          => new WP_Bootstrap_Navwalker(),
								)
							);
							?>
                </nav>
                <ul class="location">
                    <?php dynamic_sidebar( 'header-1' ); ?>
                </ul>
            </div>
            <div class="col-lg-4 px-0">
                <div class="row row-cols-lg-5 yellow-line">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        </div>
                
                <!-- <ul class="location d-md-none d-block">
                    <?php dynamic_sidebar('header-2'); ?>
                </ul> -->
                <!-- <ul class="location location-icon d-md-none d-flex"> -->
<!--                     <li>
                        <a href="#">
                            <img src="<?php //echo get_template_directory_uri();?>/assets/images/icons/3.svg"
                                alt="phone icon" class="img-fluid">
                        </a>
                    </li> -->
					 <!-- <?php dynamic_sidebar('header-phone-icon'); ?> -->
                    <!-- <li> -->
<!--                         <a href="#">
                            <img src="<?php //echo get_template_directory_uri();?>/assets/images/icons/instagram.svg"
                                alt="instragram icon" class="img-fluid">
                        </a> -->
						 <!-- <?php dynamic_sidebar('header-insta-icon'); ?> -->
                    <!-- </li> -->
                <!-- </ul> -->
            </div>
    </div>
    
    <!-- header end -->