<?php
    session_start();
    include_once "../backend/db_functions.php";

    $pdo = get_pdo("../");
    $users = get_users($pdo);
    if (!empty($_POST)) {
        foreach ($users as $user) {
            $username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);
            $pin = htmlspecialchars($_POST["pin"]);
            var_dump($password == password_verify($password, $user["password"]));
            var_dump($pin == password_verify($password, $user["pin"]));
            if ($username == $user["username"] && $password == password_verify($password, $user["password"]) && password_verify($pin, $user["pin"]) == $pin) {
                $_SESSION["isLogged"] = true;
                header("Location:./index.php");
                exit();
            }
        }   
    }
?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>nestaweb</title>
        <link rel="shortcut icon" href="../assets/simpleLogoWhite.webp">
        <link rel='stylesheet' href='../css/default.css'>
        <link rel='stylesheet' href='../css/login.css'>
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' ; script-src 'self'; child-src 'none';">
    </head>
    <body>
        <?php include_once "../components/transition.php" ?>
        <?php include_once "../components/navbar.php" ?>
        <header>
            <div id="loginContainer">
                <form method="post">
                    <div class="inputLogin">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="inputLogin">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="inputLogin">
                        <label for="pin">Pin</label>
                        <input type="number" name="pin">
                    </div>
                    <button>se connecter</button>
                </form>
            </div>
            <div id="heroContainer">
                <h1 id="heroTitle">Login</h1>
            </div>
            <button id="goToMain"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 29 13.8 18.8l.8-.8 9.4 9.4 9.4-9.4.8.8Z"/></svg></button>
        </header><?php include_once "../components/footer.php" ?>
        <script src='../js/app.js'></script>
        <script src='../js/nav.js'></script>
    </body>
<html>