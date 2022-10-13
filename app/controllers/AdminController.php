<?php

include_once 'app/models/AdminModel.php';
include_once 'app/models/ZooModel.php';
include_once 'app/views/AdminView.php';
include_once 'Controller.php';

include_once 'app/helpers/authHelper.php';////

class AdminController extends Controller{
    
    function __construct(){ 
        $this->model = new AdminModel();
        $this->zoomodel = new ZooModel();
        $this->view = new AdminView();
    }

    public function goAdminLogin(){
        $this->view->showAdminLogin(""); 
    }

    public function verifyAdmin() {
        $useremail = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model->getByUseremail($useremail);
        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($password, $user[0]->password)) {
            session_start();
            $_SESSION["name"] = $useremail;
            header(VERIFIED. "/");
            die();
        } else {
            $this->view->showAdminLogin("ERROR DE INGRESO");
        }
    }

    public function showPanel(){
        
        // $succes = "alert-secondary";
        // if($param == 1){
        //     $succes = "alert-success";
        // }else if ($param == 0){
        //     $succes = "alert-danger";
        // }
        if($this->checkLoggedIn()){
            $species = $this->zoomodel->getAllSpecies();
            $animals = $this->zoomodel->getAllAnimals();
            //$this->view->showAdminPanel($species, $animals, $param, $succes);
            $this->view->showAdminPanel($species, $animals);
        }else{
            header(LOGIN);
            die();
        }

    }

    public function logout() {
        if($this->checkLoggedIn()){//PHP_SESSION_ACTIVE
            session_start();
            session_destroy();
            header(HOME);
            die();
        }else{
            header(LOGIN);
            die();
        }
    }

    private function checkLoggedIn(){////////////////////////////////////
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        if(isset($_SESSION['name']) && $this->checkName($_SESSION['name'])){
            return true;
        }
        return false;
    }

    private function checkName($useremail){
        $user = $this->model->getByUseremail($useremail);
        if(!empty($user)){
            return true;
        }
        return false;
    }

    private function checkTimeLogged(){
        if ( isset($_SESSION['LAST_ACTIVITY']) && 
        (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) { 
        $this->logout(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    }////////////////////////////////////////////////////////////////////////
    





    public function abmItem() {
        if($this->checkLoggedIn()){
            $data = new stdClass();
            $data->abm = $_POST['abm'];
            switch ($data->abm) {
                case 'a':
                    $data->especie = $_POST['especie'];//de las que existen en la bd
                    $data->nombre = $_POST['nombre'];//nuevo
                    $data->color = $_POST['color'];
                    $data->descripcion = $_POST['descripcion'];
                    if($this->checkVoid($data)){
                        $this->zoomodel->addItem($data);
                    }
                    break;
                case 'b':
                    $data->animal = $_POST['animal'];//de los que existen en la bd
                    if($this->checkVoid($data) && $data->animal > '0'){
                        $this->zoomodel->deleteItem($data);
                    }
                    break;
                case 'm': 
                    $data->especie = $_POST['especie'];
                    $data->animal = $_POST['animal'];//de los que existen en la bd
                    $data->nombre = $_POST['nombre'];//nuevo
                    $data->color = $_POST['color'];
                    $data->descripcion = $_POST['descripcion'];
                    if($this->checkVoid($data)){
                        $this->zoomodel->modItem($data);
                    }
                    break;
                default:
                    header(VERIFIED);///ACa esta el problema
                    die();
                    break;
            }
            header(VERIFIED);
            die();
        }else{
            header(LOGIN);
            die();
        }
    }

    public function abmCat() {
        if($this->checkLoggedIn()){
            $data = new stdClass();
            $data->abm = $_POST['abm'];
            switch ($data->abm) {
                case 'a':
                    $data->nombre = $_POST['nombre'];
                    $data->descripcion = $_POST['descripcion'];
                    if($this->checkVoid($data)){
                      $this->zoomodel->addCat($data);
                    }
                    break;
                case 'b':
                    $data->tipo = $_POST['tipo'];
                    if($this->checkVoid($data) && $data->tipo != '0'){
                        $this->zoomodel->deleteCat($data);
                    }
                    break;
                case 'm': 
                    $data->tipo = $_POST['tipo'];
                    $data->nombre = $_POST['nombre'];
                    $data->descripcion = $_POST['descripcion'];
                    if($this->checkVoid($data)){
                        $this->zoomodel->modCat($data);
                    }
                    break;
                default:
                    header(VERIFIED);
                    break;
            }
            header(VERIFIED);///ACa esta el problema
            die();
        }else{
            header(LOGIN);
            die();
        }
    }

    function checkVoid($data){
        $response = true;
        foreach ($data as $d) {
            if($d == null || $d == "" || ctype_space($d)){
                $response = false;
            }
        }
        return $response;
    }




}