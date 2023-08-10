<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>MPMS: Mega-Project Management System </title>
<link rel="stylesheet" href="css4.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



</style>
</head>

<body>

  
    <div class="topnav">
    <a href="Home.php">Project Details</a>
        <a href="insertService.php">Add Tenders</a>
        <a href="a_service.php">Tenders List</a>
        <a href="stack.php">Stake Holders</a>
        <a href="contact.php">Emergency Contacts</a>
  
 
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
<div class="header">
  <h1>Project Details</h1>
</div>





	
	<div class="about">
    <h2>About Matro Rail</h2>
	</div>

  <img class="img" src="a.jpg">
 
  
	<div class="paragraph">
	<p> The Dhaka Metro Rail is a mass rapid transit system serving Dhaka,
    the capital city of Bangladesh. It is owned, and operated by the Dhaka Mass Transit Company Limited.
     Together with a proposed subway system it is expected to reduce traffic congestion in the city. 
     It is part of the Strategic Transport Plan outlined by the Dhaka Transport Coordination Authority.
   The network is planned to contain six lines, with the first section of MRT Line 6 commencing commercial
    operations on 29 December 2022, and the other lines being either in planning or under construction.
     The construction of MRT Line 6's second section is scheduled to be completed during 2023.
     The third phase, which will have an interchange with Line 1, Line 2 and Line 4, is set to be completed by 
     2026. Further expansion of MRT Line 6 is planned, with the hope of extending it towards Tongi
      in Gazipur City and the city of Savar.</p>
  </div> 
  <div class="data">
    <a href="#" class="hire">More Details</a>
    </div>

</body>

</html>
