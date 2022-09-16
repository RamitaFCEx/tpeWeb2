<?php

function getAllAnimals(){
    $db = new PDO('mysql:host=localhost;'
                 .'dbname=db_zooDigital; charset=utf8', 'root','');

    $sentencia = $db->prepare( "SELECT * FROM raza");

    $sentencia->execute();

    $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $razas;
}


function getAllSpecies(){
    $db = new PDO('mysql:host=localhost;'
                 .'dbname=db_zooDigital; charset=utf8', 'root','');

    $sentencia = $db->prepare( "SELECT * FROM especie");

    $sentencia->execute();

    $especies = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $especies;
}
