window.onload = () =>
{
    
}

var boton_menu = document.getElementById('nav-icon');

boton_menu.addEventListener('click', () => {
    var navegador = document.getElementsByTagName('nav')[0];
    var active = navegador.className;

    (active.includes('active')) ? navegador.classList.remove('active') : navegador.classList.add('active');

    var text_nav = document.getElementsByClassName('text-nav');

    for(var i = 0 ; i < text_nav.length; i++)
    {
        (!active.includes('active')) ? text_nav[i].classList.remove('no-active') : text_nav[i].classList.add('no-active');
    }
})