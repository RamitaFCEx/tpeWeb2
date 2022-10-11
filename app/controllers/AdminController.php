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

            $data = new stdClass();
            $data->nombre = $_POST['nombre'];
            $data->color = $_POST['color'];
            $data->descripcion = $_POST['descripcion'];
            $data->tipo = $_POST['tipo'];
            $data->abm = $_POST['abm'];

            switch ($_POST['abm']) {
                case 'a':
                    var_dump($data);
                    break;
                case 'b':
                    var_dump($data);
                    break;
                case 'm': 
                    var_dump($data);
                    break;
                default:
                    echo "<h1>Error 404 - Page not found </h1>";
                    break;
            }


        }else{
            header(VERIFIED);
        }
    }

    public function abmCat() {
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
                if($this->checkVoid($data)){
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
        header(VERIFIED);
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