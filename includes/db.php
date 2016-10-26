<?php
$servename="localhost";
$username="root";
$password="";
$database="booking";

try{
	$handle=new PDO("mysql:host=$servename;dbname=$database", $username, $password);
	$handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection to server or databse failed please try again later";
	exit();

}

?>