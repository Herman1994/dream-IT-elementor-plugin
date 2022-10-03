<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if(!defined('ABSPATH')) exit;


class EffectiveSlider extends Widget_Base{

	public function get_name(){
		return "effectiveslider";
	}
	
	public function get_title(){
		return "Effective Slider";
	}
	
	public function get_icon(){
		return "eicon-slider-3d";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function _register_controls(){

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'subtitle',
				[
					'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Welcome To Techno', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title1',
				[
					'label' => __( 'Title 1', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Provide All IT Services', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title2',
				[
					'label' => __( 'Title 2', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Hosting Services', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title3',
				[
					'label' => __( 'Title 3', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Digital Marketing Service', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboret dolore magna aliqua. Ut en ad minim  ullamco laboris nisi ut aliquip.', 'dreamit-elementor-extension' ),
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'button_section',
			[
				'label' => __( 'Button', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'button1',
				[
					'label' => __( 'Button 1', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
				]
			);
			$this->add_control(
				'button1_text',
				[
					'label' => __( 'Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'About Us', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button1_link',
				[
					'label' => __( 'Link', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button2',
				[
					'label' => __( 'Button 2', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'button2_text',
				[
					'label' => __( 'Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'How IT Work', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button2_link',
				[
					'label' => __( 'Link', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
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
					],
					'default' => 'one',
					
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'subtitle_section_style',
			[
				'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'subtitle_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .effective-area h5' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'subtitle_typography',
					'selector' => '{{WRAPPER}} .effective-area h5',
				]
			);
			$this->add_responsive_control(
				'subtitle_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .effective-area h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
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
						'{{WRAPPER}} .effective-area .cd-headline .cd-words-wrapper' => 'color: {{VALUE}};',
						'{{WRAPPER}} .effective-area .cd-headline .cd-words-wrapper::after' => 'background-color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .effective-area .cd-headline .cd-words-wrapper',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .effective-area .cd-headline .cd-words-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .effective-area p' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'selector' => '{{WRAPPER}} .effective-area p',
				]
			);
			$this->add_responsive_control(
				'description_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .effective-area p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'button_section_style',
			[
				'label' => __( 'Button', 'dreamit-elementor-extension' ),
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
								'{{WRAPPER}} .effective-area .effective_slider_btn a' => 'color: {{VALUE}};',
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
								'{{WRAPPER}} .effective-area .effective_slider_btn a' => 'background-color: {{VALUE}};',
							],
						]
					);
					$this->add_group_control(
						\Elementor\Group_Control_Border::get_type(),
						[
							'name' => 'button_border',
							'label' => __( 'Border', 'dreamit-elementor-extension' ),
							'selector' => '{{WRAPPER}} .effective-area .effective_slider_btn a',
						]
					);
					$this->add_responsive_control(
						'button_border_radius',
						[
							'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
							'type' => \Elementor\Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', 'em', '%' ],
							'selectors' => [
								'{{WRAPPER}} .effective-area .effective_slider_btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .effective-area .effective_slider_btn a:hover' => 'color: {{VALUE}};',
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
								'{{WRAPPER}} .effective-area .effective_slider_btn a:hover' => 'background-color: {{VALUE}};',
							],
						]
					);
					$this->add_group_control(
						\Elementor\Group_Control_Border::get_type(),
						[
							'name' => 'hover_button_border',
							'label' => __( 'Border', 'dreamit-elementor-extension' ),
							'selector' => '{{WRAPPER}} .effective-area .effective_slider_btn a:hover',
						]
					);
					$this->add_responsive_control(
						'hover_button_border_radius',
						[
							'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
							'type' => \Elementor\Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', 'em', '%' ],
							'selectors' => [
								'{{WRAPPER}} .effective-area .effective_slider_btn a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .effective-area .effective_slider_btn a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .effective-area .effective_slider_btn a' => 'height: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .effective-area .effective_slider_btn a' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'button_typography',
					'selector' => '{{WRAPPER}} .effective-area .effective_slider_btn a',
				]
			);

		$this->end_controls_section();

	}

	protected function render(){

		$settings = $this->get_settings_for_display();

		?>

        <?php if($settings['select_style']=='one'){ ?>
        
		<div id="intro-section" class="effective-area overlay-white">
			<div class="effective-content text-center">
				<h5><?php echo $settings['subtitle']; ?></h5>
				<h2 class="cd-headline clip is-full-width">
					<span class="cd-words-wrapper">
						<b class="is-visible"><?php echo $settings['title1']; ?></b>
						<b><?php echo $settings['title2']; ?></b>
						<b><?php echo $settings['title3']; ?></b>
					</span>
				</h2>
				<p><?php echo $settings['description']; ?></p>
				<div class="effective_slider_btn">
					<a href="<?php echo esc_url($settings['button1_link']['url']); ?>" class="button-active"><?php echo $settings['button1_text']; ?></a>
					<a href="<?php echo esc_url($settings['button2_link']['url']); ?>"><?php echo $settings['button2_text']; ?></a>
				</div>
			</div>
		</div>
		
		<?php }elseif($settings['select_style']=='two'){ ?>
		
		<div id="intro-section" class="effective-area overlay-white">
		
                <div class="bubble-animate">
					<div class="circle small square1"></div>
					<div class="circle small square2"></div>
					<div class="circle small square3"></div>
					<div class="circle small square4"></div>
					<div class="circle small square5"></div>
					<div class="circle medium square1"></div>
					<div class="circle medium square2"></div>
					<div class="circle medium square3"></div>
					<div class="circle medium square4"></div>
					<div class="circle medium square5"></div>
					<div class="circle large square1"></div>
					<div class="circle large square2"></div>
					<div class="circle large square3"></div>
					<div class="circle large square4"></div>
				</div>
		
			<div class="effective-content text-center">
				<h5><?php echo $settings['subtitle']; ?></h5>
				<h2 class="cd-headline clip is-full-width">
					<span class="cd-words-wrapper">
						<b class="is-visible"><?php echo $settings['title1']; ?></b>
						<b><?php echo $settings['title2']; ?></b>
						<b><?php echo $settings['title3']; ?></b>
					</span>
				</h2>
				<p><?php echo $settings['description']; ?></p>
				<div class="effective_slider_btn">
					<a href="<?php echo esc_url($settings['button1_link']['url']); ?>" class="button-active"><?php echo $settings['button1_text']; ?></a>
					<a href="<?php echo esc_url($settings['button2_link']['url']); ?>"><?php echo $settings['button2_text']; ?></a>
				</div>
			</div>
		</div>
		
		<?php } ?>

		<?php

	}
}