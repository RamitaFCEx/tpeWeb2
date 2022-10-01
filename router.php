<?php
include_once './app/controllers/ZooController.php';


 
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



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
    case 'allAnimals'://busca todos los animales
        $controller = new ZooController;
        $controller->listAllAnimals();
        break;
    case 'allSpecies'://busca todas las especies
        $controller = new ZooController;
        $controller->listAllSpecies();
        break;
    case 'OneSpecie'://todos los animales de una especie
        $controller = new ZooController;
        $controller->listOneSpecie($params[1]);
        break;
    case 'OneAnimal'://un solo animal
        $controller = new ZooController;
        $controller->listOneAnimal($params[1], $params[2]);
        break;
    default:
        echo "404 not found";
        break;
}


