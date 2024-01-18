<?php


$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', $path);
$page = '/'.end($parts);
// $page contient maintenant la partie de l'URL après le dernier /


// Traiter la route demandée
switch ($page) {
    case '':
    case '/':
    case '/index':
    case '/home':
        require_once 'controller/IndexController.php';
        $controller = new IndexController();
        $controller -> index();
        break;

    case '/about':
        require_once 'controller/AboutController.php';
        $controller = new AboutController();
        $controller -> about();
        break;

    case '/portfolio':
        require_once 'controller/PortfolioController.php';
        $controller = new PortfolioController();
        $controller -> portfolio();
        break;

    case '/contact':
        require_once 'controller/ContactController.php';
        $controller = new ContactController();
        $controller -> contact();
        break;

    default:
        // Route non trouvée, afficher une page d'erreur
        require_once 'controller/Error404Controller.php';
        $controller = new Error404Controller();
        $controller -> error404();
        break;
    }



