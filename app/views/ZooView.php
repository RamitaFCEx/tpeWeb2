<?php
require_once '././libs/smarty-4.2.1/libs/Smarty.class.php';

class ZooView{

    function showAllAnimals($razas){
        $smarty = new Smarty();
        $smarty->assign('razas', $razas);
        $smarty->display('././templates/allAnimals.tpl');

        // $txt = $specie[0]->nombre;
        // $descrip = $txt . " " . $raza->color;
        // $title = $raza->nombre . "<i> raza de $txt</i>";
        // $img = $raza->nombre . ".jpg";
        // $href = "OneAnimal/" . $raza->id;
    }

}