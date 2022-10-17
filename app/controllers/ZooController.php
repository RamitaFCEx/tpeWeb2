<?php
include_once 'app/models/ZooModel.php';
include_once 'app/views/ZooView.php';
include_once 'Controller.php';

class ZooController extends Controller{
    function __construct(){ 
        $this->model = new ZooModel();
        $this->view = new ZooView();
    }

    function goHome (){//muestra el home
        $cardHomeAnimales = (object) [
            'title' => "Ver todos los animales",
            'img' => "portadaRazas",
            'href' => "all_animals",
            'descrip' => "Descubre todos nuestros animales ヽ(✿ﾟ▽ﾟ)/",
        ];

        $cardHomeEspecies = (object) [
            'title' => "Ver todas las especies",
            'img' => "siluetasEspecies",
            'href' => "all_species",
            'descrip' => "Descubre todas nuestras especies ヽ(✿ﾟ▽ﾟ)/",
        ];

        $arrayCards = [$cardHomeAnimales, $cardHomeEspecies];
        $this->view->showHome($arrayCards);
    } 

    function listAllAnimals(){//muestra todos los items join con categorias
        $razas = $this->model->getAllAnimals();
        $this->view->showAnimals($razas);  
    }

    function listAllSpecies(){//muestra todas las categorias
        $species = $this->model->getAllSpecies();
        $this->view->showSpecies($species); 
    }

    function listOneSpecie($idSpecie){//muestra los items de una categoria
        $specie = $this->model->getAllAnimalsOfSpecie($idSpecie);//trae todos los items
        $this->view->showAnimals($specie); 
    }

    function listOneAnimal($id){//muestra todos los items join con categorias
        $razas = $this->model->getOneAnimal($id);
        $this->view->showAnimals($razas); 
    }
    
}


