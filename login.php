<html>
	<head>
		<style>
		
		</style>
	</head>
	<body>
	<?php
$db="policy";
$user="root";
$pass="";
$host="localhost";

$connect=mysqli_connect($host,$user,$pass,$db);
if(!$connect){
	echo"db not connect";
}
if(!empty($_POST)){
	
	$mail=$_POST['email'];
	$passw=$_POST['password'];

	
if($mail==''){
	echo"this field is required";
	}else if($passw==''){
	echo"this field is required";
	}else{
	$sql="SELECT * FROM `registration` WHERE `email`='$mail' and `password`='$passw'";
if(mysqli_query($connect,$sql)){
	echo"done";
	header("location:index.php");

}else{
echo"plz register..";
}
	}

}
?>

		<h2>Log in form</h2>
		<form class="form" method="post" action="">
			Log in:<br>
			 <input type="email" Name="email" placeholder=" Username"><br>
			Password:<br>
			 <input type="password" Name="password" placeholder="Password"><br>
			Submit:<br> 
		     <input type="submit" value="submit">
		</form>
	</body>
</html>