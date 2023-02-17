<?php
/**
 * Elementor Menu_section Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Menu_section extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Menu_section widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'menu_section';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Menu_section widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Menu_section', 'laia' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Menu_section widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return ' eicon-kit-details';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Menu_section widget belongs to.
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
	 * Register Menu_section widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
	
		 //For Food Menu_section:
		
        $this->start_controls_section(
            'manger',
            [
                'label' => esc_html__( 'Food Menu Section', 'laia' )
            ]
        );	
        $this->add_control(
            'eat_option_main_title',
            [
                'label' => esc_html__( 'Section', 'laia' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Para Empezar option list',
            ]
        );
        $this->add_control(
            'eat_option_kitchen_section_title',
            [
                'label' => esc_html__( 'Kitchen Section', 'laia' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default'=> 'Entrées',
            ]
        );
        $this->add_control(
            'kitchen_section_title_mobile_image_visible',
            [
                'label' => esc_html__( 'Show Kitchen Section Image', 'francettte' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'francettte' ),
                'label_off' => esc_html__( 'Hide', 'francettte' ),
                'return_value' => 'show',
                'default' => 'show',
            ]
        );
        $this->add_control(
            'kitchen_section_title_mobile_image',
            [
                'label' => esc_html__( 'Kitchen Section Title Image', 'laia' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'default' => [
                    'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/5.svg'
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
    <!-- menu section start -->
         <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-manger" role="tabpanel" aria-labelledby="nav-manger-tab">
                <div class="menu-listing">
                   
                    <div class="tab-content" id="nav-tabContent1">								
                        <div class="menu-content">
                            <div class="main-list">
                                <?php if ( !empty($settings['eat_option_main_title']) ): ?>	
                                    <h6><?php echo esc_html($settings['eat_option_main_title']) ?></h6>
                                <?php endif;?>
                                <div class="menu-list">
                                    <div class="menu-title">
                                        <?php if( $settings['kitchen_section_title_mobile_image_visible'] == 'show' ) : ?>
                                            <img src="<?php echo esc_url($settings['kitchen_section_title_mobile_image']['url']) ?>" class="img-fluid d-block mx-auto"
                                                alt="<?php echo esc_attr__( 'kitchen_section_title_mobile_image', 'francetee' ); ?>">
                                        <?php endif;?>
                                        <?php if ( !empty($settings['eat_option_kitchen_section_title']) ): ?>
                                            <span><?php echo esc_html( $settings['eat_option_kitchen_section_title'] ); ?></span>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>    
                                           
	<!-- menu section end -->
	<?php
	
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Menu_section() );