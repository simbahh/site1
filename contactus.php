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
<center><h4>Lets go places....</h4></center>
<?php 
	require_once 'widgets/nav.php';
	?>
</p></p>
<div class="row">
<div class="col-md-8">
 <form action="contact.php" method="post"> 

	<div class="theBodyTheText">
	   <h3 style="color:#009688">Please fill comfortable completing the form below...</h3></p></p>
      
	      <div class="row">
               <div class="form-group">
  					<label class="col-lg-4" style="color:#009688" for="sel1">Title</label>
					<select class="col-lg-4" id="sel1" name="title">
						<option name="title" value="Mr">Mr</option>
						<option name="title" value="Mrs">Mrs</option>
						<option name="title" value="Miss">Miss</option>
					</select>

				</div>
			</div>  </p>
                     
                


         <div class="row">
         		<div class="col-lg-4" style="color:#009688">First Name: </div>  
                <div class="col-lg-4"><input type="text" name="fn" id="fn" replacement="Enter first name" class="form-control" required /> </div> 
         </div> </p> 
 
          <div class="row"> 
              <div class="col-lg-4" style="color:#009688">Last Name: </div>                     
              <div class="col-lg-4"> <input type="text" replacement="Enter last name" name="sn" id="sn" class="form-control" required/>
              </div>   
          </div> </p>

          <div class="row"> 
                <div class="col-lg-4" style="color:#009688">E-mail Adress: </div>                   
                <div class="col-lg-4"> <input type="email" name="email" replacement="Enter your email address" id="email" class="form-control" required/></div>   
           </div></p>
           <div class="row"> 
				<div class="col-lg-4" style="color:#009688">Cellphone: </div> 
            <div class="col-lg-4"> 
                        <input type="text" name="cellphone" id="cellphone" class="form-control" required/> 
             </div>
             </div>

             
             <div class="row"> 
             <div class="form-group">
  					<h3 style="color:#009688">How would you like us to contact you</h3>
  					<div class="col-lg-4" style="color:#009688">Select option</div> 
					<select class="col-lg-4 frm-field required" id="sel1" name="contact">
						<option name="contact" value="use my email">Email</option>
						<option name="contact" value="use my cellphone">Cellphone</option>
					</select>

				</div>
			</div></p>

			<div class="col-lg-4" style="color:#009688">Comments </div> 
            <div class="col-lg-6"> 
                        <textarea name="comment" id="cellphone" required></textarea> 
             </div>

			<input type="submit" value="Send" name="contacts"></div>
                </form>
</div>
<div class="col-md-4">
	<div class='alert alert-info images1'>

	<h2>Air Zimbabwe Head Office</h2></p>
<ul>
<li><b>GreenCrunch Head Office</b></li>
</p></p>
<li>Harare Airport</li>
<li>Harare, Zimbabwe</li>
<li>Tel: +263-4-575111</li>
 </p></p>

<li><b>Harare Central Reservations</b></li>
</p></p>
<li><li>P.O.BOX AP1</li>
<li>Harare , Zimbabwe</li>
<li>Tel: +263-4 -575021</li>
<li>Email: reservations@airzimbabwe.aero</li>
 
</p></p>
<li><b>Air Zimbabwe Reservations Supervisor</b></li>
</p></p>
<li>Tel: +263 -4 -575143or 58202227</li>
<li>Mobile : +263 712 641 122</li>
<li>Email : lkuzvinzwa@airzimbabwe.aero</li></li>

 
</p></p>
<li><b>Harare City Town Office</b></li>
</p></p>
<li>Third St/Speke Avenue, Travel Centre</li>
<li>Harare, Zimbabwe</li>
<li>Tel: +263-4-251836</li>
<li>Mobile: + 263 712 831 470-72</li></li>

 
</p></p>


<li><b>Customer Services</b></li>
<li>Tel: +263 4 58202251 from 0500 to 2000</li></li>
<li>Mobile: +263 712 621 909 from 0500 to 2000</li>
 </p></p>

<li><b>Harare Airport Information Centre</b></li>
</p></p>
<li>For all other airlines</li>
<li>Tel: +263-4-585073-80</li></p></p>
</ul>
 </div>
</div>
</div>
                
<div class="footer-w3l">
		<p class="agileinfo" style="color:#009688"> &copy; 2016 Greencrunch all rights reserved | Design by Gumunyu Trevor Simbarashe</p>
	</div>

</body>
</html>