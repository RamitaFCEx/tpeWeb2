<?php
require_once '././libs/smarty-4.2.1/libs/Smarty.class.php';

class ZooView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    function showHome($arrayCards){
        $smarty = new Smarty();
        $smarty->assign('arrayCards', $arrayCards);
        $smarty->display('././templates/home.tpl');
    }

    function showAnimals($razas, $buttons){
        $smarty = new Smarty();
        if($razas!=null && sizeof($razas)>=1){
            $classArt = "none";
            $oneSpecie = false;

            if(sizeof($razas)==1){
                $classArt = "oneAnimal";
                $oneSpecie = true;
            }
            
            $smarty->assign('oneSpecie', $oneSpecie);
            $smarty->assign('razas', $razas);
            $smarty->assign('buttons', $buttons);
            $smarty->assign('classArt', $classArt);
            $smarty->display('././templates/animals.tpl');
        }
    }

    function showSpecies($species, $buttons){
        $smarty = new Smarty();
        $smarty->assign('buttons', $buttons);
        $smarty->assign('species', $species);
        $smarty->display('././templates/species.tpl');
    }


}