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
            <a href="accounts/index.php/?action=login">
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
        <h1 class="title">
          Welcome to PHP Motors!
        </h1>
        <div class="home-content">
          <div class="dmc-info">
            <p>DMC Delorean</p>
            <p>3 Cup holders</p>
            <p>Superman doors</p>
            <p>Fuzzy dice!</p>
          </div>
          <img src="images/delorean.jpg" alt="" class="car-image">
          <a href="#" class="button">
            <p>
              Own Today
            </p>
          </a>
          <div class="reviews">
            <h2 class="subtitle">
              DMC Delorean Reviews
            </h2>
            <ul>
              <li>"So fast its almost like traveling in time." (4/5)</li>
              <li>"Coolest ride on the road." (5/5)</li>
              <li>"I'm feeling Marty McFly!" (5/5)</li>
              <li>"The most futuristic ride of our day." (5/5)</li>
              <li>"80's livin and I love it!"(5/5)</li>
            </ul>
          </div>
          <div class="upgrades">
            <h2 class="subtitle">
              Delorean Upgrades
            </h2>
            <div class="upgrade-sections">
              <div>
                <div class="image-wrapper">
                  <img src="images/upgrades/flux-cap.png" alt="flux capacitor">
                </div>
                <p><a href="#">Flux Capacitor</a></p>
              </div>
              <div>
                <div class="image-wrapper">
                  <img src="images/upgrades/flame.jpg" alt="flame">
                </div>
                <p><a href="#">Flame Decals</a></p>
              </div>
              <div>
                <div class="image-wrapper">
                  <img src="images/upgrades/bumper_sticker.jpg" alt="Bumper sticker">
                </div>
                <p><a href="#">Bumper Stickers</a></p>
              </div>
              <div>
                <div class="image-wrapper">
                  <img src="images/upgrades/hub-cap.jpg" alt="hub caps">
                </div>
                <p><a href="#">Hub Caps</a></p>
              </div>
            </div>
          </div>
        </div>
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