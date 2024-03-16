<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kyler V - Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="css/normalize.css" rel="stylesheet"/>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <link href="/Kyler/final-project/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="/Kyler/final-project/imgs/favicon.ico">
        <script src="js/sidebar.js" defer></script>
        <script src="js/scripts.js" defer></script>
    </head>
    <body>
        <header class="f-display">
            <?php require("includes/header.html")?>
        </header>
        <main>
            <span class="navigationList" onclick="toggleNavigation()">&#9776;</span>
            <section class="masthead f-display">
                <h1>Home</h1>
            </section>
            <section class="home">
                <section class="about">
                    <h2>About me</h2>
                    <p>I am a Computer science student studying in the Lakehead-Georgian program. This means that I will study 2 years at Georgian college and 2 years at Lakehead Georgian </p>
                </section>
                <section class="expertise">
                    <h2>Expertise</h2>
                    <p>Being in computer science I have a very deep and through understanding of many programming languages.</p>
                </section>
                <section class="services">
                    <h2>Services</h2>
                    <p>There are a few services that I offer. These include butare not limited to<br>
                        &checkmark;Website dev<br>
                        &checkmark;Python dev<br>
                        &checkmark;Php dev<br>
                        &checkmark;Java dev<br>
                        &checkmark; ...<br>
                    </p>
                </section>
            </section>

        </main>
        <footer>
            <?php require("includes/footer.html")?>
        </footer>
    </body>
</html>