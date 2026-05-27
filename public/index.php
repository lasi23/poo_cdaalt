<?php

include '../vendor/autoload.php';

//Charger les variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

//Récupération de l'URL
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

//import des controllers
use App\Controller\CategoryController;

//instance des controllers
$categoryController = new CategoryController();

//Routeur
switch ($path) {
    case '/':
        echo "bienvenue sur la page d'accueil";
        break;
    case '/category/new':
        $categoryController->createCategory();
        break;
    case '/categories':
        $categoryController->showAllCategories();
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
        break;
}
