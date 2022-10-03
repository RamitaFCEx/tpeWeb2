<?php
class ZooModel{

    function conect(){
        $db = new PDO('mysql:host=localhost;'
                     .'dbname=db_zooDigital; charset=utf8', 'root','');
        return $db;
    }

    function getallAnimals(){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id");
    
        $sentencia->execute();
    
        $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $razas;
    }

    function getAllSpecies(){//busca todas las especies de la tabla especie
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT * FROM especie");
    
        $sentencia->execute();
    
        $especies = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $especies;
    }

    function getallAnimalsOfSpecie($idSpecie){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id WHERE raza.id_especie_fk = $idSpecie");
        $sentencia->execute();
    
        $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $razas;
    }

    function getOneAnimal($id){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id WHERE raza.id = $id");
        $sentencia->execute();
    
        $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $razas;
    }

}