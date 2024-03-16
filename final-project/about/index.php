<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Kyler V - Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../css/normalize.css" rel="stylesheet"/>
        <link href="../css/index.css" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <?php require("../includes/header.html")?>
        </header>
        <main>
            <section class="masthead f-display">
                <h1>About Me</h1>
            </section>
            <section id="hobbies" class="about-section">
                <section id="sailing">
                    <img src="../imgs/sailing-banner.jpg" alt="Sailboats lined up along a beach"/>
                    <div class="full-section">
                        <h2>Sailing</h2>
                        <p>I love being out on the water and pushing the limits of my Laser sailboat</p>
                    </div>
                </section>
                <section id="programming">
                    <img src="../imgs/programming-banner.jpg" alt="A double monitor setup with a RGB microphone and keyboard"/>
                    <div class="full-section">
                        <h2>Programming</h2>
                        <p>I've always been interested in programming and having the power to make whatever I wanted to</p>
                    </div>
                </section>
            </section>

            <section id="education" class="about-section">
                <div class="half-section g-display">
                    <section id="regent-heights">
                        <div class="half-section">
                            <h2>Regent Heights</h2>
                            <h3>2009-2019</h3>
                            <p>Regent heights public school is a middle school in scarborough ontario</p>
                        </div>
                        <img src="../imgs/rh-banner.png" alt="Regent Heights Public School logo"/>
                    </section>
                    <section id="satec">
                        <div class="half-section">
                            <h2>SATEC</h2>
                            <h3>2019-2023</h3>
                            <p>SATEC @ W.A Porter is a high school in scarborough ontario</p>
                        </div>
                        <img src="../imgs/satec-banner.gif" alt="SATEC @ W.A Porter logo"/>
                    </section>
                </div>
                <section id="lakehead-georgian">
                    <div class="full-section">
                        <h2>Lakehead Georgian</h2>
                        <h3>2023-current</h3>
                        <p>A post secondary university and college partnership program</p>
                    </div>
                    <img src="../imgs/lugc-banner.jpg" alt="Lakehead Georgian College logo"/>
                </section>
            </section>

            <section id="past-work" class="about-section">
                <section id="ryc">
                    <div class="full-section">
                        <h2>Rondeau Yacht Club</h2>
                        <h3>2021-current</h3>
                        <p>Rondeau Yacht Club(RYC) is a summer camp in Rondeau provincial park in ontario</p>
                    </div>
                    <img src="../imgs/ryc-banner.jpg" alt="Rondeau Yacht Club logo"/>
                </section>
                <section id="bayview">
                    <div class="full-section">
                        <h2>Bayview Market</h2>
                        <h3>2020-current</h3>
                        <p>Bayview market is a convince store just outside of the Rondeau provincial park in ontario</p>
                    </div>
                    <img src="../imgs/bayview-banner.jpg" alt="Bayview Market logo"/>
                </section>
            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>