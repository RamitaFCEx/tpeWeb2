<div class='botonera'>
    <a href='home' class='btn btn-outline-primary'>Home</a>
    {foreach from=$buttons item=$button }
        <a href='{$button->ref}' class='btn btn-outline-primary'>{$button->sign}</a>
    {/foreach}
</div>