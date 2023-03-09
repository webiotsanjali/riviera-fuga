<?php
// eicon-alert

/**
 * Elementor boat Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class boat extends \Elementor\Widget_Base
{

	/**
	 * Get widget name.
	 *
	 * Retrieve boat widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'boat';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve boat widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return esc_html__('boat', 'laia');
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve boat widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		// return 'eicon-map-pin';
		return 'eicon-alert';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the boat widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['laia'];
	}

	/**
	 * Register boat widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls()
	{

		$this->start_controls_section(
			'boat',
			[
				'label' => esc_html__('boat', 'laia')
			]
		);

		$this->add_control(
			'boat_title',
			[
				'label' => esc_html__('Title', 'laia'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'boat RIVIERA'
			]
		);

		$this->add_control(
			'boat_description',
			[
				'label' => esc_html__('boat description', 'laia'),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => '<p>C’est un restaurant caché du 11ème arrondissement. Une adresse qui déconnecte. Pensée pour sortir de Paris à Paris. Dans une ancienne distillerie du quartier. Au fond d’un jardin. Et tenant un potager sur les toits. Laïa, une adresse pour voyager. A la cuisine cosmopolite, influencée par le Sud de la France, l’Espagne et l’Italie. Et dont l’âme s’ouvre aux bons esprits.</p>
							  <p>C’est un restaurant caché du 11ème arrondissement. Une adresse qui déconnecte. Pensée pour sortir de Paris à Paris. Dans une ancienne distillerie du quartier. Au fond d’un jardin. Et tenant un potager sur les toits. Laïa, une adresse pour voyager. A la cuisine cosmopolite, influencée par le Sud de la France, l’Espagne et l’Italie. Et dont l’âme s’ouvre aux bons esprits.</p>
							  <p> jardin. Et tenant un potager sur les toits. Laïa, une adresse pour voyager. A la cuisine cosmopolite, influencée par le Sud de la France, l’Espagne et l’Italie. Et dont l’âme s’ouvre aux bons esprits.</p>'
			]
		);

		$this->add_control(
			'boat_address',
			[
				'label' => esc_html__('boat address', 'laia'),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => '  <p>QUAI D’ORSAY </p>
								<p>10 PORT DES INVALIDES </p>
								<p>PARIS 750** </p>
								<p>ALL DAY 08:00 — 00:00 (7/7)</p>'
			]
		);

		$this->add_control(
			'boat_image',
			[
				'label' => __('boat Image', 'laia'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
				'default' => [
					'url' => plugin_dir_url(__FILE__) . 'images/2.png'
				],

			]
		);
		// $this->add_control(
		// 	'link_button',
		// 	[
		// 		'label' => esc_html__('Show boat Details', 'laia'),
		// 		'type' => \Elementor\Controls_Manager::SWITCHER,
		// 		'label_on' => esc_html__('Show', 'laia'),
		// 		'label_off' => esc_html__('Hide', 'laia'),
		// 		'return_value' => 'show',
		// 		'default' => 'show'
		// 	]
		// );

		// $this->add_control(
		// 	'link_details_text',
		// 	[
		// 		'label' => __('boat Details Link Text', 'laia'),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'default' => 'REJOINDRE LA FUGA FAMILY',
		// 		'condition' => [
		// 			'link_button' => 'show'
		// 		]
		// 	]
		// );

		// $this->add_control(
		// 	'boat_detail_button_link',
		// 	[
		// 		'label' => __('boat Detail Button Link', 'laia'),
		// 		'type' => \Elementor\Controls_Manager::URL,
		// 		'default' => [
		// 			'url' => '#'
		// 		],
		// 		'condition' => [
		// 			'link_button' => 'show'
		// 		]
		// 	]
		// );

		// $this->add_control(
		// 	'link_button_1',
		// 	[
		// 		'label' => esc_html__('Show boat Details Content', 'laia'),
		// 		'type' => \Elementor\Controls_Manager::SWITCHER,
		// 		'label_on' => esc_html__('Show', 'laia'),
		// 		'label_off' => esc_html__('Hide', 'laia'),
		// 		'return_value' => 'show',
		// 		'default' => 'show'
		// 	]
		// );

		// $this->add_control(
		// 	'link_details_text_1',
		// 	[
		// 		'label' => __('boat Details Link Text Content', 'laia'),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'default' => ' PROPOSER-NOUS UN LIEU À EXPLOITER OU À TRANSFORMER',
		// 		'condition' => [
		// 			'link_button_1' => 'show'
		// 		]
		// 	]
		// );

		// $this->add_control(
		// 	'boat_detail_button_link_content',
		// 	[
		// 		'label' => __('boat Detail Button Link Content', 'laia'),
		// 		'type' => \Elementor\Controls_Manager::URL,
		// 		'default' => [
		// 			'url' => '#'
		// 		],
		// 		'condition' => [
		// 			'link_button_1' => 'show'
		// 		]
		// 	]
		// );


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
	protected function render()
	{

		$settings = $this->get_settings();

?>


		<!-- boat section start -->
		<!--  -->
		<!-- boat section end -->
		<!-- boat section start -->
		<section id="boat" class="boat-section px-0">
			<div class="container-fluid px-0">
				<div class="boat-wrap">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4">
							<div class="boat-content">
								<p>C’est un restaurant caché du 11ème arrondissement. Une adresse qui déconnecte. Pensée pour sortir de Paris à Paris. Dans une ancienne distillerie du quartier. Au fond d’un jardin. Et tenant un potager sur les toits. Laïa, une adresse pour voyager. A la cuisine cosmopolite, influencée par le Sud de la France, l’Espagne et l’Italie. Et dont l’âme s’ouvre aux bons esprits.</p>
								<a href="javascript:void(0)" class="btn">RESERVER BATEAU</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="boat-image">
								<div class="boat-title">
									<h2>FUGA BATEAU</h2>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/boat.jpg" alt="" class="img-fluid boat-img">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- boat section end -->

		<?php
		if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
			<script>
				//boat us js
				$(window).on('load resize', function() {
					checkPosition();

					function checkPosition() {
						var boat_box = $(".boat-content").innerHeight();
						var boat_box_width = $(".boat-content").innerWidth();
						var final_height = boat_box;
						$('.boat-bg-img').css({
							'height': final_height,
							'width': boat_box_width
						});
					}
				});
			</script>

<?php endif;
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \boat());