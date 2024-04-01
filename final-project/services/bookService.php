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

    if (!empty($_POST["DEBUG"])) {
        $debugMsg = $_POST["DEBUG"];
    }

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (
            !empty($_POST["fname"]) && 
            !empty($_POST["lname"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["phone"]) && 
            !empty($_POST["service"]) && 
            !empty($_POST["message"])
        ) {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $service = $_POST["service"];
            $message = str_replace("\n", "\r\n", $_POST["message"]);

            $to = "kylervisser@gmail.com";
            $subject = "PORTFOLIO SERVICE REQUEST";
            $message = wordwrap("Name: $fname $lname\r\nEmail: $email\r\nPhone: $phone\r\nService: $service\r\n\r\n$message", 70, "\r\n");

            // If we want to enable email sending, set to true
            if (false) {
                $mailResult = mail($to, $subject, str_replace("\n.", "\n..", $message), array(
                    "From" => "PortfolioWebsite@noreply.com",
                    "Reply-To" => $email
                ));
                
                // If the email was sent successfully
                if ($mailResult) {
                    // Set the message to be displayed
                    $debugMsg = "Sent successfully!";
                
                // If email failed to send
                } else {
                    // Set the message to be displayed
                    $debugMsg = "Failed to send! Please try again later.";
                }

            } else {
                $debugMsg = "This feature has been temporally disabled";
            }
        } else {
            $debugMsg = "This feature may be disabled or the form was not filled out correctly.";
        }
    }
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <?php require "../includes/head.html"; ?>
        <link rel="stylesheet" href="../css/contact.css">
    </head>
    <body>
        <header>
            <?php require "../includes/header.html"; ?>
        </header>
        <main>
            <section class="masthead">
                <h1>Services</h1>
            </section>
            <section class="form-center">
                <div>
                    <h2>Request a service</h2>
                    <form action="bookService.php" method="post">
                        <div>
                            <input type="text" id="fname" placeholder="First name" required>
                            <input type="text" id="lname" placeholder="Last name" required>
                        </div>
                        <div>
                            <input type="email" id="email" placeholder="Email" required>
                            <input type="tel" id="phone" placeholder="Phone number" required>
                        </div>
                        <div>
                            <select id="service" required>
                                <option value="" disabled <?php if ($selected === null) { echo "selected"; } ?>>Select a service</option>
                                <option value="python" <?php if ($selected === 1) { echo "selected"; } ?>>Python</option>
                                <option value="web" <?php if ($selected === 2) { echo "selected"; } ?>>Website</option>
                                <option value="cpp" <?php if ($selected === 3) { echo "selected"; } ?>>C++</option>
                                <option value="php" <?php if ($selected === 4) { echo "selected"; } ?>>PHP</option>
                                <option value="java" <?php if ($selected === 5) { echo "selected"; } ?>>Java</option>
                            </select>
                        </div>
                        <div>
                            <textarea id="message" placeholder="Requirements for program" required></textarea>
                        </div>
                        <div>
                            <input type="submit" value="Submit service request">
                        </div>
                        <div>
                            <?php 
                                if (isset($debugMsg)) {
                                    if ($debugMsg == "Sent successfully!") {
                                        echo "<p class='success'>$debugMsg</p>";
                                    } else {
                                        echo "<p class='error'>$debugMsg</p>";
                                    };
                                }
                            ?>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <footer>
            <?php require "../includes/footer.html"; ?>
        </footer>
    </body>
</html>