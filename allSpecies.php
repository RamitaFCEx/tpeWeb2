<?php
require_once ("db.php");
include_once 'card.php';

function listAllSpecies(){
    require_once ("templates/header.php");
    $especies = getAllSpecies();

    echo "<article>";
        foreach ($especies as $especie) {
            $title = $especie->nombre;
            $img =  "especies/". $especie->nombre . ".jpg";
            $href =   "OneSpecie/"  . "$especie->nombre/" . $especie->id;

            createCard($title, $img, $href);
        }
    echo "</article>";
    echo "<a href='home' class='btn btn-outline-primary'>Volver</a>";
}