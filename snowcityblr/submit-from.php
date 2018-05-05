<?php
	require_once("config.php");
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$attraction=$_POST['attraction'];
	$no_of_tickets=$_POST['no_of_tickets'];
	$mobile=$_POST['mobile'];
	$session_date=$_POST['session_date'];
	$txnid= time().rand(1000,99999);
	
	$query = mysql_query("INSERT INTO `buyer_details` (`username`, `email`, `attraction`, `no_of_tickets`,`mobile`, `session_date`, `booking_date`,`ip_address`,`txnid`) VALUES ('".$username."', '".$email."', '".$attraction."', '".$no_of_tickets."', '".$mobile."', '".$session_date."', Now(),'".$_SERVER['REMOTE_ADDR']."','".$txnid."')");
	
	$sql = "SELECT * FROM buyer_details ORDER BY `id` DESC LIMIT 1";
	$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$username=$row["username"]; 
		$email=$row["email"];
		$attraction=$row["attraction"];
			if ($attraction=="9d cienama"){
			$mobile=$row["mobile"];
			$ticket_no="SNOWBLR-".$row['id'];
			$no_of_tickets=$row["no_of_tickets"];
			$booking_date=$row['booking_date'];
			$session_date=$row["session_date"];
			$convenience_charge=0;
				$ticket_amount=100;
				($total_amount=($no_of_tickets*$ticket_amount));
			}
		
		else {
		$mobile=$row["mobile"];
		$ticket_no="SNOWBLR-".$row['id'];
		$no_of_tickets=$row["no_of_tickets"];
		$booking_date=$row['booking_date'];
		$session_date=$row["session_date"];
		$dt =strtotime($session_date);
			$day =date("D",$dt); 
			if (($day == "Sat") || ($day == "Sun")){ 
				$ticket_amount=600;
				}
			else {$ticket_amount=500;}
		
		$convenience_charge=20; 
		($total_amount=(($no_of_tickets*$ticket_amount)+($no_of_tickets*$convenience_charge)));
		}
	}

	$conn->close();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>	
		<!-----------------------start links---------------------->
		<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
		<title>Snow city</title>
		<!--Pacifico font style link-->
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
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
		<!----------------------links end--------------------------->
		<style>
			br{ display:none;}
			.sc_table table th, .sc_table table td{ font-size:20px;}
			.sc_table table td{ border: 1px solid #F15A23;}
		</style>
	</head>
		
	<body>
		<header class="top_panel_wrap image_bg_7">
				<div class="menu_main_wrap logo_left with_text">
					<div class="menu_content_wrap clearfix">
						<div class="logo">
							<a href="index.php">
							<img src="images/logo.png" alt="slider_1">
								<!--<span class="logo_text">SnowCity</span>-->
							</a>
						</div>
						
						<a href="#" class="menu_main_responsive_button icon-menu-1"></a>
						<nav role="navigation" class="menu_main_nav_area">
							<ul id="menu_main" class="menu_main_nav">
								<li class="menu-item">
									<a href="index.php">Home</a>
								</li>
								<li class="menu-item">
									<a href="activities.php">Activities</a>
								</li>
								<li class="menu-item">
									<a href="booking.php">booking</a>
								</li>
								<li class="menu-item menu-item-has-children">
									<a href="#">Gallery</a>
									<ul class="sub-menu">
										<li class="menu-item">
											<a href="gallery-classic-4-columns.php">Images</a>
										</li>
										<li class="menu-item">
											<a href="videos.php">Videos</a>
										</li>
										</ul>
								</li>
								
								<li class="menu-item">
									<a href="contact-us.php">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		<div class="maindiv">
			
			<table width="100%" border="0" cellpadding="2" cellspacing="2">
				<tr>
					<td colspan="3" align="left" valign="middle">
						<div id="message">
							<div style="color:#008000; font-weight:bold; text-align:center;">
								
								<section class="section_padding_50">
									<div class="container">
									<div class="sc_section">
									<div class="sc_content sc_align_center">
										<h2 class="sc_title sc_title_style_1 sc_title_iconed">
											<span class="sc_title_icon 	sc_title_icon_top sc_title_icon_small">
											<img src="images/top_title_bg.png" alt="">
											</span>
											Ticket Details
										</h2>
										<h5 class="sc_undertitle sc_undertitle_style_1">Befor booking your ticket please check your name, email, mobile number, total number of tickets and session date</h5>
										<div class="sc_section">
											<div class="sc_line sc_line_style_dashed sc_line_style_2"></div>
											<div class="sc_table aligncenter">
											<table>
												<tbody>
													<tr>
														<th>#</th>
														<th>Fields</th>
														<th>Field details</th>
													</tr>
													<tr>
														<td>1</td>
														<td>Name</td>
														<td><?php echo $username; ?></td>	
													</tr>
													<tr>
														<td>2</td>
														<td>Email </td>
														<td><?php echo $email; ?></td>
													</tr>
													<tr>
														<td>3</td>
														<td>Attraction Type </td>
														<td><?php echo $attraction; ?></td>
													</tr>
													<tr>
														<td>4</td>
														<td>Phone No</td>
														<td><?php echo $mobile; ?></td>
													</tr>
													<tr>
														<td>5</td>
														<td>Ticket No</td>
														<td><?php echo $ticket_no; ?></td>
													</tr>
													<tr>
													<td>6</td>
													<td>No. of Tickets</td>
													<td><?php echo $no_of_tickets; ?></td>
													</tr>
													<tr>
														<td>7</td>
														<td>Per Ticket Amount</td>
														<td><?php echo $ticket_amount; ?></td>
													</tr>
													<tr>
														<td>8</td>
														<td>Per Convenience Charge </td>
														<td><?php echo $convenience_charge; ?></td>
													</tr>
													<tr>
														<td>9</td>
														<td>Total Amount</td>
														<td><?php echo $total_amount; ?></td>
													</tr>
													<tr>
														<td>10</td>
														<td>Booking Date</td>
														<td><?php echo $booking_date; ?></td>
													</tr>
													<tr>
														<td>11</td>
														<td>Session Date</td>
														<td><?php echo $session_date; ?></td>
													</tr>
												</tbody>
											</table>
											</div>
										</div>
									</div>
									</div>
									</div>
								</section>
							</div>
						</div>
					</td>
				</tr>
			</table>
			<form name="postForm" action="checkout.php" method="POST">
				<input type="hidden" name="username" value="<?php echo $username; ?>" />
				<input type="hidden" name="email" value="<?php echo $email; ?>" />
				<input type="hidden" name="mobile" value="<?php echo $mobile; ?>" />
				<input type="hidden" name="ticket_no" value="<?php echo $ticket_no; ?>" />
				<input type="hidden" name="no_of_tickets" value="<?php echo $no_of_tickets; ?>" />
				<input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>" />
				<input type="hidden" name="booking_date" value="<?php echo $booking_date; ?>" />
				<input type="hidden" name="session_date" value="<?php echo $session_date; ?>" />
				<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
				<input type="hidden" name="surl" value="http://localhost/snowcityblr/transcation_success.php" size="64" />
				<input type="hidden" name="furl" value="http://localhost/snowcityblr/transcation_fail.php" size="64" />
				<div class="sc_section margin_bottom_30" style="margin-left:auto;margin-right:auto;margin-top:2%;width:3%">
					<input type="submit" name="submit" value="book now" class="sc_button sc_button_style_1 sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_small alignleft"/>
				</div>
			</form>
				<div class="sc_section margin_bottom_30" style="margin-left:auto;margin-right:auto;margin-top:-2%;width:1%">
					<input type="submit" onclick="goBack()" name="Back" value="Edit" class="sc_button sc_button_style_1 sc_button_square sc_button_style_filled sc_button_bg_custom sc_button_size_small alignleft"/>
				</div>
		</div>
		<!------------------------start scripts--------------------->
		<script>
			function goBack() {
			    window.history.back();
			}
		</script>
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


		<!----------------------------end scripts----------------------------->

	</body>
</html>
