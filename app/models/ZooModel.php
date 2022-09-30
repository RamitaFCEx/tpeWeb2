<?php
class ZooModel{

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
}