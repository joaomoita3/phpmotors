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
        <img src="../../../../images/site/logo.png" alt="site-logo">
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
      <?php echo $message; ?>
        <h1>Add Vehicle</h1>
        <form action="/phpmotors/vehicles/index.php" method="post">
          <?php echo $classificationList; ?>
          <br>
          <label for="make">Make</label>
          <br>
          <input id="make" type="text" name="make" />
          <br>
          <label for="model">Model</label>
          <br>
          <input id="model" type="text" name="model" />
          <br>
          <label for="desc">Description</label>
          <br>
          <textarea id="desc" rows="3" cols="25" name="desc" ></textarea>
          <br>
          <label for="image">Image Path</label>
          <br>
          <input id="image" type="text" name="imagePath" />
          <br>
          <label for="thumbnail">Thumbnail Path</label>
          <br>
          <input id="thumbnail" type="text" name="thumbnail" />
          <br>
          <label for="price">Price</label>
          <br>
          <input id="price" type="text" name="price" />
          <br>
          <label for="stock"># In Stock</label>
          <br>
          <input id="stock" type="text" name="stock" />
          <br>
          <label for="color">Color</label>
          <br>
          <input id="color" type="text" name="color" />
          <br>
          <input type="submit" name="submit">
          <input type="hidden" name="action" value="AddVehicle">
        </form>
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