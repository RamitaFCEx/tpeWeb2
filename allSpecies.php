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
            $descrip = $especie->descripcion;

            createCard($title, $img, $href, $descrip);
        }
    echo "</article>";
    echo "<div class='botonera'>";
    echo "<a href='home' class='btn btn-outline-primary'>Home</a>";
    echo "</div>";
}