<?php 
/**
 * 
 * Plugin Name: Laia
 * 
 * Version: 1.0.0 
 * 
 * Text Domain: laia
 * 
 */

 if( ! defined('ABSPATH')) {
     exit;
 }

define('Laia__FILE__',__FILE__);

define( 'Laia_PLUGIN_BASE', plugin_basename( Laia__FILE__ ) );

define( 'Laia_PLUGIN_URL', plugins_url( '/', Laia__FILE__ ) );

define( 'Laia_PATH', plugin_dir_path( Laia__FILE__ ) );

class Laia {

    function __construct() {

        $theme = wp_get_theme();

        // if laia theme is activated

        if ( 'Laia' == $theme->name || 'Laia' == $theme->parent_theme || 
        'laia' == $theme->name || 'laia' == $theme->parent_theme ) :

        $this->LaiaElementorWidgets();

        endif;
    }

    function LaiaElementorWidgets(){
        
        // Load the Elementor Widgets
    
        require_once Laia_PATH.'/laia-widgets/elementor-laia.php';


    }

}

new Laia();