<?php
    require "../includes/DBConn.php";
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <?php require "../includes/head.html" ?>
        <link href="css/details.css" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <?php require("../includes/header.html")?>
        </header>
        <main>
            <span class="navigationList" onclick="toggleNavigation()">&#9776;</span>
            <section class="masthead image-text-center">
                <img src="../imgs/programming-banner.webp" alt="Double monitor coding setup" width="100%" height="auto">
                <div>
                    <h1>Python development</h1>
                </div>
            </section>
            <section class="welcome">
                <div class="welcome-banner">
                    <h2>Experience</h2>
                    <p>I have <?php 
                        $date1 = new DateTime("2016-00-00");
                        $date2 = new DateTime("now");
                        $diff = $date1->diff($date2);
                        echo $diff->y;
                    ?> years of experience in python some of the projects ive worked on are as follows</p>
                </div>
                <?php 
                    $structure = '
                <div class="projects">
                    <h3>NAME</h3>
                    <div>
                        <p>DESCRIPTION</p>
                        <div>
                            <p>Utilizes</p>
                            <ul>
                                UTILITY
                            </ul>
                        </div>
                        <div class="git-preview">
                            <a href="LINK">
                                <img src="imgs/git-python-IMAGE-PREVIEW-NUMBER.svg" alt="ALTTEXT">
                                <div>
                                    <h4>View on GitHub</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>';
                    $keys = array("NAME", "DESCRIPTION", "UTILITY", "LINK", "IMAGE-PREVIEW-NUMBER", "ALTTEXT");

                    // Connect to database
                    $conn = new DBConn();

                    // Pull data from database
                    $projects = $conn->getProjects();

                    // Loop through data and echo filled 
                    // out structure for each project
                    foreach ($projects as $project) {
                        $filledStructure = $structure;
                        
                        $filledStructure = str_replace($keys[0], $project['projectName'], $filledStructure);
                        $filledStructure = str_replace($keys[1], $project['description'], $filledStructure);
                        
                        // Construct the utilities list
                        $utilities = $project['utilities'];
                        $utilitiesResult = "                                ";
                        foreach ($utilities as $utility) {
                            $utilitiesResult .= "<li>" . $utility . "</li>";
                        }
                        $filledStructure = str_replace($keys[2], $utilitiesResult, $filledStructure);
                        
                        $filledStructure = str_replace($keys[3], $project['link'], $filledStructure);
                        $filledStructure = str_replace($keys[4], $project['imgPreviewNum'], $filledStructure);
                        $filledStructure = str_replace($keys[5], $project['altText'], $filledStructure);
                        
                        echo $filledStructure;
                    }
                ?>
            </section>

        </main>
        <footer>
            <?php require("../includes/footer.html")?>
        </footer>
    </body>
</html>