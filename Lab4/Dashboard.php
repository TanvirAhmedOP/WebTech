<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
	<title> DASHBOARD </title>  
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<fieldset>
	 <div>  
		<p><h1 align="center">
           <span style="color:indianred"> Foody </span>
           <span style="color:indigo;"><sup> TM</sup></span>
           </h1>
        </p>
		   <h3 align= "right">
		   	<span> Welcome </span>
           <span style="color:purple"> <?php echo $_SESSION["name"]?> </span>
		   <span><a style="color:purple;" href="Home page.php"> | Logout </a></span>
           </h3>
		<hr>  
	</div> 
		
	<div>
		<fieldset>
		
				
           		<h2 align="right">
           			<a style ="color:teal;" href="Dashboard.php"> | Dashboard </a>
                	<a style ="color:teal;" href= "My Profile.php"> | My Profile</a> 
    
		    	</h2>
		   
		    <br>
	<?php
    include "Footer.php";
    ?>
	</fieldset>
	</fieldset>
	</div>
</h1>
</body> 
</html>	