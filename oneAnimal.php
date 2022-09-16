<?php

require_once ("db.php");

function listOneAnimal($esp, $id_esp, $i){//id del animal, nombre de la especie
    require_once ("templates/header.php");
    $razas = getAnimal($i);

    echo "<article class='oneAnimal'>";
    echo "<div>";
        foreach ($razas as $raza) {
            $title = $raza->nombre . "<i> raza de $esp</i>";
            $img = $raza->nombre . ".jpg";
            $href = "OneAnimal/$esp/$id_esp/$raza->nombre/" . $raza->id;

            createCard($title, $img, $href);
        }
    echo "</div>";
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Home</a>";
    echo "<a href='OneSpecie/$esp/$id_esp' class='btn btn-outline-primary'>Volver a la especie</a>";
}

function listOneAnimali($i){//id del animal, nombre de la especie
    require_once ("templates/header.php");
    $razas = getAnimal($i);

    echo "<article class='oneAnimal'>";
    echo "<div>";
        foreach ($razas as $raza) {
            $specie = getTheSpecie($raza->id_especie_fk);
            $txt = $specie[0]->nombre;
            $ntxt = $specie[0]->id;
            $title = $raza->nombre . "<i> raza de $txt</i>";
            $img = $raza->nombre . ".jpg";
            $href = "OneAnimal/" . $raza->id;

            createCard($title, $img, $href);
        }
    echo "</div>";
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Home</a>";
    echo "<a href='allAnimals' class='btn btn-outline-primary'>Volver a Razas</a>";
}