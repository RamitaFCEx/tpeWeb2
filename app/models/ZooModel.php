<?php
class ZooModel{

    function conect(){
        try{
            $db = new PDO('mysql:host=localhost;'
                     .'dbname=db_zooDigital; charset=utf8', 'root','');
            return $db;
        }catch(PDOException  $ex){
            header(HOME);
        }
    }

    function getAllAnimals(){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo 
        $db = $this->conect();
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id ORDER BY raza.nombre ASC");
    
        try{
            $sentencia->execute();
            $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $razas;
        }catch(PDOException  $ex){
            header(HOME);
        }
    }

    function getAllSpecies(){//busca todas las especies de la tabla especie
        $db = $this->conect();
        $sentencia = $db->prepare( "SELECT * FROM especie ORDER BY especie.nombre ASC");
    
        try{
            $sentencia->execute();
            $especies = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $especies;
        }catch(PDOException  $ex){
            header(HOME);
        }
    }

    function getAllAnimalsOfSpecie($idSpecie){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id WHERE raza.id_especie_fk = ? ORDER BY raza.nombre ASC");
        
        try{
            $sentencia->execute(array($idSpecie));
            $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $razas;
        }catch(PDOException  $ex){
            header(HOME);
        }
    }

    function getOneAnimal($id){//busca todos los animales de la tabla raza y hace join con la tabla especies, necesario para el titulo
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT raza.*,especie.nombre as especie FROM raza JOIN especie ON raza.id_especie_fk = especie.id WHERE raza.id = ? ORDER BY raza.nombre ASC");
        
        try{
            $sentencia->execute(array($id));
            $razas = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $razas;
        }catch(PDOException  $ex){
            header(HOME);
        }
    }


    function addCat($data){
        $db = $this->conect();
        $sentencia = $db->prepare( "INSERT INTO especie(nombre, descripcion)"
        ."VALUES(?, ?)");

        try{
            return $sentencia->execute(array($data->nombre, $data->descripcion));
        }catch(PDOException  $ex){
            header(VERIFIED);
        }
    }

    function deleteCat($data){
        $db = $this->conect();
        $sentencia = $db->prepare( "DELETE FROM especie WHERE id=?");

        try{
            return $sentencia->execute(array($data->tipo));
        }catch(PDOException  $ex){
            header(VERIFIED);
        }
    }

    function modCat($data){
        $db = $this->conect();
        $sentencia = $db->prepare("UPDATE especie SET nombre=? , descripcion=? WHERE id=?");

        try{
            return $sentencia->execute(array($data->nombre, $data->descripcion, $data->tipo));
        }catch(PDOException  $ex){
            header(VERIFIED);
        }
    }

    function addItem($data){
        $db = $this->conect();
        $sentencia = $db->prepare( "INSERT INTO raza(nombre, color, descripcion, id_especie_fk)"."VALUES(?, ?, ?, ?)");

        try{
            return $sentencia->execute(array($data->nombre, $data->color, $data->descripcion, $data->especie));
        }catch(PDOException  $ex){
            header(VERIFIED);
        }
    }

    function deleteItem($data){
        $db = $this->conect();
        $sentencia = $db->prepare( "DELETE FROM raza WHERE id=?");

        try{
            return $sentencia->execute(array($data->animal));
        }catch(PDOException  $ex){
            header(VERIFIED);
        }
    }

    function modItem($data){
        $db = $this->conect();
        $sentencia = $db->prepare("UPDATE raza SET nombre=? , color=? , descripcion=? , id_especie_fk=? WHERE id=?");
        
        try{
            return $sentencia->execute(array($data->nombre, $data->color, $data->descripcion, $data->especie, $data->animal));
        }catch(PDOException  $ex){
            header(VERIFIED);
        }
    }
}