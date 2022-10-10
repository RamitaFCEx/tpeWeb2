{include file="header.tpl"}

<article class="home">
    <div>
        <p>{$error}</p>
    </div>
    <form action="verify" method="POST">
        <h2>Login</h2>
        <input type="text" name="email" placeholder="Ingrese su email..."/>
        <input type="password" name="password" placeholder="Ingrese su password..."/>
    
        <button type="submit">Login</button>
    </form>
           
</article>

{include file="footer.tpl"}