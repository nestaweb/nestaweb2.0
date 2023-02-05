<?php
    session_start();
    include_once "../backend/db_functions.php";

    $pdo = get_pdo("../");
    
    if (!isset($_SESSION["isLogged"]) || $_SESSION["isLogged"] != true) {
        header("Location:./login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>nestaweb</title>
        <link rel="shortcut icon" href="../assets/simpleLogoWhite.webp">
        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/admin.css'>
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' ; script-src 'self'; child-src 'none';">
    </head>
    <body>
        <?php include_once "../components/transition.php" ?>
        <?php include_once "../components/navbaradmin.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Admin</h1>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            <div id="buttonsContainer">
                <button class="cta secondary linkNavAdmin" id="manageOpinions">Avis</button>
                <button class="cta secondary linkNavAdmin" id="addTemplate">Ajouter un template</button>
                <button class="cta secondary linkNavAdmin" id="changeLinks">Change links</button>
            </div>
        </main><?php include_once "../components/footer.php" ?>
        <script src='../js/app.js'></script>
        <script src='../js/navAdmin.js'></script>
    </body>
<html>