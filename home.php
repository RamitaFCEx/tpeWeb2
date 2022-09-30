<?php
include_once 'card.php';


function showHome (){
    require_once ("./templates/header.php");
    ?>
        <article class="home">
            <?php
                $title = "Ver todos los animales";
                $img = "portadaRazas.jpg";
                $href = "allAnimals";
                $descrip = "Descubre todos nuestros animales ヽ(✿ﾟ▽ﾟ)ノ";
                createCard($title, $img, $href, $descrip);

                $title = "Ver todas las especies";
                $img = "siluetasEspecies.jpg";
                $href = "allSpecies";
                $descrip = "Descubre todas nuestras especies ヽ(✿ﾟ▽ﾟ)ノ";
                createCard($title, $img, $href, $descrip);
            ?>
        </article>
<?php
} 
?>