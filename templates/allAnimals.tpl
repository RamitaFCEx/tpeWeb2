{include file="header.php"}

<article>
    {foreach from=$razas item=$raza}
        {* <h1>1</h1> *}
                {* $specie = getTheSpecie($raza->id_especie_fk);
                $txt = $specie[0]->nombre;
                $descrip = $txt . " " . $raza->color;
                $title = $raza->nombre . "<i> raza de $txt</i>";
                $img = $raza->nombre . ".jpg";
                $href = "OneAnimal/" . $raza->id;
                createCard($title, $img, $href, $descrip); *}

                

                {include file='card.tpl' 
                         title=$raza->nombre 
                         img=$raza->nombre  
                         href="OneAnimal/"|cat: $raza->id  
                         details=$raza->color 
                } 
    {/foreach}
           
</article>

<div class='botonera'>
    <a href='home' class='btn btn-outline-primary'>Home</a>
</div>