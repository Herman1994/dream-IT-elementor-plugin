<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if(!defined('ABSPATH')) exit;


class CircleProgress extends Widget_Base{

	public function get_name(){
		return "circleprogress";
	}
	
	public function get_title(){
		return "Circle Progress";
	}
	
	public function get_icon(){
		return "eicon-skill-bar";
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
    			'title',
    			[
    				'label' => __( 'Title', 'dreamit-elementor-extension' ),
    				'type' => Controls_Manager::TEXT,
    			]
    		);
    		$this->add_control(
    			'progress',
    			[
    				'label' => __( 'Progress', 'dreamit-elementor-extension' ),
    				'type' => Controls_Manager::SLIDER,
    				'size_units' => [ '%' ],
    				'range' => [
    					'%' => [
    						'min' => 0,
    						'max' => 100,
    					],
    				],
    				'default' => [
    					'unit' => '%',
    					'size' => 50,
    				],
    			]
    		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'progress_color',
			[
				'label' => __( 'Progress Color', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progress .progress-bar' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .progress .progress-value' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
		

	}
	
	protected function render() {
	    
	    $settings = $this->get_settings_for_display();
	    
	    ?>
	    
	    
		<div class="circle-progress">
			<div class="progress" data-percentage="<?php echo $settings['progress']['size']; ?>">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div>
						<?php echo $settings['progress']['size']; ?>
						<span>%</span>
					</div>
				</div>
			</div>
			<h2><?php echo $settings['title']; ?></h2>
		</div>
	    
	    
	    
	    <?php
	}

}