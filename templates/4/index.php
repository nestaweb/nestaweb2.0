<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title></title>
        <meta name="description" content="Decouvrez la Villa Thallassa, la villa de vos rêve à moins d'1h d'Ajaccio entre 3500€ et 6400€ par semaine.">
        <link rel='stylesheet' href='./default.css'>
        <link rel='stylesheet' href='./index.css'>
        <link rel='stylesheet' href='./responsive.css'>
    </head>
    <body onload="init()">
    <nav class='topNavBar'>
        <p class='nameWebsite js-scrollTo' href="body"><span class="name"></span></p>
        <ul class='listNavItems'>
            <li class='navItem js-scrollTo' href="#details">Détails</li>
            <li class='navItem js-scrollTo' href="#reservationandcontact">Reservation</li>
            <li class='navItem js-scrollTo' href="#advices">Avis</li>
            <li class='navItem' onclick="window.location.href='./photos.php'">Photos</li>
        </ul>
    </nav>
        <header>
            <h1 class="heroTitle"><span class="name"></span>, votre <span class="highlight">rêve</span> dans notre villa en <span class="highlight">corse</span></h1>
            <button class="cta js-scrollTo" href="#details">Découvir</button>
        </header>
        <div class="blueCircle bc1">
            <div class="whiteCircle"></div>
        </div>
        <div class="blueCircle bc2">
            <div class="whiteCircle"></div>
        </div>
        <div class="blueCircle bc3">
            <div class="whiteCircle"></div>
        </div>
        <main>
            <section id="details">
                <div class="row">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero0.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Situation</h3>
                            <p class="paragraphDetail">Notre maison de famille est située au bord de l'eau sur une petite plage de la presqu'ile de l'Isolella. Cette presqu'île a réussi à rester sauvage, avec de belles maisons traditionnelles, un petit port, plusieurs petites plages de sable. Ici pas d'immeubles ou de résidences standardisées.</p>
                        </div>
                    </div>
                </div>
                <div class="row reverse">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/jardin.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Jardin</h3>
                            <p class="paragraphDetail">La maison a été construite dans les années 60, au bord de l'eau, à une époque où cela était encore possible. Vous traverserez pour l'atteindre un grand jardin fait de palmiers, lauriers roses, citronniers, bougainvilliers, cactus... Vous pourrez vous reposer dans différents endroits de la propriété, déjeuner sous les muriers platanes ou au coin du barbecue, prendre l'apéritif sous les oliviers avec balcon sur la mer. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero10.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Souvenirs</h3>
                            <p class="paragraphDetail">J'ai passé toutes mes vacances d'enfant dans cette maison, j'ai fait mes premiers pas à l'Isolella, j'ai joué sur la plage pendant que ma mère faisait une ratatouille à la cuisine, j'ai appris à faire de la planche à voile devant la maison. Aujourd'hui j'ai fait rénover la maison pour qu'elle soit confortable tout en gardant son âme des années 70. </p>
                        </div>
                    </div>
                </div>
                <div class="row reverse">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero1.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Plages</h3>
                            <p class="paragraphDetail">Dans la région vous trouverez la magnifique plage de « mar e sol », aux eaux turquoises et au sable fin, la petite ville de Porticcio où se trouvent tous les restaurants, bars, discothèque, magasins... Vous serez rapidement aussi en montagne si vous aimez la randonnée. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero6.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Activitées</h3>
                            <p class="paragraphDetail">La région du col de Vizzavona vous ouvrira ses chutes d'eau (la cascade des anglais, le voile de la mariée...), ses chemins escarpés, ses bergeries de montagne. Les iles sanguinaires au nord d'Ajaccio sont magnifiques au coucher du soleil ou par gros temps où les vagues se brisent au pied du phare. </p>
                        </div>
                    </div>
                </div>
                <div class="row reverse">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/balade.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Balades</h3>
                            <p class="paragraphDetail">De jolis sentiers au bord de l'eau vous permettent de relier les différents golfes au nord et au sud d'Ajaccio. Au sud de l'Isolella, vous pourrez vous promener soit en montagne vers Cotti-Chiavari (ancien pénitencier) soit au bord de l'eau à Capo di Muro où l'anse cacao vous offre une eau bleu turquoise de carte postale.  </p>
                        </div>
                    </div>
                </div>
            </section>
            <p class="transitionSentence">Nous espérons que vous y trouverez le bien être, le repos, les bons moments entre amis ou en famille. ☀️</p>
            <section id="reservationandcontact">
                <fieldset class="contact">
                    <legend>Contactez nous</legend>
                    <form method="post">
                        <div class="top">
                            <input name="firstName" type="text" placeholder="Nom" class="contact name" autocomplete="off" required>
                            <input name="lastName" type="text" placeholder="Prénom" class="contact name" autocomplete="off" required>
                        </div>
                        <div class="bottom">
                            <input name="email" type="email" placeholder="john@exemple.com" class="contact email" autocomplete="off" required>
                            <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Numero de téléphone" class="contact numero" autocomplete="off" required>
                        </div>
                        <textarea name="message" type="text" placeholder="Votre message" class="contact message" autocomplete="off" required></textarea>
                        <button class="ctaContact" type="submit">Envoyer</button>
                    </form>
                </fieldset>
            </section>
        </main>
        <footer>
            <h2 class="titleSection">A propos : </h2>
            <div id="sectionsFooter">
                <div class="sectionFooter">
                    <h3 class="titleSectionFooter">Naviguer </h3>
                    <div class="linksFooter">
                        <a href="./index.php#details" class="link">
                            <p>Details</p>
                        </a>
                        <a href="./index.php#reservationandcontact" class="link">
                            <p>Reservation</p>
                        </a>
                        <a href="./index.php#advices" class="link">
                            <p>Avis</p>
                        </a>
                        <a onclick="showPhotos()" class="link" href="./photos.php">
                            <p>Photos</p>
                        </a>
                    </div>
                </div>
                <div class="sectionFooter leaveAdvice">
                    <h3 class="titleSectionFooter">Votre avis nous interesse</h3>
                    <form method="post">
                        <input type="text" name="firstName" placeholder="Nom" autocomplete="off">
                        <input type="text" name="lastName" placeholder="Prénom" autocomplete="off">
                        <textarea name="advice" cols="30" rows="10" style="resize:none" placeholder="Votre message"></textarea>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
            <div id="copyrights">
                <a class="copyright link" href="https://www.nestaweb.fr">nestaweb.fr</a>
            </div>
        </footer>
        <script src="./data.js"></script>
        <script src="./observer.js"></script>
        <script src="./main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-scrollTo').on('click', function() { // Au clic sur un élément
                    var page = $(this).attr('href'); // Page cible
                    var speed = 500; // Durée de l'animation (en ms)
                    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                    return false;
                });
            });
        </script>
    </body>
<html>