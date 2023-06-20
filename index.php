<!DOCTYPE html>
<html lang=en-us>
    <head>
        <title>TTL - TokenToLine</title>
        <link rel=icon href=favicon.ico type=image/x-icon>
        <meta charset=UTF-8>
        <meta name=description content="TokenToLine - The most open source crypto token on the market">
        <meta name=keywords content="TokenToLine, tokentoline, ttl, TTL, token, crypto, crypto token, open source token">
        <meta name=viewport content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta name = "theme-color" content = "#4625e8">
        <link rel="stylesheet" href=css/styles.css?v=3.4>
        <link rel=apple-touch-icon href=img/png/logotokentoline.png>
        <script src=https://kit.fontawesome.com/f41fb71d00.js crossorigin=anonymous></script>
        <script src=js/menu.js></script>
    </head>

    <body style=overflow:auto>
        <div id="blur" class="blur">  
            <div id="ad" class="popup">
                <?php include 'asset/ad.php';?>
            </div>
        </div>

        <header>
            <?php include 'asset/header.php';?>
            <div class=banner>
                <div class=bannercontent>
                    <h1>The most open source Crypto token on the market</h1>
                    <img src=img/png/tokenblack.png alt="TTL Tokens">
                </div>
            </div>
            <svg xmlns=http://www.w3.org/2000/svg viewBox="0 0 100 100" preserveAspectRatio=none>
                <polygon fill=#F8F8F8 points="0,100 100,0 100,100"/>
            </svg>
        </header>

        <div class=content>
            <div class=row>
                <div class=column>
                    <?php include 'asset/txt/tokentoline.php';?>
                </div>
                <div class="column last lasthidden">
                    <img src="img/png/chart.png" style="width: 100%; margin-bottom: -350px;" alt="Chart up">
                </div>
            </div>

            <div class=row>
                <div class=column>
                    <?php include 'asset/txt/problem.php';?>
                </div>
                <div class="column last lasthidden">
                    <?php include 'asset/txt/opensource.php';?>
                </div>
            </div>
        </div>
        <div class=content>
            <div class=hidden>
                <?php include 'asset/txt/opensource.php';?>
            </div>
            <?php include 'asset/team.php';?>
        </div>

        <footer>
            <?php include 'asset/footer.php';?>
        </footer>
    </body>
    <script src=js/ad.js></script>
</html>