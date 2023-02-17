<?php
/**
 * Elementor Menu Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Menu extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Menu widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'menu';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Menu widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Menu', 'laia' );
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
		return ' eicon-menu-card';
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
		$repeater = new \Elementor\Repeater();			
		$repeater->add_control(
			'menu_title',
			[
				'label' => esc_html__( 'Item Title', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'menu_title_mobile_image_visible',
			[
				'label' => esc_html__( 'Show Item Title Image', 'francettte' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'francettte' ),
				'label_off' => esc_html__( 'Hide', 'francettte' ),
				'return_value' => 'show',
			]
		);
		$repeater->add_control(
			'menu_title_mobile_image_1',
			[
				'label' => esc_html__( 'Item Title Image', 'francettte' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'menu_title_mobile_image_visible_1',
			[
				'label' => esc_html__( 'Show Item Title Image 1', 'laia' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'francettte' ),
				'label_off' => esc_html__( 'Hide', 'francettte' ),
				'return_value' => 'show',
			]
		);
		$repeater->add_control(
			'menu_title_mobile_image_2',
			[
				'label' => esc_html__( 'Item Title Image 1', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'menu_title_mobile_image_visible_2',
			[
				'label' => esc_html__( 'Show Item Title Image 2', 'laia' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'francettte' ),
				'label_off' => esc_html__( 'Hide', 'francettte' ),
				'return_value' => 'show',
			]
		);
		$repeater->add_control(
			'menu_title_mobile_image_3',
			[
				'label' => esc_html__( 'Item Title Image 2', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'menu_description',
			[
				'label' => esc_html__( 'Item Description', 'laia' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);
		$repeater->add_control(
			'main_title_price',
			[
				'label' => esc_html__( 'Price', 'laia' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);
		$this->add_control(
			'eat_option_menu_details',
			[
				'label' => __( 'Menu Card Options Details', 'laia' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'menu_title' => 'CRUDO DE THON',
						'menu_title_mobile_image_visible'=>'show',
						'menu_title_mobile_image_1'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/3.svg'
						],
						'menu_title_mobile_image_visible_1'=>'show',
						'menu_title_mobile_image_2'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/4.svg'
						],
						'menu_title_mobile_image_visible_2'=>'show',
						'menu_title_mobile_image_3'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/2.svg'
						],
						'menu_description'=>'<p>topinambour et châtaigne topinambour et châtaignet opinambour et châtaigne</p>',
						'main_title_price'=>'<p>20</p>',	
					],
					[
						'menu_title' => 'CRUDO DE THON',
						'menu_title_mobile_image_visible'=>'show',
						'menu_title_mobile_image_1'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/3.svg'
						],
						'menu_title_mobile_image_visible_1'=>'show',
						'menu_title_mobile_image_2'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/4.svg'
						],
						'menu_title_mobile_image_visible_2'=>'show',
						'menu_title_mobile_image_3'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/2.svg'
						],
						'menu_description'=>'<p>topinambour et châtaigne topinambour et châtaignet opinambour et châtaigne</p>',
						'main_title_price'=>'<p>20</p>',
					],
					[
						'menu_title' => 'CRUDO DE THON',
						'menu_title_mobile_image_visible'=>'show',
						'menu_title_mobile_image_1'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/3.svg'
						],
						'menu_title_mobile_image_visible_1'=>'show',
						'menu_title_mobile_image_2'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/4.svg'
						],
						'menu_title_mobile_image_visible_2'=>'show',
						'menu_title_mobile_image_3'=>[
							'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/2.svg'
						],
						'menu_description'=>'<p>topinambour et châtaigne topinambour et châtaignet opinambour et châtaigne</p>',
						'main_title_price'=>'<p>20</p>',
					]
				],
				'title_field' => '{{{ menu_title }}}',
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
    <!-- menu section start -->           
<div class="tab-content" id="nav-tabContent1">	
			<div class="menu-content main-content">
				<div class="main-list">
					<div class="menu-list">              
                                        <ul>
                                            <?php foreach( $settings['eat_option_menu_details'] as $key => $eat_option_menu_details ): ?>
                                                <li>
                                                    <div class="d-flex">
                                                        <div>
                                                            <?php if ( !empty($eat_option_menu_details['menu_title' ]) ): ?>
                                                                <h6><?php echo esc_html( $eat_option_menu_details['menu_title' ] ); ?>
                                                                    <ul class="d-inline-block">
                                                                        <li>
                                                                            <?php if($eat_option_menu_details['menu_title_mobile_image_visible'] == 'show'):?>
                                                                                <?php if ($eat_option_menu_details['menu_title_mobile_image_1']['url']):?>
                                                                                    <img src="<?php echo esc_url($eat_option_menu_details['menu_title_mobile_image_1']['url']) ?>" class="img-fluid"
                                                                                        alt="<?php echo esc_attr__( 'menu_title_mobile_image_1', 'francettte' ); ?>">
                                                                                <?php endif;?>
                                                                            <?php endif;?>
                                                                            <?php if($eat_option_menu_details['menu_title_mobile_image_visible_1'] == 'show'):?>
                                                                                <?php if($eat_option_menu_details['menu_title_mobile_image_2']['url']):?>
                                                                                    <img src="<?php echo esc_url($eat_option_menu_details['menu_title_mobile_image_2']['url']) ?>" class="img-fluid"
                                                                                        alt="<?php echo esc_attr__( 'menu_title_mobile_image_2', 'francettte' ); ?>">
                                                                                <?php endif;?>
                                                                            <?php endif;?>
                                                                            <?php if($eat_option_menu_details['menu_title_mobile_image_visible_2'] == 'show'):?>
                                                                                <?php if($eat_option_menu_details['menu_title_mobile_image_3']['url']):?>
                                                                                    <img src="<?php echo esc_url($eat_option_menu_details['menu_title_mobile_image_3']['url']) ?>" class="img-fluid"
                                                                                        alt="<?php echo esc_attr__( 'menu_title_mobile_image_3', 'francettte' ); ?>">
                                                                                <?php endif;?>
                                                                            <?php endif;?>
                                                                        </li>
                                                                    </ul>
                                                                </h6>
                                                            <?php endif;?>
                                                            <?php if ( !empty($eat_option_menu_details['menu_description']) ): ?> 
                                                                <?php echo ( $eat_option_menu_details['menu_description'] ); ?> 
                                                            <?php endif;?>
                                                        </div>
                                                        <div class="price-list">
                                                          
                                                                    <?php if ( !empty($eat_option_menu_details['main_title_price']) ): ?>
                                                                        <?php echo ( $eat_option_menu_details['main_title_price'] ); ?>
                                                                    <?php endif;?>
                                                              
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach;?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
	<!-- menu section end -->
	<?php
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Menu() );