<?php

require_once ("db.php");

function listOneSpecie($esp){
    require_once ("templates/header.php");
    $razas = getSpecie($esp);

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