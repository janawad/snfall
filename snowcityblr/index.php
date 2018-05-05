<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <title>Snow City Bangalore</title>
	
	<!--<link rel='stylesheet' href='custom_tools/css/front.customizer.css' type='text/css' media='all' />-->

	<link rel='stylesheet' href='js/vendor/magnific/magnific-popup.css' type='text/css' media='all' />
	<link rel='stylesheet' href='js/vendor/swiper/idangerous.swiper.css' type='text/css' media='all' />
	<link rel='stylesheet' href='js/vendor/revslider/rs-plugin/css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/woo/woocommerce-layout.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/woo/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
	<link rel='stylesheet' href='css/woo/woocommerce.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/shortcodes.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/core.animation.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/woo/woo-style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/skin.css' type='text/css' media='all' />
	<style id='themerex-custom-style-inline-css' type='text/css'></style>
	<link rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
	

</head>

<body class="page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_transparent top_panel_over menu_right sidebar_hide">
	<?php require_once "pageload.hp"; ?>
	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>

			<header class="top_panel_wrap" >
				<div class="menu_main_wrap logo_left with_text">
					<div class="menu_content_wrap clearfix">
						<div class="logo">
							<a href="index.php">
								<img alt="logo" src="images/logo.png">
							</a>
						</div>
						<a href="#" class="menu_main_responsive_button icon-menu-1"></a>
						<nav role="navigation" class="menu_main_nav_area">
							<ul id="menu_main" class="menu_main_nav">
								<li class="menu-item current-menu-ancestor menu-item-has-children">
									<a href="index.php">Home</a>
								</li>
								<li class="menu-item">
									<a href="activities.html">Activities</a>
								</li>
								<li class="menu-item">
									<a href="#">Gallery</a>
									<ul class="sub-menu">
										<li class="menu-item">
											<a href="gallery_images.html">Image</a>
										</li>
										<li class="menu-item">
											<a href="#">Video</a>
										</li>
										
									</ul>
								</li>
								<li class="menu-item">
									<a href="contact-us.html">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<section id="mainslider_1" class="slider_wrap slider_fullscreen slider_engine_revo slider_alias_main mainslider_1">
				<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container">
					<div id="rev_slider_4_1" class="rev_slider fullscreenbanner">
						<ul>
							<li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<img src="images/home-img/19.jpg"  alt="slider_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							</li>
							<li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<img src="images/home-img/14.jpg"  alt="slider_2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							</li>
							<li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<img src="images/home-img/16.jpg"  alt="slider_3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							</li>
							
						</ul>
						<div class="tp-static-layers">
							<div class="tp-caption black tp-fade tp-static-layer"
								data-x="center" data-hoffset="1"
								data-y="center" data-voffset="46"
								data-speed="300"
								data-start="500"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-startslide="0"
								data-endslide="2"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
								<div class="sc_contact_form sc_contact_form_order aligncenter">
		<form data-formtype="order" method="post" action="submit-from.php">
			<div class="sc_contact_form_in">
				<h2 class="sc_contact_form_title">Book Your Ticket</h2>
														   
				<div class="label_over">
					<input id="sc_contact_form_email" type="text" name="username" placeholder="FULL NAME" required>
				</div>
															 
				<div class="label_over">
					<input type="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="ENTER YOUR EMAIL" required>
				</div>
				<select id="destinations" class="destinations" name="attraction" required>
					<option value="" disabled="" selected="">Attraction Type</option>
					<option value="Snowcity">Snowcity</option>
					<option value="9d cienama">9d cienama</option>
				</select>
				
				<!--<div class="label_over">
					<input id="sc_contact_form_email" type="number" name="ticket" placeholder="NO OF TICKETS" required>
				</div>-->
				<script>
				 function isNumberKey(evt){
						var charCode = (evt.which) ? evt.which : event.keyCode
						return !(charCode > 31 && (charCode < 48 || charCode > 57));
					}
				</script>
				<div class="label_over">
					<input id="sc_contact_form_email" type="text" name="no_of_tickets" placeholder="NO OF TICKETS" onkeypress="return isNumberKey(event);" required >
				</div>
				
				<div class="label_over">
					<input id="Number" type="text" maxlength="10" pattern="[0-9]{10}" name="mobile" placeholder="MOBILE NUMBER" required>
				</div>
				<select class="destinations" name="criteria" style="display:none;">
				</select>

				
				<div class="date_time">
					<div class="form_date start">
						<span class="icon"></span>
						<input placeholder="Select Session Date" class="sc_contact_form_date js__datepicker" type="text" name="session_date" required>
					</div>
										</div>
				<div class="sc_contact_form_button">
					<button>Buy Now</button>
				</div>
				<div class="result sc_infobox"></div>
			</div>
		</form>
								</div>
							</div>
							<div class="tp-caption trx-light tp-fade tp-resizeme tp-static-layer"
								data-x="227"
								data-y="97"
								data-speed="300"
								data-start="500"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-startslide="0"
								data-endslide="2"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
								<div class='demo_text'>One of the very best reasons<br/>
								for having children is to be reminded<br/>
								of the incomparable joys of a snow day.</div>
							</div>
							<!-- LAYER NR. 3 -->
							<div class="tp-caption trx-light-small tp-fade tp-resizeme tp-static-layer"
								data-x="235"
								data-y="195"
								data-speed="300"
								data-start="500"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-startslide="0"
								data-endslide="2"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
								<div class='demo_text'>- Susan Orlean</div>
							</div>
						</div>
						<div class="tp-bannertimer"></div>	
					</div>
				</div>
			</section>

			<div class="page_content_wrap">
				<div class="content">
					<article class="post_item post_item_single page">
						<div class="post_content">

							<section class="grey_section section_padding_top_30 section_padding_bottom_50">
								<div class="container">
									<div class="sc_section">
										<div class="sc_section_content">
											<div class="sc_content sc_align_center">
												<div class="columns_wrap sc_columns sc_columns_count_3">
													<div class="column-1_3">
														<figure class="sc_image sc_image_shape_square">
															<img src="images/icon/icon_admission.png">
														</figure>
														<h5 class="sc_title sc_title_style_2">
														<a href="#">ADMISSION CHARGES</a>
														</h5>
													</div>
													<div class="column-1_3">
														<figure class="sc_image  sc_image_shape_square">
															<img src="images/icon/whatson.png" alt="" />
														</figure>
														<h5 class="sc_title sc_title_style_2">
														<a href="#">What's On</a>
														</h5>
													</div>
													<div class="column-1_3">
														<figure class="sc_image  sc_image_shape_square">
															<img src="images/icon/discountpromotions.png" alt="" />
														</figure>
														<h5 class="sc_title sc_title_style_2">
														<a href="#">DISCOUNTS & PROMOTIONS</a>
														</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							
							<section class="section_padding_50">
								<div class="container">
									<div class="sc_section">
										<div class="sc_content sc_align_center">
											<h2 class="sc_title sc_title_style_1 sc_title_iconed">
											<span class="sc_title_icon sc_title_icon_top  sc_title_icon_small">
												<img src="images/top_title_bg.png" alt="" />
											</span>Getting Started</h2>
											<h5 class="sc_undertitle sc_undertitle_style_1">We can't promise the sun in winter but can promise the snow in summer ! </h5>
										</div>
									</div>
								</div>
							</section>
							
							<section class="image_bg image_bg_4 sc_oblique oblique_left">
								<div class="container">
									<div class="sc_section">
										<div class="content_wrap">
											<div class="sc_oblique_wrap">
												<h4 class="sc_title">General Information</h4>
												<div class="description">-5° C temprature at Snow City</div>
												<div class="description">Snow City is open 365 days</div>
												<div class="description">1st indoor snow park in Bangalore</div>
												<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_large alignleft">read more</a>
											</div>
										</div>
									</div>
								</div>
							</section>
							
							<section class="image_bg image_bg_5 sc_oblique oblique_right">
								<div class="container">
									<div class="sc_section">
										<div class="content_wrap">
											<div class="sc_oblique_wrap">
												<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_large alignleft">read more</a>
												<div class="info">
													Monday to Sunday 10:00 - 20:30
												</div>
												<div class="description">080-2355-0000</div>
												<div class="description" style="margin-top:10px;">078-2955-0000</br></div>
												<h4 class="sc_title" style="margin-top:10px;">Need help? Call us</h4>
											</div>
										</div>
									</div>
								</div>
							</section>
							
							<section class="image_bg image_bg_6 sc_oblique oblique_left">
								<div class="container">
									<div class="sc_section">
										<div class="content_wrap">
											<div class="sc_oblique_wrap">
												<h4 class="sc_title">General Information</h4>
												<div class="description">One session for 45 minutes</div>
												<div class="description">Snowfall in every session</div>
												<div class="description">Socks is necessary to wear</div>
												<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_large alignleft">read more</a>
											</div>
										</div>
									</div>
								</div>
							</section>
							
							<section class="grey_section section_padding_50">
								<div class="container">
									<div class="sc_section aligncenter">
										<div class="sc_section_content">
											<div class="sc_content">
												<div class="sc_section aligncenter">
													<h2 class="sc_title margin_top_0">FREE THIS WEEKEND?</h2>
													<h5 class="sc_undertitle sc_undertitle_style_1">We can't promise the sun in winter but can promise the snow in summer ! </h5>
												</div>
												<div class="sc_section margin_top_30">
													<div id="sc_section_1_scroll" class="sc_scroll sc_scroll_style_1 sc_scroll_horizontal swiper-slider-container scroll-container">
														<div class="sc_scroll_wrapper swiper-wrapper">
															<div class="sc_scroll_slide swiper-slide">
																<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/opt/6.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Snow Box</a>
																	</div>
																</div>
																<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/opt/2.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Snow Animals</a>
																	</div>
																</div>
																<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/opt/3.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Ice Slides</a>
																	</div>
																</div>
																<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/opt/4.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Kids Zone</a>
																	</div>
																</div>
																<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/opt/5.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Snow Party</a>
																	</div>
																</div>
																<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/opt/1.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Hospitality</a>
																	</div>
																</div>
																<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/opt/7.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Snow Area</a>
																	</div>
																</div>
																<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/opt/8.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Deck</a>
																	</div>
																</div>
																<!--<div class="sc_image_wrap  alignleft">
																	<figure class="sc_image  sc_image_shape_round">
																		<img src="images/90x90.png" alt="" />
																	</figure>
																	<div class="figcaption">
																		<span></span>
																		<a href="#">Stockholm</a>
																	</div>
																</div>-->
															</div>
														</div>
														<div id="sc_section_1_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_section_1_scroll_bar">
														</div>
													</div>
												</div>
												<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_large margin_top_40">join us!</a>
											</div>
										</div>
									</div>
								</div>
							</section>

						</div>
					</article>
				</div>
			</div>

			<footer class="footer_wrap bg_tint_dark footer_style_dark widget_area">
				<div class="content_wrap">
					<div class="columns_wrap">
						<aside class="column-1_3_col1 widget widget_recent_posts">
							<h5 class="widget_title">Find Us</h5>
							<article class="post_item with_thumb first">
								<div class="post_content">
                                                                <h6 class="post_title">
								 <p>Jayamahal, Fun World Complex, Opposite TV Tower, J C Nagar, Bengaluru, Karnataka 560006, India.	
								<p> 080-2355-0000 / 078-2955-0000</p>
                                                                </h6>
								<a href="mailto:info@snowcityblr.com"> info@snowcityblr.com</a>
								</div>
							</article>
							
							
						</aside>
						<aside class="column-1_3_col2 widget widget_recent_posts">
							<h5 class="widget_title">Snow World</h5>
							<article class="post_item with_thumb first">
								<div class="post_content">
									<ul>
										<li>
											<a href="about-us.html">About Us</a>
										</li>
										<li>
											<a href="attraction.html">Attractions</a>
										</li>
										<li>
											<a href="Do's-&-Dont's.html">Do's & Dont's</a>
										</li>
										<li>
											<a href="terms.html">Terms & Conditions</a>
										</li>
										<!--<li>
											<a href="privacy-policy.html">Privacy Policy</a>
										</li>-->
									</ul>								
								</div>
							</article>
						</aside>
						<aside class="column-1_3_col3 widget widget_recent_reviews">
							<h5 class="widget_title">Business </h5>
							<div class="recent_reviews">
								<article class="post_item with_thumb first">
									
									<div class="post_content">
										<ul>
											
											<li>
											<a href="index.html">Booking</a>
											</li>
											
										</ul>
									</div>
								</article>
								
							</div>
						</aside>
						<aside class="column-1_3_col4 widget widget_top10">
							<h5 class="widget_title">Get directions</h5>
						
							<h6 class="post_title"><p>Get direction from your distination.</p></h6>
							<form id="get_direction" target="_blank" action="https://www.google.co.in/maps/place/" method="get">
								<div class="form-group">
								<input id="saddr" class="form-control-1" placeholder=" Enter your location" value="" name="saddr" style="width:205px;height:30px;margin-bottom:10px;">
								
								<input type="hidden" value="Snow City, Bengaluru, Karnataka" name="daddr">
								</div>
								<input class="btn_1 white" type="submit" value="Show on map" style="padding:5px;">
							</form>
							</div>
						</aside>
					</div>
				</div>
			</footer>

			<div class="copyright_wrap copyright_wrap_style_1">
				<div class="content_wrap">
					<div class="sc_section">
						<figure class="sc_image  sc_image_shape_square">
							<img alt="" src="images/top_title_bg.png">
						</figure>
						<img alt="logo" src="images/logo.png"><br/><br/>
						<div class="sc_socials sc_socials_size_tiny">
							<div class="sc_socials_item">
								<a href="https://twitter.com/" target="_blank" class="social_icons social_twitter icons">
									<span class="icon-twitter"></span>
									<span class="sc_socials_hover icon-twitter"></span>
								</a>
							</div>
							<div class="sc_socials_item">
								<a href="https://www.facebook.com/" target="_blank" class="social_icons social_facebook icons">
									<span class="icon-facebook"></span>
									<span class="sc_socials_hover icon-facebook"></span>
								</a>
							</div>
							<div class="sc_socials_item">
								<a href="#" target="_blank" class="social_icons social_vimeo icons">
									<span class="icon-youtube"></span>
									<span class="sc_socials_hover icon-youtube"></span>
								</a>
							</div>
							<div class="sc_socials_item">
								<a href="https://plus.google.com/" target="_blank" class="social_icons social_gplus icons">
									<span class="icon-gplus"></span>
									<span class="sc_socials_hover icon-gplus"></span>
								</a>
							</div>
							
						</div>
						<p>© 2016 - Snow City. &nbsp;&nbsp; All rights reserved.</p></br>
						<p>Developed By: &nbsp;&nbsp;<a href="http://www.macle.co.in">Macle Grafics pvt ltd</a> </p>
					</div>
				</div>
			</div>

		</div>
	</div>


	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

	<script type='text/javascript' src='js/vendor/jquery-1.11.3.min.js'></script>
	<script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>

	<script type='text/javascript' src='js/vendor/revslider/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
	<script type='text/javascript' src='js/vendor/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

	<script type='text/javascript' src='js/vendor/__packed.js'></script>
	<script type='text/javascript' src='js/vendor/picker/picker.js'></script>
	<script type='text/javascript' src='js/vendor/picker/picker.date.js'></script>
	<script type='text/javascript' src='js/vendor/picker/picker.time.js'></script>
	<script type='text/javascript' src='js/vendor/picker/picker.start.js'></script>

	<script type='text/javascript' src='js/custom/core.utils.min.js'></script>
	<script type='text/javascript' src='js/custom/core.init.min.js'></script>
	<script type='text/javascript' src='js/custom/shortcodes.min.js'></script>

	<script type='text/javascript' src='js/custom/_main.js'></script>

	<!--<script type='text/javascript' src='custom_tools/js/front.customizer.js'></script>-->
	<!--<script type='text/javascript' src='custom_tools/js/skin.customizer.js'></script>-->


</body>
</html>