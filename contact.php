
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
<h1 style="color:#009688">GreenCrunch Airways</h1>
<center><h4>Lets go places....</h4></center>
<?php 
	require_once 'widgets/nav.php';
	?>
</p></p>
<body class="theBodyThe">
<?php

include 'connections.php';
//code to search for contact us

if (isset($_POST['contacts'])){
$a=$_POST['title'];
$b=$_POST['fn'];
$c=$_POST['sn'];
$d=$_POST['email'];
$e=$_POST['cellphone'];
$f=$_POST['contact'];
$st=$_POST['comment'];


$searchq = "INSERT INTO `visitors` (title,firstname, surname, email, cellphone, quick_contact,comment)
         VALUES 
         ('$a','$b','$c','$d', '$e','$f','$st') ";


if($con->query($searchq)){
            echo "Thank you for your response will come back to you soon...";
        }else{
            echo mysql_error();
        }
    }


    //code to search for a flight
    else if (isset($_POST['send'])){
$a=$_POST['city'];
$b=$_POST['city1'];
$c=$_POST['ddate'];
$d=$_POST['rdate'];
$e=$_POST['adults'];
$f=$_POST['children'];
$st=$_POST['clas'];




$searchq = " SELECT DISTINCT * FROM flight WHERE
`departure` LIKE '%$a%'
AND `destination` LIKE '%$b%'
AND `departure_date` LIKE '%$c%'
AND `arrival_date` LIKE '%$d%'
AND `number_of_adults` LIKE '%$e%'
AND `number_of_children` LIKE '%$f%'
AND `class`LIKE '%$st%'
LIMIT 0 , 30";


$result = $con->query($searchq);
echo "<table class='table table-bordered table-striped'>";
echo "<tr>";
echo "<th>From</th>";
echo "<th>To</th>";
echo "<th>Departure</th>";
echo "<th>Return</th>";
echo "<th>Class</th>";
echo "<th>Adult</th>";
echo "<th>Children</th>";
echo "<th>Departure Time</th>";
echo "<th>Price</th>";
echo "</tr>";
if($result->fetch()!=null){
while($row = $result->fetch())

{
echo "<tr>";
echo "<td><a href='book.php?id=$row[0]'>$row[1]</a></td>";
echo "<td><a href='book.php?id=$row[0]'>$row[2]</a></td>";
echo "<td><a href='book.php?id=$row[0]'>$row[3]</a></td>";
echo "<td><a href='book.php?id=$row[0]'>$row[4]</a></td>";
echo "<td><a href='book.php?id=$row[0]'>$row[5]</a></td>";
echo "<td><a href='book.php?id=$row[0]'>$row[6]</a></td>";
echo "<td><a href='book.php?id=$row[0]'>$row[7]</a></td>";
echo "<td><a href='book.php?id=$row[0]'>$row[8]</a></td>";
echo "<td><a href='book.php?id=$row[0]'>$row[9]</a></td>";
echo "</tr>";
}
echo "</table>";
}else{
	echo"sorry no flights available for your search";
}
}
else if (isset($_POST['book'])) {
$a=$_POST['title'];
$b=$_POST['fn'];
$c=$_POST['sn'];
$d=$_POST['email'];
$e=$_POST['cellphone'];
$f=$_POST['pay'];
$g=$_POST['id'];

$query = "INSERT INTO `bookings` (idnumber, title ,firstname , surname , email, cellphone, payment)
         VALUES 
         ('$g','$a','$b','$c','$d', '$e','$f') ";
//$result = $con->query($query);
if($result = $con->query($query)){

	echo"<script>alert('Booking Successful, Check your ticket number in your email')</script>";
	echo "<script>window.location('index.php')</script>";
	echo"Thank you for showing your trust in us";
}else{
	echo "error";
}


}

 elseif(isset($_POST['login']))
{
	$usernamee = $_POST['ide'];
	$password = $_POST['tn'];

	$select = "select * from bookings where `idnumber`='$usernamee' and `ticket`='$password'";
	$result = $con->query($select);

	if($result->fetch()!=null)
	{	$_SESSION['code']=$password;
		$_SESSION['user']=$usernamee;
		header('location:booked.php');
		
	}else{
		echo"<script>alert('id number does match with ticket number')</script>";
	}

}










?>
</body>