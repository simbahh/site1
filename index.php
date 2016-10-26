<?php //require_once 'includes/func.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>GoPlaces Airways Ticket Booking</title>
	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" type="text/css" href="css1/styles.css">
	<script src="jss/func.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<script src="bootstrap/js/jquery-2.2.3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="icon" type="image/png" href="icons/database.png">
	
</head>
<body>
<h1 style="color:#009688" ><span class="glyphicon glyphicon-plane">GreenCrunch Airways</span></h1>
<center><h6>Lets go places......</h6></center>
<?php 
	require_once 'widgets/nav.php';
	?>
</p></p>
<div class="row">
	<div class="col-md-8">
		<div class="">
	<center>
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Round Trip</span></li>		
				</ul>	
		</center>		
					
						<form action="contact.php" method="post">
							<div class="from">
								<h3><div style="color:white">From</div></h3>
								<input type="text" name="city" class="city1" placeholder="Type Departure City" required="required">
							</div>
							<div class="to">
								<h3><div style="color:white">To</div></h3>
								<input type="text" name="city1" class="city2" placeholder="Type Destination City" required="required">
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3><div style="color:white">Depart</div></h3>
									<input type="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" id="datepicker" name="ddate" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy-mm-dd';}" required="">
									
								</div>
								<div class="return">
									<h3><div style="color:white">Return</div></h3>
									<input type="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" id="datepicker1" name="rdate" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy-mm-dd';}" required="enter right format for date">
									
								</div>
								
							</div>
							<div class="class">
								<h3><div style="color:white">Class</div></h3>
								<select id="w3_country1" name="clas" onchange="change_country(this.value)" class="frm-field required">
								
									<option name="clas" value="Economy">Economy</option>  
									<option name="clas" value="Premium_Economy">Premium Economy</option>   
									<option name="clas"  value="Business">Business</option>   
									<option name="clas" value="First_class">First class</option>   						
								</select>

							</div>
							<div class="row">
							   <div class="col-lg-6">

								<h3><div style="color:white">adults</div></h3>
								<select id="w3_country1" name="adults" onchange="change_country(this.value)" class="frm-field required">
									<option name="adults" value="1">1</option>  
									<option name="adults" value="2">2</option>   
									<option name="adults"  value="3">3</option>   
									<option name="adults" value="4">4</option>   						
								</select>


								</div>
								<div class="col-lg-6">
                                
								<h3><div style="color:white">children</div></h3>
								<select  name="children"  class="frm-field required">
									<option name="children" value="1">1</option>  
									<option name="children" value="2">2</option>   
									<option name="children"  value="3">3</option>   
									<option name="children" value="4">4</option>   						
								</select>
								</div>


								</div>
							
							
							<input type="submit" value="Search Flights" name="send">
						</form>						
									
									
							</p></div>		
									
					
					</div>

	<div class="col-md-4">
		<div class="alert alert-info">
		<center>
			<h3> About GreenCrunch Airways </h3>
			GreenCrunch is a private limited Zimbabwean airline and our vision is to provide ‘Zimbabwean hospitality in the skies’, drawing on our proud legacy of safety, our exceptional pilots and solid customer service. We have a comprehensive technical and engineering base which holds approvals from civil aviation authorities of several countries in the region and beyond. This provides a platform for expansion opportunities in our domestic and external markets, with the option to consider alliances or partnerships with other airlines.Our engineers have been commended by Boeing, the world's leading aircraft manufacturer, for our sterling work in aircraft modifications and mandatory checks and services. This includes being the first airline to successfully execute a Strut Improvement programme on the B707s.
			</p><a href="aboutus.php"><b>view more</b></a>
		</center>

		</div>
	</div>
</div>
	
				
		
			
	<div class="footer-w3l">
		<p class="agileinfo" style="color:#009688"> &copy; 2016 Greencrunch all rights reserved | Design by Gumunyu Trevor Simbarashe</p>
	</div>




</body>
</html>