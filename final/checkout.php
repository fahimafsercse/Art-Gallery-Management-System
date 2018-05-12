
<?php
if(isset($_POST['cartbutton'])){
	$imageid = htmlspecialchars($_POST['imageid']);
	if($imageid!=""){
	
	$imageid = htmlspecialchars($_POST['imageid']);
	$userid="";
	
	$link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
	mysqli_select_db($link,"oag") or die ("that database could not be found");
	//echo $usertype;
	$userquery = mysqli_query($link,"SELECT * FROM currentuser WHERE currentid=1") or die ("the query could not be completed, pls try again later");
	if(mysqli_num_rows($userquery) != 1){
		die ("that username could not be found");	
	}
	else{
		
		while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
			$userid = $row['userid'];
		}
		$conn = mysQli_connect("localhost", "root","","oag");
		if(!$conn)
				echo"Connection unsuccessful".mysQli_connect_error;
		else{
			//echo"Connection successful";
			$sql  = "INSERT INTO cart(userid,imageid)
			VALUES('$userid', '$imageid');";
			
			if(mysqli_query($conn,$sql)){
				echo "<script type=\"text/javascript\"> 
					alert(\"Added to cart.\"); 
				</script>";
			}
			else{
				echo "<script type=\"text/javascript\"> 
					alert(\"Sorry\"); 
				</script>";
			}
		}
	}
	}
	else{
		echo "<script type=\"text/javascript\"> 
					alert(\"Add imageid please.\"); 
				</script>";
		
	}
}	
if(isset($_POST['seecart'])){
	
	
	
	$link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
	mysqli_select_db($link,"oag") or die ("that database could not be found");
	//echo $usertype;
	$userquery = mysqli_query($link,"SELECT * from cart") or die ("the query could not be completed, pls try again later");
	if(mysqli_num_rows($userquery) != 1){
		die ("no item found");	
	}
	else{
		while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
			$userid = $row['userid'];
			$imageid = $row['imageid']; ?>
			<label class = "imgid" > userid : <?php echo $userid; ?> </label>
			<label class = "imgid"> imageid :<?php  echo $imageid; ?> </label><br>
			<?php
		}
		}
	
	
}
	
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<link rel="stylesheet" href="css/indexstyle.css">
	<link rel="stylesheet" href="css/painting.css">
</head>

<body>
	<form action= "<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
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
		<table class="table table-bordered">  
                     <tr>  
                          <th>ALL ITEMS</th>  
                     </tr>  
                <?php
				$connect = mysqli_connect("localhost", "root", "", "oag");				
                $query = "SELECT * FROM cart";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                    /* echo '  
                          <tr>  
                               <td> 
									<label></label>
                               </td>  
                          </tr>  
                     ';  */
					 ?><label>USER id : </label><?php
					 echo $row['userid'];
					 echo " ";
					 ?><label>Image id : </label><?php
					 echo $row['imageid'];
					 echo "";
					 ?><br><?php
					 
                }  
                ?>  
                </table>
				
				<input type = "submit" name = "checkout" value ="Checkout">
	
	</form>

</body>
</html>