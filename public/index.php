<?php

include '../vendor/autoload.php';

//Récupération de l'URL
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

//Routeur
switch ($path) {
    case '/':
        echo "bienvenue sur la page d'accueil";
        break;
    case '/test':
        echo "bienvenue sur la page de test";
        break;
    case '/login':
        echo "bienvenue sur la page de login";
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
        break;
}
