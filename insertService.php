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
    <h2> Insert Tender</h2>
    <form action="insertService.php"  method="post">
        <div class="input-field">
        <input name="Header" type="text" placeholder="Tender ID">
        </div>


       

        <div class="input-field">
         <label for="">Last Date</label>
         <input type="date" name="date" class="form-control" />
          </div>

          <div class="input-field">
        <textarea name="details" rows="10" cols="50" ">
              </textarea>
        </div>


        <button type="submit" name = "submit">Insert</button>
        <div class="extra">
            <a href="Home.php">Back to Home</a>
           
        </div>
        </form>
</div>



<?php

if(isset($_POST['submit'])){
  

    $header = $_POST['Header'];
    $LD = date('Y-m-d', strtotime($_POST['date']));
    $details = $_POST['details'];


    $query="INSERT INTO `idp`(`TI`, `dt`, `details`) VALUES  ('$header', '$LD', '$details')";
    $data=mysqli_query($con,$query);

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