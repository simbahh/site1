<?php
$username = 'root';
$password = '';
$database = 'flights1';
$host = 'localhost';
try {
$con = new PDO("mysql:host=$host; dbname=$database",
$username, $password);
} 



catch (PDOException $e) {
echo $e->getMessage();
exit();
}

if($con){
	echo "<br>";
}
else{ echo "could not connect";}
?>