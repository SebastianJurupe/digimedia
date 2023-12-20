
const formulario = document.getElementById('formulario');
const numero = document.getElementById('numero');

formulario.addEventListener('submit',e => {
    e.preventDefault();
    check();
});

function check(){
    const numeroValue = numero.value.trim();

    if(numeroValue === ''){
        setErrorFor(numero,'Campo vacio');
    }else if(!isNumero(numero)){
        setErrorFor(numero,'Debes de tener 9 digitos');
    }else{
        setSuccessFor(numero);
    }
}

function setErrorFor(input, mensaje){
    const formcontrol = input.parentElement;
    const small = formcontrol.querySelector('small');
    formcontrol.className = 'falla';
    small.innerText = mensaje;
}

function setSuccessFor(input){
    const formcontrol = input.parentElement;
    formcontrol.className = 'exito';
}

function isNumero(numero){
    return /^\d{9}$/.test(numero)
}
