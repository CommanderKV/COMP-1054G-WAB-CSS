<?php
    if (!empty($_GET["error"])) {
        
    }

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <?php require "../includes/head.html" ?>

        <link href="css/services.css" rel="stylesheet">
        <?php
            if (!empty($_GET["error"])) {
                echo "<script type='text/javascript'>alert('No lang attribute set');</script>";
            }
        ?>
    </head>
    <body>
        <header>
            <?php require("../includes/header.html")?>
        </header>
        <main>
            <span class="navigationList" onclick="toggleNavigation()">&#9776;</span>
            <section class="masthead f-display">
                <h1>Services</h1>
            </section>
            <section class="call-to-action">
                <div>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                        <h2>Services</h2>
                        <p>Click here to request a service</p>
                    </a>
                </div>
            </section>
            <section class="services g-display">
                <a href="langDetails.php?lang=py">
                    <section id="py-dev">
                        <h2>Python development</h2>
                        <p>I will build you a python program of varying complexity given a design or requirements</p>
                    </section>
                </a>
                <a href="langDetails.php?lang=web">
                    <section id="web-dev">
                        <h2>Website development</h2>
                        <p>I will build you a website with basic functionality from a provided design.</p>
                    
                    </section>
                </a>
                <a href="langDetails.php?lang=cpp">
                    <section id="cpp-dev">
                        <h2>C++ development</h2>
                        <p>I will build you a C++ script with basic functionality from provided designs or requirements</p>
                    </section>
                </a>
                <a href="langDetails.php?lang=php">
                    <section id="php-dev">
                        <h2>PHP development</h2>
                        <p>I will build you a PHP script with basic functionality from provided designs or requirements</p>
                    </section>
                </a>
                <a href="langDetails.php?lang=java">
                    <section id="java-dev">
                        <h2>Java development</h2>
                        <p>I will build you a Java program with basic functionality from provided designs or requirements</p>
                    </section>
                </a>
            </section>
        </main>
        <footer>
            <?php require("../includes/footer.html")?>
        </footer>
    </body>
</html>