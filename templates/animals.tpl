{include file="header.tpl"}

<article class={$classArt}>
    {foreach from=$razas item=$raza}
        {if $oneSpecie}
            {include file='card.tpl' 
                        title=$raza->nombre|cat: "<i>"|cat: " raza de "|cat: $raza->especie|cat: "</i>"
                        img=$raza->nombre  
                        href="animal/"|cat: $raza->id|cat:"/"|cat: $raza->id_especie_fk
                        details=$raza->descripcion
            } 
        {else}
            {include file='card.tpl' 
                        title=$raza->nombre|cat: "<i>"|cat: " raza de "|cat: $raza->especie|cat: "</i>"
                        img=$raza->nombre  
                        href="animal/"|cat: $raza->id|cat:"/"|cat: $raza->id_especie_fk
                        details=$raza->nombre|cat: " "|cat: $raza->color 
            } 
        {/if}
    {/foreach}
</article>

{include file="inferiorNav.tpl" buttons=$buttons}
{include file="footer.tpl"}