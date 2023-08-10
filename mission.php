<?php 
include "connection.php";

$sql="select * from mission";
$all_service=$con->query($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>MPMS: Mega-Project Management System </title>

<link rel="stylesheet" href="css0.css">

</head>
<body   >

  <div class="header">
    <h1>Physio Support</h1>
    <p style="color: black;">24/7 survice</p>
  </div>

<div class="topnav">
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="service.php">Service</a>
  
  <a href="A.php">Appoinment</a>

  <a href="mission.php"> Mission</a>
  <a href="contact.php">Contact Us</a>
  
 
  <div class="login-container">
<form action="" method="post">
<button name="lg" type="submit"> Log Out </button>
</form>

</div>


</div>

<?php
if(isset($_POST['lg']))
{
  header('location:logout.php');
}
?>

<?php
while($row = mysqli_fetch_assoc($all_service)){ 

?>  

  <div class="mission">
   <h3>Our Mission</h3>
   <ul>
    <li><?php echo $row["m1"]; ?>  </li> <br>
    <li><?php echo $row["m2"]; ?> </li>
         <br>
    <li><?php echo $row["m3"]; ?>  </l>
   
   </ul>
  
 
  <br>
  <br>
  <h3>Our Values</h3>
  <ul>
   <li><?php echo $row["m4"]; ?> </li>
    <br>
   <li><?php echo $row["m5"]; ?> </li>
    <br>
   <li><?php echo $row["m6"]; ?> </li>
  
  </ul>

    
   </div>

   <?php
}
?>

  
  
</body>
</html>