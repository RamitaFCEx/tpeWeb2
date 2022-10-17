{include file="header.tpl"}

<article class={$classArt}>
    {foreach from=$razas item=$raza}
        {if $oneSpecie}
            {include file='card.tpl' 
                        title=$raza->nombre|cat: "<i>"|cat: " raza de "|cat: $raza->especie|cat: "</i>"
                        img=$raza->nombre  
                        href="animal/"|cat: $raza->id
                        details=$raza->descripcion
                        specie="one_species/"|cat: $raza->id_especie_fk
            } 
        {else}
            {include file='card.tpl' 
                        title=$raza->nombre|cat: "<i>"|cat: " raza de "|cat: $raza->especie|cat: "</i>"
                        img=$raza->nombre  
                        href="animal/"|cat: $raza->id
                        details=$raza->nombre|cat: " "|cat: $raza->color 
            } 
        {/if}
    {/foreach}

</article>

{include file="footer.tpl"}