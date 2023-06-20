<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>TTL - TokenToLine</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="description" content="TokenToLine">
        <meta name="keywords" content="TokenToLine, tokentoline, ttl, TTL, whitepaper tokentoline, Tokentoline whitepaper">
        <meta name=viewport content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta name="theme-color" content="#4625e8">
        <link rel="stylesheet" href=css/styles.css?v=0.1>
        <script src="https://kit.fontawesome.com/f41fb71d00.js" crossorigin="anonymous"></script>
        <script src="js/menu.js"></script>
    </head>

    <body style="overflow: auto;">
        <!-- Navigation Menu -->
        <header>
            <?php include 'asset/header.php';?>
        </header>

        <div class="content">
            <div class="row">
                <div class="column">
                    <h1>Whitepaper</h1>
                    <p>Below is our whitepaper.</p>
                    <a href="whitepaper.pdf" target="_blank">
                        <div class="beam">
                            <p>Download Whitepaper</p>
                            <div class="blockicon"><i class="fa-solid fa-file-pdf"></i></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="whitepaper">
                <object data="whitepaper.pdf" type="application/pdf" test-id="embedded-preview" width="100%" height="600px">
                    <p>It looks like something went wrong, download <a href="whitepaper.pdf">the PDF!</a></p>
                </object>
            </div>
        </div>
        
        <footer>
            <?php include 'asset/footer.php';?>
        </footer>
    </body>
</html>