<?php
include_once './app/controllers/ZooController.php';

include_once 'home.php';
//include_once 'allAnimals.php';
include_once 'allSpecies.php';
include_once 'oneSpecie.php';
include_once 'oneAnimal.php';
 
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];  // action => about/juan
   // var_dump($action);
}


// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo

//var_dump($params);

switch ($params[0]) {
    case 'home':
        showHome();//echo "MOSTRAR HOME";
        break;
    case 'allAnimals'://busca todos los animales
        $controller = new ZooController;
        $controller->listAllAnimals();
        break;
    case 'allSpecies'://busca todas las especies
        listAllSpecies();
        break;
    case 'OneSpecie'://todos los animales de una especie
        listOneSpecie($params[1], $params[2]);
        break;
    case 'OneAnimal'://un solo animal
        if(sizeof($params)<3){
            listOneAnimali($params[1]);//si vengo desde listAllAnimals()
        }else{
            listOneAnimal($params[1], $params[2], $params[4]);//si vengo desde listAllSpecies()
        }
        break;
    default:
        echo "404 not found";
        break;
}


