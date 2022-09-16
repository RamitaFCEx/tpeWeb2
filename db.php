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

function getSpecie($esp){
    $db = new PDO('mysql:host=localhost;'
                 .'dbname=db_zooDigital; charset=utf8', 'root','');

    $sentencia = $db->prepare( "SELECT * FROM raza WHERE id_especie_fk = $esp");

    $sentencia->execute();

    $especies = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $especies;
}


function getAnimal($i){
    $db = new PDO('mysql:host=localhost;'
                 .'dbname=db_zooDigital; charset=utf8', 'root','');

    $sentencia = $db->prepare( "SELECT * FROM raza WHERE id = $i");

    $sentencia->execute();

    $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $razas;
}