<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Laia
 */

?>

<footer <?php if(is_front_page() == true) :?>class="home-footer" <?php endif;?>>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php dynamic_sidebar( 'footer' ); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>