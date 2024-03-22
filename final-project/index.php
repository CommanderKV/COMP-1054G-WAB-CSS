<!DOCTYPE html>

<html lang="en">
    <head>
        <?php require "includes/head.html"; ?>

        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <script src="js/scripts.js" defer></script>
    </head>
    <body>
        <header class="f-display">
            <?php require "includes/header.html"; ?>
        </header>
        <main>
            <span class="navigationList" onclick="toggleNavigation()">&#9776;</span>
            <section class="masthead f-display">
                <h1>Home</h1>
            </section>
            <section class="home">
                <div class="about">
                    <h2>About me</h2>
                    <p>I am a Computer science student studying in the Lakehead-Georgian program. This means that I will study 2 years at Georgian college and 2 years at Lakehead Georgian </p>
                </div>
                <div class="expertise">
                    <h2>Expertise</h2>
                    <p>Being in computer science I have a very deep and through understanding of many programming languages.</p>
                </div>
                <div class="services">
                    <h2>Services</h2>
                    <p>There are a few services that I offer. These include but are not limited to<br>
                        &checkmark;Website dev<br>
                        &checkmark;Python dev<br>
                        &checkmark;Php dev<br>
                        &checkmark;Java dev<br>
                        &checkmark; ...<br>
                    </p>
                </div>
            </section>
            

        </main>
        <footer>
            <?php require("includes/footer.html")?>
        </footer>
    </body>
</html>