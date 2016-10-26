<?php //require_once 'includes/func.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>GreenCrunch Airways</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.css">
	
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css1/styles.css">
	<script src="jss/func.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	
	<script src="js/bootstrap.js"></script>


		
</head>
<body class='theLoginBodyPageCss'>

<h1 style="color:#009688" ><span class="glyphicon glyphicon-plane">GreenCrunch Airways</span></h1>
<center><h6>Lets go places</h6></center>
<?php 
	require_once 'widgets/nav.php';
	?><div class="container">
  <center><h3>Log in to view your flight details</h3></center>

	

       <form action="contact.php" method="post"> 
	      
              <div class="row">
            <div class="col-lg-4"><div style="color:white">id Number/Passport Number: </div></div>  
                <div class="col-lg-4"><input type="text" name="ide" id="nfn" placeholder="Enter your id number eg 202020202" class="form-control" required /> </div> 
         </div> </p>    
         <div class="row">
            <div class="col-lg-4"><div style="color:white">Ticket Number </div></div>  
                <div class="col-lg-4"><input type="text" name="tn" id="bfn" placeholder="Enter your ticket number eg 3737" class="form-control" required /> </div> 
         </div>      
               <input type="submit" value="View Booking" name="login"></div>
               </form>
</div>
		
	<div class="footer-w3l">
		<p class="agileinfo" style="color:#009688"> &copy; 2016 Greencrunch all rights reserved | Design by Gumunyu Trevor Simbarashe</p>
	</div>
</body>
</html>