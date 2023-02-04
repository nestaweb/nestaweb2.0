<?php

    session_start();
    include_once "./db_functions.php";

    $pdo = new PDO("sqlite:./data.db");
    $opinions = get_opinions($pdo);
    
    if (!isset($_SESSION["isLogged"]) || $_SESSION["isLogged"] != true) {
        header("Location:./login.php");
        exit();
    }

    foreach ($opinions as $opinion) {
        if ($opinion["id"] == $_GET["id"]) {
            $sql = "UPDATE OPINIONS SET verified=1";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        }
    }
    header("Location:../admin/manageOpinions.php");
    exit();

?>