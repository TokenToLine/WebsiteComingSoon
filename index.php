<?php
  require_once 'core/init.php';

  $error = NULL;

  if (isset($_GET['error'])){
    $error = $_GET['error'];
  }

  $error = $_GET['error'];
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>TTL - TokenToLine</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="TokenToLine Coming Soon">
    <meta name="keywords" content="TokenToLine, tokentoline, Coming Soon, signin, token, ttl, TTL">
    <meta name="author" content="TTL - TokenToLine">
    <meta name="robots" content="index, follow">

    <link rel="icon" type="image/x-icon" href="img/svg/tokentoline.svg">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    <div class="center-text">
      <img src="img/svg/tokentoline-text.svg" alt="logo">

      <h1 class="title font-white"><b>Our site is coming soon</b></h1>
      <p class="desc font-white">We are working on the full version of our site and will be launched soon.</p>

      <form action="core/insert.php" method="post">
        <input type="email" id="email" name="email" class="email" placeholder="your email" />
        <input type="submit" name="submit" class="notify-btn" value="Get notified" />
      </form>

      <div class="error">
        <?php
          if(isset($error)){
            echo "You have already sign up with this email.";
          }
        ?>
      </div>

      <div class="icons">
        <a class="socialIcons" href="https://linktr.ee/TokenToLine" title="All our links" alt="linktree"><img src="img/png/linktree.png" alt="linktree"/></a>
        <a class="socialIcons" href="https://www.instagram.com/tokentoline" title="Subscribe to our instagram" alt="Instagram"><img src="img/png/instagram.png" alt="Instagram"/></a>
        <a class="socialIcons" href="https://github.com/TokenToLine" title="Look for the code on github" alt="Github"><img src="img/png/github.png" alt="Github"/></a>
        <a class="socialIcons" href="https://twitter.com/tokentoline" title="Subscribe on to our twitter" alt="Twitter"><img src="img/png/twitter.png" alt="Twitter"/></a>
      </div>
    </div>
  </body>
</html>