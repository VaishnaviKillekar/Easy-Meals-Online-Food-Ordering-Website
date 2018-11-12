<!--
	Author: Vaishnavi Killekar
	Date: November 2017
	Description: Customer's order contents.
-->

<?php
	session_start();
	
	if(!isset($_SESSION['UserID']))
	{
		header("Refresh:0, url=login.html");
		exit;
	}
	$_SESSION['RestId']=$_GET['rid'];
?>

<!DOCTYPE html>
<html>
<head>
<title>EasyMeals-Menu Card</title>
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
<script src="js/simpleCart.min.js"> </script>	
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="cust_index.php"><img src="images/logoEM.png" class="img-responsive" alt="Logo" width="200" height="80"/></a>
				</div>
				<div class="queries">
					<p><br>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="cust_checkout.php">
								<h3> <!--span class="simpleCart_total"> $0.00 </span--> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="cust_index.php">Home</a></li>|
						<li><a href="cust_restaurants.php">Restaurants</a></li>|
						<li><a href="cust_checkout.php">My Cart</a></li>|
						<li><a href="cust_contact.php">Contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="logout.php">Logout</a>  </li> |
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
				</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	
	<div class="orders">
	<div class="container">
		<div class="order-top">
			<?php
				include_once('db.php');
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$_GET[rid]' AND Dish_Type='Starter'");
				
				echo "<li class='item-lists'>
						<h4>Starters</h4>";
				while($row=mysqli_fetch_array($res))
				{
					echo "<p>".$row['Dish_Name']."</p>";
				}
				echo "</li>";
				
				echo "<li class='item-lists'>
						<div class='special-info grid_1 simpleCart_shelfItem'>
							<h4>Price</h4>";
				
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$_GET[rid]' AND Dish_Type='Starter'");

				while($row=mysqli_fetch_array($res))
				{						
					echo "<div class='pre-top'>
							<div class='pr-left'>
								<div class='item_add'><span class='item_price'><h5>Rs. ".$row['Dish_Price']."/-</h5></span></div>
							</div>
						<div class='pr-right'>
							<div class='item_add'><span class='item_price'><a href='inc.php?DISHID=$row[Dish_Id]'>Add to Cart</a></span></div>
						</div>
							<div class='clearfix'></div>
					</div>";
				}
				echo "</div>
					</li>
					<div class='clearfix'></div>";
			?>			
		</div>
		
		<div class="order-top">
			<?php
				include_once('db.php');
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$_GET[rid]' AND Dish_Type='Main_Course'");
				
				echo "<li class='item-lists'>
						<h4>Main Course</h4>";
				while($row=mysqli_fetch_array($res))
				{
					echo "<p>".$row['Dish_Name']."</p>";
				}
				echo "</li>";
				
				echo "<li class='item-lists'>
						<div class='special-info grid_1 simpleCart_shelfItem'>
							<h4>Price</h4>";
				
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$_GET[rid]' AND Dish_Type='Main_Course'");
				while($row=mysqli_fetch_array($res))
				{								
					echo "<div class='pre-top'>
							<div class='pr-left'>
								<div class='item_add'><span class='item_price'><h5>Rs. ".$row['Dish_Price']."/-</h5></span></div>
							</div>
						<div class='pr-right'>
							<div class='item_add'><span class='item_price'><a href='inc.php?DISHID=$row[Dish_Id]'>Add to Cart</a></span></div>
						</div>
							<div class='clearfix'></div>
					</div>";
				}
				echo "</div>
					</li>
					<div class='clearfix'></div>";
			?>			
		</div>
		<div class="order-top">
			<?php
				include_once('db.php');
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$_GET[rid]' AND Dish_Type='Dessert'");
				
				echo "<li class='item-lists'>
						<h4>Dessert</h4>";
				while($row=mysqli_fetch_array($res))
				{
					echo "<p>".$row['Dish_Name']."</p>";
				}
				echo "</li>";
				
				echo "<li class='item-lists'>
						<div class='special-info grid_1 simpleCart_shelfItem'>
							<h4>Price</h4>";
				
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$_GET[rid]' AND Dish_Type='Dessert'");
				while($row=mysqli_fetch_array($res))
				{								
					echo "<div class='pre-top'>
							<div class='pr-left'>
								<div class='item_add'><span class='item_price'><h5>Rs. ".$row['Dish_Price']."/-</h5></span></div>
							</div>
						<div class='pr-right'>
							<div class='item_add'><span class='item_price'><a href='inc.php?DISHID=$row[Dish_Id]'>Add to Cart</a></span></div>
						</div>
							<div class='clearfix'></div>
					</div>";
				}
				echo "</div>
					</li>
					<div class='clearfix'></div>";
			?>
		</div>
	</div><br>
		<center><a href='cust_checkout.php'><input type="button" value="Go to Cart"/></a></center>
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