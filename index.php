<?php 
    include_once "./backend/db_functions.php";

    $pdo = get_pdo("./");
?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Nestaweb</title>

        <link rel='stylesheet' href='./css/default.css'>
        <link rel='stylesheet' href='./css/index.css'>
    </head>
    <body>
        <?php include_once "./components/navbar.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Nestaweb,<br>de l'Art au Code</h1>
                <p class="subtitle">Étudiant à l'école <span class="link" id="42">42 angoulême</span>. Développeur web indépendant depuis plus de 2 ans. Reconnu à travers +10 projets.</p>
                <button id="heroCTA" class="cta">Prendre RDV</button>
            </div>
        </header>
        <main>
            
        </main>
        <footer>
            
        </footer>
        <script src='./js/app.js'></script>
    </body>
<html>