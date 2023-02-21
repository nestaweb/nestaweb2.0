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
        <title>Nestaweb</title>
        <link rel="shortcut icon" href="../assets/simpleLogoWhite.webp">
        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='./index.css'>
        <link rel='stylesheet' href='../css/responsive.css'>
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' ; script-src 'self'; child-src 'none';">
    </head>
    <body>
        <?php include_once "../components/transition.php" ?>
        <?php include_once "../components/navbar.php" ?>
        <?php include_once "../components/wrapperNav.php" ?>
        <header>
            <div id="heroContainer">
                <h1 id="heroTitle">Templates</h1>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header>
        <main>
            <section id="websitesContainer">
                <?php 
                $directory = "./";
                $filecount = count(glob($directory . "*")) - 2;
                for ($i=0; $i < $filecount; $i++) {  ?>
                    <div class="websiteEx" id="website<?php echo $i ?>">
                        <img src="../assets/portfolio/<?php echo $i ?>.webp" alt="website example">
                        <div class="websiteInfos">
                            <h2 class="titleWebsite"><?php echo file_get_contents($i . "/name.txt"); ?></h2>
                            <p class="categoryWebsite subtitle"><?php echo file_get_contents($i . "/category.txt"); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </section>
            <?php include_once "../components/footer.php" ?>
        </main>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
        <script src='../js/templates.js'></script>
    </body>
<html>