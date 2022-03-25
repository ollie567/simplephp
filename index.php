<!-- http://www.cellbiol.com/bioinformatics_web_development/chapter-4-adding-a-dynamic-layer-introducing-the-php-programming-language/dynamic-web-pages-with-php-a-simple-yet-useful-example/ -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My great web site</title>
        <meta name="description" contents="Just a test website for learning html, css and php">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <nav id="main-navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="page2.php">Page 2</a></li>
                    <li><a href="page3.php">Page 3</a></li>
                </ul>
            </nav>
        </header>
        <div id="main-contents">
            This is page 1, the home page.
            <?php echo "hallo" ?>

        </div>
        <footer>
            Contact us at webmaster@mywebsite.com
        </footer>
    </body>
</html>