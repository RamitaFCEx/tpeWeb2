<?php

require_once ("db.php");

function listOneSpecie($esp, $id_esp){//$esp solo se usa para transferir un valor ya buscado en la db
    require_once ("templates/header.php");
    $razas = getSpecie($id_esp);

    echo "<article>";
        foreach ($razas as $raza) {
            $title = $raza->nombre . "<i> raza de $esp</i>";
            $img = $raza->nombre . ".jpg";
            $href = "OneAnimal/$esp/$id_esp/$raza->nombre/" . $raza->id;
            $descrip = $esp . " " . $raza->color;

            createCard($title, $img, $href, $descrip);
        }
    echo "</article>";
    echo "<div class='botonera'>";
    echo "<a href='home' class='btn btn-outline-primary'>Home</a>";
    echo "<a href='allSpecies' class='btn btn-outline-primary'>Especies</a>";
    echo "</div>";
}