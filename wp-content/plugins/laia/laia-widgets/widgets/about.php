<?php
// eicon-alert

/**
 * Elementor About Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class About extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve About widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'About';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve About widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'About', 'laia' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve About widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		// return 'eicon-map-pin';
		return 'eicon-alert';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the About widget belongs to.
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
	 * Register About widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		$this->start_controls_section(
			'about',
			[
				'label' => esc_html__( 'About', 'laia' )
			]
		);

		$this->add_control(
			'about_title',
			[
				'label' => esc_html__( 'Title', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'QUI SOMMES-nous?'
			]
        );

		$this->add_control(
			'about_description',
			[
				'label' => esc_html__( 'About description', 'laia' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => '<p>C’est un restaurant caché du 11ème arrondissement. Une adresse qui déconnecte. Pensée pour sortir de Paris à Paris. Dans une ancienne distillerie du quartier. Au fond d’un jardin. Et tenant un potager sur les toits. Laïa, une adresse pour voyager. A la cuisine cosmopolite, influencée par le Sud de la France, l’Espagne et l’Italie. Et dont l’âme s’ouvre aux bons esprits.</p>'
			]
        );

		$this->add_control(
			'about_image',
			[
				'label' => __( 'About Image', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
				'default' => [
					'url' => plugin_dir_url( __FILE__ ) .'images/2.png'
                ],
            
			]
		);
        $this->add_control(
			'link_button',
			[
				'label' => esc_html__( 'Show About Details', 'laia' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'laia' ),
				'label_off' => esc_html__( 'Hide', 'laia' ),
				'return_value' => 'show',
				'default' => 'show'
			]
		);
		
		$this->add_control(
            'link_details_text',
            [
                'label' => __( 'About Details Link Text', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'REJOINDRE LA FUGA FAMILY',
				'condition' => [
					'link_button' => 'show'
				]
            ]
		);

		$this->add_control(
            'about_detail_button_link',
            [
                'label' => __( 'About Detail Button Link', 'laia' ),
				'type' => \Elementor\Controls_Manager::URL,
				'default' => [
					'url' => '#'
				],
				'condition' => [
					'link_button' => 'show'
				]
            ]
		);

		$this->add_control(
			'link_button_1',
			[
				'label' => esc_html__( 'Show About Details Content', 'laia' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'laia' ),
				'label_off' => esc_html__( 'Hide', 'laia' ),
				'return_value' => 'show',
				'default' => 'show'
			]
		);
		
		$this->add_control(
            'link_details_text_1',
            [
                'label' => __( 'About Details Link Text Content', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => ' PROPOSER-NOUS UN LIEU À EXPLOITER OU À TRANSFORMER',
				'condition' => [
					'link_button_1' => 'show'
				]
            ]
		);

		$this->add_control(
            'about_detail_button_link_content',
            [
                'label' => __( 'About Detail Button Link Content', 'laia' ),
				'type' => \Elementor\Controls_Manager::URL,
				'default' => [
					'url' => '#'
				],
				'condition' => [
					'link_button_1' => 'show'
				]
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


<!-- about section start -->
<section id="about" class="about-section">
    <div class="container">
		<div class="row mx-0 about-wrapper justify-content-center">
            <div class="col-xxl-5 col-lg-6 col-md-8 px-0 about-height">
                <div class="about-content">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/1.svg" alt=""
							class="img-fluid about-bg-img">
					<div class="about-title">
						<h4>
                        	ABOUT RIVIERA
                    	</h4>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/2.svg" alt=""
							class="img-fluid">
					</div>
					<p>C’est un restaurant caché du 11ème arrondissement. Une adresse qui déconnecte. Pensée pour sortir de Paris à Paris. Dans une ancienne distillerie du quartier. Au fond d’un jardin. Et tenant un potager sur les toits. Laïa, une adresse pour voyager. A la cuisine cosmopolite, influencée par le Sud de la France, l’Espagne et l’Italie. Et dont l’âme s’ouvre aux bons esprits.</p>
					<p>C’est un restaurant caché du 11ème arrondissement. Une adresse qui déconnecte. Pensée pour sortir de Paris à Paris. Dans une ancienne distillerie du quartier. Au fond d’un jardin. Et tenant un potager sur les toits. Laïa, une adresse pour voyager. A la cuisine cosmopolite, influencée par le Sud de la France, l’Espagne et l’Italie. Et dont l’âme s’ouvre aux bons esprits.</p>
					<p> jardin. Et tenant un potager sur les toits. Laïa, une adresse pour voyager. A la cuisine cosmopolite, influencée par le Sud de la France, l’Espagne et l’Italie. Et dont l’âme s’ouvre aux bons esprits.</p>
                </div>
            </div>
			<div class="col-xxl-7 col-lg-6 px-0">
				<div class="about-right">
					<div class="about-address">
						<p>QUAI D’ORSAY </p>
						<p>10 PORT DES INVALIDES </p>
						<p>PARIS 750** </p>
						<p>ALL DAY 08:00 — 00:00 (7/7)</p>
					</div>
					<div class="about-image">
						<?php if ( !empty($settings['about_image']['url'])): ?>
						<img src="<?php echo esc_url($settings['about_image']['url']) ?>" class="img-fluid"
							alt="<?php echo esc_attr__( 'about', 'laia' ); ?>">
						<?php endif;?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/12.svg" alt=""
							class="img-fluid about-shape">
					</div>
				</div>
            </div>
        </div>
        <!-- <div class="row about-wrapper">
            <div class="col-lg-6">
                <div class="about-image">
                    <?php if ( !empty($settings['about_image']['url'])): ?>
                    <img src="<?php echo esc_url($settings['about_image']['url']) ?>" class="img-fluid"
                        alt="<?php echo esc_attr__( 'about', 'laia' ); ?>">
                    <?php endif;?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/12.svg" alt=""
                        class="img-fluid about-shape">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <?php if ( !empty($settings['about_title']) ): ?>
                    <h4>
                        <?php echo esc_html( $settings['about_title'] ); ?>
                    </h4>
                    <?php endif; ?>
                    <?php if ( !empty($settings['about_description']) ): ?>

                    <?php echo( $settings['about_description'] ); ?>

                    <?php endif; ?>


                    <ul>
                        <?php if ( !empty($settings['link_button'] == 'show') ): ?>

                        <li> <a href="<?php echo esc_url( $settings['about_detail_button_link']['url'] ); ?>"
                                <?php if ( $settings['about_detail_button_link']['is_external'] ): ?> target="_blank"
                                <?php endif; ?> role="button">
                                <?php if ( !empty($settings['link_details_text']) ): ?>
                                <?php echo esc_html( $settings['link_details_text'] ); ?></a></li>
                        <?php endif; ?>

                        <?php endif; ?>
                        <?php if ( !empty($settings['link_button_1'] == 'show') ): ?>
                        <li><a href="<?php echo esc_url( $settings['about_detail_button_link_content']['url'] ); ?>"
                                <?php if ( $settings['about_detail_button_link_content']['is_external'] ): ?>
                                target="_blank" <?php endif; ?> role="button">
                                <?php if ( !empty($settings['link_details_text_1']) ): ?>
                                <?php echo esc_html( $settings['link_details_text_1'] ); ?></a></li>
                        <?php endif; ?>
                        </li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</section>
<!-- about section end -->

<?php
if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) : ?>
<script>
	//about us js
$(window).on('load resize', function () {
checkPosition();

function checkPosition() {
   var about_box = $(".about-content").innerHeight();
      var about_box_width = $(".about-content").innerWidth();
        var final_height = about_box;
        $('.about-bg-img').css({
          'height': final_height,
		  'width' : about_box_width
        });
}
});
</script>

<?php endif; 
}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \About() );