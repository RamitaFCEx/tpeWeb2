<?php
include_once './app/controllers/ZooController.php';
include_once './app/controllers/AdminController.php';
 
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

define('HOME', 'Location: http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');


define('VERIFIED', 'Location: http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/verified');


define('LOGIN', 'Location: http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');




// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];  
}

// parsea la accion Ej: about/juan --> ['about', 'juan']

$params = explode('/', $action); // genera un arreglo

//var_dump($params);

switch ($params[0]) {
    case 'home':
        $controller = new ZooController;
        $controller->goHome();
        break;
    case 'all_animals'://busca todos los animales
        $controller = new ZooController;
        $controller->listAllAnimals();
        break;
    case 'all_species'://busca todas las especies
        $controller = new ZooController;
        $controller->listAllSpecies();
        break;
    case 'one_species'://todos los animales de una especie
        $controller = new ZooController;
        $controller->listOneSpecie($params[1]);
        break;
    case 'animal'://un solo animal
        $controller = new ZooController;
        $controller->listOneAnimal($params[1], $params[2]);
        break;
    case 'login'://entro a login con boton admin
        $controller = new AdminController;
        $controller->goAdminLogin();
        break;
    case 'verify_data'://envio el formulario con mis datos para ser verificado
        $controller = new AdminController;
        $controller->verifyAdmin();
        break;
    case 'verified'://me verifican
        $controller = new AdminController;
        $controller->showPanel($params[1]);
        break;
    case 'logout': 
        $controller = new AdminController();
        $controller->logout();
        break;
    case 'abmItem': 
        $controller = new AdminController();
        $controller->abmItem();
        break;
    case 'abmCat': 
        $controller = new AdminController();
        $controller->abmCat();
        break;
    default:
        echo "404 not found";
        break;
}


