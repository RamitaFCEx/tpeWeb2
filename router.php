<?php
include_once 'home.php';
include_once 'allAnimals.php';
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
        listAllAnimals();
        break;
    case 'allSpecies'://busca todas las especies
        listAllSpecies();
        break;
    case 'OneSpecie'://todos los animales de una especie
        listOneSpecie($params[2], $params[1]);
        break;
    case 'OneAnimal'://un solo animal
        //params[1]= nombre_especie / params[2]= id_especie / params[3]= nombre_raza / params[4]= id_raza
        //necesito
        //params[1]= id_raza / params[2]= nombre_raza / params[3]= id_especie / params[4]= nombre_especie

        if(sizeof($params)<3){
           // var_dump($params);
            listOneAnimali($params[1]);
        }else{
            listOneAnimal($params[4], $params[1], $params[2]);
        }

        
        break;
    default:
        echo "404 not found";
        break;
}


