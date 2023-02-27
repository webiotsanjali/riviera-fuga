<?php
/**
 * Elementor Instagram Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Instagram extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Instagram widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Instagram';
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
		return esc_html__( 'Instagram', 'laia' );
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
		return ' eicon-slider-3d';

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
			'Instagram',
			[
				'label' => esc_html__( 'Instagram', 'laia' )
			]
		);

		$this->add_control(
			'post_title',
			[
				'label' => esc_html__( 'Title', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => ' FOLLOW US @LAIA_RESTAURANT'
			]
            );

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'post_image',
			[
				'label' => __( 'Post Image', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
                
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
            'social_share_link',
            [
                'label' => __( 'Post Share Link', 'laia' ),
				'type' => \Elementor\Controls_Manager::URL,
				
            ]
		);

		$this->add_control(
			'instagram_section',
			[
				'label' => __( 'Details About Share Post ', 'laia' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/1.jpg'],
						'show_link'=>'show',
						'social_share_link' => [
							'url' => '#'
						]
					],
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/2.jpg'],
                        'show_link'=>'show',
						'social_share_link' => [
							'url' => '#'
						]
                    ],
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/3.jpg'],
                        'show_link'=>'show',
						'social_share_link' => [
							'url' => '#'
						]
                    ],
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/1.jpg'],
                        'show_link'=>'show',
						'social_share_link' => [
							'url' => '#'
						]
                    ],
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/2.jpg'],
                        'show_link'=>'show',
						'social_share_link' => [
							'url' => '#'
						]
                    ],
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/3.jpg'],
						
						'social_share_link' => [
							'url' => '#'
						]
                    ],
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/1.jpg'],
						
						'social_share_link' => [
							'url' => '#'
						]
                    ],
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/2.jpg'],
                        'show_link'=>'show',
						'social_share_link' => [
							'url' => '#'
						]
                    ],
                    [
						'post_image' =>  [
							'url' =>plugin_dir_url( __FILE__ ) .'images/insta/3.jpg'],
                        'show_link'=>'show',
						'social_share_link' => [
							'url' => '#'
						]
					],
				],

			]
			
		);

	
		$this->end_controls_section();

	}

	/**
	 * Render Instagram widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings();

      ?>

<!-- Instagram section start -->
<section id="instagram" class="instagram-section px-0">
    <div class="row row-cols-sm-15 row-cols-7 mx-0 bg-stripe">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col d-sm-block d-none"></div>
        <div class="col d-sm-block d-none"></div>
        <div class="col d-sm-block d-none"></div>
        <div class="col d-sm-block d-none"></div>
        <div class="col d-sm-block d-none"></div>
        <div class="col d-sm-block d-none"></div>
        <div class="col d-sm-block d-none"></div>
        <div class="col d-sm-block d-none"></div>
    </div>
    <div class="title text-center">
        <?php if ( !empty($settings['post_title']) ): ?>
        <h4>
			<a href="https://www.instagram.com/laia_restaurant/" target="_blank">
            	<?php echo esc_html( $settings['post_title'] ); ?>
			</a>
        </h4>
        <?php endif; ?>
    </div>
    <div class="container-fluid">
        <div class="insta-image-section">
            <?php foreach( $settings['instagram_section'] as $key => $instagram ): ?>
            <div>
                <div class="insta-image">
                    <?php if ( !empty($instagram['post_image']['url'])): ?>
                    <?php if( $instagram['show_link'] == 'show' ) : ?>
                    <a href="<?php echo esc_url( $instagram['social_share_link']['url'] ); ?>"
                        <?php if ( $instagram['social_share_link']['is_external'] ): ?> target="_blank" <?php endif; ?>
                        role="button">
                        <?php if ( !empty($instagram['post_image']['url'])): ?>

                        <img src="<?php echo esc_url($instagram['post_image']['url']) ?>" class="img-fluid"
                            alt="<?php echo esc_attr__( 'instagram', 'laia' ); ?>">

                        <?php endif;?>
                    </a>
                    <?php else:?>
                    
                        <?php if ( !empty($instagram['post_image']['url'])): ?>

                        <img src="<?php echo esc_url($instagram['post_image']['url']) ?>" class="img-fluid"
                            alt="<?php echo esc_attr__( 'instagram', 'laia' ); ?>">

                        <?php endif;?>
                    
                    <?php endif;?>
                    <?php endif;?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- Instgram section end -->
<?php
if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) : ?>
<script>
// instagram slider
$('.insta-image-section').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 8000,
    pauseOnHover: false,
    cssEase: 'linear',
    responsive: [{
            breakpoint: 1366,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '114px',
            }
        },
        {
            breakpoint: 1250,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '80px',
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '20px',
            }
        },
        {
            breakpoint: 1070,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '0px',
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '150px',
            }
        },
        {
            breakpoint: 992,
            settings: {
                centerMode: true,
                centerPadding: '100px',
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 880,
            settings: {
                centerMode: true,
                centerPadding: '30px',
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                centerMode: true,
                centerPadding: '70px',
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 720,
            settings: {
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 640,
            settings: {
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 550,
            settings: {
                centerMode: true,
                centerPadding: '20px',
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 476,
            settings: {
                centerMode: true,
                centerPadding: '100px',
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 376,
            settings: {
                centerMode: true,
                centerPadding: '85px',
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});
</script>

<?php endif; 
}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Instagram() );