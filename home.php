<?php



function showHome (){
    require_once ("templates/header.php");

    ?>
    <article>

      <?php
      // incluyo el archivo que tiene las noticias
      //$noticias = getNoticias();
      ?>

          <div class="card">
              <img src="img/portadaRazas.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ver todos los animales</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi quaerat laboriosam eum exercitationem, veniam fugit vero, architecto amet totam beatae obcaecati dolorum, sed eligendi numquam? Laudantium ducimus eius tempore vel!</p>
                <a href="allAnimals" class="btn btn-outline-primary">Ver</a>
              </div>
            </div>

            <div class="card">
              <img src="img/siluetasEspecies.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ver todas las especies</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi quaerat laboriosam eum exercitationem, veniam fugit vero, architecto amet totam beatae obcaecati dolorum, sed eligendi numquam? Laudantium ducimus eius tempore vel!</p>
                <a href="allSpecies" class="btn btn-outline-primary">Ver</a>
              </div>
            </div>
          
        
</article>
    
        <?php
//     echo ('<h1>CALCULADORA</h1>
//     <form method="GET" id="formCalculator">
//         <label>Operador 1: </label>
//         <input type="number" name="valor1">
//         <label>Operador 2: </label>
//         <input type="number" name="valor2">
//         <select name="operacion">
//             <option value="sumar">Sumar</option>
//             <option value="restar">Restar</option>
//             <option value="multiplicar">Multiplicar</option>
//             <option value="dividir">Dividir</option>
//         </select>
//         <button type="submit">Guardar</button>
//     </form>
    
//     <div id="conteiner"></div>
    
//     <script src="js/main.js"></script>
// </body>
// </html>');
} 
?>