<?php
require_once ("db.php");
include_once 'card.php';

function listAllSpecies(){
    require_once ("templates/header.php");
    $especies = getAllSpecies();

    // echo "<ul>";
    //     foreach ($especies as $especie) {
    //         echo  '<li>' . $especie->nombre . '</li>';
    //     }
    // echo "</ul>";

    echo "<article>";
        foreach ($especies as $especie) {
            $title = $especie->nombre;
            $img =  "especies/". $especie->nombre . ".jpg";
            $href = "home";

            createCard($title, $img, $href);
            // echo  '<li>' . $raza->nombre .'/'. $raza->color .'/'. $raza->id_especie_fk . '</li>';
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Volver</a>";
}