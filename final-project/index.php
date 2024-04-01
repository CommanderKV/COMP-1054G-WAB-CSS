<!DOCTYPE html>

<html lang="en">
    <head>
        <?php require "includes/head.html"; ?>

        <link href="css/index.css" rel="stylesheet" type="text/css">
        <script src="js/scripts.js" defer></script>
    </head>
    <body>
        <header class="f-display">
            <?php require "includes/header.html"; ?>
        </header>
        <main>
            <span class="navigationList" onclick="toggleNavigation()">&#9776;</span>
            <section class="masthead f-display">
                <h1>Kyler. V</h1>
            </section>
            <section class="call-to-action">
                <a href="about/">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/>
                        </svg>
                        <h2>About me</h2>
                        <p>Click here to learn more about me</p>
                    </div>
                </a>
                <a href="expertise.php">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z"/>
                        </svg>
                        <h2>Expertise</h2>
                        <p>Click here to learn more about what I specialize in</p>
                    </div>
                </a>
                <a href="services/bookService.php">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/>
                        </svg>
                        <h2>Services</h2>
                        <p>Click here to request a service</p>
                    </div>
                </a>
                
            </section>
            <section class="home">
                <div class="about">
                    <h2>About me</h2>
                    <p>I am a Computer science student studying in the Lakehead-Georgian program. This means that I will study 2 years at Georgian college and 2 years at Lakehead Georgian </p>
                </div>
                <div class="expertise">
                    <h2>Expertise</h2>
                    <p>Being in computer science I have a very deep and thorough understanding of many programming languages.</p>
                </div>
                <div class="services">
                    <h2>Services</h2>
                    <p>There are a few services that I offer. These include but are not limited to<br>
                        &checkmark;Website dev<br>
                        &checkmark;Python dev<br>
                        &checkmark;Php dev<br>
                        &checkmark;Java dev<br>
                        ...<br>
                    </p>
                </div>
            </section>
        </main>
        <footer>
            <?php require("includes/footer.html")?>
        </footer>
    </body>
</html>