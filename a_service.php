<?php 
include "connection.php";

$sql="select * from idp ";
$all_service=$con->query($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link rel="stylesheet" href="css2.css">
<link rel="stylesheet" href="css4.css">


</head>
<body   >


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
<?php
while($row = mysqli_fetch_assoc($all_service)){ 

?>  

  <div class="myDiv">
  
   
  <h2>Tender ID: <?php echo  $row["TI"]; ?>  </h2>
  <h2> Deadline: <?php echo  $row["dt"]; ?>  </h2>

  <p><?php echo $row["details"]; ?>   </p>
  
 
     
     <a href="delete.php?did=<?php echo $row["id"]; ?>" style="    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;">Delete</a>
      
    </div>
  </div>
 

<?php
}
?>

</body>
</html>