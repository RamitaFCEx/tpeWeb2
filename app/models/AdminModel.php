<?php

class AdminModel{

    function conect(){
        try{
            $db = new PDO('mysql:host=localhost;'
                     .'dbname=db_zooDigital; charset=utf8', 'root','');
            return $db;
        }catch(PDOException  $ex){
            header(HOME);
        }
    }

    public function getByUseremail($useremail) {
        $db = $this->conect();
        $sentencia = $db->prepare( "SELECT * FROM usuarios WHERE email = ?");
        
        try{
            $sentencia->execute(array($useremail));
            $user = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException  $ex){
            header(HOME);
        }
    }
}