{include file="header.tpl"}

<article class="adminPanel">
    

    <form action="abmItem" method="POST">
        <h2>ABM Items</h2>

        <label for="abm">Accion</label>
        <select name="abm" >
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="m">m</option>
        </select>

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

        <button type="submit" class="btn btn-dark mt-4">Enviar</button>
    </form>


    <form action="abmCat" method="POST">
        <h2>ABM Categorias</h2>
        <small>*Todos los campos deben ser rellenados*</small>

        <label for="abm">Accion</label>
        <select name="abm" id="selectABM">
            <option value="a">agregar</option>
            <option value="b">borrar</option>
            <option value="m">modificar</option>
        </select>
    
        <label class="hide  tipo ">Seleccionar:</label>
        <select name="tipo" class="hide tipo">
            <option value="0" selected>Especies</option>
            {foreach from=$species item=$specie}
                <option value="{$specie->id}">{$specie->nombre}</option>
            {/foreach}
        </select>
        
        <label for="nombre" class="nombre">Agregar una nueva:</label>
        <input type="text" name="nombre" class="nombre">

        <label for="descripcion" class="descripcion">Descripcion</label>
        <textarea name="descripcion" rows="4" cols="50" class="descripcion">
        </textarea>
        
        
    
        <button type="submit" class="btn btn-dark mt-4">Enviar</button>
    </form>

           
</article>

{include file="footer.tpl"}

<script src="./js/adminPanel.js"></script>