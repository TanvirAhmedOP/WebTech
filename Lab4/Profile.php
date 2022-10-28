<?php
session_start();
?>

<!DOCTYPE html>

<html>
     <fieldset>
	 <head>
	     <title> Profile </title>
	 
	 </head>
	     
	 <body>
	 
	    <br> 
		
		   <div> 
			<h2>
		   

		       <a style="color:SlateBlu;" href="Home.php">  Logout </a>  
		       
		 
		  
		   </h2>
		   
		  <hr>
		  
		</div> 
			
		   
           
		
			 
		   <div>
		   
		   
			<fieldset><fieldset>
		    <legend align="center"><h1> PROFILE </h1></legend>
			
			<h3 align="center">
		    
			<img  src="1.png" height="200px" width="250px"  > </img> <br>
			<a align="right" href=" "> Change </a> <br><br>
			
			
			
		      Name <span style="color: rgb(255, 255, 255);"> </span>:<?php  echo $_SESSION["name"]?><hr>
	          Email <span style="color: rgb(255, 255, 255);"> </span> : <?php  echo $_SESSION["email"]?> <hr>
		      Gender<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["gender"]?> <hr>
		      Date of Birth <span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["dob"]?> <hr>

		   
		    <a tyle ="color:SlateBlu;"  href=" "> Edit Profile </a>
			
			</h3>
			</fieldset>
		    </fieldset>
			
		</div>
		
		   <div align="center">
		   
		    <hr>
		   
		   <h4> <span style="color: rgb(140, 140, 140);"> Copyright @  <?php echo date(2022);?> </span> </h4>
		   
		   </div>
		   
	 </body>
	 </fieldset>
</html>
