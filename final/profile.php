
<?php
	$email="";
	$firstname = "";
	$lastname ="";
	$userid = "";
	$earning ="";
	$address = "";

	$link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
	mysqli_select_db($link,"oag") or die ("that database could not be found");
	$userquery = mysqli_query($link,"SELECT * FROM currentuser where currentid = 1") or die ("the query could not be completed, pls try again later");
	if(mysqli_num_rows($userquery) != 1){
		die ("that username could not be found");	
	}
	else{

		while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
			$email = $row['email'];
		}

		//$userquery = mysqli_query($link,"D * FROM user") or die ("the query could not be completed, pls try again later");
		//$link = mysqli_connect("localhost","root","","user") or die ("could not connect to server");
		//mysqli_select_db($link,"user") or die ("that database could not be found");
		$userquery = mysqli_query($link,"SELECT * FROM user WHERE email='$email'") or die ("the query could not be completed, pls try again later");
		if(mysqli_num_rows($userquery) != 1){
		die ("that username could not be found");
			
		}else{
			while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$email = $row['email'];
				$userid = $row['userid'];
				$earning = $row['earnings'];
				$address = $row['address'];
			}
		}
	}
?>
<html>
	<head>
		<title>User Profile</title>
		<link rel = "stylesheet" type ="text/css" href = "Profile.css">
		<link rel="stylesheet" href="css/indexstyle.css">
	</head>
	<body>
		  
		<div class="mainmenu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a href="photography.php">Photography</a></li>
				<li><a href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artist.php">Artist</a></li>
				<li style="float:right"><a href="index.php">Log out</a></li>
				<li style="float:right"><a href="profile.php">Profile</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
		<form action = "edituserprofile.php" method = "POST">
		<h1 style = "color:white;font-size:50px;margin-left:29%;color:black" >User Profile's Information</h1>
		<div id = "signupfrm">
			
			<h1>Welcome <?php echo $firstname ?></h1>
				<p>
					<label>User ID :</label> <br>
					<input type = "text" id = "uname" name = "uname"  value = "<?php  echo $userid ?>" readonly />
				</p>
				<p>
					<label>First Name :</label> <br>
					<input type = "text" id = "uname" name = "uname"  value = "<?php  echo $firstname ?>" readonly />
				</p>
				<p>
					<label>Last Name :</label> <br>
					<input type = "text" id = "uname" name = "uname"  value = "<?php  echo $lastname ?>" readonly />
				</p>
				<p>
					<label>Email :</label><br>
					<input type = "text" id = "lastName" name = "email" value ="<?php  echo $email ?>" readonly />
				</p>
				
				<p>
					<label>Total Earnings :</label> <br>
					<input type = "text" id = "uname" name = "uname"  value = "<?php  echo $earning ?>" readonly />
				</p>
				
				<p>
					<label>Address :<label><br>
					<input type = "text" id = "email" name = "address" value = "<?php  echo $address ?> " readonly />
				</p>
				
				<p>
					<input type = "submit" name = "showimage" value = "See images" />
					<input type = "submit" name = "edit" value = "Edit Profile" />
			
					<input type = "submit" name = "delete" value = "Delete Profile" />

				</p>
				
			</form>
		</div>
		
	</body>
</html>