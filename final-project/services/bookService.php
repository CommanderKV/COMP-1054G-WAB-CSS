<?php 

    $selected = null;
    if (!empty($_GET["service"])) {
        switch ($_GET["service"]) {
            case "python":
                $selected = 1;

            case "web":
                $selected = 2;

            case "cpp":
                $selected = 3;

            case "php":
                $selected = 4;

            case "java":
                $selected = 5;
            
            default:
                $selected = null;
        }

    }

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <?php require "../includes/head.html"; ?>
    </head>
    <body>
        <header>
            <?php require "../includes/header.html"; ?>
        </header>
        <main>
            <section class="masthead">
                <h1>Services</h1>
            </section>
            <section class="book-service">
                <form>
                    <input type="text" id="fname" placeholder="First name" required>
                    <input type="text" id="lname" placeholder="Last name" required>
                    
                    <input type="email" id="email" placeholder="Email" required>
                    <input type="tel" id="phone" placeholder="Phone number" required>

                    <select id="service" required>
                        <option value="" disabled <?php if ($selected === null) { echo "selected"; } ?>>Select a service</option>
                        <option value="python" <?php if ($selected === 1) { echo "selected"; } ?>>Python</option>
                        <option value="web" <?php if ($selected === 2) { echo "selected"; } ?>>Website</option>
                        <option value="cpp" <?php if ($selected === 3) { echo "selected"; } ?>>C++</option>
                        <option value="php" <?php if ($selected === 4) { echo "selected"; } ?>>PHP</option>
                        <option value="java" <?php if ($selected === 5) { echo "selected"; } ?>>Java</option>
                    </select>

                    <textarea id="message" placeholder="Requirements for program" required></textarea>

                    <button type="submit">Submit service request</button>
                </form>
            </section>
        </main>
    </body>
</html>