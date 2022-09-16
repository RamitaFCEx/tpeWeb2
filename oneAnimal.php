<?php

require_once ("db.php");

function listOneAnimal($i){
    require_once ("templates/header.php");
    $razas = getAnimal($i);

    echo "<article>";
        foreach ($razas as $raza) {
            $title = $raza->nombre;
            $img = $raza->img . ".jpg";
            $href = "OneAnimal/" . $raza->id;

            createCard($title, $img, $href);
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Volver</a>";
}