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
        <div id="transition"></div>
        <?php include_once "./components/navbar.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Nestaweb,<br>de l'Art au Code</h1>
                <p class="subtitle headerSubtitle">Étudiant à l'école 42 angoulême. Développeur web indépendant<br> depuis plus de 2 ans. Reconnu à travers +10 projets.</p>
                <button id="heroCTA" class="cta">Prendre RDV</button>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            <section class="infoSection">
                <div class="textContainer">
                    <h1 class="titleTextContainer">Pourquoi moi ?</h1>
                    <div class="subTextContainer">
                        suivi regulier
                        made in france
                        Livraison rapide
                        Tarif competitif
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, numquam deleniti? Natus tempore earum corrupti.</p>
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit earum.</p>
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quisquam delectus, deleniti, dolor ipsam totam sapiente.</p>
                    </div>
                    <button class="cta secondary">En savoir plus</button>
                </div>
                <div class="imgContainer"></div>
            </section>
            <section class="infoSection reverse">
                <div class="textContainer">
                    <h1 class="titleTextContainer">Mes études</h1>
                    <div class="subTextContainer">
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, numquam deleniti? Natus tempore earum corrupti.</p>
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit earum.</p>
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quisquam delectus, deleniti, dolor ipsam totam sapiente.</p>
                    </div>
                    <button class="cta secondary">En savoir plus</button>
                </div>
                <div class="imgContainer"></div>
            </section>
            <section class="infoSection">
                <div class="textContainer">
                    <h1 class="titleTextContainer">Mes projets</h1>
                    <div class="subTextContainer">
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, numquam deleniti? Natus tempore earum corrupti.</p>
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit earum.</p>
                        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quisquam delectus, deleniti, dolor ipsam totam sapiente.</p>
                    </div>
                    <button class="cta secondary">En savoir plus</button>
                </div>
                <div class="imgContainer"></div>
            </section>
            <section id="opinions">
                avis
            </section>
        </main>
        <footer>
            
        </footer>
        <script src='./js/app.js'></script>
        <script src='./js/nav.js'></script>
    </body>
<html>