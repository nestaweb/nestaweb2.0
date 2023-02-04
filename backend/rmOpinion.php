<?php 

    session_start();
    include_once "../backend/db_functions.php";

    $pdo = get_pdo("../");

    if (!isset($_SESSION["isLogged"]) || $_SESSION["isLogged"] != true) {
        header("Location:./login.php");
        exit();
    }

    $idOpinion = $_GET["id"];

    $sql = "DELETE FROM OPINIONS WHERE id=:idOpinion";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$idOpinion]);

    header("Location:../admin/manageOpinions.php");
    exit();

?>