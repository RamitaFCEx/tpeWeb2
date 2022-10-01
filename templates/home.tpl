{include file="header.tpl"}

<article class="home">
    {foreach from=$arrayCards item=$card}
        {include file='card.tpl' 
                    title=$card->title
                    img=$card->img 
                    href=$card->href  
                    details=$card->descrip 
        } 
    {/foreach}
           
</article>

{include file="footer.tpl"}