{include file="header.tpl"}

<article class={$classArt}>
{foreach from=$razas item=$raza}
    {if $oneSpecie}
        {include file='card.tpl' 
                    title=$raza->nombre|cat: "<i>"|cat: " raza de "|cat: $raza->especie|cat: "</i>"
                    img=$raza->nombre  
                    href="OneAnimal/"|cat: $raza->id|cat:"/"|cat: $raza->id_especie_fk
                    details=$raza->descripcion
        } 
    {else}
        {include file='card.tpl' 
                    title=$raza->nombre|cat: "<i>"|cat: " raza de "|cat: $raza->especie|cat: "</i>"
                    img=$raza->nombre  
                    href="OneAnimal/"|cat: $raza->id|cat:"/"|cat: $raza->id_especie_fk
                    details=$raza->nombre|cat: " "|cat: $raza->color 
        } 
    {/if}
{/foreach}
           
</article>

<div class='botonera'>
    <a href='home' class='btn btn-outline-primary'>Home</a>
    <a href='allSpecies' class='btn btn-outline-primary'>ir a especies</a>
    {if $lotsSpecies}
        <a href='allAnimals' class='btn btn-outline-primary'>ir a animales</a>
    {/if}
    {if $oneSpecie}
        <a href='OneSpecie/{$raza->id_especie_fk}' class='btn btn-outline-primary'>ir a la especie</a>
    {/if}
</div>

{include file="footer.tpl"}