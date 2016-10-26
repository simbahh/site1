<?php //require_once 'includes/func.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>GreenCrunch Airways</title>
	<link rel="stylesheet" href="css/style.css">
  
  <link rel="stylesheet" type="text/css" href="css1/styles.css">
  <script src="jss/func.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
  <script src="bootstrap/js/jquery-2.2.3.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <link rel="icon" type="image/png" href="icons/database.png">
	
	<script src="js/bootstrap.js"></script>


		
</head>
<body>

<h1 style="color:#009688" ><span class="glyphicon glyphicon-plane">GreenCrunch Airways</span></h1>
<center><h6>Lets go places</h6></center>
<?php 
	require_once 'widgets/nav.php';
	?><div class="container theBodyTheText">
  <h1>Fill in your Details to book a flight</h1>

	

       <form action="contact.php" method="post"> 
	      <div class="row">
               <div class="form-group">
  					<label class="col-lg-4" for="sel1">Title</label>
          <select class="col-lg-4" id="sel1" name="title">
            <option name="title" value="Mr">Mr</option>
            <option name="title" value="Mrs">Mrs</option>
            <option name="title" value="Miss">Miss</option>
          </select>

				</div>
			</div>  </p>
              <div class="row">
            <div class="col-lg-4">id Number/Passport Number: </div>  
                <div class="col-lg-4"><input type="text" name="id" id="fn" placeholder="Enter id number" class="form-control" required /> </div> 
         </div> </p>        
                


         <div class="row">
         		<div class="col-lg-4">First Name: </div>  
                <div class="col-lg-4"><input type="text" name="fn" id="fn" placeholder="Enter first name" class="form-control" required /> </div> 
         </div> </p> 
 
          <div class="row"> 
              <div class="col-lg-4">Last Name: </div>                     
              <div class="col-lg-4"> <input type="text" placeholder="Enter last name" name="sn" id="sn" class="form-control" required/>
              </div>   
          </div> </p>

          <div class="row"> 
                <div class="col-lg-4">E-mail Adress: </div>                   
                <div class="col-lg-4"> <input type="email" name="email" placeholder="Enter your email address" id="email" class="form-control" required/></div>   
           </div></p>
           <div class="row"> 
				<div class="col-lg-4">Cellphone: </div> 
            <div class="col-lg-4"> 
                        <input type="text" name="cellphone" id="cellphone"  placeholder="Enter your cellphone number"  class="form-control" required/> 
             </div>
             </div>

             <h1>How would you like to pay..</h1>
             <h4 style="color:#009688">your flight cost<?php
include 'connections.php';
$id=$_GET['id'];
$x = "SELECT * FROM flight WHERE id=$id";
$res = $con->query($x);
$row=$res->fetch();
echo "$".$row[9].".00";

  ?></h4>

             <div class="row">
                      <div class="col-lg-4"> 
                      <input type="radio" name="pay" value="Paid using Mobile Money" id="gender_0" required/>   Mobile Money(Ecocash, Telecash, Nettcash)  </div>
                       <div class="col-lg-4">
                      <input type="radio" name="pay" value="Paid using Master Card" id="gender_1" required/> Card (Visa, Mastercard)     </div>
                      
                      <div class="col-lg-4"> <input type="radio" name="pay" value="Will pay later" id="gender_0" required/>   Pay Later </div>
</div>
                     <input type="submit" value="Book" name="book">
                </form>
              </div>
<div class="footer-w3l">
    <p class="agileinfo" style="color:#009688"> &copy; 2016 Greencrunch all rights reserved | Design by Gumunyu Trevor Simbarashe</p>
  </div>
</body>
</html>