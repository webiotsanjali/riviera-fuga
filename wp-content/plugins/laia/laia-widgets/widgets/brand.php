<!-- eicon-logo -->

<?php
/**
 * Elementor Brand Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Brand extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Brand widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'brand';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Brand widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Brand', 'laia' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Brand widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-logo';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Brand widget belongs to.
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
	 * Register Brand widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		$this->start_controls_section(
			'Brand',
			[
				'label' => esc_html__( 'Brand', 'laia' )
			]
		);
      
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'brand_image',
			[
				'label' => esc_html__( 'Image', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$repeater->add_control(
			'show_link',
			[
				'label' => esc_html__( 'Show Link ', 'laia' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'laia' ),
				'label_off' => esc_html__( 'Hide', 'laia' ),
				'return_value' => 'show',
			]
		);
		$repeater->add_control(
            'image_url_link',
            [
                'label' => __( 'Image Url Link', 'laia' ),
				'type' => \Elementor\Controls_Manager::URL,
				
            ]
		);
		$repeater->add_control(
			'brand_logo_description',
			[
				'label' => esc_html__( 'Brand Logo Description', 'laia' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
        );
        $this->add_control(
			'brand_section',
			[
				'label' => __( 'Details About Brand ', 'laia' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
                    [
						'brand_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/brand/brand-3.png'
						],
						'show_link'=>'show',
						'image_url_link'=> [
                            'url' => '#'
						],
						'brand_logo_description'=> '<h2>“L’été, il fera bon s’installer sur la terrasse, coupée de la rue. Et peut-être, enfin, entendre chanter les cigales?”</h2>',
						
                    ],
					[
						'brand_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/brand/brand-4.png'
						],
						'show_link'=>'show',
						'image_url_link'=> [
                            'url' => '#'
						],
						'brand_logo_description'=> '<h2>“L’été, il fera bon s’installer sur la terrasse, coupée de la rue. Et peut-être, enfin, entendre chanter les cigales?”</h2>',
					],
					[
						'brand_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/brand/brand-5.png'
						],
						'show_link'=>'show',
						'image_url_link'=> [
                            'url' => '#'
						],
						'brand_logo_description'=> '<h2>“L’été, il fera bon s’installer sur la terrasse, coupée de la rue. Et peut-être, enfin, entendre chanter les cigales?”</h2>',
					],
					[
						'brand_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/brand/brand-2.png'
						],
						'show_link'=>'show',
						'image_url_link'=> [
                            'url' => '#'
						],
						'brand_logo_description'=> '<h2>“L’été, il fera bon s’installer sur la terrasse, coupée de la rue. Et peut-être, enfin, entendre chanter les cigales?”</h2>',
					],
					[
						'brand_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/brand/brand-1.png'
						],
						'show_link'=>'show',
						'image_url_link'=> [
                            'url' => '#'
						],
						'brand_logo_description'=> '<h2>“L’été, il fera bon s’installer sur la terrasse, coupée de la rue. Et peut-être, enfin, entendre chanter les cigales?”</h2>',
					],
					[
						'brand_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/brand/brand-2.png'
						],
						'show_link'=>'show',
						'image_url_link'=> [
                            'url' => '#'
						],
						'brand_logo_description'=> '<h2>“L’été, il fera bon s’installer sur la terrasse, coupée de la rue. Et peut-être, enfin, entendre chanter les cigales?”</h2>',
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

<!-- brand section start -->
<section class="brand-section">
    <div class="container-fluid">
        <div class="row">
			<div class="col-lg-8">
				<div class="brand-slider">
            <?php foreach( $settings['brand_section'] as $key => $brand ): ?>
            <div>
                <div class="brand-wrap">
                    <div class="brand-image">
						<?php if ( !empty($brand['brand_image']['url']) ): ?>
						<?php if( $brand['show_link'] == 'show' ) : ?>
                        <!-- <a href="<?php echo esc_url( $brand['image_url_link']['url'] ); ?>" 
                            <?php if ( $brand['image_url_link']['is_external'] ): ?> target="_blank" <?php endif; ?>
                            role="button"> -->
							<img src="<?php echo esc_url($brand['brand_image']['url']); ?>"
								class="img-fluid" alt="">
							<!-- </a> -->
						<?php else:?>
						<img src="<?php echo esc_url($brand['brand_image']['url']); ?>"
								class="img-fluid" alt="">
						<?php endif;?>
						<?php endif;?>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="brand-for">
            <?php foreach( $settings['brand_section'] as $key => $brand ): ?>
            <div>
                <div class="title">
                    <?php echo ($brand['brand_logo_description']); ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
			</div>
		</div>
    </div>
</section>

<!-- brand section end -->
<?php
if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) : ?>
<script>
// brand slider js
$('.brand-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
	infinite: false,
	speed: 1000,
  asNavFor: '.brand-slider',
});
$('.brand-slider').slick({
  slidesToShow: 5,
  slidesToScroll: 5,
  asNavFor: '.brand-for',
  dots: false,
  centerMode: false,
  focusOnSelect: true
});
</script>

<?php endif; 
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Brand() );