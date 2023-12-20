const desktopContact = document.querySelector('.desktop-contact');
const registrationForm = document.querySelector('.registration-form');
const btnCerrar = document.querySelector('.btn-cerrar');
const mobile = document.querySelector('.btn-mobile');


desktopContact.addEventListener('click', toggleDesktopContact);
btnCerrar.addEventListener('click',toggleCerarForm);
mobile.addEventListener('click',toggleOpenForm);

function toggleDesktopContact() {
    registrationForm.classList.toggle('inactive');
    desktopContact.classList.toggle('inactive');
}
function toggleCerarForm() {
    registrationForm.classList.toggle('inactive');
    desktopContact.classList.toggle('inactive');
    mobile.classList.toggle('inactive');
}
function toggleOpenForm(){
    registrationForm.classList.toggle('inactive');
    mobile.classList.toggle('inactive');
}

var x = window.matchMedia("(max-width:913px)")
myFunction(x);
x.addEventListener(myFunction)
function myFunction(x) {
    if(x.matches){
        registrationForm.classList.toggle('inactive');
    }else{
        registrationForm.classList.toggle('');
    }
}