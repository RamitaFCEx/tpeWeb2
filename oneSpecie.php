<?php

require_once ("db.php");

function listOneSpecie($id_esp, $esp){
    require_once ("templates/header.php");
    $razas = getSpecie($id_esp);

    echo "<article>";
        foreach ($razas as $raza) {
            $title = $raza->nombre . "<i class='aclaracion_especie'> raza de $esp</i>";
            $img = $raza->nombre . ".jpg";
            $href = "OneAnimal/$esp/" . $raza->id;

            createCard($title, $img, $href);
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Volver</a>";
}