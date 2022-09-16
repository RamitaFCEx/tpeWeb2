<?php
require_once ("db.php");

function listAllAnimals(){
    require_once ("templates/header.php");
    $razas = getAllAnimals();

    echo "<article>";
        foreach ($razas as $raza) {
            $specie = getTheSpecie($raza->id_especie_fk);
            $title = $raza->nombre . "<i> raza de $specie</i>";
            $img = $raza->nombre . ".jpg";
            $href = "OneAnimal/$specie/" . $raza->id;

            createCard($title, $img, $href);
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Home</a>";
}