/* Máscara de entrada */
$(document).ready(function(){
    $('#tel').mask('(00) 0000-0000');
});

/* Navbar */
var ul = document.querySelector('nav ul')
var menuBtn = document.querySelector('.menubtn i')

function menuShow(){
    if(ul.classList.contains('open')){
        ul.classList.remove('open')
    }
    else{
        ul.classList.add('open')
    }
}

/* Ocultar ou Mostrar Senha */
const password = document.getElementById('senha')
const icon = document.getElementById('icon')

function showPass(){
    if(password.type === 'password'){
        password.setAttribute('type', 'text')
        icon.classList.add('hide')
    }
    else{
        password.setAttribute('type', 'password')
        icon.classList.remove('hide')
    }
}

