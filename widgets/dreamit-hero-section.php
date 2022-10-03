<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if(!defined('ABSPATH')) exit;


class HeroSection extends Widget_Base{

	public function get_name(){
		return "herosection";
	}
	
	public function get_title(){
		return "Hero Section";
	}
	
	public function get_icon(){
		return "eicon-section";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function _register_controls(){
	    
    }
    
    protected function render() {
        
        ?>
        
        <div class="hero-single-slide hero-section  hero-style-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hero-content-left">
                            <h3></h3>
                            <h1>Data Analytics Techniques With</h1>
                            <h2>Data Science</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboret dolore magna aliqua. Ut en ad minim  ullamco laboris nisi ut aliquip.</p>
                            <div class="hero-content-inner">
                                <div class="hero-slider-btn">
                                    <a class="techno_hero_btn">Contact us</a>
                                </div>
                                <div class="hero-video-icon2">
                                    <a class="video-vemo-icon venobox vbox-item" href="#"><i class="fa-play-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single_banner_thumb">
                            <div class="banner_shape">
    							<div class="banner_shape_inner1 bounce-animate5">
    								<img src="http://wp.dreamitsolution.net/techno-datascience/wp-content/themes/techno/assets/images/shape/2.png" alt="animation-one">
    							</div>
    							<div class="banner_shape_inner2 bounce-animate">
    								<img src="http://wp.dreamitsolution.net/techno-datascience/wp-content/themes/techno/assets/images/shape/3.png" alt="animation-two">
    							</div>
    							<div class="banner_shape_inner3 rotateme">
    								<img src="http://wp.dreamitsolution.net/techno-datascience/wp-content/themes/techno/assets/images/shape/4.png" alt="animation-one">
    							</div>
    							<div class="banner_shape_inner4 ">
    								<img src="http://wp.dreamitsolution.net/techno-datascience/wp-content/themes/techno/assets/images/shape/text1.png" alt="animation-four">
    							</div>
    							<div class="banner_shape_inner5 bounce-animate2">
    								<img src="http://wp.dreamitsolution.net/techno-datascience/wp-content/themes/techno/assets/images/shape/text2.png" alt="animation-five">
    							</div>
    							<div class="banner_shape_inner6 bounce-animate3">
    								<img src="http://wp.dreamitsolution.net/techno-datascience/wp-content/themes/techno/assets/images/shape/text3.png" alt="animation-five">
    							</div>
    							
    						</div>
    						<div class="single_banner_thumb_inner">
    						    <img src="http://wp.dreamitsolution.net/techno-datascience/wp-content/themes/techno/assets/images/shape/1.png" alt="">
    						</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
    }
}