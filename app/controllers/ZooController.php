<?php
include_once 'card.php';
include_once 'app/models/ZooModel.php';
include_once 'app/views/ZooView.php';

class ZooController{

    private $model;
    private $view;


    function __construct(){ 
        $this->model = new ZooModel();
        $this->view = new ZooView();
    }

    function showHome (){
        require_once ("./templates/header.tpl");
        ?>
            <article class="home">
                <?php
                    $title = "Ver todos los animales";
                    $img = "portadaRazas.jpg";
                    $href = "allAnimals";
                    $descrip = "Descubre todos nuestros animales ヽ(✿ﾟ▽ﾟ)ノ";
                    createCard($title, $img, $href, $descrip);
    
                    $title = "Ver todas las especies";
                    $img = "siluetasEspecies.jpg";
                    $href = "allSpecies";
                    $descrip = "Descubre todas nuestras especies ヽ(✿ﾟ▽ﾟ)ノ";
                    createCard($title, $img, $href, $descrip);
                ?>
            </article>
    <?php
    } 

    function listAllAnimals(){
        $razas = $this->model->getAllAnimals();
       // $specie = getTheSpecie($raza->id_especie_fk);
        $this->view->showAllAnimals($razas);


        // require_once ("templates/header.php");
        // echo "<article>";
        //     foreach ($razas as $raza) {
        //         $specie = getTheSpecie($raza->id_especie_fk);
        //         $txt = $specie[0]->nombre;
        //         $descrip = $txt . " " . $raza->color;
        //         $title = $raza->nombre . "<i> raza de $txt</i>";
        //         $img = $raza->nombre . ".jpg";
        //         $href = "OneAnimal/" . $raza->id;
    
        //         createCard($title, $img, $href, $descrip);
        //     }
        // echo "</article>";
        // echo "<div class='botonera'>";
        // echo "<a href='home' class='btn btn-outline-primary'>Home</a>";
        // echo "</div>";
    }
    
}


