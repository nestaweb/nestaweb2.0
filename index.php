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
        <?php include_once "./components/transition.php" ?>
        <?php include_once "./components/navbar.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Nestaweb,<br>de l'Art au Code</h1>
                <p class="subtitle headerSubtitle">Étudiant à l'école 42 angoulême. Développeur web indépendant<br> depuis plus de 2 ans. Reconnu à travers +10 projets.</p>
                <button id="appointment" class="heroCTA ctaNav cta linkNav">Prendre RDV</button>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            <section class="infoSection">
                <div class="textContainer">
                    <h1 class="titleTextContainer">Pourquoi moi ?</h1>
                    <div class="subTextContainer">
                        <p class="subtitle">Je suis en mesure de vous garantir un suivi régulier et professionel. Ce suivi permettra donc d'accélérer la création tout en ayant une personnalisation poussée.</p>
                        <p class="subtitle">Étant donné mon statut d'étudiant, mes tarifs sont très compétitif et mes delais de livraison très court. Tout ceci bien sûr en conservant la qualité et une belle esthétique.</p>
                        <p class="subtitle">Deuxièmement étant étudiant à l'école 42 à Angoulême, la création se fera entièrement en France ce qui facilitera les échanges.</p>
                    </div>
                    <button class="cta secondary linkNav" id="about">En savoir plus</button>
                </div>
                <div class="imgContainer"></div>
            </section>
            <section class="infoSection reverse">
                <div class="textContainer">
                    <h1 class="titleTextContainer">Mes études</h1>
                    <div class="subTextContainer">
                        <p class="subtitle">Tout juste diplomé, j'ai passé mon baccalauréat en 2022. Cette même année je suis entré à l'école 42 à Angoulême, faisant partie du réseaux International 42.</p>
                        <p class="subtitle">L'école 42 est une école de l'enseignement supérieur créé en 2013 à Paris par Xavier Niel, co-fondateur de Free. J'ai intégré cette école avant tout pour sa pédagogie avant-gardiste.</p>
                        <p class="subtitle">En effet, tout l'apprentissage est basé sur l'entre aide et l'autonomie. Aucun diplome n'est requis à l'entré et le concours est ouvert à tout le monde, ce qui amène une grande diversité qui fait la richesse de cette école.</p>
                    </div>
                    <button class="cta secondary linkNav" id="42">En savoir plus</button>
                </div>
                <div class="imgContainer"></div>
            </section>
            <h1 id="titleSectionPortfolios">Mes travaux</h1>
            <section id="portfolios">
                <div id="portfoliosWebsitesName">
                    <div class="portfolioEx" id="perso">CV et Personnel</div>
                    <div class="portfolioEx" id="market">E-commerce</div>
                    <div class="portfolioEx" id="gallery">Galerie</div>
                    <div class="portfolioEx" id="blog">Blog</div>
                    <div class="portfolioEx" id="services">Services</div>
                    <div class="portfolioEx" id="restaurant">Restaurant</div>
                    <div class="portfolioEx" id="localCompany">Entreprise locale</div>
                </div>
                <div id="portfoliosWebsiteImg">
                    <div id="imgWebsiteExample"></div>
                    <div id="transitionPortfolioImg"></div>
                </div>
            </section>
            <button id="seeMorePortfolios" class="cta secondary portfolioCTA">En voir plus</button>
            <section id="opinions"></section>
        </main>
        <footer>
            
        </footer>
        <script src='./js/app.js'></script>
        <script src='./js/nav.js'></script>
    </body>
<html>