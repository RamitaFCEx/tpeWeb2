<?php
include_once 'card.php';


function showHome (){
    require_once ("templates/header.php");
    ?>
        <article class="home">
            <?php
                $title = "Ver todos los animales";
                $img = "portadaRazas.jpg";
                $href = "allAnimals";
                createCard($title, $img, $href);

                $title = "Ver todas las especies";
                $img = "siluetasEspecies.jpg";
                $href = "allSpecies";
                createCard($title, $img, $href);

            ?>
        </article>
<?php
} 
?>