{include file="header.tpl"}

<article class="home">
    <div>
        <p>{$error}</p>
    </div>
    <form action="verify" method="POST">
        <h2>Login</h2>
        <div>
            <input type="text" name="email" placeholder="Ingrese su email..."/>
            <small>*carlitos@gmail.com</small>
        </div>
        <div>
            <input type="password" name="password" placeholder="Ingrese su password..."/>
            <small>*1989</small>
        </div>
    
        <button type="submit">Login</button>
    </form>
           
</article>

{include file="footer.tpl"}