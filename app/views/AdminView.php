<?php
require_once '././libs/smarty-4.2.1/libs/Smarty.class.php';

class AdminView{
    private $smarty;
    
    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    public function showAdminLogin($error){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('././templates/adminLogin.tpl');
    }

    public function showAdminPanel($species, $animals){
        $smarty = new Smarty(); 
        $smarty->assign('species', $species);
        $smarty->assign('animals', $animals);
        
        $smarty->display('././templates/adminPanel.tpl');

    }
  

}