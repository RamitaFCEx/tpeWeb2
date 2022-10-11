{include file="header.tpl"}

<article class="adminPanel">

    <form action="abmItem" method="POST">
        <h2>ABM Items</h2>
        <small>*Todos los campos deben ser rellenados*</small>

        <label for="abm">Accion</label>
        <select name="abm" id="selectABMIt">
            <option value="a">agregar</option>
            <option value="b">borrar</option>
            <option value="m">modificar</option>
        </select>

        <label for="animal" class="animaL hide">Animal</label>
        <select name="animal" id="selectABMIt" class="animaL hide">
            <option value="0">Animal</option>
            {foreach from=$animals item=$animal}
                <option value="{$animal->id}">{$animal->nombre}</option>
            {/foreach}
        </select>

        <label for="especie" class="especie">Es un:</label>
        <select name="especie" class="especie">
            {foreach from=$species item=$specie}
                <option value="{$specie->id}">{$specie->nombre}</option>
            {/foreach}
        </select>

        <label for="nombre" class="caracteristica">Nombre</label>
        <input type="text" name="nombre" class="caracteristica">

        <label for="color" class="caracteristica">Color</label>
        <input type="text" name="color" class="caracteristica"> 

        <label for="descripcion" class="caracteristica">Descripcion</label>
        <textarea name="descripcion" rows="4" cols="50" class="caracteristica"></textarea>

        <button type="submit" class="btn btn-dark mt-4">Enviar</button>
    </form>


    <form action="abmCat" method="POST">
        <h2>ABM Categorias</h2>
        <small>*Todos los campos deben ser rellenados*</small>

        <label for="abm">Accion</label>
        <select name="abm" id="selectABMCat">
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
        
        <label for="nombre" class="nombre">Nombre / Nuevo nombre:</label>
        <input type="text" name="nombre" class="nombre">

        <label for="descripcion" class="descripcion">Descripcion</label>
        <textarea name="descripcion" rows="4" cols="50" class="descripcion"></textarea>
        
        
    
        <button type="submit" class="btn btn-dark mt-4">Enviar</button>
    </form>

           
</article>

{include file="footer.tpl"}

<script src="./js/adminPanel.js"></script>