<?php

require_once ("db.php");

function listOneSpecie($id_esp, $esp){//$esp solo se usa para transferir un valor ya buscado en la db
    require_once ("templates/header.php");
    $razas = getSpecie($id_esp);

    echo "<article>";
        foreach ($razas as $raza) {
            $title = $raza->nombre . "<i> raza de $esp</i>";
            $img = $raza->nombre . ".jpg";
            $href = "OneAnimal/$esp/$id_esp/$raza->nombre/" . $raza->id;

            createCard($title, $img, $href);
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Home</a>";
    echo "<a href='allSpecies' class='btn btn-outline-primary'>Especies</a>";
}