<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;


class Tab2 extends Widget_Base{

	public function get_name(){
		return "tab2";
	}
	
	public function get_title(){
		return "Tab 2";
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
    				'label' => __( 'Link', 'dreamit-elementor-extension' ),
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
    				'label' => __( 'Link', 'dreamit-elementor-extension' ),
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
				'tab3_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab3_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
    			'tab3_button_link',
    			[
    				'label' => __( 'Link', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::URL,
    				'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
    				'show_external' => true,
    			]
    		);

		$this->end_controls_section();

		$this->start_controls_section(
			'tab4_section',
			[
				'label' => __( 'Tab 4', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab4_text',
				[
					'label' => __( 'Tab Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default Text', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
				]
			);

			$this->add_control(
				'tab4_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default title', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your title here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab4_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab4_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
				]
			);
    		$this->add_control(
    			'tab4_button_link',
    			[
    				'label' => __( 'Link', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::URL,
    				'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
    				'show_external' => true,
    			]
    		);
		$this->end_controls_section();

    }

    protected function render() {

    	$settings = $this->get_settings_for_display();

    	?>
    	<div class="tab style-two">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab-1"><?php echo $settings['tab1_text']; ?></a></li>
					<li><a href="#tab-2"><?php echo $settings['tab2_text']; ?></a></li>
					<li><a href="#tab-3"><?php echo $settings['tab3_text']; ?></a></li>
					<li><a href="#tab-4"><?php echo $settings['tab4_text']; ?></a></li>
				</ul>
					<div class="tab-content">
						<div id="tab-1" class="tab-pane active">

							<div class="row">
								<p><?php echo $settings['tab1_description']; ?></p>
								<?php if( !empty($settings['tab1_button_text']) ){ ?>
								<div class="button">
									<a href="<?php echo esc_url($settings['tab1_button_link']['url']); ?>"><?php echo $settings['tab1_button_text']; ?></a>
								</div>
								<?php } ?>
							</div>

						</div>
						<div id="tab-2" class="tab-pane">
							
							<div class="row">
								<p><?php echo $settings['tab2_description']; ?></p>
								<?php if( !empty($settings['tab2_button_text']) ){ ?>
								<div class="button">
									<a href="<?php echo esc_url($settings['tab2_button_link']['url']); ?>"><?php echo $settings['tab2_button_text']; ?></a>
								</div>
								<?php } ?>
							</div>

						</div>
						<div id="tab-3" class="tab-pane">

							<div class="row">
								<p><?php echo $settings['tab3_description']; ?></p>
								<?php if( !empty($settings['tab3_button_text']) ){ ?>
								<div class="button">
									<a href="<?php echo esc_url($settings['tab3_button_link']['url']); ?>"><?php echo $settings['tab3_button_text']; ?></a>
								</div>
								<?php } ?>
							</div>

						</div><!-- .tab-pane -->
						<div id="tab-4" class="tab-pane">

							<div class="row">
								<p><?php echo $settings['tab4_description']; ?></p>
								<?php if( !empty($settings['tab4_button_text']) ){ ?>
								<div class="button">
									<a href="<?php echo esc_url($settings['tab4_button_link']['url']); ?>"><?php echo $settings['tab4_button_text']; ?></a>
								</div>
								<?php } ?>
							</div>

						</div><!-- .tab-pane -->
					</div>
		</div>
    	<?php

    }
}