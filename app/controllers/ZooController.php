<?php
include_once 'app/models/ZooModel.php';
include_once 'app/views/ZooView.php';





class ZooController{
    private $buttonSpecies;
    private $buttonAnimals;
    private $model;
    private $view;

    function __construct(){ 
        $this->model = new ZooModel();
        $this->view = new ZooView();
        $this->buttonAnimals = (object) [
            'sign' => "Ir a animales",
            'ref' => "all_animals",
        ];
        $this->buttonSpecies = (object) [
            'sign' => "Ir a especies",
            'ref' => "all_species",
        ];
    
    }

    function goHome (){//muestra el home
        $cardHomeAnimales = (object) [
            'title' => "Ver todos los animales",
            'img' => "portadaRazas",
            'href' => "all_animals",
            'descrip' => "Descubre todos nuestros animales ヽ(✿ﾟ▽ﾟ)ノ",
        ];

        $cardHomeEspecies = (object) [
            'title' => "Ver todas las especies",
            'img' => "siluetasEspecies",
            'href' => "all_species",
            'descrip' => "Descubre todas nuestras especies ヽ(✿ﾟ▽ﾟ)ノ",
        ];

        $arrayCards = [$cardHomeAnimales, $cardHomeEspecies];
   
        $this->view->showHome($arrayCards);
    } 

    function listallAnimals(){//muestra todos los items join con categorias
        $razas = $this->model->getallAnimals();
        $buttons = [$this->buttonSpecies];

        $this->view->showAnimals($razas, $buttons); 
    }

    function listAllSpecies(){//muestra todas las categorias
        $species = $this->model->getAllSpecies();
        $buttons = [$this->buttonAnimals];

        $this->view->showAllSpecies($species, $buttons); 
    }

    function listOneSpecie($idSpecie){//muesrta los items de una categoria
        $specie = $this->model->getallAnimalsOfSpecie($idSpecie);//trae todos los items
        $buttons = [$this->buttonSpecies, $this->buttonAnimals];

        $this->view->showAnimals($specie, $buttons); 
    }

    function listOneAnimal($id){//muestra todos los items join con categorias
        $razas = $this->model->getOneAnimal($id);
        $buttonSpecie = (object) [
            'sign' => "Ir a la especie",
            'ref' => "one_species/".$razas[0]->id_especie_fk,
        ]; 
        $buttons = [$this->buttonSpecies, $this->buttonAnimals, $buttonSpecie];


        $this->view->showAnimals($razas, $buttons); 
    }
    
}


