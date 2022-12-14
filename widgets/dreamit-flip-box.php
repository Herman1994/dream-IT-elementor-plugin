<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;

if(!defined('ABSPATH')) exit;


class FlipBox extends Widget_Base{

	public function get_name(){
		return "flipbox";
	}
	
	public function get_title(){
		return "Flip Box";
	}
	
	public function get_icon(){
		return "eicon-flip-box";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

    protected function _register_controls(){

        $this->start_controls_section(
            'flip_box_front',
            [
                'label' => esc_html__( 'Front Part', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'front_icon_type',
                [
                    'label' => esc_html__( 'Icon Type', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'label_block' => false,
                    'default' => 'icon',
                    'options' => [
                        'none' => [
                            'title' => esc_html__( 'None', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-close',
                        ],
                        'icon' => [
                            'title' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-star',
                        ],
                        'image' => [
                            'title' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-image',
                        ],
                    ],
                    'toggle' => false,
                ]
            );

            $this->add_control(
                'front_icon',
                [
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::ICONS,
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_control(
                'front_image',
                [
                    'label' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition' => [
                        'front_icon_type' => 'image'
                    ]
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Image_Size::get_type(),
                [
                    'name' => 'front_image_thumbnail',
                    'default' => 'thumbnail',
                    'exclude' => [
                        'full',
                        'shop_catalog',
                        'shop_single',
                    ],
                    'condition' => [
                        'front_icon_type' => 'image'
                    ]
                ]
            );

            $this->add_control(
                'front_title',
                [
                    'label' => __( 'Title', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXT,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'default' => __('Front Title', 'dreamit-elementor-extension' ),
                    'separator' => 'before', 
                    'label_block' => true,
                    'placeholder' => __( 'Enter your title', 'dreamit-elementor-extension' ),
                ]
            );

            $this->add_control(
                'front_desc',
                [
                    'label' => __( 'Description', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'Enter your paragraph', 'dreamit-elementor-extension' ),
                    'default' => __( 'Front Description Here', 'dreamit-elementor-extension' ),
                ]
            );

            $this->add_control(
                'front_btn_text',
                [
                    'label' => esc_html__( 'Button Text', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => esc_html__( '', 'dreamit-elementor-extension' ),
                    'placeholder' => esc_html__( 'Type button text here', 'dreamit-elementor-extension' ),
                    'label_block' => false,
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'front_btn_link',
                [
                    'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::URL,
                    'label_block' => false,
                    'placeholder' => __( 'https://example.com/', 'dreamit-elementor-extension' ),
                    'dynamic' => [
                        'active' => true,
                    ],
                ]
            );

            $this->add_control(
                'front_btn_icon',
                [
                    'label' => __( 'Button Icon', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::ICON,              
                    'default' => '',            
                ]
            );

            $this->add_control(
                'front_btn_icon_position',
                [
                    'label' => esc_html__( 'Icon Position', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'label_block' => false,
                    'options' => [
                        'icon-before' => [
                            'title' => esc_html__( 'Before', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-left',
                        ],
                        'icon-after' => [
                            'title' => esc_html__( 'After', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-right',
                        ],
                    ],
                    'default' => 'icon-after',
                    'toggle' => false,
                    'condition' => [
                        'front_btn_icon!' => '',
                    ],
                ]
            ); 

            $this->add_control(
                'front_btn_icon_spacing',
                [
                    'label' => esc_html__( 'Icon Spacing', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 10
                    ],
                    'condition' => [
                        'front_btn_icon!' => '',
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn.icon-before i' => 'margin-right: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn.icon-after i' => 'margin-left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'flip_box_back',
            [
                'label' => esc_html__( 'Back Part', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'back_icon_type',
                [
                    'label' => esc_html__( 'Icon Type', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'label_block' => false,
                    'default' => 'icon',
                    'options' => [
                        'none' => [
                            'title' => esc_html__( 'None', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-close',
                        ],
                        'icon' => [
                            'title' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-star',
                        ],
                        'image' => [
                            'title' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-image',
                        ],
                    ],
                    'toggle' => false,
                ]
            );

            $this->add_control(
                'back_icon',
                [
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::ICONS,
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_control(
                'back_image',
                [
                    'label' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition' => [
                        'back_icon_type' => 'image'
                    ]
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Image_Size::get_type(),
                [
                    'name' => 'back_image_thumbnail',
                    'default' => 'thumbnail',
                    'exclude' => [
                        'full',
                        'shop_catalog',
                        'shop_single',
                    ],
                    'condition' => [
                        'back_icon_type' => 'image'
                    ]
                ]
            );

            $this->add_control(
                'back_title',
                [
                    'label' => __( 'Title', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXT,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'label_block' => true,
                    'default' => __('', 'dreamit-elementor-extension' ),
                    'placeholder' => __( 'Enter your title', 'dreamit-elementor-extension' ),
                    'separator' => 'before', 
                ]
            );

            $this->add_control(
                'back_desc',
                [
                    'label' => __( 'Description', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'default' => __('', 'dreamit-elementor-extension' ),
                ]
            );

            $this->add_control(
                'back_btn_text',
                [
                    'label' => esc_html__( 'Button Text', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => esc_html__('Back Btn', 'dreamit-elementor-extension' ),
                    'placeholder' => esc_html__( 'Type button text here', 'dreamit-elementor-extension' ),
                    'label_block' => false,
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'back_btn_link',
                [
                    'label' => esc_html__( 'Button Link', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::URL,
                    'label_block' => false,
                    'placeholder' => esc_html__( 'https://example.com/', 'dreamit-elementor-extension' ),
                    'dynamic' => [
                        'active' => true,
                    ],
                ]
            );

            $this->add_control(
                'back_btn_icon',
                [
                    'label' => esc_html__( 'Button Icon', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::ICON,             
                    'default' => '',           
                ]
            );

            $this->add_control(
                'back_btn_icon_position',
                [
                    'label' => esc_html__( 'Icon Position', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'label_block' => false,
                    'options' => [
                        'icon-before' => [
                            'title' => esc_html__( 'Before', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-left',
                        ],
                        'icon-after' => [
                            'title' => esc_html__( 'After', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-right',
                        ],
                    ],
                    'default' => 'icon-after',
                    'toggle' => false,
                    'condition' => [
                        'back_btn_icon!' => '',
                    ],
                ]
            ); 

            $this->add_control(
                'back_btn_icon_spacing',
                [
                    'label' => esc_html__( 'Icon Spacing', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 10
                    ],
                    'condition' => [
                        'back_btn_icon!' => '',
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn.icon-before i' => 'margin-right: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn.icon-after i' => 'margin-left: {{SIZE}}{{UNIT}};',
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
            'flip_box_style',
            [
                'label' => esc_html__( 'General', 'dreamit-elementor-extension' ),
                'tab'   => Controls_Manager::TAB_STYLE,
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
            $this->add_control(
                'flip_position',
                [
                    'label' => esc_html__( 'Flip Direction', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'default' => 'rs-flip-right',
                    'label_block' => false,
                    'options' => [
                        'rs-flip-right' => [
                            'title' => esc_html__( 'Left To Right', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-right',
                        ],
                        'rs-flip-up' => [
                            'title' => esc_html__( 'Bottom To Top', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-top',
                        ],
                        'rs-flip-down' => [
                            'title' => esc_html__( 'Top To Bottom', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-bottom',
                        ],
                        'rs-flip-left' => [
                            'title' => esc_html__( 'Right To Left', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-left',
                        ],
                    ],
                    'toggle' => false,
                ]
            );

            $this->add_responsive_control(
                'flip_box_height',
                [
                    'label' => esc_html__( 'Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 100,
                            'max' => 1000,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-inner .back-part, 
                        {{WRAPPER}}  .flip-box .flip-box-inner .front-part' => 'height: {{SIZE}}{{UNIT}};',
                    ],                
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'flip_box_front_style',
            [
                'label' => esc_html__( 'Front Part', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background',
                    'label' => __( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-inner .front-part',
                ]
            );
            
            $this->add_control(
                'front_background_overlay_heading',
                [
                    'label' => __( 'Background Overlay', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'front_background_overlay',
                    'label' => __( 'Background Overlay', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-inner .front-part .front-background-overlay',
                ]
            );
            $this->add_responsive_control(
                'flip_box_front_align',
                [
                    'label' => esc_html__( 'Alignment', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => esc_html__( 'Left', 'dreamit-elementor-extension' ),
                            'icon' => 'fa fa-align-left',
                        ],
                        'center' => [
                            'title' => esc_html__( 'Center', 'dreamit-elementor-extension' ),
                            'icon' => 'fa fa-align-center',
                        ],
                        'right' => [
                            'title' => esc_html__( 'Right', 'dreamit-elementor-extension' ),
                            'icon' => 'fa fa-align-right',
                        ],
                        'justify' => [
                            'title' => esc_html__( 'Justify', 'dreamit-elementor-extension' ),
                            'icon' => 'fa fa-align-justify',
                        ],
                    ],
                    'separator' => 'before',
                    'toggle' => true,
                    'selectors' => [
                        '{{WRAPPER}} .front-part' => 'text-align: {{VALUE}}'
                    ]
                ]
            );

            $this->add_responsive_control(
                'flip_box_front_align_items',
                [
                    'label' => esc_html__( 'Vertical Align', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'default' => 'center',
                    'options' => [
                        'start' => [
                            'title' => esc_html__( 'Top', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-top',
                        ],
                        'center' => [
                            'title' => esc_html__( 'Center', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-middle',
                        ],
                        'flex-end' => [
                            'title' => esc_html__( 'Bottom', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-bottom',
                        ],
                    ],
                    'toggle' => true,
                    'selectors' => [
                        '{{WRAPPER}} .front-part' => 'align-items: {{VALUE}}'
                    ]
                ]
            );

            $this->add_responsive_control(
                'front_part_padding',
                [
                    'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'front_part_border',
                    'selector' => '{{WRAPPER}} .front-part',
                ]
            );

            $this->add_control(
                'front_part_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'front_part_box_shadow',
                    'selector' => '{{WRAPPER}} .front-part',
                ]
            );

            $this->add_control(
                'front_part_icon_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_part_icon_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon',
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_responsive_control(
                'front_part_icon_padding',
                [
                    'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_responsive_control(
                'front_part_icon_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-icon-part' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'front_part_icon_width',
                [
                    'label' => esc_html__( 'Icon/Image Part Width', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 400,
                        ],
                        '%' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon,'
                        .'{{WRAPPER}} .back-icon-part .front-img' => 'width: {{SIZE}}{{UNIT}};',
                    ],            
                ]
            );

            $this->add_responsive_control(
                'front_part_icon_height',
                [
                    'label' => esc_html__( 'Icon/Image Part Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 400,
                        ],
                        '%' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon,'
                        .'{{WRAPPER}} .back-icon-part .front-img' => 'height: {{SIZE}}{{UNIT}};',
                    ],             
                ]
            ); 

            $this->add_responsive_control(
                'front_part_icon_line_height',
                [
                    'label' => esc_html__( 'Line/Image Part Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 400,
                        ],
                        '%' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon,'
                        .'{{WRAPPER}} .back-icon-part .front-img' => 'line-height: {{SIZE}}{{UNIT}};',
                    ],               
                ]
            );

            $this->add_control(
                'front_part_icon_color',
                [
                    'label' => esc_html__( 'Icon Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon i' => 'color: {{VALUE}};',
                    ],
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'front_part_icon_bg',
                    'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon i',
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'front_part_icon_border',
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon',
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_responsive_control(
                'front_part_icon_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'front_part_icon_box_shadow',
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-icon-part .front-icon',
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_control(
                'front_part_title_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_part_title_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-title-part .front-title',
                ]
            );

            $this->add_responsive_control(
                'front_part_title_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-title-part' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'front_part_title_color',
                [
                    'label' => esc_html__( 'Title Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-title-part .front-title' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'front_part_desc_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_part_desc_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-desc-part .front-desc',
                ]
            );

            $this->add_responsive_control(
                'front_part_desc_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-desc-part' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'front_part_desc_color',
                [
                    'label' => esc_html__( 'Description Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-desc-part .front-desc' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'front_part_btn',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Button', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_responsive_control(
                'front_part_btn_padding',
                [
                    'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_part_btn_typography',
                    'selector' => '{{WRAPPER}} .front-btn-part .front-btn',
                ]
            );                

            $this->add_control(
                'front_part_btn_color',
                [
                    'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'front_part_btn_bg',
                    'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'front_part_btn_border_color',
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn',
                ]
            );

            $this->add_responsive_control(
                'front_part_btn_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'front_part_btn_box_shadow',
                    'selector' => '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn',
                ]
            );

            $this->add_control(
                'front_part_btn_icon_translate',
                [
                    'label' => esc_html__( 'Icon Translate X', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'range' => [
                        'px' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn.icon-before i' => '-webkit-transform: translateX(calc(-1 * {{SIZE}}{{UNIT}})); transform: translateX(calc(-1 * {{SIZE}}{{UNIT}}));',
                        '{{WRAPPER}} .front-part .front-content-part .front-btn-part .front-btn.icon-after i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
                    ],
                ]
            );


        $this->end_controls_section(); 


// Back part style

        $this->start_controls_section(
            'flip_box_back_style',
            [
                'label' => esc_html__( 'Back Part', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'back_background',
                    'label' => __( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-inner .back-part',
                ]
            );
            $this->add_control(
                'back_background_overlay_heading',
                [
                    'label' => __( 'Background Overlay', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'back_background_overlay',
                    'label' => __( 'Background Overlay', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-inner .back-part .back-background-overlay',
                ]
            );

            $this->add_responsive_control(
                'flip_box_back_align',
                [
                    'label' => esc_html__( 'Alignment', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => esc_html__( 'Left', 'dreamit-elementor-extension' ),
                            'icon' => 'fa fa-align-left',
                        ],
                        'center' => [
                            'title' => esc_html__( 'Center', 'dreamit-elementor-extension' ),
                            'icon' => 'fa fa-align-center',
                        ],
                        'right' => [
                            'title' => esc_html__( 'Right', 'dreamit-elementor-extension' ),
                            'icon' => 'fa fa-align-right',
                        ],
                        'justify' => [
                            'title' => esc_html__( 'Justify', 'dreamit-elementor-extension' ),
                            'icon' => 'fa fa-align-justify',
                        ],
                    ],
                    'toggle' => true,
                    'selectors' => [
                        '{{WRAPPER}} .back-part' => 'text-align: {{VALUE}}'
                    ]
                ]
            );

            $this->add_responsive_control(
                'flip_box_back_align_items',
                [
                    'label' => esc_html__( 'Vertical Align', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'default' => 'center',
                    'options' => [
                        'start' => [
                            'title' => esc_html__( 'Top', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-top',
                        ],
                        'center' => [
                            'title' => esc_html__( 'Center', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-middle',
                        ],
                        'flex-end' => [
                            'title' => esc_html__( 'Bottom', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-bottom',
                        ],
                    ],
                    'toggle' => true,
                    'selectors' => [
                        '{{WRAPPER}} .back-part' => 'align-items: {{VALUE}}'
                    ]
                ]
            );

            $this->add_responsive_control(
                'back_part_padding',
                [
                    'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'back_part_border',
                    'selector' => '{{WRAPPER}} .back-part',
                ]
            );

            $this->add_control(
                'back_part_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'back_part_box_shadow',
                    'selector' => '{{WRAPPER}} .back-part',
                ]
            );

            $this->add_control(
                'back_part_icon_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_part_icon_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon',
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_responsive_control(
                'back_part_icon_padding',
                [
                    'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_responsive_control(
                'back_part_icon_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-icon-part' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'back_part_icon_width',
                [
                    'label' => esc_html__( 'Icon/Image Part Width', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 400,
                        ],
                        '%' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon,'
                        .'{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-img' => 'width: {{SIZE}}{{UNIT}};',
                    ],            
                ]
            );

            $this->add_responsive_control(
                'back_part_icon_height',
                [
                    'label' => esc_html__( 'Icon/Image Part Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 400,
                        ],
                        '%' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon,'
                        .'{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-img' => 'height: {{SIZE}}{{UNIT}};',
                    ],              
                ]
            ); 

            $this->add_responsive_control(
                'back_part_icon_line_height',
                [
                    'label' => esc_html__( 'Icon/Image Part Line Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 400,
                        ],
                        '%' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon,'
                        .'{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-img' => 'line-height: {{SIZE}}{{UNIT}};',
                    ],              
                ]
            );

            $this->add_control(
                'back_part_icon_color',
                [
                    'label' => esc_html__( 'Icon Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon' => 'color: {{VALUE}};',
                    ],
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'back_part_icon_bg',
                    'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon',
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'back_part_icon_border',
                    'selector' => '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon',
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_responsive_control(
                'back_part_icon_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'back_part_icon_box_shadow',
                    'selector' => '{{WRAPPER}} .back-part .back-content-part .back-icon-part .back-icon',
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_control(
                'back_part_title_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_part_title_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .back-part .back-content-part .back-title-part .back-title',
                ]
            );

            $this->add_responsive_control(
                'back_part_title_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-title-part' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'back_part_title_color',
                [
                    'label' => esc_html__( 'Title Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-title-part .back-title' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'back_part_desc_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_part_desc_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .back-part .back-content-part .back-desc-part .back-desc',
                ]
            );

            $this->add_responsive_control(
                'back_part_desc_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-desc-part' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'back_part_desc_color',
                [
                    'label' => esc_html__( 'Description Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-desc-part .back-desc' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'back_part_btn',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Button', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_responsive_control(
                'back_part_btn_padding',
                [
                    'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'back_part_btn_margin',
                [
                    'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_part_btn_typography',
                    'selector' => '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn',
                ]
            );

            $this->start_controls_tabs( 'back_part_btn_tabs' );

                $this->start_controls_tab(
                    'back_part_btn_tabs_normal',
                    [
                        'label' => esc_html__( 'Normal', 'dreamit-elementor-extension' ),
                    ]
                );

                    $this->add_control(
                        'back_part_btn_color',
                        [
                            'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
                            'type' => Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        \Elementor\Group_Control_Background::get_type(),
                        [
                            'name' => 'back_part_btn_bg',
                            'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn',
                        ]
                    );

                    $this->add_group_control(
                        \Elementor\Group_Control_Border::get_type(),
                        [
                            'name' => 'back_part_btn_border_color',
                            'selector' => '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn',
                        ]
                    );

                    $this->add_responsive_control(
                        'back_part_btn_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%' ],
                            'selectors' => [
                                '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        \Elementor\Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'back_part_btn_box_shadow',
                            'selector' => '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn',
                        ]
                    );

                    $this->add_control(
                        'back_part_btn_icon_translate',
                        [
                            'label' => esc_html__( 'Icon Translate X', 'dreamit-elementor-extension' ),
                            'type' => Controls_Manager::SLIDER,
                            'range' => [
                                'px' => [
                                    'min' => -100,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn.icon-before i' => '-webkit-transform: translateX(calc(-1 * {{SIZE}}{{UNIT}})); transform: translateX(calc(-1 * {{SIZE}}{{UNIT}}));',
                                '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn.icon-after i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    'back_part_btn_tabs_hover',
                    [
                        'label' => esc_html__( 'Hover', 'dreamit-elementor-extension' ),
                    ]
                );

                    $this->add_control(
                        'back_part_btn_hover_color',
                        [
                            'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
                            'type' => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        \Elementor\Group_Control_Background::get_type(),
                        [
                            'name' => 'back_part_btn_hover_bg',
                            'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn:hover',
                        ]
                    );

                    $this->add_group_control(
                        \Elementor\Group_Control_Border::get_type(),
                        [
                            'name' => 'back_part_btn_hover_border_color',
                            'selector' => '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn:hover',
                        ]
                    );

                    $this->add_responsive_control(
                        'back_part_btn_hover_border_radius',
                        [
                            'label' => esc_html__( 'Hover Border Radius', 'dreamit-elementor-extension' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%' ],
                            'selectors' => [
                                '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        \Elementor\Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'back_part_btn_hover_box_shadow',
                            'selector' => '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn:hover',
                        ]
                    );

                    $this->add_control(
                        'back_part_btn_hover_icon_translate',
                        [
                            'label' => esc_html__( 'Icon Translate X', 'dreamit-elementor-extension' ),
                            'type' => Controls_Manager::SLIDER,
                            'default' => [
                                'size' => 10
                            ],
                            'range' => [
                                'px' => [
                                    'min' => -100,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn.icon-before:hover i' => '-webkit-transform: translateX(calc(-1 * {{SIZE}}{{UNIT}})); transform: translateX(calc(-1 * {{SIZE}}{{UNIT}}));',
                                '{{WRAPPER}} .back-part .back-content-part .back-btn-part .back-btn.icon-after:hover i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
                            ],
                        ]
                    );

                $this->end_controls_tab();

            $this->end_controls_tab();

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        
        
        ?>
            

        <?php if($settings['select_style']=='one'){ ?>

        <div class="flip-box">
            <div class="flip-box-inner <?php echo esc_attr($settings['flip_position']);?>">
                <div class="flip-box-wrap">
                    <div class="front-part">
                        <div class="front-background-overlay"></div>
                        <div class="front-content-part">
                            <?php if( !empty($settings['front_icon']) || !empty($settings['front_image']['url'])){?>
                                <div class="front-icon-part">
                                    <?php if(!empty($settings['front_icon'])) : ?>
                                        <span class="front-icon"><i class="<?php echo esc_attr($settings['front_icon']['value']);?>"></i></span>
                                    <?php endif; ?>
                                    <?php if(!empty($settings['front_image'])) : ?>
                                        <span class="front-img">
                                            <img src="<?php echo $settings['front_image']['url']; ?>" alt="">
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php }?>


                            <?php if(!empty($settings['front_title'])) { ?>
                                <div class="front-title-part">
                                    <h2 class="front-title"><?php echo esc_attr($settings['front_title']);?></h2>                                
                                </div>
                            <?php } ?>

                            <?php if(!empty($settings['front_desc'])) : ?>
                                <div class="front-desc-part">
                                    <p class="front-desc"><?php echo esc_attr($settings['front_desc']);?></p>
                                </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['front_btn_text'])) : ?>
                                <div class="front-btn-part">
                                    <a class="front-btn <?php echo esc_attr($settings['front_btn_icon_position']);?>" href="<?php echo esc_url($settings['front_btn_link']['url']);?>">
                                        <span class="front-btn-txt"><?php echo esc_attr($settings['front_btn_text']);?></span>
                                        <?php if(!empty($settings['front_btn_icon'])) : ?>
                                            <i class="<?php echo esc_attr($settings['front_btn_icon']);?>"></i>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div><!-- .front-part -->

                    <div class="back-part">
                        <div class="back-background-overlay"></div>
                        <div class="back-content-part">
                            <?php if( !empty($settings['back_icon']) || !empty($settings['back_image']['url'])){?>
                                <div class="back-icon-part">
                                    <?php if(!empty($settings['back_icon'])) : ?>
                                        <span class="back-icon"><i class="<?php echo esc_attr($settings['back_icon']['value']);?>"></i></span>
                                    <?php endif; ?>
                                    <?php if(!empty($settings['back_image'])) : ?>
                                        <span class="back-img">
                                            <img src="<?php echo $settings['back_image']['url']; ?>" alt="">
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php }?>

                            <?php if(!empty($settings['back_title'])) { ?>
                                <div class="back-title-part">
                                    
                                    <h2 class="back-title"><?php echo esc_attr($settings['back_title']);?></h2>
                                    
                                </div>
                            <?php } ?>

                            <?php if(!empty($settings['back_desc'])) : ?>
                                <div class="back-desc-part">
                                    <p class="back-desc"><?php echo esc_attr($settings['back_desc']);?></p>
                                </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['back_btn_text'])) : ?>
                                <div class="back-btn-part">
                                    <a class="back-btn <?php echo esc_attr( $settings['back_btn_icon_position'] );?>" href="<?php echo esc_url($settings['back_btn_link']['url']);?>">
                                        <span class="back-btn-txt"><?php echo esc_attr($settings['back_btn_text']);?></span>
                                        <?php if(!empty($settings['back_btn_icon'])) : ?>
                                            <i class="<?php echo esc_attr($settings['back_btn_icon']);?>"></i>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                    </div><!-- .back-part -->
                </div><!-- .flip-box-wrap -->
            </div><!-- .flip-box-inner -->
        </div><!-- .flip-box -->

        <?php }elseif($settings['select_style']=='two'){ ?>


        <div class="flip-box style-two">
            <div class="flip-box-inner <?php echo esc_attr($settings['flip_position']);?>">
                <div class="flip-box-wrap">
                    <div class="front-part">
                        <div class="front-content-part">
                            <?php if( !empty($settings['front_icon']) || !empty($settings['front_image']['url'])){?>
                                <div class="front-icon-part">
                                    <?php if(!empty($settings['front_icon'])) : ?>
                                        <span class="front-icon"><i class="<?php echo esc_attr($settings['front_icon']['value']);?>"></i></span>
                                    <?php endif; ?>
                                    <?php if(!empty($settings['front_image'])) : ?>
                                        <span class="front-img">
                                            <img src="<?php echo $settings['front_image']['url']; ?>" alt="">
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php }?>

                            <?php if(!empty($settings['front_title'])) { ?>
                                <div class="front-title-part">
                                    <h2 class="front-title"><?php echo esc_attr($settings['front_title']);?></h2>                                
                                </div>
                            <?php } ?>

                            <?php if(!empty($settings['front_desc'])) : ?>
                                <div class="front-desc-part">
                                    <p class="front-desc"><?php echo esc_attr($settings['front_desc']);?></p>
                                </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['front_btn_text'])) : ?>
                                <div class="front-btn-part">
                                    <a class="front-btn <?php echo esc_attr($settings['front_btn_icon_position']);?>" href="<?php echo esc_url($settings['front_btn_link']['url']);?>">
                                        <span class="front-btn-txt"><?php echo esc_attr($settings['front_btn_text']);?></span>
                                        <?php if(!empty($settings['front_btn_icon'])) : ?>
                                            <i class="<?php echo esc_attr($settings['front_btn_icon']);?>"></i>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div><!-- .front-part -->

                    <div class="back-part">
                        <div class="back-background-overlay"></div>
                        <div class="back-content-part">
                            <?php if( !empty($settings['back_icon']) || !empty($settings['back_image']['url'])){?>
                                <div class="back-icon-part">
                                    <?php if(!empty($settings['back_icon'])) : ?>
                                        <span class="back-icon"><i class="<?php echo esc_attr($settings['back_icon']['value']);?>"></i></span>
                                    <?php endif; ?>
                                    <?php if(!empty($settings['back_image'])) : ?>
                                        <span class="back-img">
                                            <img src="<?php echo $settings['back_image']['url']; ?>" alt="">
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php }?>

                            <?php if(!empty($settings['back_title'])) { ?>
                                <div class="back-title-part">
                                    
                                    <h2 class="back-title"><?php echo esc_attr($settings['back_title']);?></h2>
                                    
                                </div>
                            <?php } ?>

                            <?php if(!empty($settings['back_desc'])) : ?>
                                <div class="back-desc-part">
                                    <p class="back-desc"><?php echo esc_attr($settings['back_desc']);?></p>
                                </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['back_btn_text'])) : ?>
                                <div class="back-btn-part">
                                    <a class="back-btn <?php echo esc_attr( $settings['back_btn_icon_position'] );?>" href="<?php echo esc_url($settings['back_btn_link']['url']);?>">
                                        <span class="back-btn-txt"><?php echo esc_attr($settings['back_btn_text']);?></span>
                                        <?php if(!empty($settings['back_btn_icon'])) : ?>
                                            <i class="<?php echo esc_attr($settings['back_btn_icon']);?>"></i>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                    </div><!-- .back-part -->
                </div><!-- .flip-box-wrap -->
            </div><!-- .flip-box-inner -->
        </div><!-- .flip-box -->

        <?php } ?>


        <?php
    }
}