console.log("Se conecto el javascript");


let selectABMCat = document.querySelector("#selectABMCat");
selectABMCat.addEventListener('change', function(){
    let tipo = document.querySelectorAll(".tipo");
    let nombre = document.querySelectorAll(".nombre");
    let descripcion = document.querySelectorAll(".descripcion");

    switch (selectABMCat.value) {
        case 'a':
            tipo.forEach((el) => {
                el.classList.add('hide');
            });

            nombre.forEach((el) => {
                el.classList.remove('hide');
            });

            descripcion.forEach((el) => {
                el.classList.remove('hide');
            });

            break;
        case 'b':
            tipo.forEach((el) => {
                el.classList.remove('hide');
            });

            nombre.forEach((el) => {
                el.classList.add('hide');
            });

            descripcion.forEach((el) => {
                el.classList.add('hide');
            });
            
            break;
        case 'm':
            tipo.forEach((el) => {
                el.classList.remove('hide');
            });

            nombre.forEach((el) => {
                el.classList.remove('hide');
            });

            descripcion.forEach((el) => {
                el.classList.remove('hide');
            });
            break;
    
        default:
            break;
    }    
});


let selectABMIt = document.querySelector("#selectABMIt");
selectABMIt.addEventListener('change', function(){
    let especie = document.querySelectorAll(".especie");
    let animal = document.querySelectorAll(".animaL");
    let caracteristicas = document.querySelectorAll(".caracteristica");

    switch (selectABMIt.value) {
        case 'a':
            especie.forEach((el) => {
                el.classList.remove('hide');
            });

            animal.forEach((el) => {
                el.classList.add('hide');
            });

            caracteristicas.forEach((el) => {
                el.classList.remove('hide');
            });

            break;
        case 'b':
            especie.forEach((el) => {
                el.classList.add('hide');
            });

            animal.forEach((el) => {
                el.classList.remove('hide');
            });

            caracteristicas.forEach((el) => {
                el.classList.add('hide');
            });
            
            break;
        case 'm':
            especie.forEach((el) => {
                el.classList.add('hide');
            });

            animal.forEach((el) => {
                el.classList.remove('hide');
            });

            caracteristicas.forEach((el) => {
                el.classList.remove('hide');
            });
            break;
    
        default:
            break;
    }        
});