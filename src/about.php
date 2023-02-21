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
        <link rel="shortcut icon" href="../assets/simpleLogoWhite.webp">
        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/about.css'>
        <link rel='stylesheet' href='../css/responsive.css'>
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' ; script-src 'self'; child-src 'none';">
    </head>
    <body>
        <?php include_once "../components/transition.php" ?>
        <?php include_once "../components/navbar.php" ?>
        <?php include_once "../components/wrapperNav.php" ?>
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
                        <p class="subtitle">Jeune développeur web, je me suis lancé dans ce monde en 2018. Très vite j'ai été passioné par cette discipline en constante évolution.</p>
                        <p class="subtitle">J'ai commencé à coder des petits site puis j'ai évolué jusqu'à opérer en entreprise pour divers projets tel qu'une application mobile, un support de formation ou encode des sites vitrines. </p>
                        <p class="subtitle">Toutes ces expériences m'ont permis d'en apprendre beaucoup sur le web mais aussi sur la gestion de projet et la relation client.</p>
                        <p class="subtitle">Je suis maintenant étudiant à l'école 42 à Angoulême d'oû je souhaite poursuivre une spécialité en I.A., en base de données et en développement web.</p>
                    </div>
                    <button class="cta secondary" id="cv">Telecharger mon cv</button>
                </div>
                <div class="imgContainer"></div>
            </section>
            <div id="School42"></div>
            <section class="infoSection reverse">
                <div class="textContainer">
                    <h1 class="titleTextContainer">42 Angoulême</h1>
                    <div class="subTextContainer">
                    </div>
                    <button class="cta secondary linkNav" id="42">En savoir plus</button>
                </div>
                <div class="imgContainer" id="school42Img"></div>
            </section>
            
            <?php include_once "../components/footer.php" ?>
        </main>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
    </body>
<html>