<?php

include 'connections.php';


if (isset($_POST['send'])){
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
while($row = $result->fetch())

{?><html><p style="color:green"><a href="book.html"><?php
echo $row[0];?>&nbsp&nbsp&nbsp<?php
echo$row[1];?>&nbsp&nbsp&nbsp<?php
echo$row[2];?>&nbsp&nbsp&nbsp<?php
echo$row[3];?>&nbsp&nbsp&nbsp<?php
echo$row[4];?>&nbsp&nbsp&nbsp<?php
echo$row[5];?>&nbsp&nbsp&nbsp<?php
echo$row[6];?>&nbsp&nbsp&nbsp<?php
?></p></a></html><?php


}












}
?>
