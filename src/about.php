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
        <title>Nestaweb • A propos</title>

        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/about.css'>
    </head>
    <body>
        <div id="transition"></div>
        <?php include_once "../components/navbar.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">A propos</h1>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            <section class="infoSection">
                <div class="textContainer">
                    <h1 class="titleTextContainer">Qui suis-je ?</h1>
                    <div class="subTextContainer">
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, numquam deleniti? Natus tempore earum corrupti.</p>
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit earum.</p>
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quisquam delectus, deleniti, dolor ipsam totam sapiente.</p>
                    </div>
                    <button class="cta secondary">Telecharger mon cv</button>
                </div>
                <div class="imgContainer"></div>
            </section>
        </main>
        <footer>
            
        </footer>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
    </body>
<html>