<?php
/**
 * Elementor Menu_header Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Menu_header extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Menu_header widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'menu_header';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Menu_header widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Menu_header', 'laia' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Menu widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return ' eicon-header';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Menu widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'laia' ];
	}

	/**
	 * Register Menu widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
	
		 //For Food Menu:
		
        $this->start_controls_section(
            'manger',
            [
                'label' => esc_html__( 'Food Menu Options', 'laia' )
            ]
        );	
        $this->add_control(
            'food_menu_shortcode',
            [
                'label' => __( 'Food Menu Shortcode', 'tovo-extensions' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => '[addmenu name="food-menu"]',
                'default' => '[addmenu name="food-menu"]',
            ]
        );
		$this->end_controls_section();
	}

	/**
	 * Render Location widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings();
		$food_menu_shortcode = !empty( $settings['food_menu_shortcode'] ) ? do_shortcode( shortcode_unautop( $settings['food_menu_shortcode'] ) ) : '';
      ?>
    <!-- menu section start -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrap">
						<?php if ( !empty($food_menu_shortcode) ): ?> 
							<?php echo $food_menu_shortcode; ?> 
						<?php endif; ?>
						<div class="horizontal-line"></div>	
	<!-- menu section end -->
	<?php
	
	if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) : ?>
		<script>

		$(document).ready(function () {

            var path = window.location.href.split(/[?#]/)[0]; // because the 'href' property of the DOM element is the absolute path
            
            $('.menu-wrapper li a').each(function() {
                if (this.href === path) {
                    //console.log("Clicked");
                    $(this).addClass('active');
                    $(this).children('.sub-menu li a').addClass('active');
                }
            });
            
            $('.sub-menu li a').each(function() {
                if (this.href === path) {
                    //console.log("Clicked");
                    $(this).addClass('active');
                    $(this).parents().parents().children('.menu-wrapper li a').addClass('active');
                }
            });
            
        });
			
			$(document).ready(function () {
		var heights = new Array();
		$('.menu-wrap li .sub-menu').each(function() {	
			$(this).css('min-height', '0');
			$(this).css('max-height', 'none');
			$(this).css('height', 'auto');
			heights.push($(this).height());
		});
		var max = Math.max.apply( Math, heights );
		$('#menu-food-menu,#menu-food-menu-en').each(function() {
			$(this).css('padding-bottom', max + 'px');
			$('.horizontal-line').show();
			$('.tab-content').show();
			$('.menu-type').show();
			$('.menu-footer-menu-container').show();
		});	

		$('#menu-food-menu,#menu-food-menu-en').css({
			'padding-bottom': max
		});
		});
        
		</script>
	<?php 
	endif; 
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Menu_header() );