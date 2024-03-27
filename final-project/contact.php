<!DOCTYPE html>

<html>
    <head>
        <?php require "includes/head.html"; ?>
    </head>
    <body>
        <header class="f-display">
            <?php require "includes/header.html"; ?>
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
            <?php require "includes/footer.html"; ?>
        </footer>
    </body>
</html>