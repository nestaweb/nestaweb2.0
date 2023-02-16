<?php

    $to = "nesta.web.dev@gmail.com";

    $subject = "Nouveau message de " . $_POST["firstName"] . " " . $_POST["lastName"];

    $message = "Ce message vous a été envoyé via le formulaire de contact du site nestaweb.fr\n\nE-mail : " . $_POST["email"] . "\n\n" . $_POST["message"];

    $headers = [
        "From" => "contact@nestaweb.fr",
        "Reply-To" => $_POST["email"]
    ];

    mail($to, $subject, $message, "From:contact@nestaweb.fr\nReply-To:" . $_POST["email"]);

    header("Location: ../index.php");
?>