<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;


class BlogPost extends Widget_Base{

	public function get_name(){
		return "blogpost";
	}
	
	public function get_title(){
		return "Blog Post";
	}
	
	public function get_icon(){
		return "eicon-table-of-contents";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function _register_controls(){

		$this->start_controls_section(
			'button_section',
			[
				'label' => __( 'Button', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your button text', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Read More', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'show_button',
				[
					'label' => __( 'Show Button', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => __( 'Show', 'dreamit-elementor-extension' ),
					'label_off' => __( 'Hide', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			$this->add_control(
				'button_icon',
				[
					'label' => __( 'Button Icon', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fa fa-angle-right',
						'library' => 'solid',
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
			'style_section',
			[
				'label' => __( 'Style', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'select_style',
				[
					'label' => __( 'Select Style', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'one' => __( 'One', 'dreamit-elementor-extension' ),
						'two' => __( 'Two', 'dreamit-elementor-extension' ),
					],
					'default' => 'two',
					
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'meta_section_style',
			[
				'label' => __( 'Post Meta', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'meta_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .techno-blog-meta-left a' => 'color: {{VALUE}};',
						'{{WRAPPER}} .techno-blog-meta-left span' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'meta_typography',
					'selector' => '{{WRAPPER}} .techno-blog-meta-left a, {{WRAPPER}} .techno-blog-meta-left span',
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'title_section_style',
			[
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'title_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .blog-page-title_adn h2 a' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .blog-page-title_adn h2 a, {{WRAPPER}} .elementor-icon-box-content .elementor-icon-box-title a',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .blog-page-title_adn h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'description_section_style',
			[
				'label' => __( 'Description', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'description_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .blog-content_adn p' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'selector' => '{{WRAPPER}} .blog-content_adn p',
				]
			);
			$this->add_responsive_control(
				'description_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .blog-content_adn p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => __( 'Button Style', 'itsoft' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'btn_color',
				[
					'label' => __( 'Color', 'itsoft' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .itsoft-blog-readmore a' => 'color: {{VALUE}}',
					],
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'box_section_style',
			[
				'label' => __( 'Box', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->start_controls_tabs(
				'box_style_tabs'
			);
				$this->start_controls_tab(
					'box_style_normal_tab',
					[
						'label' => __( 'Normal', 'dreamit-elementor-extension' ),
					]
				);
				
					$this->add_group_control(
						\Elementor\Group_Control_Border::get_type(),
						[
							'name' => 'box_border',
							'label' => __( 'Border', 'dreamit-elementor-extension' ),
							'selector' => '{{WRAPPER}} .techno-single-blog_adn',
						]
					);

					$this->add_responsive_control(
						'box_border_radius',
						[
							'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
							'type' => \Elementor\Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', 'em', '%' ],
							'selectors' => [
								'{{WRAPPER}} .techno-single-blog_adn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);
						$this->add_group_control(
						\Elementor\Group_Control_Box_Shadow::get_type(),
						[
							'name' => 'box_shadow',
							'label' => __( 'Box Shadow', 'dreamit-elementor-extension' ),
							'selector' => '{{WRAPPER}} .techno-single-blog_adn',
						]
					);

					$this->add_group_control(
						\Elementor\Group_Control_Background::get_type(),
						[
							'name' => 'box_background',
							'label' => __( 'Background', 'dreamit-elementor-extension' ),
							'types' => [ 'classic', 'gradient', 'video' ],
							'selector' => '{{WRAPPER}} .techno-single-blog_adn',
						]
					);
				
				$this->end_controls_tab();
				
				$this->start_controls_tab(
					'box_style_hover_tab',
					[
						'label' => __( 'Hover', 'dreamit-elementor-extension' ),
					]
				);
						$this->add_group_control(
						\Elementor\Group_Control_Border::get_type(),
						[
							'name' => 'hover_box_border',
							'label' => __( 'Border', 'dreamit-elementor-extension' ),
							'selector' => '{{WRAPPER}} .techno-single-blog_adn:hover',
						]
					);

					$this->add_responsive_control(
						'hover_box_border_radius',
						[
							'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
							'type' => \Elementor\Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', 'em', '%' ],
							'selectors' => [
								'{{WRAPPER}} .techno-single-blog_adn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);

					$this->add_group_control(
						\Elementor\Group_Control_Box_Shadow::get_type(),
						[
							'name' => 'hover_box_shadow',
							'label' => __( 'Box Shadow', 'dreamit-elementor-extension' ),
							'selector' => '{{WRAPPER}} .techno-single-blog_adn:hover',
						]
					);
						$this->add_group_control(
						\Elementor\Group_Control_Background::get_type(),
						[
							'name' => 'hover_box_background',
							'label' => __( 'Background', 'dreamit-elementor-extension' ),
							'types' => [ 'classic', 'gradient', 'video' ],
							'selector' => '{{WRAPPER}} .techno-single-blog_adn:hover',
						]
					);
				
				$this->end_controls_tab();
				
			$this->end_controls_tabs();

			$this->add_responsive_control(
				'box_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .techno-single-blog_adn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);
			$this->add_responsive_control(
				'box_padding',
				[
					'label' => __( 'Padding', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .techno-single-blog_adn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

        <?php if($settings['select_style']=='one'){ ?>
        
			<div class=" blog_style_two">				
				<div class="blog_wrap blog_carousel owl-carousel owl-loaded curosel-style">
				
					<?php $the_query = new \WP_Query( array( 'post_type' => 'post' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<!-- single blog -->
						<div class="col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_blog_adn">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="techno-single-blog_adn ">

										<!-- BLOG THUMB -->
										
										<div class="techno-blog-thumb_adn ">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('techno-blog-default'); ?></a>
										</div>									
										
										<!-- BLOG CONTENT -->
										<div class="em-blog-content-area_adn ">

											<!-- BLOG META -->
											<div class="techno-blog-meta-left ">
												<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
												<span><?php echo get_the_time(get_option('date_format')); ?></span>
											</div>	

											<!-- BLOG TITLE -->
											<div class="blog-page-title_adn ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
											</div>

											
											
										</div><!-- .em-blog-content-area_adn -->
										
									</div>
								
								</div> <!--  END SINGLE BLOG -->
	
									
							</div>
						
						</div>
					<?php endwhile; ?>
					
				</div>
			</div>
    		<script>
    			jQuery(document).ready(function($) {
    				"use strict";
                	/* Blog Curousel */
                	$('.blog_carousel').owlCarousel({
                		dots: true,
                		nav: true,
                		autoplayTimeout: 10000,
                		navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
                		responsive: {
                			0: {
                				items: 1
                			},
                			768: {
                				items: 2
                			},
                			992: {
                				items: 3
                			},
                			1920: {
                				items: 3
                			}
                		}
                	})	
            		});
            	</script>			
		<?php }elseif($settings['select_style']=='two'){ ?>
		
			<div class=" blog_style_two">				
				<div class="blog_wrap blog_carousel owl-carousel owl-loaded curosel-style">
				
					<?php $the_query = new \WP_Query( array( 'post_type' => 'post' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<!-- single blog -->
						<div class="col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_blog_adn">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="techno-single-blog_adn ">

										<!-- BLOG THUMB -->
										
										<div class="techno-blog-thumb_adn ">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('techno-blog-default'); ?></a>
											<div class="techno-blog-meta-top">
												<?php the_category();?>
											</div>
										</div>									
										
										<!-- BLOG CONTENT -->
										<div class="em-blog-content-area_adn ">

											<!-- BLOG META -->
											<div class="techno-blog-meta-left ">
												<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
												<span><?php echo get_the_time(get_option('date_format')); ?></span>
											</div>	

											<!-- BLOG TITLE -->
											<div class="blog-page-title_adn ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
											</div>

											<!-- BLOG CONTENT -->
											<div class="blog-inner_adn ">
												<div class="blog-content_adn ">					
													<p><?php echo wp_trim_words( get_the_content(), 12, ' ' ); ?></p>
												</div>
											</div>	

											<!-- BLOG BUTTON -->
											<?php if( 'yes'===$settings['show_button'] ){ ?>
											<div class="techno-blog-readmore">
												<a href="<?php the_permalink(); ?>" class="learn_btn"><?php echo $settings['button_text']; ?><?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
											</div>
											<?php } ?>
											
										</div><!-- .em-blog-content-area_adn -->
										
									</div>
								
								</div> <!--  END SINGLE BLOG -->
	
									
							</div>
						
						</div>
					<?php endwhile; ?>
					
				</div>
			</div>
    		<script>
    			jQuery(document).ready(function($) {
    				"use strict";
                	/* Blog Curousel */
                	$('.blog_carousel').owlCarousel({
                		dots: true,
                		nav: true,
                		autoplayTimeout: 10000,
                		navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
                		responsive: {
                			0: {
                				items: 1
                			},
                			768: {
                				items: 2
                			},
                			992: {
                				items: 3
                			},
                			1920: {
                				items: 3
                			}
                		}
                	})	
            		});
            	</script>	
		
		<?php } ?>

		<?php
	}
}