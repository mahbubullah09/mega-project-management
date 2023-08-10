
<?php include 'connection.php'; ?>

<html>
<head>
<title>MPMS: Mega-Project Management System </title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="mycss.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
    <h2>LOGIN</h2>
    <form action="" method="post">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input name="user" type="text" placeholder="Username">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input name="pass" type="password" placeholder="Password">
        </div>
        
        <button type="submit" name = "submit">Sign In</button>

        <div class="extra">
            <a href="reg.php">Registration</a>
            
        </div>

    </form>
</div>




<?php

if(isset($_POST['submit']))
{
   

$user= $_POST['user'];
$pass= $_POST['pass'];
$query= "SELECT * FROM member WHERE User='$user' && Pass='$pass'  " ;
    
 $data=mysqli_query($con, $query);
 $total = mysqli_num_rows($data);
if($total==1)
{
  $_SESSION['Name']=$user;  
  header('location:Home.php');
}

else 
{
    ?>
    <script type="text/javascript">
        alert("Failed!!");
        </script>
        <?php
        }

}
?>

</body>
</html>