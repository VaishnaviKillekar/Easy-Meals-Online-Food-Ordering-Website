<!--
	Author: Vaishnavi Killekar
	Date: November 2017
	Description: Admin's home page.
-->

<!DOCTYPE html>
<?php
	session_start();
	
	if(!isset($_SESSION['UserID']))
	{
		echo "<script>alert('Session Expired! Please Login again.');</script>";
		header("Refresh:0, url=login.html");
		exit;
	}
?>
<html>
<head>
<title>EasyMeals</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="admin_index.php"><img src="images/logoEM.png" class="img-responsive" alt="Logo" width="200" height="80"/></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li class="active"><a href="#Home" class="scroll">Home</a></li>|
						<li><a href="admin_res.php">Manage Restaurants</a></li>|
						<li><a href="admin_create.php">Create Admin</a></li>|						
						<li><a href="#">Contact Info</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="change_pwd.php">Change Password</a></li> |
						<li><a href="logout.php">Logout</a>  </li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<div style="margin-top: 4px; color: white; font-size: 40px; font-family: 'Lobster Two', cursive;">
							<h1>Hello, <?php include_once('db.php'); if($res=mysqli_query($con, "SELECT User_Fname FROM user WHERE User_Id='$_SESSION[UserID]'")){ $row=mysqli_fetch_assoc($res); echo $row['User_Fname']."!";} else {echo "Foodie!";} ?></h1>
						</div>
					</div>
		<script type="text/javascript">
	         $('.main-search').hide();
	        $('button').click(function (){
	            $('.main-search').show();
	            $('.main-search text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.main-search').hide();
	        });
	    </script>
					
				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<!--div class="content">
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Start ordering your food now</h3>
					<div class="dotted-line">
						<h4>Just 4 steps to follow </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="one"></i><br>
							<i class="one-icon"></i>
							<p>Choose your Restaurant</p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="two"></i><br>
							<i class="two-icon"></i>
							<p>Order your Dishes</p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="three"></i><br>
							<i class="three-icon"></i>
							<p>Pay on delivery</p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="four"></i><br>
							<i class="four-icon"></i>
							<p>Enjoy your meal</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
		<div class="service-section">
			<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Service Guarantee</h4>
							<p>Hungry? Order now! Guarenteed service at your door step.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fully Secure Payment</h4>
							<p>Payment is made after delivery of meal (COD), hence your money is secure.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Track Your Order</h4>
							<p>The contact details of the delivery boy are provided for order tracking.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Follow Us On...</h4>
						<ul>
							<li><i class="fb"></i></li>
							<li class="data"> <a href="#">  Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="#">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="#"> Linkedin</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
							<li class="data"><a href="#">Google Plus</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div-->
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2014  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com" target="target_blank">W3Layouts</a></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>