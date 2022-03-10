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
        (!active.includes('active')) ? text_nav[i].style.setProperty("display", "inline-block") : text_nav[i].style.setProperty("display", "none");
    }

    var list = navegador.getElementsByTagName('li');
    for(var i = 1 ; i < list.length; i++)
    {
        if (!active.includes('active')) 
        {
            list[i].style.setProperty("border-bottom", "2px solid #F5E6CB");
            list[i].style.setProperty("padding-bottom", "0.75rem");
        }
        else
        { 
            list[i].style.setProperty("border-bottom", "none");
            list[i].style.setProperty("padding-bottom", "0rem");
        }
    }
})