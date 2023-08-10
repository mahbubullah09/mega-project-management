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
    <h2> Registration</h2>
    <form action="reg.php"  method="post">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input name="mail" type="text" placeholder="Username">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input name="Password" type="password" placeholder="Password">
        </div>
        
        <button type="submit" name = "submit">Resistration</button>

        <div class="extra">
            <a href="member.php">Log In</a>
            
        </div>

    </form>
</div>



<?php

if(isset($_POST['submit'])){
  

    $mail = $_POST['mail'];
    $pass = $_POST['Password'];


    $query="INSERT INTO member (User, Pass) values ('$mail', '$pass')";
    $data=mysqli_multi_query($con,$query);

    if($data) {
        ?>
        <script type="text/javascript">
            alert("Saved Succesfully:");
            </script>
            <?php
    }

    else { ?>
        <script type="text/javascript">
            alert("Try again!!");
            </script>
            <?php
            }

}

?>

</body>
</html>