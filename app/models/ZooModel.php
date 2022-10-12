<?php
class ZooModel{

    function conect(){
        $db = new PDO('mysql:host=localhost;'
                     .'dbname=db_zooDigital; charset=utf8', 'root','');
        return $db;
    }

    function getAllAnimals(){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo 
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id ORDER BY raza.nombre ASC");
    
        $sentencia->execute();
    
        $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $razas;
    }

    function getAllSpecies(){//busca todas las especies de la tabla especie
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT * FROM especie ORDER BY especie.nombre ASC");
    
        $sentencia->execute();
    
        $especies = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $especies;
    }

    function getAllAnimalsOfSpecie($idSpecie){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id WHERE raza.id_especie_fk = ? ORDER BY raza.nombre ASC");
        $sentencia->execute(array($idSpecie));
    
        $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $razas;
    }

    function getOneAnimal($id){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id WHERE raza.id = ? ORDER BY raza.nombre ASC");
        $sentencia->execute(array($id));
    
        $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $razas;
    }


    function addCat($data){
        $db = $this->conect();

        $sentencia = $db->prepare( "INSERT INTO especie(nombre, descripcion)"
        ."VALUES(?, ?)");

        return $sentencia->execute(array($data->nombre, $data->descripcion));;
    }

    function deleteCat($data){
        $db = $this->conect();
        $sentencia = $db->prepare( "DELETE FROM especie WHERE id=?");
        return $sentencia->execute(array($data->tipo));
    }

    function modCat($data){
        $db = $this->conect();

        $sentencia = $db->prepare("UPDATE especie SET nombre=? , descripcion=? WHERE id=?");
        
        return $sentencia->execute(array($data->nombre, $data->descripcion, $data->tipo));
    }

    function addItem($data){
        $db = $this->conect();

        $sentencia = $db->prepare( "INSERT INTO raza(nombre, color, descripcion, id_especie_fk)"."VALUES(?, ?, ?, ?)");

        return $sentencia->execute(array($data->nombre, $data->color, $data->descripcion, $data->especie));
    }

    function deleteItem($data){
        $db = $this->conect();
        $sentencia = $db->prepare( "DELETE FROM raza WHERE id=?");
        return $sentencia->execute(array($data->animal));
    }

    function modItem($data){
        $db = $this->conect();

        $sentencia = $db->prepare("UPDATE raza SET nombre=? , color=? , descripcion=? , id_especie_fk=? WHERE id=?");
        
        return $sentencia->execute(array($data->nombre, $data->color, $data->descripcion, $data->especie, $data->animal));
    }
}