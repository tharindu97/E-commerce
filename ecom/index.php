<!DOCTYPE html>
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
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Computers</a></li>
						<li><a href="#">Mobiles</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">ipads</a></li>
						<li><a href="#">Tablets</a></li>
					</ul>
				<div id="sidebar_title">Brand</div>
					<ul id="cats">
						<li><a href="#">HP</a></li>
						<li><a href="#">DELL</a></li>
						<li><a href="#">APPLE</a></li>
						<li><a href="#">Sony</a></li>
						<li><a href="#">ASUS</a></li>
						<li><a href="#">Acear</a></li>
					</ul>
			</div>
			<div id = "content_area"> This is  content area</div>
		</div>	
	<!-- strat content_wrapper -->

	<!-- strat footer -->	
		<div id = "footer"> This is  the footer</div>
	<!-- strat footer -->
	</div>

	<!-- End main_wrapper -->
</body>
</html>