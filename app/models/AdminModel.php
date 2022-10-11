<?php

class AdminModel{

    function conect(){
        $db = new PDO('mysql:host=localhost;'
                     .'dbname=db_zooDigital; charset=utf8', 'root','');
        return $db;
    }

    public function getByUseremail($useremail) {
        $db = $this->conect();
    
        $sentencia = $db->prepare( "SELECT * FROM usuarios WHERE email = ?");
        $sentencia->execute(array($useremail));
    
        $user = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $user;
    }
}