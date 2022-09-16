<?php

require_once ("db.php");

function listOneAnimal($i, $esp, $id_esp){//id del animal, nombre de la especie
    require_once ("templates/header.php");
    $razas = getAnimal($i);

    echo "<article>";
        foreach ($razas as $raza) {
            $title = $raza->nombre . "<i> raza de $esp</i>";
            $img = $raza->nombre . ".jpg";
            $href = "OneAnimal/$esp/$id_esp/$raza->nombre/" . $raza->id;

            createCard($title, $img, $href);
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Home</a>";
    echo "<a href='OneSpecie/$esp/$id_esp' class='btn btn-outline-primary'>Volver a la especie</a>";
}