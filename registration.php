<?php
$db = "ims";
$user = "root";
$pass = "";
$host = "localhost";

$connect = mysqli_connect($host, $user, $pass, $db);
if ($connect) {
    echo"db  connect";
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$city=$_POST['city'];
	$distinct=$_POST['distinct'];
    $mail = $_POST['email'];
    $passw = $_POST['password'];
    $c_password = $_POST['c_password'];
    $pnum = $_POST['phone_number']; 

    
        $sql = "INSERT INTO registration(name,gender,dob,city,distinct,emaill,password,cp,phnum)
                 VALUES('$name','$gender','$dob','$city','$distinct','$mail','$passw',' $c_password ','$pnum')";
        if (mysqli_query($connect, '$sql')) {
            echo"done";
        }
    
}
?>


<html>
    <head><title>registration</title>
        <link href="css/reg.css" rel="stylesheet" type="text/css"/>

    </head>
</head>
<body>

    <form method="post" action="">
        <h1 class="header" align="center"> Registration</h1>
        <div >
            <input type="text" name="name" placeholder="name" required>
        </div>
		<div >
            <b>Gender:</b><br>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">female

        </div>
        Date:<br>
        <input type="date" name="dob" required>
        </div>
		 <div >
            <input type="text" name="city" placeholder="city" required>
        </div>
		 <div >
            <input type="text" name="distinct" placeholder="distinct" required>
        </div>
       
        <div>
            <input type="email" name="email" placeholder="email" required>
        </div>
        <div >
            <input type="password" name="password" placeholder="password" required>
        </div>
        <div >
            <input type="password" name="c_password" placeholder="confirm password" required>
        </div>
        <div >
            <input type="number" name="phone_number" placeholder="phone_number" required>
        </div>
        
        <div >

            <input class="div1" type="submit" name="submit">
        </div>
    </form>
</body>
</html>