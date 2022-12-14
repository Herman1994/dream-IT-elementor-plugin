<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;

if(!defined('ABSPATH')) exit;


class SlickSlider extends Widget_Base{

	public function get_name(){
		return "slider";
	}
	
	public function get_title(){
		return "Slick Slider";
	}
	
	public function get_icon(){
		return "eicon-slider-push";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function _register_controls() {
		
		$this->start_controls_section(
			'slider', [
				'label' => __( 'Slider', 'dreamit-elementor-extension' ),
			]
		);
		$this->add_control(
			'slides', [
				'label' => __( 'Slide items', 'dreamit-elementor-extension' ),
				'type' => Controls_Manager::REPEATER,
				'title_field' => '{{{ subtitle }}}',
				'fields' => [
                    [
                        'name' => 'slider_style',
                        'label' => __( 'Slider style', 'dreamit-elementor-extension' ),
                        'type' => Controls_Manager::SELECT,
                        'options' => [
                            'style_01' => esc_html__('Style one', 'dreamit-elementor-extension'),
                            'style_02' => esc_html__('Style two', 'dreamit-elementor-extension'),
                            'style_03' => esc_html__('Style three', 'dreamit-elementor-extension'),
                            'style_04' => esc_html__('Style four', 'dreamit-elementor-extension'),
                            'style_05' => esc_html__('Style five', 'dreamit-elementor-extension'),
                            'style_06' => esc_html__('Style Six', 'dreamit-elementor-extension'),
                            'style_07' => esc_html__('Style Seven', 'dreamit-elementor-extension'),
                        ],
                        'default' => 'style_01'
                    ],

                    [
                        'name' => 'content_position',
                        'label' => __( 'Select Text Position', 'dreamit-elementor-extension' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'options' => [
                            'text-left' => __( 'Text Left', 'dreamit-elementor-extension' ),
                            'text-center' => __( 'Text Center', 'dreamit-elementor-extension' ),
                            'text-right' => __( 'Text Right', 'dreamit-elementor-extension' ),
                        ],
                        'default' => 'text-left',
                        
                    ],

					[
						'name' => 'subtitle',
						'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'Welcome to techno'
					],

					[
						'name' => 'title',
						'label' => __( 'Title', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'We are a creative <br>Design Agency',
					],

                    [
                        'name' => 'description',
                        'label' => __( 'Description', 'dreamit-elementor-extension' ),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => 'Pellentesque at posuere tellus phasellus scelerisque porem.',
                    ],

					[
						'name' => 'btn1',
						'label' => __( 'Button 1', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Enter Button Name', 'dreamit-elementor-extension' ),
						'default' => 'Get Started'
					],
					[
						'name' => 'btn1_url',
						'label' => __( 'Button URL', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
                        'default' => [
                            'url' => '#'
                        ]
					],

					[
						'name' => 'btn2',
						'label' => __( 'Button 2', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Enter Button Name', 'dreamit-elementor-extension' ),
						'default' => ''
					],
					[
						'name' => 'btn2_url',
						'label' => __( 'Button URL', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
                        'default' => [
                            'url' => '#'
                        ]
					],

					[
						'name' => 'video_url',
						'label' => __( 'Video URL', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
                        'default' => [
                            'url' => '#'
                        ]
					],
					[
						'name' => 'video_title',
						'label' => __( 'Video Title', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
					],

					[
						'name' => 'video_icon',
						'label' => __( 'Video Icon', 'text-domain' ),
						'type' => \Elementor\Controls_Manager::ICONS,
						'default' => [
							'value' => 'fas fa-play',
						],
					],

					[
						'name' => 'single_image',
						'label' => __( 'Choose Single Image', 'dreamit-elementor-extension' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
					],


					[
						'name' => 'bg_image',
						'label' => __( 'Background image', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::MEDIA,
					],
				],
			]
		);
		$this->end_controls_section();


/**
 * Style Tab
 */

        $this->start_controls_section(
            'general_section', [
                'label' => __( 'General', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_responsive_control(
                'slider_height',
                [
                    'label' => __( 'Slider Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1500,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .dreamit-slick-slider .single-slick' => 'min-height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_section();

        //------------------------------ Style Title ------------------------------



        //------------------------------ Style subtitle ------------------------------
        $this->start_controls_section(
            'style_subtitle', [
                'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_subtitle', [
                'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-text h4' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .slider_two .hero-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_subtitle',
                'selector' => '{{WRAPPER}} .hero-text h4, {{WRAPPER}} .slider_two .hero-text h3',
            ]
        );
        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-text h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        //------------------------------ Style Description ------------------------------
        $this->start_controls_section(
            'style_description', [
                'label' => __( 'Description', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_description', [
                'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_description',
                'selector' => '{{WRAPPER}} .hero-text p, {{WRAPPER}} .slider_two .hero-text h3',
            ]
        );
        $this->add_responsive_control(
            'description_margin',
            [
                'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-text p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();


        //------------------------------ Style Button ------------------------------
        $this->start_controls_section(
            'style_button', [
                'label' => __( 'Button 1', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs(
                'button_style_tabs'
            );
                $this->start_controls_tab(
                    'button_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'dreamit-elementor-extension' ),
                    ]
                );
                
                    $this->add_control(
                        'button_text_color',
                        [
                            'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_control(
                        'button_background_color',
                        [
                            'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn' => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        \Elementor\Group_Control_Border::get_type(),
                        [
                            'name' => 'button_border',
                            'label' => __( 'Border', 'dreamit-elementor-extension' ),
                            'selector' => '{{WRAPPER}} .single-slick .btn',
                        ]
                    );
                    $this->add_responsive_control(
                        'button_border_radius',
                        [
                            'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', 'em', '%' ],
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'button_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'dreamit-elementor-extension' ),
                    ]
                );

                    $this->add_control(
                        'hover_button_text_color',
                        [
                            'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_control(
                        'hover_button_background_color',
                        [
                            'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn:hover' => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        \Elementor\Group_Control_Border::get_type(),
                        [
                            'name' => 'hover_button_border',
                            'label' => __( 'Border', 'dreamit-elementor-extension' ),
                            'selector' => '{{WRAPPER}} .single-slick .btn:hover',
                        ]
                    );
                    $this->add_responsive_control(
                        'hover_button_border_radius',
                        [
                            'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', 'em', '%' ],
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
                
            $this->end_controls_tabs();

            $this->add_responsive_control(
                'button_margin',
                [
                    'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .single-slick .btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'button_height',
                [
                    'label' => __( 'Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single-slick .btn' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'button_width',
                [
                    'label' => __( 'Width', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single-slick .btn' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'button_typography',
                    'selector' => '{{WRAPPER}} .single-slick .btn',
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_button_two', [
                'label' => __( 'Button 2', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs(
                'button_two_style_tabs'
            );
                $this->start_controls_tab(
                    'button_two_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'dreamit-elementor-extension' ),
                    ]
                );
                
                    $this->add_control(
                        'button_two_text_color',
                        [
                            'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn.button-two' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_control(
                        'button_two_background_color',
                        [
                            'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn.button-two' => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        \Elementor\Group_Control_Border::get_type(),
                        [
                            'name' => 'button_two_border',
                            'label' => __( 'Border', 'dreamit-elementor-extension' ),
                            'selector' => '{{WRAPPER}} .single-slick .btn.button-two',
                        ]
                    );
                    $this->add_responsive_control(
                        'button_two_border_radius',
                        [
                            'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', 'em', '%' ],
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn.button-two' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'button_two_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'dreamit-elementor-extension' ),
                    ]
                );

                    $this->add_control(
                        'hover_button_two_text_color',
                        [
                            'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn.button-two:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_control(
                        'hover_button_two_background_color',
                        [
                            'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn.button-two:hover' => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        \Elementor\Group_Control_Border::get_type(),
                        [
                            'name' => 'hover_button_two_border',
                            'label' => __( 'Border', 'dreamit-elementor-extension' ),
                            'selector' => '{{WRAPPER}} .single-slick .btn.button-two:hover',
                        ]
                    );
                    $this->add_responsive_control(
                        'hover_button_two_border_radius',
                        [
                            'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', 'em', '%' ],
                            'selectors' => [
                                '{{WRAPPER}} .single-slick .btn.button-two:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
                
            $this->end_controls_tabs();

            $this->add_responsive_control(
                'button_two_margin',
                [
                    'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .single-slick .btn.button-two' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'button_two_height',
                [
                    'label' => __( 'Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single-slick .btn.button-two' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'button_two_width',
                [
                    'label' => __( 'Width', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single-slick .btn.button-two' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'button_two_typography',
                    'selector' => '{{WRAPPER}} .single-slick .btn.button-two',
                ]
            );

        $this->end_controls_section();


	}


    protected function render() {

        $settings = $this->get_settings();


        $slides = isset($settings['slides']) ? $settings['slides'] : '';
        wp_enqueue_script('slick');
        wp_enqueue_style('slick');

    ?>

        
            <section class="dreamit-slick-slider">
                <div class="default-slider slick">
                    
                    <?php if(is_array($slides)) {
                        foreach ($slides as $slide) {
                            $this->add_render_attribute( 'i', 'class', $slide['video_icon'] ); 
                    ?>

                        <?php if($slide['slider_style']=='style_01'){ ?>

						<div class="single-slick one align-items-center d-flex <?php echo $slide['content_position'] ?>">
                            <div class="container">
                                <div class="slide-img parallax-effect"
                                    <?php if(!empty($slide['bg_image']['url'])) : ?> style="background:url(<?php echo esc_url($slide['bg_image']['url']) ?>) center center / cover scroll no-repeat;" <?php endif; ?>>
                                </div>
                                <div class="hero-text-wrap">
                                    <div class="hero-text">
                                        
                                            <div class="white-color">
                                                <?php if(!empty($slide['subtitle'])) : ?> <h4> <?php echo esc_html_e($slide['subtitle']) ?> </h4> <?php endif; ?>
                                                <?php if(!empty($slide['title'])) : ?> <h1 class="font-600"> <?php echo $slide['title']; ?> </h1> <?php endif; ?>

                                                	<p><?php echo $slide['description']; ?></p>

                                                	<?php if( !empty($slide['btn1']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none" href="<?php echo esc_url($slide['btn1_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn1']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['btn2']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none button-two" href="<?php echo esc_url($slide['btn2_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn2']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['video_url']['url']) ){ ?>
                                                    <div class="slider-video-icon">
                                                    	<a href="<?php echo esc_url($slide['video_url']['url']); ?>" class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true">
                                                    		<i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i>
                                                    	</a>
                                                    </div>
                                                    <?php } ?>

                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="slider-single-image">
                                	<img src="<?php echo $slide['single_image']['url']; ?>" alt="">
                                </div>
							</div><!-- .container -->


						</div><!-- .single-slick -->

                        <?php }elseif($slide['slider_style']=='style_02'){ ?>

                        <div class="single-slick style-two align-items-center d-flex <?php echo $slide['content_position'] ?>">
                            <div class="container">
                                <div class="slide-img parallax-effect"
                                    <?php if(!empty($slide['bg_image']['url'])) : ?> style="background:url(<?php echo esc_url($slide['bg_image']['url']) ?>) center center / cover scroll no-repeat;" <?php endif; ?>>
                                </div>
                                <div class="hero-text-wrap">
                                    <div class="hero-text">

                                            <div class="white-color">
                                                <?php if(!empty($slide['subtitle'])) : ?> <h4> <?php echo esc_html_e($slide['subtitle']) ?> </h4> <?php endif; ?>
                                                <?php if(!empty($slide['title'])) : ?> <h1 class="font-600"> <?php echo $slide['title']; ?> </h1> <?php endif; ?>

                                                    <p><?php echo $slide['description']; ?></p>

                                                    <?php if( !empty($slide['btn1']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none" href="<?php echo esc_url($slide['btn1_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn1']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['btn2']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none  button-two" href="<?php echo esc_url($slide['btn2_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn2']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                            </div>
                                        
                                        <?php if( !empty($slide['video_url']['url']) ){ ?>
                                            <div class="slider-video-icon">
                                                <a href="<?php echo esc_url($slide['video_url']['url']); ?>" class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true">
                                                    <i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div><!-- .container -->

                        </div><!-- .single-slick -->

                        <?php }elseif($slide['slider_style']=='style_03'){ ?>
                        <div class="single-slick">
                                <div class="slide-img parallax-effect"
                                    <?php if(!empty($slide['bg_image']['url'])) : ?> style="background:url(<?php echo esc_url($slide['bg_image']['url']) ?>) center center / cover scroll no-repeat;" <?php endif; ?>>
                                </div>
                                <div class="hero-text-wrap">
                                    <div class="hero-text">
                                        
                                            <div class="white-color">
                                                <?php if(!empty($slide['subtitle'])) : ?> <h5> <?php echo esc_html_e($slide['subtitle']) ?> </h5> <?php endif; ?>
                                                <?php if(!empty($slide['title'])) : ?> <h1 class="font-600"> <?php echo $slide['title']; ?> </h1> <?php endif; ?>
                                                <?php if(!empty($slide['btn_label'])) : ?>
                                                    <p class="text-left mt-30">
                                                        <a class="btn btn-gradient btn-md btn-animated-none" href="<?php echo esc_url($button_url['url']);?>" <?php echo $btn_target; ?>>
                                                            <?php echo esc_html($slide['btn_label']) ?>
                                                        </a>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        
                                    </div>
                                </div>
                        </div><!-- .single-slick -->

                        <?php }elseif($slide['slider_style']=='style_04'){ ?>

                        <div class="single-slick style-four align-items-center d-flex <?php echo $slide['content_position'] ?>">
                            <div class="container">
                                <div class="slide-img parallax-effect"
                                    <?php if(!empty($slide['bg_image']['url'])) : ?> style="background:url(<?php echo esc_url($slide['bg_image']['url']) ?>) center center / cover scroll no-repeat;" <?php endif; ?>>
                                </div>
                                <div class="hero-text-wrap">
                                    <div class="hero-text">
                                        
                                            <div class="white-color">
                                                <?php if(!empty($slide['subtitle'])) : ?> <h4> <?php echo esc_html_e($slide['subtitle']) ?> </h4> <?php endif; ?>
                                                <?php if(!empty($slide['title'])) : ?> <h1 class="font-600"> <?php echo $slide['title']; ?> </h1> <?php endif; ?>
                                                    
                                                    <?php if( !empty($slide['description']) ){ ?>
                                                    <p><?php echo $slide['description']; ?></p>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['btn1']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none" href="<?php echo esc_url($slide['btn1_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn1']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['btn2']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none button-two" href="<?php echo esc_url($slide['btn2_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn2']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['video_url']['url']) ){ ?>
                                                    <div class="slider-video-icon">
                                                        <a href="<?php echo esc_url($slide['video_url']['url']); ?>" class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true">
                                                            <i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i>
                                                        </a>
                                                        <?php if( !empty($slide['video_title']) ){ ?>
                                                        <span><?php echo $slide['video_title']; ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <?php } ?>

                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="slider-single-image">
                                    <img src="<?php echo $slide['single_image']['url']; ?>" alt="">
                                </div>
                            </div><!-- .container -->

                            <div class="slider_circle_img rotateme">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/dot-circle.png'; ?>" alt="circle-image">
                            </div>

                        </div><!-- .single-slick -->

                        <?php }elseif($slide['slider_style']=='style_05'){ ?>

                        <div class="single-slick style-five align-items-center d-flex <?php echo $slide['content_position'] ?>">
                            <div class="container">
                                <div class="slide-img parallax-effect"
                                    <?php if(!empty($slide['bg_image']['url'])) : ?> style="background:url(<?php echo esc_url($slide['bg_image']['url']) ?>) center center / cover scroll no-repeat;" <?php endif; ?>>
                                </div>
                                <div class="hero-text-wrap">
                                    <div class="hero-text">
                                        
                                            <div class="white-color">
                                                <?php if(!empty($slide['subtitle'])) : ?> <h4> <?php echo esc_html_e($slide['subtitle']) ?> </h4> <?php endif; ?>
                                                <?php if(!empty($slide['title'])) : ?> <h1 class="font-600"> <?php echo $slide['title']; ?> </h1> <?php endif; ?>

                                                    <p><?php echo $slide['description']; ?></p>

                                                    <?php if( !empty($slide['btn1']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none" href="<?php echo esc_url($slide['btn1_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn1']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['btn2']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none button-two" href="<?php echo esc_url($slide['btn2_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn2']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['video_url']['url']) ){ ?>
                                                    <div class="slider-video-icon">
                                                        <a href="<?php echo esc_url($slide['video_url']['url']); ?>" class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true">
                                                            <i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i>
                                                        </a>
                                                        <?php if( !empty($slide['video_title']) ){ ?>
                                                        <span><?php echo $slide['video_title']; ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <?php } ?>

                                            </div>

                                    </div>
                                </div>

                            </div><!-- .container -->

                            <div class="bottom-img">
                                <img src="https://webitkurigram.com/wp/techno/wp-content/themes/techno/assets/images/wave-shap.svg" alt="">
                            </div>
                        </div><!-- .single-slick -->
                        
                        <?php }elseif($slide['slider_style']=='style_06'){ ?>
                        
                        <div class="single-slick style-six align-items-center d-flex <?php echo $slide['content_position'] ?>">
                            <div class="container">
                                <div class="slide-img parallax-effect"
                                    <?php if(!empty($slide['bg_image']['url'])) : ?> style="background:url(<?php echo esc_url($slide['bg_image']['url']) ?>) center center / cover scroll no-repeat;" <?php endif; ?>>
                                </div>
                                <div class="hero-text-wrap">
                                    <div class="hero-text">

                                            <div class="white-color">
                                                <?php if(!empty($slide['subtitle'])) : ?> <h4> <?php echo esc_html_e($slide['subtitle']) ?> </h4> <?php endif; ?>
                                                <?php if(!empty($slide['title'])) : ?> <h1 class="font-600"> <?php echo $slide['title']; ?> </h1> <?php endif; ?>

                                                    <p><?php echo $slide['description']; ?></p>

                                                    <?php if( !empty($slide['btn1']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none" href="<?php echo esc_url($slide['btn1_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn1']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['btn2']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none  button-two" href="<?php echo esc_url($slide['btn2_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn2']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                            </div>
                                        
                                        <?php if( !empty($slide['video_url']['url']) ){ ?>
                                            <div class="slider-video-icon">
                                                <a href="<?php echo esc_url($slide['video_url']['url']); ?>" class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true">
                                                    <i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    
                                    <div class="lines">
                        				<div class="line"></div>
                        				<div class="line"></div>
                        				<div class="line"></div>
                        			</div>
                                    
                                </div>
                            </div><!-- .container -->

                        </div><!-- .single-slick -->
                        
                        <?php }elseif($slide['slider_style']=='style_07'){ ?>
                        
                        <div class="single-slick style-seven align-items-center d-flex <?php echo $slide['content_position'] ?>">
                            <div class="container">
                                <div class="slide-img parallax-effect"
                                    <?php if(!empty($slide['bg_image']['url'])) : ?> style="background:url(<?php echo esc_url($slide['bg_image']['url']) ?>) center center / cover scroll no-repeat;" <?php endif; ?>>
                                </div>
                                <div class="hero-text-wrap">
                                    <div class="hero-text">

                                            <div class="white-color">
                                                <?php if(!empty($slide['subtitle'])) : ?> <h4> <?php echo esc_html_e($slide['subtitle']) ?> </h4> <?php endif; ?>
                                                <?php if(!empty($slide['title'])) : ?> <h1 class="font-600"> <?php echo $slide['title']; ?> </h1> <?php endif; ?>

                                                    <p><?php echo $slide['description']; ?></p>

                                                    <?php if( !empty($slide['btn1']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none" href="<?php echo esc_url($slide['btn1_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn1']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if( !empty($slide['btn2']) ){ ?>
                                                    <a class="btn btn-gradient btn-md btn-animated-none  button-two" href="<?php echo esc_url($slide['btn2_url']['url']); ?>" target="_blank">
                                                            <?php echo $slide['btn2']; ?>
                                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                                    </a>
                                                    <?php } ?>

                                            </div>
                                        
                                        <?php if( !empty($slide['video_url']['url']) ){ ?>
                                            <div class="slider-video-icon">
                                                <a href="<?php echo esc_url($slide['video_url']['url']); ?>" class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true">
                                                    <i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i>
                                                </a>
                                            </div>
                                        <?php } ?>
                                        

                                        
                                    </div>
                                    
                                </div>

                            </div><!-- .container -->

                                <div class="slider-single-image">
                                    <img src="<?php echo $slide['single_image']['url']; ?>" alt="">
                                </div>

                        </div><!-- .single-slick -->
                        
                        <?php } ?>

                    <?php }} ?>
                </div>
            </section>
            <script>
                jQuery(document).ready(function() {
                    jQuery(".default-slider").slick({
                        <?php
                        if(is_rtl()) { ?>
                            dots: false,
                            infinite: true,
                            autoplay: false,
                            autoplaySpeed: 7000,
                            centerPadding: '0',
                            arrows: true,
                        <?php }else { ?>
                            dots: false,
                            infinite: true,
                            centerMode: true,
                            autoplay: true,
                            autoplaySpeed: 7000,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerPadding: '0',
                            arrows: true
                        <?php } ?>
                    });
                });
            </script>

        


        


	<?php }

}