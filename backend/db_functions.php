<?php 

function    get_pdo($path)
{
    $pdo = new PDO("sqlite:" . $path . "backend/data.db");
    return ($pdo);
}

function    get_users($pdo) {
    $stmt7 = $pdo->query("SELECT * FROM USERS");
    if ($stmt7 === FALSE){
        die('Erreur SQL');
    }
    $usersTable = $stmt7->fetchAll();
    return ($usersTable);
}

function    get_opinions($pdo) {
    $stmt7 = $pdo->query("SELECT * FROM OPINIONS");
    if ($stmt7 === FALSE){
        die('Erreur SQL');
    }
    $opinionsTable = $stmt7->fetchAll();
    return ($opinionsTable);
}

?>