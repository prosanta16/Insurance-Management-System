<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
 <script>
        var	i=0;
        var images=[10];
        var time=1500;
        images[0]='image/t1.jpg';
		images[1]='image/t2.jpg';
		images[2]='image/t3.jpg';
		images[3]='image/t4.jpg';
		//images[4]='image/th(3).jpg';
		//images[5]='image/th(5).jpg';
		function changeImg()
		{
		document.slide.src=images[i];
		if(i<images.length)
		i++;
		else
		{i=1;}
		setTimeout("changeImg()",time);
		}
		window.onload=changeImg;
		</script>
		<img name="slide" width="980" height="300">







 <div id="menu">
		 <ul>
		 <li> <a href="home.php">Home<a></li>
		 
		 <li> <a href=".php">About<a>
		 /////<li> <a href="registration.php">Registration<a>
		 <li> <a href="buy.php">Buy<a>

		     
			 </li>
		
		 <li> <a href="">Insurance<a>
		 <ul>
		 <li> <a href="cls1_result.php">Health Insurance<a></li>
		 <li> <a href="cl2_result.php">Life Insurance<a></li>
		 <li><a href="cl3_result.php">Car Insurance<a></li>
		
		 		 
		 
			 </ul></li>
		 <li> <a href="admin.php">Admin</a></li>  
		 </ul>
		 </div> 
		 </body>
		 </html>