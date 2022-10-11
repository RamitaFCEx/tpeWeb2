<?php
class ZooModel{

    function conect(){
        $db = new PDO('mysql:host=localhost;'
                     .'dbname=db_zooDigital; charset=utf8', 'root','');
        return $db;
    }

    function getAllAnimals(){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo 
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

    function getAllAnimalsOfSpecie($idSpecie){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo
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


    function addCat($data){
        $db = $this->conect();

        $sentencia = $db->prepare( "INSERT INTO especie(nombre, descripcion)"
        ."VALUES(?, ?)");

        $sentencia->execute(array($data->nombre, $data->descripcion));
        
    }

    function deleteCat($data){
        $db = $this->conect();
        if($data->tipo != '0'){
            $sentencia = $db->prepare( "DELETE FROM especie WHERE id=?");
            $sentencia->execute(array($data->tipo));
        }
    }

    function modCat($data){
        $db = $this->conect();

        $sentencia = $db->prepare("UPDATE especie SET nombre='$data->nombre',descripcion='$data->descripcion' WHERE id=$data->tipo");
        
        $sentencia->execute();
    }



}