<?php
/**
 * Elementor Home Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Home extends \Elementor\Widget_Base {

	/** 
	 * Get widget name.
	 *
	 * Retrieve Home widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'home';
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
		return esc_html__( 'Banner', 'laia' );
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
		return 'eicon-banner';
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
			'home',
			[
				'label' => esc_html__( 'Home', 'laia' )
			]
		);
		// $this->add_control(
		// 	'restorent_title',
		// 	[
		// 		'label' => esc_html__( 'restorent Title', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'default' => 'Restaurant caché, Cuisine latine méditerranéenne au charbons de bois.'
		// 	]
		// );
		// $this->add_control(
		// 	'details',
		// 	[
		// 		'label' => esc_html__( 'Details', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::WYSIWYG,
		// 		'default' => '<p>226 BLVD. VOLTTAIRE <span>•</span> PARIS 11<sup>EME</sup></p>'
		// 	]
		// );
		$this->add_control(
			'restorent_image_video',
			[
				'label' => esc_html__( 'Show Background Image and Video', 'laia' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'image'  => __( 'Image', 'laia' ),
					'video' => __( 'Video', 'laia' ),
				],
				'default'=>'image',
				'prefix_class' => 'restorent_image_video-',
	
			]
		);		
		$this->add_control(
			'restorent_background_image',
			[
				'label' => __( 'Background Image', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
				'default' => [
					'url' =>plugin_dir_url( __FILE__ ) .'images/1.jpg'
				],
				'condition' => [
					'restorent_image_video' => 'image'
				]
			]
		);

		$this->add_control(
			'restorent_background_video',
			[
				'label' => __( 'Background Video', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
				'default' => [
					'url' => plugin_dir_url( __FILE__ ) .'video/Pexels Videos 2620043.mp4'
				],
				'condition' => [
					'restorent_image_video' => 'video'
				],
				'media_type' => 'video',
				
			]
		);
		
		// $this->add_control(
		// 	'menu_link_button',
		// 	[
		// 		'label' => esc_html__( 'Show Menu Details', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::SWITCHER,
		// 		'label_on' => esc_html__( 'Show', 'laia' ),
		// 		'label_off' => esc_html__( 'Hide', 'laia' ),
		// 		'return_value' => 'show',
		// 		'default' => 'show'
		// 	]
		// );
		
		// $this->add_control(
		// 	'menu_link_details_text',
		// 	[
		// 		'label' => __( 'Menu Details Link Text', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'default' => 'Menu',
		// 		'condition' => [
		// 			'menu_link_button' => 'show'
		// 		]
		// 	]
		// );

		// $this->add_control(
		// 	'menu_detail_button_link',
		// 	[
		// 		'label' => __( 'Menu Detail Button Link', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::URL,
		// 		'default' => [
		// 			'url' => '#'
		// 		],
		// 		'condition' => [
		// 			'menu_link_button' => 'show'
		// 		]
		// 	]
		// );


		// $this->add_control(
		// 	'reserver_link_button',
		// 	[
		// 		'label' => esc_html__( 'Show Reserver Details', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::SWITCHER,
		// 		'label_on' => esc_html__( 'Show', 'laia' ),
		// 		'label_off' => esc_html__( 'Hide', 'laia' ),
		// 		'return_value' => 'show',
		// 		'default' => 'show'
		// 	]
		// );
		
		// $this->add_control(
		// 	'reserver_link_details_text',
		// 	[
		// 		'label' => __( 'Reserver Details Link Text', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'default' => 'Reserver',
		// 		'condition' => [
		// 			'reserver_link_button' => 'show'
		// 		]
		// 	]
		// );

		// $this->add_control(
		// 	'reserver_detail_button_link',
		// 	[
		// 		'label' => __( 'Reserver Detail Button Link', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::URL,
		// 		'default' => [
		// 			'url' => '#'
		// 		],
		// 		'condition' => [
		// 			'reserver_link_button' => 'show'
		// 		]
		// 	]
		// );

		// $this->add_control(
		// 	'commander_link_button',
		// 	[
		// 		'label' => esc_html__( 'Show Commander Details', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::SWITCHER,
		// 		'label_on' => esc_html__( 'Show', 'laia' ),
		// 		'label_off' => esc_html__( 'Hide', 'laia' ),
		// 		'return_value' => 'show',
		// 		'default' => 'show'
		// 	]
		// );
		
		// $this->add_control(
		// 	'commander_link_details_text',
		// 	[
		// 		'label' => __( 'Commander Details Link Text', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'default' => 'Commander',
		// 		'condition' => [
		// 			'commander_link_button' => 'show'
		// 		]
		// 	]
		// );

		// $this->add_control(
		// 	'commander_detail_button_link',
		// 	[
		// 		'label' => __( 'Commander Detail Button Link', 'laia' ),
		// 		'type' => \Elementor\Controls_Manager::URL,
		// 		'default' => [
		// 			'url' => '#'
		// 		],
		// 		'condition' => [
		// 			'commander_link_button' => 'show'
		// 		]
		// 	]
		// );

		$this->add_control(
			'reserves_text',
			[
				'label' => __( 'Reserver Link Text', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'reserver',
				
			]
		);

		$this->add_control(
			'reserves_button_link',
			[
				'label' => __( 'Reserver Button Link', 'laia' ),
				'type' => \Elementor\Controls_Manager::URL,
				'default' => [
					'url' => '#'
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

<!-- home section start -->
<section class="home-section">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <!-- <div class="col-xxl-3 col-lg-4 col-md-7  p-0">
                <div class="home-content">
					<div class="home-content-restaurant-details">
						<?php if ( !empty($settings['restorent_title']) ): ?>
							
						<h1> <?php echo( $settings['restorent_title'] ); ?></h1>

						<?php endif; ?>
					</div>
                    <?php if ( !empty($settings['details']) ): ?>

                    <?php echo( $settings['details'] ); ?>

                    <?php endif; ?>
                    <div class="home-menu">
                        <ul class="menu-with-bg d-lg-block d-none">
                            <?php if ( !empty($settings['menu_link_button'] == 'show') ): ?>
                            <li> <a href="<?php echo esc_url( $settings['menu_detail_button_link']['url'] ); ?>"
                                    <?php if ( $settings['menu_detail_button_link']['is_external'] ): ?> target="_blank"
                                    <?php endif; ?> role="button">
                                    <?php if ( !empty($settings['menu_link_details_text']) ): ?>

                                    <?php echo esc_html( $settings['menu_link_details_text'] ); ?>
                                    <?php endif; ?>

                                </a></li>
                            <?php endif; ?>

                            <?php if ( !empty($settings['reserver_link_button'] == 'show') ): ?>
                            <li> <a 
                                    href="<?php echo esc_url( $settings['reserver_detail_button_link']['url'] ); ?>"
                                    <?php if ( $settings['reserver_detail_button_link']['is_external'] ): ?>
                                    target="_blank" <?php endif; ?> role="button">
                                    <?php if ( !empty($settings['reserver_link_details_text']) ): ?>

                                    <?php echo esc_html( $settings['reserver_link_details_text'] ); ?>
                                    <?php endif; ?>

                                </a></li>
                            <?php endif; ?>

                            <?php if ( !empty($settings['commander_link_button'] == 'show') ): ?>
                            <li> <a href="<?php echo esc_url( $settings['commander_detail_button_link']['url'] ); ?>"
                                    <?php if ( $settings['commander_detail_button_link']['is_external'] ): ?>
                                    target="_blank" <?php endif; ?> role="button">
                                    <?php if ( !empty($settings['commander_link_details_text']) ): ?>

                                    <?php echo esc_html( $settings['commander_link_details_text'] ); ?>
                                    <?php endif; ?>

                                </a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="col-xxl-12 p-0">
				<div class="home-img">
					<div class="shape-bg">
						<!-- <img src="assets/images/1.jpg" alt="home image" class="img-fluid bg-home"> -->
						<?php if( $settings['restorent_image_video'] == 'image' ):  ?>

						<?php if ( !empty($settings['restorent_background_image']['url'])): ?>

						<img src="<?php echo esc_url($settings['restorent_background_image']['url']) ?>"
							class="img-fluid bg-home" alt="">
						<?php endif;?>
						<?php else : ?>
						<?php if ( !empty($settings['restorent_background_video']['url'])): ?>
						<video class="bg-home" autoplay
							src="<?php echo esc_url( $settings['restorent_background_video']['url'] ); ?>" loop
							preload="none" muted="muted"></video>
						<?php endif;?>
						<?php endif; ?>
						
						<a href="<?php echo esc_url( $settings['reserves_button_link']['url'] ); ?>" class="btn btn-solid"><?php echo esc_html( $settings['reserves_text'] ); ?></a>
						
                	</div>
					
				</div>
                
            </div>
        </div>
    </div>
    <!-- <div class="home-decoration d-lg-block d-none">
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/shape/2.svg" alt=""
                    class="img-fluid decor-1">
            </li>
            <li>
                <svg class="<?php  if( $settings['restorent_image_video'] == 'video' ): ?> decor-video<?php else: ?> decor-2<?php endif; ?>"
                    xmlns="http://www.w3.org/2000/svg" width="229.632" height="310.824" viewBox="0 0 229.632 310.824">
                    <defs>
                        <style>
                        .a {
                            fill: #cf8a80;
                            opacity: 1;
                            mix-blend-mode: multiply;
                            isolation: isolate;
                        }
                        </style>
                    </defs>
                    <path class="a"
                        d="M272.928,4.452c-1.242.008-3.106,0-4.658.025l-2.794.079c-.995-.591-.447-1.275.129-1.931-16.146.039-32.292,1.016-48.352,2.611l-3.765.4c-1.255.126-2.5.3-3.751.45L202.26,7c-2.486.315-4.959.671-7.432,1s-4.941.648-7.394,1.021l-7.352,1.054-7.3,1.1c-4.862.7-9.675,1.5-14.475,2.212,19.559-3.257,39.189-6.224,58.948-8.148,16.079-1.747,32.421-2.97,48.853-3.226.532-.76.381-1.424-3.235-1.772A38.994,38.994,0,0,0,257.053.01c-2.509.082-5.485.257-8.615.46l-2.372.158-2.4.214-4.763.416-4.53.366c-1.443.132-2.809.243-4.06.324-13.779.657-28.113,2.3-42.349,4.412s-28.39,4.677-41.924,7.1Q131.3,16.18,116.763,19.777c-4.853,1.164-9.672,2.437-14.5,3.688l-14.4,3.844C74.69,30.956,60.771,34.39,47.513,38.084c-6.628,1.844-13.09,3.751-19.2,5.747-1.531.49-3.034,1.009-4.517,1.513l-2.134.733c-.6.211-1.271.421-1.936.633-2.722.844-5.659,1.71-8.531,2.8a32.63,32.63,0,0,0-6.508,3.3,15.325,15.325,0,0,0-3.809,3.54,7.837,7.837,0,0,0-.8,1.437l-.052.14a1.061,1.061,0,0,0-.014.107,1.658,1.658,0,0,0-.008.2,1.015,1.015,0,0,0,.053.322c.131.37.5.5,1.083.4A9.461,9.461,0,0,0,2.37,58.5l.363-.158.394-.139q.4-.146.849-.321a39.731,39.731,0,0,1,4.253-1.256c1.638-.392,3.49-.755,5.547-1.114s4.32-.716,6.77-1.175l.329,1.21c-2.427.572-4.351,1.074-5.876,1.568a21.38,21.38,0,0,0-3.445,1.4,6.937,6.937,0,0,0-.99.609,4.11,4.11,0,0,0-.608.525,1.069,1.069,0,0,0-.33.838c.072.465.605.787,1.017,1.149s.713.76.439,1.327l.33-.157.356-.147.712-.3c.505-.183.995-.374,1.522-.547s1.047-.348,1.6-.505l.822-.242.845-.231c2.264-.615,4.655-1.137,7.254-1.792l3.75-1c1.189-.312,2.376-.628,3.573-.914,2.392-.58,4.793-1.126,7.213-1.607,1.173-.361,2.938-.889,4.706-1.408s3.537-1.038,4.717-1.377c7.744-2.234,15.468-4.347,23.172-6.394-.3.137-.595.274-.88.416l-.216.074c-2.513.841-4.986,1.726-7.466,2.594s-4.934,1.752-7.36,2.643c-4.852,1.779-9.573,3.605-14.02,5.494-2.223.944-4.379,1.9-6.446,2.879-1.035.485-2.046.98-3.035,1.473l-.823.415c-.306.153-.572.3-.848.452s-.517.293-.775.439l-.71.421c-1.586.987-2.518,1.638-3.157,2.1a6.874,6.874,0,0,0-1.25,1.131,3.314,3.314,0,0,0-.342.493l-.035.064-.064.062a1.467,1.467,0,0,0-.113.125,1.032,1.032,0,0,0-.154.255.983.983,0,0,0,.314,1.073,2.273,2.273,0,0,0,.482.531,3.157,3.157,0,0,0,.832.438,6.407,6.407,0,0,0,2.794.24,21.929,21.929,0,0,0,4.036-.917c.753-.225,1.542-.471,2.367-.7s1.691-.485,2.583-.76l.029.068c-3.873,1.294-7.639,2.605-11.243,3.931q-3.61,1.324-6.986,2.668l-3.187,1.261c-1.086.429-2.2.875-3.32,1.367a29.912,29.912,0,0,0-5.021,2.771,13.371,13.371,0,0,0-2.848,2.6,4.909,4.909,0,0,0-.6,1.008,1.141,1.141,0,0,0-.059.672c.087.366.4.582.917.651a10.34,10.34,0,0,0,2.335-.261c.98-.174,2.144-.42,3.476-.672l4.487-.821c1.654-.3,3.468-.631,5.42-1.106l.414,1.184c-1.938.591-3.469,1.065-4.677,1.522a17.1,17.1,0,0,0-2.725,1.25c-1.267.766-1.56,1.347-1.472,1.8s.564.8.949,1.188.674.788.459,1.314A43.052,43.052,0,0,1,18.737,88.3l5.787-1.773c3.8-1.149,7.644-2.174,11.532-3.026,1.333-.466,3.618-1.25,5.5-1.889-1.613,1.639-2.094,3.111.312,3.534l-.641.236-1.056.392-1.041.414-4.1,1.653c-2.7,1.1-5.323,2.192-7.852,3.281l-1.879.816L23.47,92.8q-1.805.856-3.529,1.708c-4.071,2.052-6.619,3.676-7.878,4.871s-1.222,1.969-.162,2.3,3.185.245,6.1-.275c1.459-.26,3.119-.627,4.951-1.1q1.374-.356,2.874-.792c1-.285,2.03-.625,3.118-.935l.471,1.163c-1.064.364-2,.757-2.859,1.1s-1.614.669-2.29.969a31.5,31.5,0,0,0-3.113,1.549c-1.5.879-1.928,1.475-1.88,1.944.1.938,2.1,1.371,1.379,2.525.168-.071.337-.139.5-.209a1.1,1.1,0,0,0,.772.446A7.321,7.321,0,0,0,24.27,108c.5-.071,1.051-.174,1.651-.307s1.24-.312,1.948-.47c1.41-.333,2.989-.8,4.74-1.341q1.325-.38,2.762-.839l1.462-.48c.5-.165,1.012-.313,1.53-.481l.493,1.154A38.563,38.563,0,0,0,31.086,109c-1.367.94-1.728,1.547-1.638,2.006.185.915,2.132,1.258,1.557,2.421,1.868-.917,3.709-1.874,5.649-2.671.962-.41,1.918-.829,2.891-1.217l2.953-1.1,1.482-.533,1.507-.484q1.508-.479,3.022-.934c1.019-.286,2.046-.553,3.071-.817s2.05-.522,3.1-.736l4.017-1.332,4.051-1.267c2.36-.718,4.727-1.4,7.1-2.076-8.212,3.47-16.351,7.053-24.562,10.424a69.454,69.454,0,0,0-11.1,6.171c8.243-2.784,16.593-6.108,25.077-9.623L72.1,101.9c2.174-.874,4.328-1.785,6.524-2.644l3.284-1.309,3.313-1.273,1.657-.637,1.672-.614,1.323-.486,2.505-.636-.256.082c-5.329,1.826-10.44,3.8-15.4,5.828s-9.741,4.126-14.454,6.181-9.336,4.079-13.948,6.008c-4.612,1.913-9.211,3.733-13.849,5.373-1.005.35-2.027.671-3.044,1.006-1.161.846-2.191,1.647-3.12,2.327-1.757,1.5-2.975,2.962-2.654,3.846.308.845,2.066,1.175,6.161.425a36.885,36.885,0,0,0-7.66,4.306c-1.3,1.119-1.346,1.885-.3,2.29s3.121.433,6.058.07c1.463-.2,3.135-.5,4.989-.9s3.875-.941,6.053-1.569l.457,1.168c-2.139.741-3.861,1.384-5.24,1.947a32.333,32.333,0,0,0-3.2,1.432c-1.544.822-2.01,1.406-1.99,1.874.043.948,2.052,1.458,1.255,2.59,8.572-3.151,17.126-6.249,25.859-8.793l8.35-3.411c12.217-5,24.156-9.81,36.128-13.868,1.5-.5,2.99-1.017,4.489-1.489l4.492-1.414,9.127-2.691c3.044-.873,6.1-1.694,9.14-2.542,1.519-.432,3.05-.817,4.577-1.211l4.58-1.18a517.084,517.084,0,0,1,74.478-13.311c-2.043.179-4.072.419-6.1.625-2.023.223-4.044.41-6.052.663l-6,.762-2.991.382-2.977.435-5.936.882-1.481.221-1.476.248-2.949.5L171.61,94.4l-5.863,1.119c-15.627,3.023-31.136,6.757-46.921,11.456.181-.263.79-.706-.4-.535a327.123,327.123,0,0,1,47.688-11.83c1.994-.352,3.984-.723,5.981-1.059l6-.966c4-.683,8.027-1.213,12.058-1.84L202.325,89q3.065-.4,6.147-.828c2.055-.287,4.115-.6,6.191-.861.034.309.1.924.136,1.238q17.541-1.751,35.51-2.035c1.244-.053,2.442-.151,3.6-.258s2.265-.217,3.331-.363c2.133-.29,4.092-.67,5.88-1.082l-6.7-.221c-1.124-.028-2.251-.074-3.38-.079l-3.4-.008c-2.27,0-4.553,0-6.845.03l-6.9.2c-1.154.042-2.312.067-3.469.128l-3.476.2c-2.321.139-4.65.262-6.982.431-4.658.4-9.346.736-14.026,1.284-9.376.955-18.753,2.323-28.074,3.811l-6.972,1.186-1.74.3-1.733.326-3.463.65c-4.62.829-9.194,1.8-13.75,2.712l5.837-1.283,2.979-.66,3.021-.616,6.114-1.245c2.05-.415,4.121-.767,6.186-1.148l3.1-.556c1.033-.184,2.064-.372,3.1-.524l6.168-.936,3.051-.439,3.029-.363q3.011-.352,5.94-.653c11.133-1.17,21.707-2.184,32.024-2.87,10.319-.612,20.377-.924,30.423-.617,1.085.029,2.181.114,3.275.171,1.42-.362,2.7-.725,3.837-1.047,4.452-1.58,6.775-3.782-2.265-5.326l-4.234.011-2.539.06c-.9-.6-.4-1.278.122-1.93-14.668-.069-29.352.579-43.982,1.794-1.26.123-2.52.238-3.778.356l.591-.088c1.063-.089,2.125-.175,3.187-.268,14.649-1.368,29.514-2.257,44.439-2.406.485-.756.349-1.421-2.933-1.794a33.4,33.4,0,0,0-5.281-.277c-1.183.018-2.482.068-3.854.133l1.446-.186,1.118-.153c.391-.052.749-.112,1.112-.171,2.885-.481,5.3-1.024,7.474-1.407,3.846-.727,5.7-.9,6.824-1.239a3.034,3.034,0,0,0,.708-.285l.074-.044.093-.033a1.674,1.674,0,0,0,.168-.075,1.017,1.017,0,0,0,.255-.182c.27-.272.258-.658-.014-1.138a3.6,3.6,0,0,0-1.326-1.464,9.711,9.711,0,0,0-3.145-1.331,22.885,22.885,0,0,0-4.859-.618c-.341-.012-.7-.014-1.052-.016q1.936-.778,3.477-1.471a14.678,14.678,0,0,0,2.267-1.422,1.085,1.085,0,0,0,.617-.546c0-.008,0-.017.006-.026.821-.895.78-1.71-.737-2.271a.781.781,0,0,1,.469-.573l-.512-.012-.5.008-.991.018c-.279.017-.564.029-.847.043-.754-.1-1.635-.167-2.665-.209l-4.037.521-2.426.291c-.924-.513-.511-1.235-.079-1.931-13.94,1.331-27.974,2.194-42.057,3.449-4.4.427-8.8.917-13.172,1.419-2.188.276-4.373.52-6.552.823l-3.263.433-3.229.446q-12.9,1.775-25.55,3.46,12.89-1.9,25.784-3.656l3.223-.44,3.254-.42c2.169-.294,4.339-.518,6.507-.781,4.337-.466,8.672-.912,13-1.285,14.1-1.408,28.3-2.508,42.428-4.1.383-.8.178-1.442-2.948-1.524-2.2-.224-7.017.318-12.4.928s-11.323,1.342-15.682,1.614c-6,.276-12.147.692-18.379,1.279-3.115.294-6.251.627-9.4,1.016-1.573.181-3.149.4-4.726.614s-3.139.437-4.691.665c-5.89.857-11.773,1.765-17.6,2.677,2.149-.432,4.306-.834,6.463-1.241l9.333-1.752c3.123-.543,6.257-1.049,9.395-1.571l4.712-.773,2.36-.382,2.37-.34c-1.018.143-2.038.268-3.05.426l-3.031.472-6.031.944-6,.946-5.945,1.055-5.92,1.064c-1.968.362-3.941.691-5.894,1.1l-5.288,1.075c-4.261.67-8.484,1.334-12.645,1.972q-2.245.353-4.483.74l5.085-1.1,2.973-.636,2.985-.581,11.949-2.3L178.6,60.9l3.017-.557c1.006-.189,2.013-.381,3.027-.546l6.084-1.067c4.067-.719,8.143-1.546,12.273-2.27.049.307.147.918.2,1.23,5.839-.818,11.69-1.709,17.607-2.362l8.89-1.042c1.484-.185,2.979-.306,4.472-.455l4.489-.426a62.8,62.8,0,0,0,6.884-1.208c2.108-.5,4.041-1,5.793-1.553a524.809,524.809,0,0,0-55.086,5.587c-18.663,2.8-37.364,6.506-55.51,10.516,15.235-3.69,32.772-7.519,48.327-9.627,22.162-3.251,42.11-6.269,62.245-7.441l3.287-.137c1.385-.5,2.625-.986,3.731-1.418,4.294-2.009,6.362-4.425-2.759-5.081h-.01c-.023-.027-.045-.054-.07-.082-.684-.727-2.323-1.519-4.78-2.169-.429-.11-.892-.215-1.371-.317-.127-.467-.914-.81-3.2-.895a20.929,20.929,0,0,0-3.172.031c-.609-.042-1.229-.078-1.873-.1-.02-.313-.058-.939-.077-1.252,1.948-.061,3.532-.083,4.814-.165s2.263-.171,3.009-.3c1.493-.25,2.044-.638,2.167-1.091.251-.905-1.25-2.062-.258-2.859l-3,.023c-1,0-2,.042-3,.051-2,.014-3.988.094-5.984.118-3.978.11-7.966.165-11.947.2l-.753.091c1.77-1.741,1.283-3.265-4.994-3.317L215.2,32.116c-.886-.462-.566-1.2-.223-1.919q-19.067,3.1-38.1,6.52c-15.849,3.012-31.477,5.981-46.793,8.559,15.6-2.886,31.193-5.782,46.793-8.559,12.686-2.415,25.508-4.861,38.389-7.188.232-.647.125-1.179-1.382-1.324A46.022,46.022,0,0,0,220.5,26c-13.058,1.028-26.559,2.755-40.144,4.947l.751-.154,2.445-.5,1.658-.319c5.669-.929,11.207-1.824,16.684-2.628,3.813-.4,7.653-.7,11.451-.969,9.137-.639,18.058-1.191,25.705-2.594a35.034,35.034,0,0,0,4.212-1.055,11.435,11.435,0,0,0,2.531-1.141c1.157-.754,1.254-1.5.541-2.133a10.3,10.3,0,0,0-4.524-1.593,58.629,58.629,0,0,0-8.5-.795c-.027-.312-.081-.937-.108-1.25,6.21-.255,8.04-1.01,8.366-1.836q5.94-.328,11.921-.5,2.049-.107,3.95-.311c1.267-.125,2.486-.241,3.656-.4,2.342-.307,4.492-.7,6.455-1.128-4.876-.121-9.819-.276-14.81-.165l-3.753.05-1.883.029c-.628.012-1.257.046-1.886.068l-4.3.185a1,1,0,0,1,0-.5l1.729-.107,4.195-.25,4.18-.141,4.165-.125c1.386-.038,2.77-.084,4.154-.068q4.15.006,8.286.062c1.192.013,2.4.1,3.6.153,1.56-.363,2.961-.727,4.213-1.05C280.31,8.191,282.876,5.988,272.928,4.452ZM78.562,97.987l-.045-.107.711-.189C79.007,97.791,78.784,97.887,78.562,97.987Zm79.143-75.566q-3.213.741-6.406,1.46-2.895.572-5.778,1.149C149.465,24.162,153.549,23.284,157.705,22.421ZM180.7,32.1l.225,1.225q8.047-1.354,16.218-2.543c-3.665.779-7.316,1.546-10.208,2-11.088,1.536-22.6,3.639-34.086,5.873q13.367-2.806,26.978-5.148c-13.423,2.169-26.358,4.576-39.19,7.419q-2.52.558-5.034,1.141c-5.209,1.035-10.368,2.053-15.428,3.009q-1.851.355-3.7.733c8.121-2.267,16.252-4.1,24.408-5.779C153.981,37.339,167.156,35.061,180.7,32.1Z"
                        transform="matrix(0.358, 0.934, -0.934, 0.358, 129.383, 0)" />
                </svg>

            </li>
            <li>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/shape/4.svg" alt=""
                    class="img-fluid decor-3">
            </li>
        </ul>
    </div> -->
    <!-- <div class="home-decor-rs d-lg-none d-block">
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/shape/15.svg" alt=""
                    class="img-fluid decor-4">
            </li>
            <li>
                <div class="decor-5">
                    <h5>
						 <a href="<?php echo esc_url( $settings['reserves_button_link']['url'] ); ?>"
                                    <?php if ( $settings['reserves_button_link']['is_external'] ): ?>
                                    target="_blank" <?php endif; ?> role="button">
                                    <?php if ( !empty($settings['reserves_text']) ): ?>

                                    <?php echo esc_html( $settings['reserves_text'] ); ?>
                                    <?php endif; ?>

                       </a>
					</h5>
                </div>
            </li>
        </ul>
    </div> -->
</section>
<!-- home section end -->
<div class="menu-fix">
	<div class="menu-main">
		<div class="menu-image">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/seahorse.png" alt=""
								class="img-fluid">

		</div>
		<div class="menu-details">
			<h6>reserver</h6>
			<ul>
				<li>
					<a href="#">
						table
					</a>
				</li>
				<li>
					<a href="#">
						bateau
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<?php
if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) : ?>
<script>
	$(window).on('scroll resize', function () {
     var bottom = 350
	 var top = this.scrollY, about= $("#about").offset().top, boat=$("#about-address").offset().top, brand=$("#brand").offset().top, location=$("#location").offset().top - bottom, instagram=$("#instagram").offset().top, footer=$("#footer").offset().top
     var style = document.querySelector('#instagram').currentStyle || window.getComputedStyle(document.querySelector('#instagram'));
     var instaHeight= document.querySelector('#instagram').offsetHeight
     var instaPadding = parseInt(style.paddingBottom)
     var showDiv=instaHeight-instaPadding
     var scrolltoShowdiv= (instagram+showDiv)
    if(window.innerWidth >= 991 ){
    
        if (top >=about-bottom && top<= boat-bottom|| top >= brand-bottom && top<=location-bottom || top >= scrolltoShowdiv-bottom && top <= footer-bottom) {
            $('.menu-fix').addClass('show');
        }
        else {
            $('.menu-fix').removeClass('show');  
        }
    }
    else {
         var styleBrand = document.querySelector('#brand').currentStyle || window.getComputedStyle(document.querySelector('#brand'));
     var brandHeight= document.querySelector('#brand').offsetHeight
     var brandPadding = parseInt(styleBrand.paddingTop)
     var showDivBrand=brand+brandPadding
     var scrolltoShowdivbrand= brand+showDivBrand
     console.log("brandPadding",brand-280, top, showDivBrand-400);
         $('.menu-fix').removeClass('show');
             if(window.innerWidth < 991 ) var bottom = 200
             console.log("bottom", bottom);
          if (top >= scrolltoShowdiv-bottom && top <= footer-bottom || top >= brand-280 && top <= showDivBrand-600) {
            $('.menu-fix').addClass('show');
            }
            else {
                $('.menu-fix').removeClass('show');  
            }
    }     

	});
</script>

<?php endif; 
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Home() );