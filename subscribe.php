<?php
  require_once 'core/init.php';
  $error = NULL;
  if (isset($_GET['error'])){
    $error = $_GET['error'];
  }
  $error = $_GET['error'];
?>

<!DOCTYPE html>
<html lang=en-us>
  <head>
      <title>TTL - TokenToLine</title>
      <link rel=icon href=favicon.ico type=image/x-icon>
      <meta charset=UTF-8>
      <meta name=description content="TokenToLine - Subscribe">
      <meta name=keywords content="TokenToLine, tokentoline, ttl, TTL, Subscribe">
      <meta name=viewport content="width=device-width, initial-scale=1.0, viewport-fit=cover">
      <meta name="theme-color" content="#4625e8">
      <link rel=stylesheet href=css/styles.css>
      <link rel=apple-touch-icon href=img/png/logotokentoline.png>
      <script src=https://kit.fontawesome.com/f41fb71d00.js crossorigin=anonymous></script>
      <script src=js/menu.js></script>
  </head>

  <body style=overflow:auto>
      <header>
          <?php include 'asset/header.php';?>
      </header>
      <div class="content row">
          <div class=column>
              <h1>Subscribe for notice</h1>
              <p>We are working on the token and it will be launched soon.</p>
              <form action=core/insert.php method=post>
                  <div class=beamlink>
                      <input type=email id=email name=email class=email placeholder="Your Email" />
                      <input type=submit name=submit class=notify-btn value="Get notified" />
                  </div>
              </form>
              <div class=error>
                  <?php
                    if(isset($error)){
                    echo "You have already sign up with this email.";
                    }
                  ?>
              </div>
          </div>
      </div>

      <footer>
          <?php include 'asset/footer.php';?>
      </footer>
  </body>
</html>