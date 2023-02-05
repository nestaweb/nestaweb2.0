<?php 
    include_once "../backend/db_functions.php";

    $pdo = get_pdo("../");
?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>nestaweb • Contact</title>
        <link rel="shortcut icon" href="../assets/simpleLogoWhite.webp">
        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/contact.css'>
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' ; script-src 'self'; child-src 'none';">
    </head>
    <body>
        <?php include_once "../components/transition.php" ?>
        <?php include_once "../components/navbar.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Contact</h1>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            <h2 id="mainTitle">Restons en contact !</h2>
            <form action="../backend/sendMessage.php" method="post" id="getInTouch">
                <div class="inputGetInTouch">
                    <label for="clientName">Votre nom</label>
                    <input type="text" name="clientName" id="clientName" placeholder="John Doe">
                </div>
                <div class="inputGetInTouch">
                    <label for="clientEmail">Votre e-mail</label>
                    <input type="email" name="clientEmail" id="clientEmail" placeholder="exemple@gmail.com">
                </div>
                <div class="inputGetInTouch">
                    <label for="message">Votre message</label>
                    <textarea name="message" id="message" placeholder="Parlez moi de votre projet"></textarea>
                </div>
                <button id="sendForm" class="cta secondary">Envoyer <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M7 40q-1.2 0-2.1-.9Q4 38.2 4 37V11q0-1.2.9-2.1Q5.8 8 7 8h34q1.2 0 2.1.9.9.9.9 2.1v26q0 1.2-.9 2.1-.9.9-2.1.9Zm17-15.1L7 13.75V37h34V13.75Zm0-3L40.8 11H7.25ZM7 13.75V11v26Z"/></svg></button>
            </form>
        </main>
        <footer>
            
        </footer>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
    </body>
<html>