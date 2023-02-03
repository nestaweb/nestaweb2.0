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
        <title>Nestaweb • Nos Offres</title>

        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/pricing.css'>
    </head>
    <body>
        <div id="transition"></div>
        <?php include_once "../components/navbar.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Nos Offres</h1>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            <h1 id="bigSectionTitle">Nous avons l'offre
                <span class="magic">
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                        <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                        <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                        <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-text">faites pour vous</span>
                </span>
            </h1>
            <section id="plans">
                <div class="plan hidden">
                    <div class="topPlan">
                        <h3 class="titlePlan"></h3>
                        <p class="subtitle subTitlePlan"></p>
                    </div>
                    <div class="bottomPlan">
                        <p class="planPrice"></p>
                        <button class="blackCTA"></button>
                    </div>
                </div>
                <div class="plan">
                    <div class="topPlan">
                        <h3 class="titlePlan">Personnel</h3>
                        <p class="subtitle subTitlePlan">Idéal pour une galerie, un portfolio, un évènement ou encore une page de presentation type CV.</p>
                    </div>
                    <div class="bottomPlan">
                        <p class="planPrice"><span class="subsign"><</span> 415 €</p>
                        <button class="blackCTA">commander</button>
                    </div>
                </div>
                <div class="plan">
                    <div class="topPlan">
                        <h3 class="titlePlan">Professionnel</h3>
                        <p class="subtitle subTitlePlan">Parfait pour un portfolio plus avancé, un site vitrine ou un site personnel.</p>
                    </div>
                    <div class="bottomPlan">
                        <p class="planPrice"><span class="subsign"><</span> 750 €</p>
                        <button class="blackCTA">commander</button>
                    </div>
                </div>
                <div class="plan">
                    <div class="topPlan">
                        <h3 class="titlePlan">Commercial</h3>
                        <p class="subtitle subTitlePlan">Convient parfaitement pour une entreprise de taille moyenne ou pour une Marketplace.</p>
                    </div>
                    <div class="bottomPlan">
                        <p class="planPrice"><span class="subsign"><</span> 1230 €</p>
                        <button class="blackCTA">commander</button>
                    </div>
                </div>
            </section>
            <section id="plansTable">
                <div class="line">
                    <div class="categoryContainer">
                        <p class="category headerCategory">Nombre de pages</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">3 - 5</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">5 - 10</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">10 - 30</p>
                    </div>
                </div>
                <div class="line">
                    <div class="categoryContainer">
                        <p class="category headerCategory">Temps de livraison</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">~ 1 mois</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">~ 2 mois</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">~ 4 mois</p>
                    </div>
                </div>
            </section>
            <h1 id="titleOptionsSection">Et les 
                <span class="magic">
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                        <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                        <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                        <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-text">options</span>
                </span>qui accompagnent ...</h1>
            <section id="optionsTable">
                <div class="line">
                    <div class="categoryContainer">
                        <p class="category headerCategory">Content Security Policy</p>
                    </div>
                    <div class="categoryContainer contentCategory">
                        <p class="category">Une Content Security Policy (CSP) ou stratégie de sécurité du contenu permet d'améliorer la sécurité des sites web en permettant de détecter et réduire certains types d'attaques, dont les attaques XSS et les injections de contenu.</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">120€</p>
                    </div>
                </div>
                <div class="line">
                    <div class="categoryContainer">
                        <p class="category headerCategory">Pack turbo</p>
                    </div>
                    <div class="categoryContainer contentCategory">
                        <p class="category">Le pack turbo permet de réduire considérablement le temps de création du site web. Chaque page a un temps de création évalué à ~ 4 jours qui est réduit à ~ 2 jours avec cette option.</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">20%</p>
                    </div>
                </div>
                <div class="line">
                    <div class="categoryContainer">
                        <p class="category headerCategory">Hébergement français</p>
                    </div>
                    <div class="categoryContainer contentCategory">
                        <p class="category">L'hebergement francais permet une plus grande sécurité, un service client à la hauteur de vos attentes ainsi qu'une grande rapidité de transmission de données.</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">52€</p>
                    </div>
                </div>
                <div class="line">
                    <div class="categoryContainer">
                        <p class="category headerCategory">Entretien annuel</p>
                    </div>
                    <div class="categoryContainer contentCategory">
                        <p class="category">L'entretien annuel garantie une revision de la totalité du site afin de prévenir de potentiel nouvelles menaces mais également un mise à jour au niveau du design.</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">100€ - 400€</p>
                    </div>
                </div>
                <div class="line">
                    <div class="categoryContainer">
                        <p class="category headerCategory">Local Pack</p>
                    </div>
                    <div class="categoryContainer contentCategory">
                        <p class="category">Le local pack est une forme de réponse qu’affiche Google lorsque l’utilisateur effectue une recherche suggérant une intention locale. Il participe fortement au référencement de votre site web.</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">50€</p>
                    </div>
                </div>
                <div class="line">
                    <div class="categoryContainer">
                        <p class="category headerCategory">Multi-langue</p>
                    </div>
                    <div class="categoryContainer contentCategory">
                        <p class="category">Un site web multilingue est un excellent moyen d'atteindre un public plus large et donc d'augmenter sa visibilité.</p>
                    </div>
                    <div class="categoryContainer">
                        <p class="category">20%</p>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            
        </footer>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
    </body>
<html>