<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" media="screen" href="/phpmotors/css/styles.css">
</head>
<body>
  <div class="content-wrapper">
    <header>
      <div class="header-wrapper">
        <img src="images/site/logo.png" alt="site-logo">
        <div class="account">
          <p>
            <a href="#">
              My Account
            </a>
          </p>
        </div>
      </div>
    </header>
    <nav>
      <div class="nav-wrapper">
        <?php echo $navList; ?>
      </div>
    </nav>
    <main>
      <div class="main-wrapper">
        <h1>
          Vehicle Management
        </h1>
        <a href="/phpmotors/vehicles/?action=addClassification">Add Classification</a>
        <a href="/phpmotors/vehicles/?action=addVehicle">Add Vehicle</a>
      </div>
    </main>
    <hr>
    <footer>
      <div class="footer-wrapper">
        <p>©PHP Motors, all rights reserved.</p>
        <p>All images used are believed to be in "fair use". Please notify the author if they are not and they will be removed.</p>
        <p>Last updated: 16 May , 2022</p>
      </div>
    </footer>
  </div>
</body>
</html>