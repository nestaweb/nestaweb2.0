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
        <title>Nestaweb • Tarifs</title>

        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/prices.css'>
    </head>
    <body>
        <div id="transition"></div>
        <?php include_once "../components/navbar.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Tarifs</h1>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            
        </main>
        <footer>
            
        </footer>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
    </body>
<html>