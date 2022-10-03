<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;


class Testimonial extends Widget_Base{

	public function get_name(){
		return "testimonial";
	}
	
	public function get_title(){
		return "Testimonial";
	}
	
	public function get_icon(){
		return "eicon-blockquote";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function _register_controls(){

		$this->start_controls_section(
			'slider', [
				'label' => __( 'Slider', 'dreamit-elementor-extension' ),
			]
		);
		$this->add_control(
			'slides', [
				'label' => __( 'Slide items', 'dreamit-elementor-extension' ),
				'type' => Controls_Manager::REPEATER,
				'title_field' => '{{{name}}}',
				'fields' => [
					[
						'name'	=> 'image',
						'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::MEDIA,
					],
					[
						'name'	=> 'quote_text',
						'label' => __( 'Quote', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::TEXTAREA,
						'dynamic' => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Quote', 'dreamit-elementor-extension' ),
						'label_block' => true,
						'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
					],
					[
						'name'	=> 'name',
						'label' => __( 'Name', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::TEXT,
						'dynamic' => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your name', 'dreamit-elementor-extension' ),
						'default' => __( 'Your Name', 'dreamit-elementor-extension' ),
					],
					[
						'name'	=> 'designation',
						'label' => __( 'Designation', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::TEXT,
						'dynamic' => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your designation', 'dreamit-elementor-extension' ),
						'default' => __( 'Web Developer', 'dreamit-elementor-extension' ),
					],
					[
						'name'	=> 'rating',
						'label' => __( 'Rating', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 5,
						'step' => 1,
						'default' => 3,
					],
				],
			]
		);


		$this->end_controls_section();




/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'general_section',
			[
				'label' => __( 'General', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'select_style',
				[
					'label' => __( 'Select Style', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => [
						'one' => __( 'One', 'dreamit-elementor-extension' ),
						'two' => __( 'Two', 'dreamit-elementor-extension' ),
						'three' => __( 'Three', 'dreamit-elementor-extension' ),
						'four' => __( 'Four', 'dreamit-elementor-extension' ),
					],
					'default' => 'one',
					
				]
			);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'quote_section',
			[
				'label' => __( 'Quote', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'conditions' => [
				    'relation' => 'or',
					'terms' => [
						[
			                'terms' => [
				                [
			                        'name' => 'select_style',
			                        'operator' => '==',
			                        'value' => 'one'
			                    ],
			                ]
			            ],
			            [
			                'terms' => [
			                    [
			                         'name' => 'select_style',
			                         'operator' => '==',
			                         'value' => 'three'
				                ],
			                ]
						]
					]
				]
			]
		);
    		$this->add_control(
    			'quote_text_color',
    			[
    				'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .single_testimonial .testi_content .em_testi_text' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_control(
    			'quote_background_color',
    			[
    				'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .single_testimonial .testi_content' => 'background-color: {{VALUE}}',
    					'{{WRAPPER}} .single_testimonial .testi_content::before' => 'border-left-color: {{VALUE}}; border-top-color: {{VALUE}}',
    				],
    			]
    		);
		$this->end_controls_section();

		$this->start_controls_section(
			'icon_section_style',
			[
				'label' => __( 'Icon', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'icon_color',
				[
					'label' => __( 'Icon Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .testi_thumb:before' => 'color: {{VALUE}};',
					],
				]
			);
			
			$this->add_control(
				'icon_background_color',
				[
					'label' => __( 'Icon Background Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .testi_thumb:before' => 'background-color: {{VALUE}};',
					],
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'content_section_style',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			
			$this->add_control(
				'name_color',
				[
					'label' => __( 'Name Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .testi_title h2' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'name_typography',
					'selector' => '{{WRAPPER}} .testi_title h2',
				]
			);
			$this->add_control(
				'designation_color',
				[
					'label' => __( 'Designation Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'separator' => 'before',
					'selectors' => [
						'{{WRAPPER}} .testi_title span' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'designation_typography',
					'selector' => '{{WRAPPER}} .testi_title span',
				]
			);

			$this->add_control(
				'quote_color',
				[
					'label' => __( 'Description Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'separator' => 'before',
					'selectors' => [
						'{{WRAPPER}} .testi_content .testi_text' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'quote_typography',
					'selector' => '{{WRAPPER}} .testi_content .testi_text',
				]
			);

			$this->add_control(
				'rating_color',
				[
					'label' => __( 'Rating Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'separator' => 'before',
					'selectors' => [
						'{{WRAPPER}} .testi-star i.active' => 'color: {{VALUE}};',
					],
				]
			);
			
		$this->end_controls_section();
		
	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$slides = isset($settings['slides']) ? $settings['slides'] : '';

		?>
		



		<?php if($settings['select_style']=='one'){ ?>

			<div class="testimonial_list owl-carousel owl-loaded curosel-style">

				<?php foreach ($slides as $slide) { ?>
				<div class="col-md-12">	

					<div class="single_testimonial default-style">
													
						<div class="testi_thumb">
							<img src="<?php echo $slide['image']['url']; ?>" alt="">
						</div>
													
						<div class="testi_content">
							<div class="testi_text">
								<?php echo $slide['quote_text']; ?>
							</div>
						</div>

						<div class="reviews_rating">

							<?php if( $slide['rating']==5 ){ ?>
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
							</div>
							<?php } ?>				
							
							<?php if( $slide['rating']==4 ){ ?>			
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
							</div>												
							<?php } ?>
							
							<?php if( $slide['rating']==3 ){ ?>
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>												
							<?php } ?>
							
							<?php if( $slide['rating']==2 ){ ?>
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>												
							<?php } ?>
							
							<?php if( $slide['rating']==1 ){ ?>
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<?php } ?>
						</div><!-- .reviews_rating -->

						<div class="testi_title">
							<h2><?php echo $slide['name']; ?><span><?php echo $slide['designation']; ?></span></h2>
						</div>

					</div>
				</div>
				<?php } ?>
			</div>
            <script>
            	jQuery(document).ready(function($) {
            		"use strict";
            		$('.testimonial_list').owlCarousel({
            		loop: true,
            		autoplay: false,
            		autoplayTimeout: 10000,
            		dots: true,
            		nav: false,
            		navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
            		responsive: {
            			0: {
            				items: 1
            			},
            			768: {
            				items: 2
            			},
            			992: {
            				items: 2
            			},
            			1000: {
            				items: 3
            			},
            			1920: {
            				items: 3,
            			}
            		}
            	})
            	});
            </script>			

		<?php }elseif($settings['select_style']=='two'){ ?>


			<div class="testimonial_list2 owl-carousel owl-loaded curosel-style testimonial-style-two">												
				<?php foreach ($slides as $slide) { ?>
				<div class="col-md-12">	

					<div class="single_testimonial">
												
						<div class="testi_thumb">
							<img src="<?php echo $slide['image']['url']; ?>" alt="">
						</div>
						
						<div class="testi_content">
							<div class="testi_text">
								<?php echo $slide['quote_text']; ?>
							</div>
						</div>

						<div class="em_reviews_rating">																								
						<?php if($em_rating==5){?> 
							<div class="testi-star">
													
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
							</div>										
												
						<?php }elseif($em_rating==4){?>
							<div class="testi-star">
							
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
							
							</div>												

						<?php }elseif($em_rating==3){?>
							<div class="testi-star">
							
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							
							</div>												

						<?php }elseif($em_rating==2){?>
							<div class="testi-star">
							
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							
							</div>												

						<?php }elseif($em_rating==1){?>
							<div class="testi-star">
							
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							
							</div>	
						<?php }else{}?>
					</div>
						<div class="testi_title">
							<h2><?php echo $slide['name']; ?><span><?php echo $slide['designation']; ?></span></h2>
						</div>

					</div>										

				</div>
				<?php } ?>								
									
			</div>
            <script>
            	jQuery(document).ready(function($) {
            		"use strict";
                	// 6.EM TESTIMONIAL
                	$('.testimonial_list2').owlCarousel({
                		loop: true,
                		autoplay: false,
                		autoplayTimeout: 10000,
                		dots: true,
                		nav: false,
                		navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
                		responsive: {
                			0: {
                				items: 1
                			},
                			768: {
                				items: 1
                			},
                			992: {
                				items: 1
                			},
                			1000: {
                				items: 1
                			},
                			1920: {
                				items: 1,
                			}
                		}
                	})
            	});
            </script>

		<?php }elseif($settings['select_style']=='three'){ ?>

			<div class="testimonial_list owl-carousel owl-loaded curosel-style owl-loaded owl-drag testimonial-style-three">

				<?php foreach ($slides as $slide) { ?>
				<div class="col-md-12">	

					<div class="single_testimonial">
													
						
													
						<div class="testi_content">
							<div class="em_testi_text">
								<?php echo $slide['quote_text']; ?>
							</div>
						</div>

						<div class="test_thumb">
							<img src="<?php echo $slide['image']['url']; ?>" alt="">
						</div>

						<div class="testi_title">

							<div class="reviews_rating">

								<?php if( $slide['rating']==5 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
								</div>
								<?php } ?>				
								
								<?php if( $slide['rating']==4 ){ ?>			
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>												
								<?php } ?>
								
								<?php if( $slide['rating']==3 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
								<?php } ?>
								
								<?php if( $slide['rating']==2 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
								<?php } ?>
								
								<?php if( $slide['rating']==1 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<?php } ?>
							</div><!-- .reviews_rating -->

							<h2><?php echo $slide['name']; ?><span><?php echo $slide['designation']; ?></span></h2>
						</div>

					</div>
				</div>
				<?php } ?>
			</div>
            <script>
            	jQuery(document).ready(function($) {
            		"use strict";
            		$('.testimonial_list').owlCarousel({
            		loop: true,
            		autoplay: false,
            		autoplayTimeout: 10000,
            		dots: true,
            		nav: false,
            		navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
            		responsive: {
            			0: {
            				items: 1
            			},
            			768: {
            				items: 2
            			},
            			992: {
            				items: 2
            			},
            			1000: {
            				items: 3
            			},
            			1920: {
            				items: 3,
            			}
            		}
            	})
            	});
            </script>			
		
		<?php }elseif($settings['select_style']=='four'){ ?>

			<div class="testimonial_list owl-carousel owl-loaded curosel-style testimonial-style-four">

				<?php foreach ($slides as $slide) { ?>
				<div class="col-md-12">	

					<div class="single_testimonial">
													
						<div class="testi_thumb">
							<img src="<?php echo $slide['image']['url']; ?>" alt="">
						</div>
													
						<div class="testi_content">
							<div class="testi_text">
								<?php echo $slide['quote_text']; ?>
							</div>
						</div>

						<div class="reviews_rating">

							<?php if( $slide['rating']==5 ){ ?>
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
							</div>
							<?php } ?>				
							
							<?php if( $slide['rating']==4 ){ ?>			
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
							</div>												
							<?php } ?>
							<?php if( $slide['rating']==3 ){ ?>
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>												
							<?php } ?>
							
							<?php if( $slide['rating']==2 ){ ?>
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>												
							<?php } ?>
							
							<?php if( $slide['rating']==1 ){ ?>
							<div class="testi-star">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<?php } ?>
						</div><!-- .reviews_rating -->
						<div class="testi_title">
							<h2><?php echo $slide['name']; ?><span><?php echo $slide['designation']; ?></span></h2>
						</div>

					</div>
				</div>
				<?php } ?>
			</div>
            <script>
            	jQuery(document).ready(function($) {
            		"use strict";
            		$('.testimonial_list').owlCarousel({
            		loop: true,
            		autoplay: false,
            		autoplayTimeout: 10000,
            		dots: true,
            		nav: false,
            		navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
            		responsive: {
            			0: {
            				items: 1
            			},
            			768: {
            				items: 2
            			},
            			992: {
            				items: 2
            			},
            			1000: {
            				items: 3
            			},
            			1920: {
            				items: 3,
            			}
            		}
            	})
            	});
            </script>			

		<?php } ?>
							
		<?php
	}
	



}

