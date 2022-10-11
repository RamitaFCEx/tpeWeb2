console.log("Se conecto el javascript");


let selectABM = document.querySelector("#selectABM");

selectABM.addEventListener('change', function(){
    
    switch (selectABM.value) {
        case 'a':
            document.querySelectorAll(".tipo").forEach((el) => {
                el.classList.add('hide');
            });

            document.querySelectorAll(".nombre").forEach((el) => {
                el.classList.remove('hide');
            });

            document.querySelectorAll(".descripcion").forEach((el) => {
                el.classList.remove('hide');
            });

            break;
        case 'b':
            document.querySelectorAll(".tipo").forEach((el) => {
                el.classList.remove('hide');
            });

            document.querySelectorAll(".nombre").forEach((el) => {
                el.classList.add('hide');
            });

            document.querySelectorAll(".descripcion").forEach((el) => {
                el.classList.add('hide');
            });
            
            break;
        case 'm':
            document.querySelectorAll(".tipo").forEach((el) => {
                el.classList.remove('hide');
            });

            document.querySelectorAll(".nombre").forEach((el) => {
                el.classList.remove('hide');
            });

            document.querySelectorAll(".descripcion").forEach((el) => {
                el.classList.remove('hide');
            });
            break;
    
        default:
            break;
    }

    
});