<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Utils;
use Elementor\Group_Control_Image_Size;
use Elementor\Repeater;
use Elementor\Group_Control_Box_Shadow;

if(!defined('ABSPATH')) exit;


class Team extends Widget_Base{

	public function get_name(){
		return "team";
	}
	
	public function get_title(){
		return "Team";
	}
	
	public function get_icon(){
		return "eicon-person";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function _register_controls() {




		//$category_dropdown = array( '0' => __('Select Category', 'dreamit-elementor-extension' ) );	

		$category_dropdown[0] = 'Select Category';
		
		$terms  = get_terms( array( 'taxonomy' => "team-category", 'fields' => 'id=>name' ) );		
		foreach ( $terms as $id => $name ) {
			$category_dropdown[$id] = $name;
		}    
		

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'team_grid_style',
			[
				'label'   => __( 'Select Style', 'dreamit-elementor-extension' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style1',				
				'options' => [
					'style1' => esc_html__('Style 1', 'dreamit-elementor-extension'),
					'style2' => esc_html__('Style 2', 'dreamit-elementor-extension'),
					'style3' => esc_html__('Style 3', 'dreamit-elementor-extension'),
					'style4' => esc_html__('Style 4', 'dreamit-elementor-extension'),
					'style5' => esc_html__('Style 5', 'dreamit-elementor-extension'),
					'style6' => esc_html__('Style 6', 'dreamit-elementor-extension'),
					'style7' => esc_html__('Style 7', 'dreamit-elementor-extension'),
				],
				'separator' => 'before',										
			]
		);


		$this->add_control(
			'team_category',
			[
				'label'   => esc_html__( 'Category', 'dreamit-elementor-extension' ),
				'type'    => Controls_Manager::SELECT2,	
				'default' => 0,			
				'options' => [		
						
				]+ $category_dropdown,
				'multiple' => true,	
				'separator' => 'before',
			]

		);


		$this->add_control(
			'per_page',
			[
				'label' => esc_html__( 'Team Show Per Page', 'dreamit-elementor-extension' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'example 3', 'dreamit-elementor-extension' ),
				'separator' => 'before',
			]
		);
	
		$this->add_control(
			'team_columns',
			[
				'label'   => esc_html__( 'Columns', 'dreamit-elementor-extension' ),
				'type'    => Controls_Manager::SELECT,	
				'default' => 4,			
				'options' => [
					'6' => esc_html__( '2 Column', 'dreamit-elementor-extension' ),
					'4' => esc_html__( '3 Column', 'dreamit-elementor-extension' ),
					'3' => esc_html__( '4 Column', 'dreamit-elementor-extension' ),
					'2' => esc_html__( '6 Column', 'dreamit-elementor-extension' ),
					'12' => esc_html__( '1 Column', 'dreamit-elementor-extension' ),					
				],
				'separator' => 'before',
							
			]
		);

		$this->add_control(
			'memeber_image',
			[
				'label' => esc_html__( 'Member Image', 'dreamit-elementor-extension' ),
				'type'  => Controls_Manager::MEDIA,
				
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'large',
                'separator' => 'before',
                'exclude' => [
                    'custom'
                ],
                'separator' => 'before',
            ]
        ); 


          $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Name', 'dreamit-elementor-extension' ),                
                'type' => Controls_Manager::TEXT,
                'default' => 'Elements Name',
                'placeholder' => esc_html__( 'Type Member Name', 'dreamit-elementor-extension' ),
                'separator' => 'before',
			]

        );

        $this->add_control(
            'designation',
            [
                'label' => __( 'Designation', 'dreamit-elementor-extension' ),               
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Web Developer', 'dreamit-elementor-extension' ),
                'separator' => 'before',
                'placeholder' => __( 'Type Member Designation', 'dreamit-elementor-extension' ),
            ]
        );
        $this->add_control(
            'phone',
            [
                'label' => __( 'Phone', 'dreamit-elementor-extension' ),               
                'type' => Controls_Manager::TEXT,                
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'email',
            [
                'label' => __( 'Email Address', 'dreamit-elementor-extension' ),                
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter Email Address', 'dreamit-elementor-extension' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'bio',
            [
                'label' => __( 'Short Bio', 'dreamit-elementor-extension' ),                
                'type' => Controls_Manager::TEXTAREA,
                'placeholder' => __( '', 'dreamit-elementor-extension' ),
                'rows' => 5,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'popup_description',
            [
                'label' => __( 'Description', 'dreamit-elementor-extension' ),                
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ???Content here.',
                'placeholder' => __( '', 'dreamit-elementor-extension' ),
                'rows' => 10,
                'separator' => 'before',
            ]
        );
 		

        $this->add_control(
			'team_grid_popup',
			[
				'label'   => esc_html__( 'Show Popup', 'dreamit-elementor-extension' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'popup',				
				'options' => [
					'popup'   => 'Popup Style',
					'default' => 'Default Style'				
				],
				'separator' => 'before',									
			]
		);   


        $this->end_controls_section();

        $this->start_controls_section(
            '_section_social',
            [
                'label' => __( 'Social Profiles', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


 		$repeater = new Repeater();
 		
 		$repeater->add_control(
 		    'link',
 		    [
 		        'label' => esc_html__('Enter Link', 'dreamit-elementor-extension'),
 		        'type' => Controls_Manager::URL,                
 		    ]
 		);


 		$repeater->add_control(
 		    'social_profile',
 		    [
 		        'label' => esc_html__('Select Social Profile Name', 'dreamit-elementor-extension'),
 		        'type' => Controls_Manager::ICON, 		       
 		        'label_block' => true,
 		        'separator'   => 'before',
 		    ]
 		);


 		$this->add_control(
 		    'social_icon_list',
 		    [
 		        'show_label' => false,
 		        'type' => Controls_Manager::REPEATER,
 		        'fields' => $repeater->get_controls(),
 		        'title_field' => '{{{ social_profile }}}',
 		        'default' => [
                    [
                        'link' => '#',
                        'social_profile' => 'fa fa-facebook',
                    ],
                    [
                        'link' => '#',
                        'social_profile' => 'fa fa-twitter',
                    ],
                    [
                        'link' => '#',
                        'social_profile' => 'fa fa-linkedin',
                    ],                  
                ],
 		    ]
 		);



        $this->add_control(
			'image_spacing_custom',
			[
				'label'      => esc_html__( 'Item Bottom Gap', 'dreamit-elementor-extension' ),
				'type'       => Controls_Manager::SLIDER,
				'show_label' => true,
				'separator'  => 'before',
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
					'size' => 20,
				],				

				'selectors' => [
                    '{{WRAPPER}} .team-item-wrap' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .team-inner-wrap' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
			]
		);
				
		$this->end_controls_section();

		$this->start_controls_section(
			'section_slider_style',
			[
				'label' => esc_html__( 'Team Style', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Title Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style1 .team-item .team-content h3.team-name a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style6 .team-item .team-content h3.team-name a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style2 .team-item-wrap .team-img .team-content .team-name a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style3 .team-img .team-img-sec .team-content .team-name a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style4 .team-item .team-content .team-name a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap .team-content .member-desc .team-name a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-member-content h2' => 'color: {{VALUE}};',

                ],                
            ]
        );



        $this->add_control(
            'title_color_hover',
            [
                'label' => esc_html__( 'Title Hover Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style1 .team-item .team-content h3.team-name a:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style6 .team-item .team-content h3.team-name a:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style2 .team-item-wrap .team-img .team-content .team-name a:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style3 .team-img .team-img-sec .team-content .team-name a:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style4 .team-item .team-content .team-name a:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap:hover .team-content .member-desc .team-name a:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-member-area.team-style-two .team-member-content h2:hover' => 'color: {{VALUE}};',
                ],                
            ]

            
        );


        $this->add_control(
            'designation_color',
            [
                'label' => esc_html__( 'Designation Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-content .team-title' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style4 .team-item .team-content .team-title' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-member-content h5' => 'color: {{VALUE}};',
                ],                
            ]
        );


        $this->add_control(
            'content_hover_bg',
            [
                'label' => esc_html__( 'Content Hover Background', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                	'team_grid_style' => 'style5',
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap:hover .team-content' => 'background: {{VALUE}};',

                ],                
            ]
        );


        $this->add_control(
            'content_hover_text_color',
            [
                'label' => esc_html__( 'Content Hover Text Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                	'team_grid_style' => 'style5',
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap:hover .team-content .member-desc .team-name a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap:hover .team-content .member-desc .team-title' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap:hover .team-content .social-icons a i' => 'color: {{VALUE}};',

                ],                
            ]
        );


        $this->add_control(
            'content_color',
            [
                'label' => esc_html__( 'Content Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-item .team-content .team-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style3 .team-img .team-img-sec .team-content' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style4 .team-item .team-content .team-text' => 'color: {{VALUE}};',

                ],                
            ]
        );


        $this->add_control(
            'content_top_border_color',
            [
                'label' => esc_html__( 'Content Top Border Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                	'team_grid_style' => 'style4',
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style4 .team-item .team-content .team-text::before' => 'background: {{VALUE}};',

                ],                
            ]
        );


        $this->add_control(
            'content_bottom_border_color',
            [
                'label' => esc_html__( 'Content Bottom Border Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                	'team_grid_style' => 'style5',
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap .team-content::before' => 'background: {{VALUE}};',

                ],                
            ]
        );


        $this->add_control(
            'image_overlay',
            [
                'label' => esc_html__( 'Image Overlay', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                	'team_grid_style' => 'style3',
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style3 .team-img .team-img-sec::before' => 'background: {{VALUE}};',

                ],                
            ]
        );


        $this->add_control(
            'image_corner_border_color',
            [
                'label' => esc_html__( 'Image Corner Border Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                	'team_grid_style' => 'style3',
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style3 .team-img::before' => 'border-bottom-color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style3 .team-img::after' => 'border-top-color: {{VALUE}};',

                ],                
            ]
        );


        $this->add_control(
            'icon_section_bg',
            [
                'label' => esc_html__( 'Icon Section Background', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                	'team_grid_style' => 'style1',
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-grid-style1 .team-item .image-wrap .social-icons1' => 'background: {{VALUE}};',
                ],
                'separator' => 'before',                
            ]
        );
		

        $this->add_control(
			'icon_font_size',
			[
				'label' => esc_html__( 'Icon Font Size', 'dreamit-elementor-extension' ),
				'type' => Controls_Manager::SLIDER,
				'show_label' => true,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
					'size' => 15,
				],				

				'selectors' => [
                     '{{WRAPPER}} .social-icons1 a i' => 'font-size: {{SIZE}}{{UNIT}}',
                     '{{WRAPPER}} .team-social a i' => 'font-size: {{SIZE}}{{UNIT}}',
                     '{{WRAPPER}} .team-social a i' => 'font-size: {{SIZE}}{{UNIT}}',
                ],
                'separator' => 'before',
			]
		);


        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons1 a i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-social a i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style4 .team-item .team-content .social-icons a i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap .team-content .social-icons a i' => 'color: {{VALUE}};',
                ],
                'separator' => 'before',                
            ]
        );

        $this->add_control(
            'icon_color_hover',
            [
                'label' => esc_html__( 'Icon Hover Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons1 a i:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-social a i:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style4 .team-item .team-content .social-icons a:hover i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-grid-style5 .team-inner-wrap .team-content .social-icons a:hover i' => 'color: {{VALUE}};',
                ],
                'separator' => 'before',                
            ]

            
        );

        $this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => __( 'Box Shadow', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .team-content',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'plugin-domain' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .team-content',
				
			]
		);

		$this->end_controls_section();



		//Popup Style Setting
		$this->start_controls_section(
			'section_popup_style',
			[
				'label' => esc_html__( 'Popup Style', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'team_grid_popup' => 'popup',
				]
			]
		);

		$this->add_control(
            'popup_title_color',
            [
                'label' => esc_html__( 'Title Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,                              
            ]
        );


        $this->add_control(
            'popup_designation_color',
            [
                'label' => __( 'Designation Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,              
            ]
        );

        $this->add_control(
            'popup_content_color',
            [
                'label' => __( 'Content Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,              
            ]
        );	

        $this->add_control(
            'popup_phn_email_color',
            [
                'label' => esc_html__( 'Phone and Email Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,              
            ]
        );		

        $this->add_control(
            'popup_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'separator' => 'before',                
            ]
        );

        $this->add_control(
            'popup_icon_bg_color',
            [
                'label' => esc_html__( 'Icon Background Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'separator' => 'before',                
            ]
            
        );

        $this->add_control(
            'popup_background',
            [
                'label' => esc_html__( 'Background Color', 'dreamit-elementor-extension' ),
                'type' => Controls_Manager::COLOR,
                'separator' => 'before',                
            ]
            
        );
		$this->end_controls_section();


	}




	protected function render() {

		$settings = $this->get_settings_for_display(); 

		$popup_title_color = !empty( $settings['popup_title_color']) ? 'style="color: '.$settings['popup_title_color'].'"' : '';
		$popup_designation_color = !empty( $settings['popup_designation_color']) ? 'style="color: '.$settings['popup_designation_color'].'"' : '';
		$popup_content_color = !empty( $settings['popup_content_color']) ? 'style="color: '.$settings['popup_content_color'].'"' : '';
		$popup_phn_email_color = !empty( $settings['popup_phn_email_color']) ? 'style="color: '.$settings['popup_phn_email_color'].'"' : '';
		$popup_background = !empty( $settings['popup_background']) ? 'style="background: '.$settings['popup_background'].'"' : '';

		//Icon Style
		$icon_style='';
		if(!empty($settings['popup_icon_color']) && empty($settings['popup_icon_bg_color'])){
			$icon_style = 'style="color: '.$settings['popup_icon_color'].'"';				
		}
		if(!empty($settings['popup_icon_bg_color'])){
			$icon_style = ($settings['popup_icon_bg_color']) ? ' style="background: '.$settings['popup_icon_bg_color'].'"' : '';
		}

		if(!empty($settings['popup_icon_color']) && !empty($settings['popup_icon_bg_color'])){
			$icon_style = 'style="background: '.$settings['popup_icon_bg_color'].'; color: '.$settings['popup_icon_color'].'"';				
		}
		
		?>


            <?php if( $settings['team_grid_style'] == 'style1' || $settings['team_grid_style'] == 'style2' || $settings['team_grid_style'] == 'style3' || $settings['team_grid_style'] == 'style4' || $settings['team_grid_style'] == 'style5' || $settings['team_grid_style'] == 'style7' ){ ?>

			<div class="rs-team-grid rs-team team-grid-<?php echo esc_html($settings['team_grid_style']);?> <?php echo esc_html($settings['team_grid_popup']);?> rsaddon_lite_box">
				<?php 
					$unique = rand(2012,3554120);
				?>
				<div class="team-item">
					<div class="team-inner-wrap">
						<div class="image-wrap">
							<a class="pointer-events" href="#rs_popupBox_<?php echo esc_attr($unique);?>" data-effect="mfp-zoom-in">
								<?php if ( $settings['memeber_image']['url'] ) : ?>
			                       <img src="<?php echo esc_url($settings['memeber_image']['url']);?>"  alt="<?php echo esc_url($settings['memeber_image']['url']);?>" />
			                    <?php endif; ?>
							</a>

							<?php if('style1' == $settings['team_grid_style'] || 'style5' == $settings['team_grid_style'] || 'style7' == $settings['team_grid_style'] ){ ?>
							<div class="social-icons1">
								<?php foreach ( $settings['social_icon_list'] as $index => $item ) :

									$target       = !empty($item['link']['is_external']) ? 'target=_blank' : '';                    
				            	?>
				            								
										<a href="<?php echo esc_url($item['link']['url']);?>"  <?php echo wp_kses_post($target);?> class="social-icon">
											<i class="<?php echo esc_attr($item['social_profile']); ?>"></i>
										</a>			
							        
							   <?php  endforeach; ?>   
						   </div> 
							<?php } ?>
						</div>

						<div class="team-content">
							<div class="member-desc">								
								<?php if($settings['title']):?>
						       		<h3 class="team-name"><a class="pointer-events" href="#rs_popupBox_<?php echo esc_attr($unique);?>"><?php echo esc_html($settings['title']);?></a></h3>
						        <?php endif; 

								if($settings['designation']) : ?>
									<span class="team-title"><?php echo esc_html($settings['designation']);?></span>
								<?php endif ; ?>
							</div>
							<?php if($settings['bio']): ?>
						        	<p class="team-desc"><?php echo esc_html($settings['bio']);?></p>
			                  	<?php endif; ?>								  	
						  	<?php if ( !empty(is_array( $settings['social_icon_list'] )) ) : ?>
								<div class="social-icons">	
									<?php foreach ( $settings['social_icon_list'] as $index => $item ) :

										$target       = !empty($item['link']['is_external']) ? 'target=_blank' : '';                    
					            		$link         = !empty($item['link']['URL']) ? $item['link']['URL'] : '';
					            	?>
				            								
										<a href="<?php echo esc_url($item['link']['url']);?>"  <?php echo wp_kses_post($target);?> class="social-icon">
											<i class="<?php echo esc_html($item['social_profile']); ?>"></i>
										</a>			
							        
							   		<?php  endforeach; ?>   
						   		</div>	
							<?php endif; ?>	
						</div>
			  		</div>
			  	</div>

			</div>

            <?php }elseif( $settings['team_grid_style'] == 'style6' ){ ?>

            <div class="team-member-area team-style-two">
                <div class="dreamit-team-member-single text-center">

                    <div class="team-member-thumb">
                        <img src="<?php echo esc_url($settings['memeber_image']['url']);?>"  alt="<?php echo esc_url($settings['memeber_image']['url']);?>" />
                    </div>
                    <div class="team-member-content">
                        <div class="team-member-title">
                            <h2><?php echo esc_html($settings['title']);?></h2>
                        </div>
                        <div class="team-member-sub-title">
                            <h5><?php echo esc_html($settings['designation']);?></h5>
                        </div>
                        <div class="social-icon">

                            <?php foreach ( $settings['social_icon_list'] as $index => $item ) :

                                $target       = !empty($item['link']['is_external']) ? 'target=_blank' : '';
                            ?>

                            <a href="<?php echo esc_url($item['link']['url']);?>"  <?php echo wp_kses_post($target);?> class="social-icon">
                                <i class="<?php echo esc_html($item['social_profile']); ?>"></i>
                            </a>            
                                    
                            <?php  endforeach; ?> 

                        </div>
                    </div>

                </div>
            </div>
            

            <?php } ?>

		<?php 

	}


}