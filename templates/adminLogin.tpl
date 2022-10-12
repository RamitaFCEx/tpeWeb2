{include file="header.tpl"}

<article class="home">
    <div>
        <p class="alert alert-danger {if $error == ""} hide{/if} ">{$error}</p>
    </div>
    <form action="verify_data" method="POST">
        <h2>Login</h2>
        <div>
            <input type="text" name="email" placeholder="Ingrese su email..."/>
            <small>*carlitos@gmail.com</small>
        </div>
        <div>
            <input type="password" name="password" placeholder="Ingrese su password..."/>
            <small>*1989</small>
        </div>
    
        <button type="submit" class="btn btn-success mt-2">Iniciar sesion</button>


        <div>
            <a class="btn btn-danger" href="logout">Cerrar sesion</a>
        </div>
        
    </form>
    
</article>

{include file="footer.tpl"}