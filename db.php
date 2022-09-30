<?php

function conect(){
    $db = new PDO('mysql:host=localhost;'
                 .'dbname=db_zooDigital; charset=utf8', 'root','');
    return $db;
}

function getAllAnimals(){//busca todos los animales de la tabla raza
    $db = conect();

    $sentencia = $db->prepare( "SELECT * FROM raza");

    $sentencia->execute();

    $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $razas;
}

function getTheSpecie($i){//busca el nombre de la especie de todos los animales de la tabla raza
    $db = conect();

  
    $sentencia = $db->prepare( "SELECT * FROM especie WHERE id = $i");
    
    $sentencia->execute();

    $especies = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $especies;
}



function getAllSpecies(){//busca todas las especies de la tabla especie
    $db = conect();

    $sentencia = $db->prepare( "SELECT * FROM especie");

    $sentencia->execute();

    $especies = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $especies;
}

function getSpecie($esp){//busca todos los animales de la tabla raza que coinciden con una determinada especie
    $db = conect();

    $sentencia = $db->prepare( "SELECT * FROM raza WHERE id_especie_fk = $esp");

    $sentencia->execute();

    $especies = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $especies;
}


function getAnimal($i){//busca un animal en particular
    $db = conect();

    $sentencia = $db->prepare( "SELECT * FROM raza WHERE id = $i");

    $sentencia->execute();

    $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $razas;
}