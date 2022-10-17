<div class="card">

    <img src="img/{$img}.jpg" class="card-img-top" alt="...">

    <div class="card-body">
        <div>
            <h5 class="card-title">{$title}</h5>
            <p class="card-text">{$details}</p>
        </div>
        <div>
            {if !isset($specie)}
                <a href="{$href}" class="btn btn-outline-primary">Ver</a>
            {else}
                <a href="{$specie}" class="btn btn-outline-success">Ir a la especie</a>
            {/if}
        </div>
    </div>

</div>