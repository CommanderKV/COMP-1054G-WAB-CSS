<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
            $name = $_POST["name"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = str_replace("\n", "\r\n", $_POST["message"]);

            $to = "kylervisser@gmail.com";
            $subject = "PORTFOLIO CONTACT FORM";
            $message = wordwrap("Name: $name $lastname\r\nEmail: $email\r\nPhone: $phone\r\n\r\n$message", 70, "\r\n");

            // If we want to enable email sending, set to true
            if (false) {
                $mailResult = mail($to, $subject, str_replace("\n.", "\n..", $message), array(
                    "From" => "PortfolioWebsite@noreply.com",
                    "Reply-To" => $email
                ));
                
                // If the email was sent successfully
                if ($mailResult) {
                    // Set the message to be displayed
                    $msg = "Sent successfully!";
                
                // If email failed to send
                } else {
                    // Set the message to be displayed
                    $msg = "Failed to send! Please try again later.";
                }

            } else {
                $msg = "This feature has been temporally disabled";
            }
        }
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <?php require "includes/head.html"; ?>
        <link rel="stylesheet" href="css/contact.css">
    </head>
    <body>
        <header class="f-display">
            <?php require "includes/header.html"; ?>
        </header>
        
        <main>
            <span class="navigationList" onclick="toggleNavigation()">&#9776;</span>
            <section class="masthead">
                <h1>Contact me</h1>
            </section>

            <section class="contact-form">
                <div>
                    <h2>Get in touch</h2>
                    <form action="contact.php" method="post">
                        <div>
                            <input type="text" name="name" placeholder="First Name" required>
                            <input type="text" name="lastname" placeholder="Last Name" required>
                        </div>

                        <div>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <input type="tel" id="phone" name="phone" placeholder="Phone" pattern="[0-9]{3}[-,s][0-9]{3}[-,s][0-9]{4}" required>
                        </div>

                        <div>
                            <textarea id="message" name="message" placeholder="Type your message here" required></textarea>
                        </div>

                        <div>
                            <input type="submit" value="Submit">
                        </div>
                        <div>
                            <?php 
                                if (isset($msg)) {
                                    if ($msg == "Sent successfully!") {
                                        echo "<p class='success'>$msg</p>";
                                    } else {
                                        echo "<p class='error'>$msg</p>";
                                    };
                                }
                            ?>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        
        <footer>
            <?php require "includes/footer.html"; ?>
        </footer>
    </body>
</html>