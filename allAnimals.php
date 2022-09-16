<?php
require_once ("db.php");

function listAllAnimals(){
    require_once ("templates/header.php");
    $razas = getAllAnimals();

    echo "<article>";
        foreach ($razas as $raza) {
            $title = $raza->nombre;
            $img = $raza->img . ".jpg";
            $href = "home";

            createCard($title, $img, $href);
            // echo  '<li>' . $raza->nombre .'/'. $raza->color .'/'. $raza->id_especie_fk . '</li>';
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Volver</a>";
}