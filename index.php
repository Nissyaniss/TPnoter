<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'Livre.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . 'LivreController.php';
require_once __DIR__  . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'header.php';

if (!isset($_GET['action']) || $_GET["action"] === "accueil") {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'accueil.php';
} else {
    $livresController = new LivreController();
    switch ($_GET["action"]) {
        case "index":
            $livresController->index();
            break;
        case "ajouter":
            $livresController->ajouter();
            break;
        case "supprimer":
            $livresController->supprimer($_GET["id"]);
            break;
        default:
            echo "La route " . $_GET['action'] . " n'est pas connue";
    }
}

require_once __DIR__  . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'footer.php';
