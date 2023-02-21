<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Gargantua</title>

        <link rel='stylesheet' href='./default.css'>
        <link rel='stylesheet' href='./index.css'>
    </head>
    <body>
        <nav class='topNavBar'>
            <p class='nameWebsite' onclick="window.location.href = './index.php'">Gargantua</p>
            <ul class='listNavItems'>
                <li class='navItem' onclick="window.location.href = './index.php'">Accueil</li>
                <li class='navItem' onclick="window.location.href = './menu.php'">La carte</li>
            </ul>
        </nav>
        <header>
            <h1 class="heroTitle">Gargantua</h1>
            <h1 class="heroDesc">Pizzeria, Restaurant, Sandwicherie ...</h1>
        </header>
        <main>
            <div class="row">
                <div class="columnContent columnLeft">
                    <h2 class="titleSection">Découvrez le restaurant Gargantua</h2>
                    <div class="transitionBarSection"></div>
                    <p class="descSection">Venez découvrir dans un cadre chaleureux nos pizzas, sandwichs, salades, raclettes, tartiflettes, viandes et pâtes ... Retrouvez nos menus pour les Bambinos et pour les Grands. Nous disposons d'une belle terrasse agréable pour l'été ainsi qu'une salle.</p>
                    <button class="btnPrimary" onclick="window.location.href='./menu.php'">Consulter le menu</button>
                </div>
                <div class="column columnRight">
                    <img src="./res/photo0jpg.jpeg" alt="Une photo de l'exterieur">
                </div>
            </div>
            <div class="row">
                <div class="column columnLeft">
                    <img src="./res/photo0jpg.jpeg" alt="Une photo de l'exterieur">
                </div>
                <div class="columnContent columnRight">
                    <h2 class="titleSection">Actualité</h2>
                    <div class="transitionBarSection"></div>
                    <p class="descSection">Pour suivre les nouveauté concernant votre restaurant, nous vous invitons à nous rejoindre sur facebook. Vous y decouvrirez nos nouveaux plats et plein d'autres informations sur les fermetures exceptionnelles, les offres d'emplois ...</p>
                    <button class="btnPrimary" onclick="redirectFacebook()">Voir le profil Facebook</button>

                </div>
            </div>
        </main>
        <footer>
            
        </footer>
        <script src='./data.js'></script>
        <script src='./main.js'></script>
    </body>
<html>