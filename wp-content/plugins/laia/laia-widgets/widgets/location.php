<?php
/**
 * Elementor Location Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Location extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Location widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'location';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Home widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Location', 'laia' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Home widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-map-pin';

	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Home widget belongs to.
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
	 * Register Home widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		$this->start_controls_section(
			'location',
			[
				'label' => esc_html__( 'Location', 'laia' )
			]
		);
	
		$repeater = new \Elementor\Repeater();

	
		$repeater->add_control(
			'location_image',
			[
				'label' => esc_html__( 'Image', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		
		$this->add_control(
			'location_details_content',
			[
				'label' => __( 'Details About Location ', 'laia' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
                    [
                        'location_image' =>[
                            	'url' =>plugin_dir_url( __FILE__ ) .'images/location/1.jpg'
                        ]

                    ],
                    [
                        'location_image' =>[
                            	'url' =>plugin_dir_url( __FILE__ ) .'images/location/2.jpg'
                        ]

                    ],
                    [
                        'location_image' =>[
                            	'url' =>plugin_dir_url( __FILE__ ) .'images/location/3.jpg'
                        ]

					],

				],
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

      ?>


<!-- location section start -->
<section class="location-section">
    <div class="container">
		<div class="row">
			<div class="col-lg-9 ms-auto">
				<div class="location-wrap">
					<div class="location-slider">
					<?php foreach( $settings['location_details_content'] as $key => $location ): ?>
					<div>
						<div class="location-image">
							<?php if ( !empty($location['location_image']['url']) ): ?>
							<img src="<?php echo esc_url($location['location_image']['url']); ?>" class="img-fluid" alt="">
							<?php endif;?>

						</div>
					</div>
					<?php endforeach;?>
				</div>
				</div>
			</div>
		</div>
        
    </div>
</section>
<!-- location section end -->
<?php

		if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) : ?>
<script>
// location slider js
$('.location-slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    centerPadding: '200px',
    variableWidth: true,
    slidesToShow: 2,
    slidesToScroll: 1,
});
</script>

<?php endif; 
}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Location() );