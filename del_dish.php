<!--
	Author: Vaishnavi Killekar
	Date: November 2017
	Description: Manager can view all the dishes on their menu card and proceed to remove any.
-->

<?php
	session_start();
	
	if(!isset($_SESSION['UserID']))
	{
		echo "<script>alert('Session Expired! Please Login again.');</script>";
		header("Refresh:0, url=login.html");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>EasyMeals-Manage Menu Card</title>
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
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

</style>

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
						<li><a href="res_index.php">Home</a></li>|
						<li><a href="manage_menu.php">Manage Menu</a></li>|
						<li><a href="view_orders.php">View Orders</a></li>|						
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
	</div>
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	<?php
				include_once('db.php');
				
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$_SESSION[rid]'");

				echo "<form action='remove_res.php' method='POST'>
						<table border='1'>
						  <tr>
							<th>Dish ID</th>
							<th>Dish Name</th>
							<th>Dish Type</th>
							<th>Dish Price</th>
							<th>Available</th>
						  </tr>";
				while($row=mysqli_fetch_array($res))
				{
					echo "<tr>
							<td>$row[Dish_Id]</td>
							<td>$row[Dish_Name]</td>
							<td>$row[Dish_Type]</td>
							<td>$row[Dish_Price]</td>
							<td>";if($row['Dish_Available']==1) echo "Yes"; else echo "No"; echo "</td>
							<td><a href='del_dish_submit.php?did=$row[Dish_Id]'><input type='button' value='Remove'/></a></td>
						  </tr>";
				}
				echo "</table>
					</form>";
			?>			
		   </div>
	     </div>
	    </div>
	<div class="clearfix"></div>
		<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid">
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
	
					<div class="col-md-3 contact-section-grid">
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