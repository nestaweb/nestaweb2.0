<?php 

function    get_pdo($path)
{
    $pdo = new PDO("sqlite:" . $path . "backend/data.db");
}

?>