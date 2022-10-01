<?php
include_once 'app/models/ZooModel.php';
include_once 'app/views/ZooView.php';

class ZooController{

    private $model;
    private $view;


    function __construct(){ 
        $this->model = new ZooModel();
        $this->view = new ZooView();
    }

    function goHome (){//muestra el home
        $cardHomeAnimales = (object) [
            'title' => "Ver todos los animales",
            'img' => "portadaRazas",
            'href' => "allAnimals",
            'descrip' => "Descubre todos nuestros animales ヽ(✿ﾟ▽ﾟ)ノ",
        ];

        $cardHomeEspecies = (object) [
            'title' => "Ver todas las especies",
            'img' => "siluetasEspecies",
            'href' => "allSpecies",
            'descrip' => "Descubre todas nuestras especies ヽ(✿ﾟ▽ﾟ)ノ",
        ];

        $arrayCards = [$cardHomeAnimales, $cardHomeEspecies];
   
        $this->view->showHome($arrayCards);
    } 

    function listAllAnimals(){//muestra todos los items join con categorias
        $razas = $this->model->getAllAnimals();
        $this->view->showAllAnimals($razas); 
    }

    function listAllSpecies(){//muestra todas las categorias
        $species = $this->model->getAllSpecies();
        $this->view->showAllSpecies($species); 
    }

    function listOneSpecie($idSpecie){//muesrta los items de una categoria
        $specie = $this->model->getAllAnimalsOfSpecie($idSpecie);//trae todos los items
        $this->view->showAllAnimals($specie); 
    }

    function listOneAnimal($id){//muestra todos los items join con categorias
        $razas = $this->model->getOneAnimal($id);
        $this->view->showAllAnimals($razas); 
    }
    
}


