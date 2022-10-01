{include file="header.tpl"}

<article class="allSpecies">
    {foreach from=$species item=$spe}
                {include file='card.tpl' 
                         title=$spe->nombre
                         img="especies/"|cat: $spe->nombre  
                         href="OneSpecie/"|cat: $spe->id  
                         details=$spe->descripcion
                } 
    {/foreach}
           
</article>

<div class='botonera'>
    <a href='home' class='btn btn-outline-primary'>Home</a>
    <a href='allAnimals' class='btn btn-outline-primary'>ir a animales</a>
</div>

{include file="footer.tpl"}