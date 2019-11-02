<!DOCTYPE html>
<?php  
	include("functions/functions.php");
?>
<html>
<head>
	<title>Online Shopping</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- strat main_wrapper -->
	<div class="main_wrapper">

	<!-- strat header_wrapper -->
		<div class="header_wrapper">
			<img id="logo" src="images/profile.png" />
			<img id="banner" src="images/profile.png"/>
		</div>
	<!-- end header_wrapper -->

	<!-- strat menubar -->	
		<div class= "menubar"> 
			<ul id = "menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<div id="form">
				<form method="get" action = "results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search here"/>
					<input type="submit" name="search" value="Search"/>
				</form>
			</div> 
		</div>
	<!-- End menubar -->

	<!-- strat content_wrapper -->
		<div class = "content_wrapper">
			<div id ="sidebar"> 
				<div id="sidebar_title">Categories</div>
					<ul id="cats">
						<?php getCats(); ?>
					</ul>
				<div id="sidebar_title">Brand</div>
					<ul id="cats">
						<?php getBrands(); ?>
					</ul>
			</div>
			<div id = "content_area"> This is  content area</div>
		</div>	
	<!-- strat content_wrapper -->

	<!-- strat footer -->	
		<div id = "footer">
			<h2 style="text-align:center; padding-top:40px;">&copy; 2019 by tharindukavishna@gmail.com</h2>
		</div>
	<!-- strat footer -->
	</div>

	<!-- End main_wrapper -->
</body>
</html>