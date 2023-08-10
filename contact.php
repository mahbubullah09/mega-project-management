<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="css4.css">
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
    <h1> Contact Information</h1>
<div class="cards">
    <div class="card">
        <img class="card__image" src="shw.png" alt="">
        <div class="card__content">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>  Shewrapara</div>
                <div><i class="fas fa-envelope"></i>  metrorail1971@gmail.com</div>
                <div><i class="fas fa-phone"></i> +232 456 250 340</div>
                <div><i class="fas fa-clock"></i> Sat - Thu 8:00 AM-8:00 PM</div>
              </div>
        </div>
        <div class="card__info">
          <div>
            <i class="fas fa-phone"></i>310
          </div>
          <div>
            <a href="./" class="card__link">View Details</a>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card__image" src="kazi.jpg" alt="">
        <div class="card__content">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i> Kazipara</div>
                <div><i class="fas fa-envelope"></i>  metrorail1975@gmail.com</div>
                <div><i class="fas fa-phone"></i> +952 756 950 090</div>
                <div><i class="fas fa-clock"></i> Sat - Thu 8:00 AM-8:00 PM</div>
              </div>
        </div>
        <div class="card__info">
          <div>
            <i class="fas fa-phone"></i>478
          </div>
          <div>
            <a href="./" class="card__link">View Details</a>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card__image" src="mir 10.jpeg" alt="">
        <div class="card__content">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>  Mirpur 10</div>
                <div><i class="fas fa-envelope"></i>  metrorail1979@gmail.com</div>
                <div><i class="fas fa-phone"></i> +892 356 850 240</div>
                <div><i class="fas fa-clock"></i> Sat - Thu 8:00 AM-8:00 PM</div>
              </div>
        </div>
        <div class="card__info">
          <div>
            <i class="fas fa-phone"></i>412
          </div>
          <div>
            <a href="./" class="card__link">View Details</a>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card__image" src="mir 11.jpeg" alt="">
        <div class="card__content">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>  Mirpur 11</div>
                <div><i class="fas fa-envelope"></i>  metrorail1983@gmail.com</div>
                <div><i class="fas fa-phone"></i> +572 755 450 120</div>
                <div><i class="fas fa-clock"></i> Sat - Thu 8:00 AM-8:00 PM</div>
              </div>
        </div>
        <div class="card__info">
          <div>
            <i class="fas fa-phone"></i>790
          </div>
          <div>
            <a href="./" class="card__link">View Details</a>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card__image" src="purobi.jpeg" alt="">
        <div class="card__content">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>  Pallabi</div>
                <div><i class="fas fa-envelope"></i>  metrorail1987@gmail.com</div>
                <div><i class="fas fa-phone"></i> +170 896 350 066</div>
                <div><i class="fas fa-clock"></i> Sat - Thu 8:00 AM-8:00 PM</div>
              </div>
        </div>
        <div class="card__info">
          <div>
            <i class="fas fa-phone"></i>653
          </div>
          <div>
            <a href="./" class="card__link">View Details</a>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card__image" src="north.jpeg" alt="">
        <div class="card__content">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>  Uttara South</div>
                <div><i class="fas fa-envelope"></i>  metrorail1989@gmail.com</div>
                <div><i class="fas fa-phone"></i> +792 836 250 840</div>
                <div><i class="fas fa-clock"></i> Sat - Thu 8:00 AM-8:00 PM</div>
              </div>
        </div>
        <div class="card__info">
          <div>
            <i class="fas fa-phone"></i>953
          </div>
          <div>
            <a href="./" class="card__link">View Details</a>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card__image" src="um.jpg" alt="">
        <div class="card__content">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>  Agargoan</div>
                <div><i class="fas fa-envelope"></i>  metrorail1998@gmail.com</div>
                <div><i class="fas fa-phone"></i> +662 856 257 940</div>
                <div><i class="fas fa-clock"></i> Sat - Thu 8:00 AM-8:00 PM</div>
              </div>
        </div>
        <div class="card__info">
          <div>
            <i class="fas fa-phone"></i>876
          </div>
          <div>
            <a href="./" class="card__link">View Details</a>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card__image" src="agaon.png" alt="">
        <div class="card__content">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>  Uttara Center</div>
                <div><i class="fas fa-envelope"></i>  metrorail1993@gmail.com</div>
                <div><i class="fas fa-phone"></i> +705 876 250 364</div>
                <div><i class="fas fa-clock"></i> Sat - Thu 8:00 AM-8:00 PM</div>
              </div>
        </div>
        <div class="card__info">
          <div>
            <i class="fas fa-phone"></i>754
          </div>
          <div>
            <a href="./" class="card__link">View Details</a>
          </div>
        </div>
      </div>
  </div>
</body>
</html>