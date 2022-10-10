{include file="header.tpl"}

<article class="adminPanel">
    

    <form action="abmItem" method="POST">
        <h2>ABM Items</h2>

        <label for="tipo">Tipo</label>
        <select name="tipo" id="">
            {foreach from=$species item=$specie}
                <option value="{$specie->id}">{$specie->nombre}</option>
            {/foreach}
        </select>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">

        <label for="color">Color</label>
        <input type="text" name="color"> 

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" rows="4" cols="50">
        </textarea>
    
        <label for="abm">Accion</label>
        <select name="abm" >
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="m">m</option>
        </select>

        <button type="submit" class="btn btn-dark mt-4">Enviar</button>
    </form>


    <form action="abmCat" method="POST">
        <h2>ABM Categorias</h2>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        
        
        <label>*Evite las siguientes Categorias:*</label>
        <small>
            *{foreach from=$species item=$specie}
                <span>{$specie->nombre}</span>/
            {/foreach}*
        </small>
        

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" rows="4" cols="50">
        </textarea>
        
        <label for="abm">Accion</label>
        <select name="abm" >
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="m">m</option>
        </select>
    
        <button type="submit" class="btn btn-dark mt-4">Enviar</button>
    </form>

           
</article>

{include file="footer.tpl"}