<?php
/**
 * Elementor Menu_footer Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Menu_footer extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Menu_footer widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'menu_footer';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Menu_footer widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Menu_footer', 'laia' );
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
		return ' eicon-footer';
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
                'label' => esc_html__( 'Food Menu Category', 'laia' )
            ]
        );	
        $repeater = new \Elementor\Repeater();
        $this->add_control(
            'food_category_show_hide',
            [
                'label' => esc_html__( 'Show Food Category', 'laia' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'francettte' ),
                'label_off' => esc_html__( 'Hide', 'francettte' ),
                'return_value' => 'show',
                'default' => 'show', 
            ]
        );
        $repeater->add_control(
            'food_category_main_title',
            [
                'label' => esc_html__( 'Food Category Main Title', 'laia' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $repeater->add_control(
            'food_category_image',
            [
                'label' => esc_html__( 'Food Category Image', 'laia' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'food_category_options',
            [
                'label' => __( 'Food Category Option', 'laia' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'food_category_main_title' => 'Végétarien',
                        'food_category_image'=>[
                            'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/1.svg'
                        ]
                    ],
                    [
                        'food_category_main_title' => 'Vegan',
                        'food_category_image'=>[
                            'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/1.svg'
                        ]
                    ],
                    [
                        'food_category_main_title' => 'Sans Gluten',
                        'food_category_image'=>[
                            'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/2.svg'
                        ]
                    ],
                    [
                        'food_category_main_title' => 'de notre potager',
                        'food_category_image'=>[
                            'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/3.svg'
                        ]
                    ],
                    [
                        'food_category_main_title' => 'Charbon de bois',
                        'food_category_image'=>[
                            'url' => plugin_dir_url( __FILE__ ) .'images/menu-icon/4.svg'
                        ]
                    ],
                ],
                'title_field' => '{{{ food_category_main_title }}}',
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
                                        <div class="menu-type menu-wrapper">
                                            <?php if($settings['food_category_show_hide'] == 'show'):?>	
                                                <ul>
                                                    <?php foreach( $settings['food_category_options'] as $key => $food_category_options ): ?>
                                                        <li>
                                                            <div class="d-flex">
                                                                <?php if ( !empty($food_category_options['food_category_image']['url'])): ?>
                                                                <img src="<?php echo esc_url($food_category_options['food_category_image']['url']) ?>" class="img-fluid"
                                                                    alt="<?php echo esc_attr__( 'food_category_image', 'francettte' ); ?>">
                                                                <?php endif;?>
                                                                <?php if ( !empty($food_category_options['food_category_main_title']) ): ?>
                                                                    <span><?php echo esc_html( $food_category_options['food_category_main_title'] ); ?></span>
                                                                <?php endif;?>
                                                            </div>
                                                        </li>
                                                    <?php endforeach;?>
                                                </ul>
                                            <?php endif;?>
                                        </div>
                                    </div> 
                                </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- menu section end -->
	<?php
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Menu_footer() );