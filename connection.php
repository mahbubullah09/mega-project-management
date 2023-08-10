<?php
$host="localhost";
$user="root";
$pass="";
$db="physio";


$con=mysqli_connect($host,$user,$pass,$db);

if(!$con) echo"Not Connect"; 



?>