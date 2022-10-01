<?php
require_once '././libs/smarty-4.2.1/libs/Smarty.class.php';

class ZooView{

    function showHome($arrayCards){
        $smarty = new Smarty();
        $smarty->assign('arrayCards', $arrayCards);
        $smarty->display('././templates/home.tpl');
    }

    function showAllAnimals($razas){
        $smarty = new Smarty();
        $smarty->assign('razas', $razas);
        if($razas!=null && sizeof($razas)>=1){
            $oneSpecie = false;
            $lotsSpecies = true;

            if(sizeof($razas)==1){
                $oneSpecie = true;
            }else{
                for ($i=1; $i < sizeof($razas); $i++) { 
                    if($razas[$i]->id_especie_fk != $razas[0]->id_especie_fk){
                        $lotsSpecies = false;
                    }
                }
            }
            $smarty->assign('lotsSpecies', $lotsSpecies);
            $smarty->assign('oneSpecie', $oneSpecie);
            $smarty->display('././templates/allAnimals.tpl');
        }
    }

    function showAllSpecies($species){
        $smarty = new Smarty();
        $smarty->assign('species', $species);
        $smarty->display('././templates/allSpecies.tpl');
    }


}