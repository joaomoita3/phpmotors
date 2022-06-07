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
      <div class="login">
        <h1 class="title">
          Sign up
        </h1>

        <?php
        if (isset($message)){
          echo $message;
        }
        ?>

        <form action="/phpmotors/accounts/index.php" method="post">
          <label for="fName">First Name</label>
          <input type="text" id="fName" name="clientFirstname">
          <label for="fName">Last Name</label>
          <input type="text" id="lName" name="clientLastname">
          <label for="fName">Email</label>
          <input type="text" id="email" name="clientEmail">
          <label for="password">Password</label>
          <input type="password" id="password" name="clientPassword">
          <input type="submit" name="submit" id="regbtn" value="Register">
          <input type="hidden" name="action" value="Register">
        </form>
      </div>
      </div>
    </main>
    <hr>
    <footer>
      <div class="footer-wrapper">
        <p>©PHP Motors, all rights reserved.</p>
        <p>All images used are believed to be in "fair use". Please notify the author if they are not and they will be removed.</p>
        <p>Last updated: 15 January , 2022</p>
      </div>
    </footer>
  </div>
</body>
</html>