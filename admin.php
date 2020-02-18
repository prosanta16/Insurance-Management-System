<html>
 <head>
    <link rel="stylesheet" href="style.css"/>
 </head>
 <body>
 
       
	           <div id="menu">
		 <ul>
		 <li> <a href="home.php">Home<a></li>
		 <li> <a href="">About<a></li>
		 <li> <a href="">Insurance<a></li>
		 <li> <a href="">Registration<a></li>
	    <li> <a href="login.php">Admin</a></li>  
		 </ul>
		 </div> 
		 <marquee>	<h1 style="color:red">WELCOME TO ONLINE INSURANCE MANAGEMENT SYSTEM...!!!</h1> </marquee>
		 <html>
 <body>
     <form method="post">
      <table border="2" align="center">
	    <tr>
		    <td style="color:black">Username</td>
		    <td> <input type ="text" name="username"></td>
		</tr>
		<tr>
		 <td style="color:black">Password</td>
		    <td> <input type ="password" name="password"></td>
		</tr>
		<tr>
		 
		    <td align="center" colspan="2"> <input type ="submit" name="submit"></td>
		</tr>
		</table>
	</form>	
 </body>




         <?php
		 session_start();
		  $con=mysqli_connect("localhost","root","","ims");
		  if(isset($_REQUEST["submit"]))
		  {
			  $username=$_REQUEST["username"];
			    $password=$_REQUEST["password"];
				$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' && password='$password'");
				$rowcount=mysqli_num_rows($query);
				if($rowcount==true)
				{
					$_SESSION["username"]=$username;
					header('location:admin.php');
				}
				else
				{
					header('location:admin1.php');
					
				}
		  }
		  
		 
		 ?>

	   
	  
	  </html>
 

