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
        <title>Nestaweb • Contact</title>

        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/appointment.css'>
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
                    <input type="text" name="clientName" id="clientName">
                </div>
                <div class="inputGetInTouch">
                    <label for="clientEmail">Votre e-mail</label>
                    <input type="text" name="clientEmail" id="clientEmail">
                </div>
                <div class="inputGetInTouch">
                    <label for="interest"></label>
                    <select name="interest" id="interest">
                        <option value="">Site vitrine</option>
                        <option value="">Blog</option>
                        <option value="">Petite boutique</option>
                        <option value="">Marketplace</option>
                        <option value="">CV et Personnel</option>
                        <option value="">Portfolio</option>
                        <option value="">Service</option>
                        <option value="">Restaurant</option>
                        <option value="">Entreprise local</option>
                    </select>
                </div>
                <div class="inputGetInTouch">
                    <label for=""></label>
                    <input type="text" name="" id="">
                </div>
                <div class="inputGetInTouch">
                    <label for="message"></label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <button id="sendForm">Envoyer</button>
            </form>
        </main>
        <footer>
            
        </footer>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
    </body>
<html>