<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Nestaweb • Mentions Légales</title>
        <link rel="shortcut icon" href="../assets/simpleLogoWhite.webp">
        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/legal.css'>
        <link rel='stylesheet' href='../css/responsive.css'>
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' ; script-src 'self'; child-src 'none'; frame-src 'self'">
    </head>
    <body>
        <?php include_once "../components/transition.php" ?>
        <?php include_once "../components/navbar.php" ?>
        <?php include_once "../components/wrapperNav.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Mentions Légales</h1>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            <iframe class="pdf" src="../assets/legalMentions.pdf" type="pdf"></iframe>
            <?php include_once "../components/footer.php" ?>
        </main>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
    </body>
<html>