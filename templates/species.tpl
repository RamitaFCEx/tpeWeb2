{include file="header.tpl"}

<article class="allSpecies">
    {foreach from=$species item=$spe}
                {include file='card.tpl' 
                         title=$spe->nombre
                         img="especies/"|cat: $spe->nombre  
                         href="one_species/"|cat: $spe->id  
                         details=$spe->descripcion
                } 
    {/foreach}
           
</article>

{include file="inferiorNav.tpl" buttons=$buttons}
{include file="footer.tpl"}