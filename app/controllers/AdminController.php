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
        //$this->checkLoggedIn();Traba todo
        $this->view->showAdminLogin("");
    }

    public function verifyAdmin() {
        $useremail = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model->getByUseremail($useremail);

        //var_dump($user);
        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($password, $user[0]->password)) {
            session_start();
            $_SESSION["name"] = $useremail;
            header(VERIFIED);
        } else {
            $this->view->showAdminLogin("ERROR DE INGRESO");
        }
    }

    public function showPanel(){
        session_start();
        if(isset($_SESSION['name'])){
            $species = $this->zoomodel->getAllSpecies();
            $this->view->showAdminPanel($species);
        }else{
            header(HOME);
        }
        
    }

    public function logout() {
        session_start();
        session_destroy();
        header(HOME);
    }

    private function checkLoggedIn(){////////////////////////////////////
        session_start();
        if(!isset($_SESSION['name'])){
            header(HOME);
            die();
        }
    }

    private function checkTimeLogged(){
        if ( isset($_SESSION['LAST_ACTIVITY']) && 
        (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) { 
        $this->logout(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    }////////////////////////////////////////////////////////////////////////
    

    public function abmItem() {
        if(isset($_POST['tipo'])&&!empty($_POST['tipo'])
           &&isset($_POST['nombre'])&&!empty($_POST['nombre'])
           &&isset($_POST['color'])&&!empty($_POST['color'])
           &&isset($_POST['descripcion'])&&!empty($_POST['descripcion'])
           &&isset($_POST['abm'])){
            $tipo = $_POST['tipo'];
            $nombre = $_POST['nombre'];
            $color = $_POST['color'];
            $descripcion = $_POST['descripcion'];
            $abm = $_POST['abm'];

            $data = [$nombre, $_POST['color'], $_POST['descripcion'], $_POST['abm'], $tipo];

            var_dump($data);
        }else{
            header(VERIFIED);
        }
    }

    public function abmCat() {
        if(isset($_POST['nombre'])&&!empty($_POST['nombre'])
           &&isset($_POST['descripcion'])&&!empty($_POST['descripcion'])
           &&isset($_POST['abm'])){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $abm = $_POST['abm'];

            $data = [$nombre, $_POST['descripcion'], $_POST['abm']];

            var_dump($data);
        }else{
            header(VERIFIED);
        }
    }

}