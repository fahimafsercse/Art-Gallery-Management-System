



<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<link rel="stylesheet" href="css/indexstyle.css">
	<link rel="stylesheet" href="css/painting.css">
</head>

<body>
	<form action= "checkout.php" method="post">
		<div class="mainmenu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a class ="active"href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a href="photography.php">Photography</a></li>
				<li><a href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artist.php">Artist</a></li>
				<li style="float:right"><a href="login.php">Logout</a></li>
				<li style="float:right"><a href="profile.php">Profile</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
	<div class="main">
		<div class = "cartelement">
				<input type = "text" placeholder ="image id" name = "imageid">
				<input type = "submit" name = "cartbutton" value = "Add to cart">
				<input type = "submit" name = "seecart" value = "See items">
		</div>
		 
	</div>
	</form>

</body>
</html>