<?php
require_once ("db.php");

function listAllAnimals(){
    require_once ("templates/header.php");
    $razas = getAllAnimals();



    echo "<article>";
        foreach ($razas as $raza) {
            $specie = getTheSpecie($raza->id_especie_fk);
            $txt= $specie[0]->nombre;
            $title = $raza->nombre . "<i class='aclaracion_especie'> raza de $txt</i>";
            $img = $raza->nombre . ".jpg";
            $href = "OneAnimal/$txt/" . $raza->id;

            createCard($title, $img, $href);
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Volver</a>";
}