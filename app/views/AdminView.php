<?php
require_once '././libs/smarty-4.2.1/libs/Smarty.class.php';

class AdminView{
    private $smarty;
    
    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    function showAdminLogin($error){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('././templates/adminLogin.tpl');
    }

    function showAdminPanel($species){
        $smarty = new Smarty();
        $smarty->assign('species', $species);
        $smarty->display('././templates/adminPanel.tpl');
    }
  

}