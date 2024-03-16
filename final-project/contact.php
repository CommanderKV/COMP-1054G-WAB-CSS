<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Kyler V - Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="css/normalize.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="/Kyler/final-project/css/navigation.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header class="f-display">
            <?php require("includes/header.html")?>
        </header>
        
        <main>
            <span class="navigationList" onclick="toggleNavigation()">&#9776;</span>
            <section>
                <h2>Get in Touch</h2>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    
                    <button type="submit">Send Message</button>
                </form>
            </section>
        </main>
        
        <footer>
            <?php require("includes/footer.html")?>
        </footer>
    </body>
</html>