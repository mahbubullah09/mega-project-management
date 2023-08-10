<?php 
include 'connection.php'; 
if(isset($_GET['did'])){
$id=$_GET['did'];



$sql="DELETE FROM idp WHERE idp.id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header('location:a_service.php');

}
else{
    ?>
    <script type="text/javascript">
        alert("Failed!!");
        </script>
        <?php
        }

}





?>

