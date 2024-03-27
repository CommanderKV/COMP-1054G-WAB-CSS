<!DOCTYPE html>

<html>
    <head>
        <?php require "../includes/head.html"; ?>
        <link href="css/index.css" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <?php require("../includes/header.html")?>
        </header>
        <main>
            <span class="navigationList" onclick="toggleNavigation()">&#9776;</span>
            <section class="masthead f-display">
                <h1>About Me</h1>
            </section>
            <section id="hobbies" class="about-section">
                <a>
                    <section id="sailing">
                        <img src="../imgs/sailing-banner.jpg" alt="Sailboats lined up along a beach"/>
                        <div class="full-section">
                            <h2>Sailing</h2>
                            <p>I love being out on the water and pushing the limits of my Laser sailboat</p>
                        </div>
                    </section>
                </a>
                <a>
                    <section id="programming">
                        <img src="../imgs/programming-banner.webp" alt="A double monitor setup with a RGB microphone and keyboard"/>
                        <div class="full-section">
                            <h2>Programming</h2>
                            <p>I've always been interested in programming and having the power to make whatever I wanted to</p>
                        </div>
                    </section>
                </a>
            </section>

            <section id="education" class="about-section">
                <div class="half-section g-display">
                    <a>
                        <section id="regent-heights">
                            <img src="../imgs/rh-banner.png" alt="Regent Heights Public School logo"/>
                            <div>
                                <h2>Regent Heights</h2>
                                <h3>2009-2019</h3>
                                <p>Regent heights public school is a middle school in scarborough ontario</p>
                            </div>
                        </section>
                    </a>
                    <a>
                        <section id="satec">
                            <img src="../imgs/satec-banner.gif" alt="SATEC @ W.A Porter logo"/>
                            <div>
                                <h2>SATEC</h2>
                                <h3>2019-2023</h3>
                                <p>SATEC @ W.A Porter is a high school in scarborough ontario</p>
                            </div>
                        </section>
                    </a>
                </div>
                <a>
                    <section id="lakehead-georgian">
                        <img src="../imgs/lugc-banner.png" alt="Lakehead Georgian College logo"/>
                        <div class="full-section">
                            <h2>Lakehead Georgian</h2>
                            <h3>2023-current</h3>
                            <p>A post secondary university and college partnership program</p>
                        </div>
                    </section>
                </a>
            </section>

            <section id="past-work" class="about-section">
                <a>
                    <section id="ryc">
                        <img src="../imgs/ryc-banner.webp" alt="Rondeau Yacht Club logo"/>
                        <div class="full-section">
                            <h2>Rondeau Yacht Club</h2>
                            <h3>2021-current</h3>
                            <p>Rondeau Yacht Club(RYC) is a summer camp in Rondeau provincial park in ontario</p>
                        </div>
                    </section>
                </a>
                <a>
                    <section id="bayview">
                        <img src="../imgs/bayview-banner.png" alt="Bayview Market logo"/>
                        <div class="full-section">
                            <h2>Bayview Market</h2>
                            <h3>2020-current</h3>
                            <p>Bayview market is a convenience store just outside of the Rondeau provincial park in ontario</p>
                        </div>
                    </section>
                </a>
            </section>
        </main>
        <footer>
            <?php require "../includes/footer.html"; ?>
        </footer>
    </body>
</html>