<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
 <title>MPMS: Mega-Project Management System </title>

<link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">


<style type="text/css">
 
 *{
   margin: 0px;
}

h1{
 text-align: center;
}
p{
 font-size: 55px;
}

.header1{

font-family: 'Dokdo', cursive;
font-size: 30px;
padding: 20px;
background-color: rgb(208, 221, 233);
}
.main{
      margin-left: 120px;
        width: 100%;
        margin-top: 40px;
}
.box{
 width: 20%;
 float: left;
 padding: 7px;
 padding-left: 10px;  
 display: block;

}

img{
 width: 100%;
    border-radius: 4px;

}

img:hover{
  transform: scale(1.3,1.3);
  transition: .3s transform;

}
.topnav {
    overflow: hidden;
    background-color: #333;
    
  }
  
  /* Style the top navigation bar */
  .bottomnav {
    overflow: hidden;
    background-color: #d2a679;
    color:red;
    font-size:20px;
    
    
  }
  
  /* Style the topnav links */
  .topnav a {
    float: left;
    display: block;
    color: tomato;
    text-align: center;
    padding: 25px 25px;
    text-decoration: none;
    font-size:25px;
    font-weight: bold;
  }
  
  /* Change color on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  .topnav .login-container button {
  
      float: right;
      padding: 6px;
      margin-top: 2%;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }
    
    .topnav .login-container button:hover {
      background: #ccc;
    }


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
    
<div class="header1">
 
 <h1>
    Construction Company of Metro rail <p>Dhaka Mass Transit Company</p>
</h1>


</div>

<div class="main">
 <div class="box">
<img src="simex.png"></div>
<div class="box">
<img src="download.png"></div>
<div class="box">
 <img src="Orion.png"></div>
<div class="box">
<img src="Sheltech.jpg"></div>
<div class="box">
<img src="images.png"></div>
<div class="box">
<img src="al.svg.png"></div>
<div class="box">
<img src="naif.jfif"></div>
<div class="box">
    <img src="uniqu.png"></div>
<div class="box">
</div>



</body>
</html>