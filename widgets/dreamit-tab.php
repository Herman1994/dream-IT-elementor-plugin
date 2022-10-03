<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;


class Tab extends Widget_Base{

	public function get_name(){
		return "tab";
	}
	
	public function get_title(){
		return "Tab";
	}
	
	public function get_icon(){
		return "eicon-tabs";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

    protected function _register_controls(){

		$this->start_controls_section(
			'tab1_section',
			[
				'label' => __( 'Tab 1', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab1_text',
				[
					'label' => __( 'Tab Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default Text', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab1_image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'tab1_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default title', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your title here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab1_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab1_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
				]
			);
    		$this->add_control(
    			'tab1_button_link',
    			[
    				'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::URL,
    				'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
    				'show_external' => true,
    			]
    		);

		$this->end_controls_section();

		$this->start_controls_section(
			'tab2_section',
			[
				'label' => __( 'Tab 2', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab2_text',
				[
					'label' => __( 'Tab Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default Text', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab2_image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'tab2_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default title', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your title here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab2_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab2_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
				]
			);
    		$this->add_control(
    			'tab2_button_link',
    			[
    				'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::URL,
    				'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
    				'show_external' => true,
    			]
    		);

		$this->end_controls_section();

		$this->start_controls_section(
			'tab3_section',
			[
				'label' => __( 'Tab 3', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab3_text',
				[
					'label' => __( 'Tab Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default Text', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
				]
			);

			$this->add_control(
				'more_options',
				[
					'label' => __( 'Post Brand from Dashboard for Tab 3', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			
		$this->end_controls_section();

/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'tab',
			[
				'label' => __( 'Tab', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'style_tabs'
		);
    		$this->start_controls_tab(
    			'style_normal_tab',
    			[
    				'label' => __( 'Normal', 'dreamit-elementor-extension' ),
    			]
    		);
        		$this->add_control(
        			'tab-background',
        			[
        				'label' => __( 'Tab Background', 'dreamit-elementor-extension' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .tab .nav-tabs li' => 'background: {{VALUE}}',
        				],
        			]
        		);
        		$this->add_control(
        			'tab_text_color',
        			[
        				'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .tab .nav-tabs li a' => 'color: {{VALUE}}',
        				],
        			]
        		);
    		$this->end_controls_tab();
    		$this->start_controls_tab(
    			'style_active_tab',
    			[
    				'label' => __( 'Active', 'dreamit-elementor-extension' ),
    			]
    		);
        		$this->add_control(
        			'active-tab-background',
        			[
        				'label' => __( 'Active Tab Background', 'dreamit-elementor-extension' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .tab .nav-tabs li.active' => 'background: {{VALUE}}',
        				],
        			]
        		);
        		$this->add_control(
        			'active_tab_text_color',
        			[
        				'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .tab .nav-tabs li.active a' => 'color: {{VALUE}}',
        				],
        			]
        		);
    		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		
		$this->start_controls_section(
			'title',
			[
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
    		$this->add_control(
    			'title_color',
    			[
    				'label' => __( 'Title Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .tab .tab-content h2' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_group_control(
    			\Elementor\Group_Control_Typography::get_type(),
    			[
    				'name' => 'title_typography',
    				'label' => __( 'Typography', 'dreamit-elementor-extension' ),
    				'selector' => '{{WRAPPER}} .tab .tab-content h2',
    			]
    		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'description',
			[
				'label' => __( 'Description', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
    		$this->add_control(
    			'description_color',
    			[
    				'label' => __( 'Description Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .tab .tab-content p' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_group_control(
    			\Elementor\Group_Control_Typography::get_type(),
    			[
    				'name' => 'description_typography',
    				'label' => __( 'Typography', 'dreamit-elementor-extension' ),
    				'selector' => '{{WRAPPER}} .tab .tab-content p',
    			]
    		);
		$this->end_controls_section();
		
    }

    protected function render() {

    	$settings = $this->get_settings_for_display();

    	?>
    	
    	
    	<div class="tab">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab-1"><?php echo $settings['tab1_text']; ?></a></li>
					<li><a href="#tab-2"><?php echo $settings['tab2_text']; ?></a></li>
					<li><a href="#tab-3"><?php echo $settings['tab3_text']; ?></a></li>
				</ul>
					<div class="tab-content">
						<div id="tab-1" class="tab-pane active">

							<div class="row">
								<div class="col-md-6">
									<img src="<?php echo $settings['tab1_image']['url']; ?>" alt="">
								</div>
								<div class="col-md-6">
									<h2><?php echo $settings['tab1_title']; ?></h2>
									<p><?php echo $settings['tab1_description']; ?></p>
									<div class="button">
										<a href="<?php echo esc_url($settings['tab1_button_link']['url']); ?>"><?php echo $settings['tab1_button_text']; ?></a>
									</div>
								</div>
							</div>

						</div>
						<div id="tab-2" class="tab-pane">
							
							<div class="row">
								<div class="col-md-6">
									<img src="<?php echo $settings['tab2_image']['url']; ?>" alt="">
								</div>
								<div class="col-md-6">
									<h2><?php echo $settings['tab2_title']; ?></h2>
									<p><?php echo $settings['tab2_description']; ?></p>
									<div class="button">
										<a href="<?php echo esc_url($settings['tab2_button_link']['url']); ?>"><?php echo $settings['tab2_button_text']; ?></a>
									</div>
								</div>
							</div>

						</div>
						<div id="tab-3" class="tab-pane">

							<div class="blog_wrap brand_carousel owl-carousel curosel-style">
								<?php $the_query = new \WP_Query( array( 'post_type' => 'em_brand' ) ); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<!-- single blog -->
									<div class="col-md-12 col-xs-12 col-sm-12" >
										<div class="single_brand">
										
											<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
												<div class="itsoft-single-brand ">					
													
													<!-- BLOG THUMB -->
													<?php if(has_post_thumbnail()){?>
														<div class="brand-thumb ">
															<?php the_post_thumbnail();?>
														</div>									
													<?php } ?>
																
												</div>
											</div> <!--  END SINGLE BLOG -->
				
										</div>
									
									</div>
								<?php endwhile; ?>	
								<?php wp_reset_query(); ?>
							</div>

						</div><!-- .tab-pane -->
					</div>
		</div>
		
		
    	<?php

    }
}