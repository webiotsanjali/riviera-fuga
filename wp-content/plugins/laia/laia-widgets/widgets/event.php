<?php
/**
 * Elementor Event Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Event extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Event widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'event';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Event widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Event', 'laia' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Event widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-calendar';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Event widget belongs to.
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
	 * Register Event widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		$this->start_controls_section(
			'Event',
			[
				'label' => esc_html__( 'Event', 'laia' )
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'NOS ÉVÈNMENTS'
			]
        );
       
      
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'event_image_video',
			[
				'label' => esc_html__( 'Image/Video ', 'laia' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'image'  => esc_html__( 'Image', 'laia' ),
					'video' => esc_html__( 'Video', 'laia' )
				],
			]
		);
		$repeater->add_control(
			'event_image',
			[
				'label' => esc_html__( 'Image', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
				'condition' => [
					'event_image_video' => 'image'
				],
			]
		);
		$repeater->add_control(
			'event_video',
			[
				'label' => __( 'Video', 'laia' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'event_image_video' => 'video'
				],
				'media_type' => 'video',
			]
		);
        $repeater->add_control(
			'event_date',
			[
				'label' => esc_html__( 'Event Date', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				
			]
        );
        $repeater->add_control(
			'event_month',
			[
				'label' => esc_html__( 'Event Month', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				
			]
        );
        $repeater->add_control(
			'event_description',
			[
				'label' => esc_html__( 'Event Description', 'laia' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
        );
        $repeater->add_control(
			'blog_read_more_button',
			[
				'label' => esc_html__( 'Show Event ', 'laia' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'laia' ),
				'label_off' => esc_html__( 'Hide', 'laia' ),
				'return_value' => 'show',
			]
		);

		$repeater->add_control(
			'blog_read_more_text',
			[
				'label' => esc_html__( 'View Event Text', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'condition' => [
					'blog_read_more_button' => 'show'
				]
			]
        );
        $repeater->add_control(
            'visit_button_link',
            [
                'label' => __( 'Event Button Link', 'laia' ),
				'type' => \Elementor\Controls_Manager::URL,
				'condition' => [
					'blog_read_more_button' => 'show'
				]
            ]
		);
        $this->add_control(
			'event_section',
			[
				'label' => __( 'Details About Event ', 'laia' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
                    [
                        'event_image_video'=> 'image',
						'event_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/event/1.jpg'
                        ],
                        'event_video' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'video/Pexels Videos 2620043.mp4'
                        ],
                        'event_date'=>'22',
                        'event_month'=>'September',
                        'event_description'=>'<p>laia brunch & natural wine tasting. laia brunch & natural wine tasting.</p>',
                        'blog_read_more_button' =>'show',
                        'blog_read_more_text'=>'VIEW EVENT',
                        'visit_button_link'=> [
                            'url' => '#'
                        ]
                    ],
                    [
                        'event_image_video'=> 'image',
						'event_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/event/1.jpg'
                        ],
                        'event_video' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'video/Pexels Videos 2620043.mp4'
                        ],
                        'event_date'=>'22',
                        'event_month'=>'September',
                        'event_description'=>'<p>laia brunch & natural wine tasting. laia brunch & natural wine tasting.</p>',
                        'blog_read_more_button' =>'show',
                        'blog_read_more_text'=>'VIEW EVENT',
                        'visit_button_link'=> [
                            'url' => '#'
                        ]
                    ],
                    [
                        'event_image_video'=> 'image',
						'event_image' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'images/event/1.jpg'
                        ],
                        'event_video' =>  [
                            'url' =>plugin_dir_url( __FILE__ ) .'video/Pexels Videos 2620043.mp4'
                        ],
                        'event_date'=>'22',
                        'event_month'=>'September',
                        'event_description'=>'<p><p>laia brunch & natural wine tasting. laia brunch & natural wine tasting.</p></p>',
                        'blog_read_more_button' =>'show',
                        'blog_read_more_text'=>'VIEW EVENT',
                        'visit_button_link'=> [
                            'url' => '#'
                        ]
                    ],

				],

			]
			
		);
    
        $this->add_control(
			'event_button',
			[
				'label' => esc_html__( 'Show Event Button', 'laia' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'laia' ),
				'label_off' => esc_html__( 'Hide', 'laia' ),
				'return_value' => 'show',
				'default' => 'show'
			]
		);
		
		$this->add_control(
            'event_button_text',
            [
                'label' => __( 'Event Text', 'laia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Organizer un ÉVÈNMENTS',
				'condition' => [
					'event_button' => 'show'
				]
            ]
		);

		$this->add_control(
            'event_button_link',
            [
                'label' => __( 'Event Button Link', 'laia' ),
				'type' => \Elementor\Controls_Manager::URL,
				'default' => [
					'url' => '#'
				],
				'condition' => [
					'event_button' => 'show'
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
<!-- event section start -->
<section class="event-section">
    <div class="container-fluid p-0">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="title-main">NOS ÉVÈNEMENT</h2>
			</div>
		</div>
        <div class="event-slider">
            <?php foreach( $settings['event_section'] as $key => $event ): ?>
            <div>
                <div class="row m-0 align-items-center">
                    <div class="col-lg-7 p-0">
                        <div class="event-image">
                            <?php if( $event['event_image_video'] == 'image' ):  ?>

                            <?php if ( !empty($event['event_image']['url'])): ?>

                            <img src="<?php echo esc_url($event['event_image']['url']) ?>" class="img-fluid" alt="">
                            <?php endif;?>
                            <?php else : ?>
                            <?php if ( !empty($event['event_video']['url'])): ?>
                            <video autoplay src="<?php echo esc_url( $event['event_video']['url'] ); ?>" loop
                                preload="none" muted="muted"></video>
                            <?php endif;?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9 col-sm-11 p-0">
                        <div class="event-content">
							<div class="event-main">
								<div class="event-details">
                                <div class="event-title">
                                    <h4 class="pe-2"><?php echo esc_html__( $event['event_date'], 'laia' ) ?></h4>
                                    <h4><?php echo esc_html__( $event['event_month'], 'laia' ) ?></h4>
                                </div>
                                <div class="event-bottom">
                                    <div class="event-bottom-details">
                                        <?php echo $event['event_description'];  ?>
                                    </div>
                                    <?php if( $event['blog_read_more_button'] == 'show' ) : ?>

                                    <?php if( !empty( $event['blog_read_more_text'] ) ) : ?>
                                    <a href="<?php echo esc_url( $restorent['visit_button_link']['url'] ); ?>"
                                        <?php if ( $restorent['visit_button_link']['is_external'] ): ?> target="_blank"
                                        <?php endif; ?> role="button">
                                        <?php echo esc_html__( $event['blog_read_more_text'], 'laia' ) ?>
                                    </a>
                                    <?php endif ; ?>

                                    <?php  endif ; ?>
                                </div>
                            </div>
							</div>
                            <!-- <div class="event-tag">
                                <?php if ( !empty($settings['event_button'] =='show') ): ?>
                                <a href="<?php echo esc_url( $settings['event_button_link']['url'] ); ?>"
                                    <?php if ( $settings['event_button_link']['is_external'] ): ?> target="_blank"
                                    <?php endif; ?> role="button">
                                    <?php if ( !empty($settings['event_button_text']) ): ?>
                                    <h6><?php echo esc_html( $settings['event_button_text'] ); ?></h6>
                                    <?php endif; ?>
                                </a>
                                <?php endif;?>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
		<a href="javascript:void(0)" class="next-btn">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/11.svg" alt=""
								class="img-fluid">
			<span>NEXT EVENT</span>					
		</a>
    </div>
</section>
<!-- event section end -->

<?php
if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) : ?>
<script>
$('.event-slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: false,
    autoplay: false,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});
	$(".next-btn").click(function () {
		$(".event-slider").slick("slickNext");
	});
	$(".event-slider").on("afterChange", function () {
		if ($(".slick-next").hasClass("slick-disabled")) {
			$(".next-btn").addClass("slick-disabled");
		} else {
			$(".next-btn").removeClass("slick-disabled");
		}
	});
</script>

<?php endif; 
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Event() );