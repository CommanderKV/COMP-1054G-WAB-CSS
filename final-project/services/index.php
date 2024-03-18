<!DOCTYPE html>

<html>
    <head>
        <?php require "../includes/head.html" ?>

        <link href="css/services.css" rel="stylesheet"/>
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
            <section class="services g-display">
                <a href="pythonDev.php">
                    <section id="py-dev">
                        <h2>Python development</h2>
                        <p>I will build you a python program of varying complexity given a design or requirements</p>
                    </section>
                </a>
                <a href="webDev.php">
                    <section id="web-dev">
                        <h2>Website development</h2>
                        <p>I will build you a website with basic functionality from a provided design.</p>
                    
                    </section>
                </a>
                <a href="cppDev.php">
                    <section id="cpp-dev">
                        <h2>C++ development</h2>
                        <p>I will build you a C++ script with basic functionality from provided designs or requirements</p>
                    </section>
                </a>
                <a href="phpDev.php">
                    <section id="php-dev">
                        <h2>PHP development</h2>
                        <p>I will build you a PHP script with basic functionality from provided designs or requirements</p>
                    </section>
                </a>
                <a href="javaDev.php">
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