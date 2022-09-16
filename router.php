<?php
include_once 'home.php';
include_once 'allAnimals.php';
include_once 'allSpecies.php';
 
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
    case 'allAnimals':
        listAllAnimals();

        
        //echo "<h1>MOSTRAR TODOS LOS ANIMALES</h1>";
        //echo "<a href='home' class='btn btn-outline-primary'>Volver</a>";
        break;
    case 'allSpecies':
        
        listAllSpecies();
        //echo "<h1>MOSTRAR TODAS LAS ESPECIES</h1>";
        //echo "<a href='home' class='btn btn-outline-primary'>Volver</a>";
        break;
    default:
        echo "404 not found";
        break;
}


