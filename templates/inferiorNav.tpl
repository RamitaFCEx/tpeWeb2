<div class='botonera'>
    <a href='home' class='btn btn-outline-primary'>Home</a>
    {if $items}
        <a href='allSpecies' class='btn btn-outline-primary'>ir a especies</a>
    {/if}
    
    {if $lotsSpecies}
        <a href='allAnimals' class='btn btn-outline-primary'>ir a animales</a>
    {/if}
    {if $oneSpecie}
        <a href='OneSpecie/{$raza->id_especie_fk}' class='btn btn-outline-primary'>ir a la especie</a>
    {/if}
</div>