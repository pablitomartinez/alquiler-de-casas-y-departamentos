// que el doc haya cargado, HTML CSS y JS

document.addEventListener('DOMContentLoaded', function(){
    evenListener();
    darkMode();
})

function darkMode(){
    const botonDarkMode = document.querySelector(".dark-mode-boton");
    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode')
    })
}

function evenListener(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener("click", navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    // toggle no tiene la class la arega 
    navegacion.classList.toggle('mostrar');
}

