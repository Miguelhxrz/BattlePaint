const price = document.querySelector('#input__quantity');
const showbutton = document.querySelector('#modal__point');
const modal = document.querySelector('#modal1');
const closeModal1 = document.querySelector('.modal__close');

//convertidor de paint backet a usd
const converter = document.getElementById('input__quantity');
const button = document.querySelector('.modal__convert--button');
const showConverter = document.querySelector('.modal__convert');

//form
const form = document.getElementById('modal-form');

const tobuy = document.getElementById('input__quantity');

price.addEventListener('change', () => {

    let resultado = 0;

    resultado = converter.value * 50;
    showConverter.innerHTML = resultado;
});

/* button.addEventListener('click', (e) => {
    
    e.preventDefault();
    
    tobuy.value = converter.value;

    document.getElementById('modal-form').submit();
    
    


}); */


showbutton.addEventListener('click', (event) => {
    event.preventDefault();
    modal.classList.add('modal--show');
});

closeModal1.addEventListener('click', (event) => {
    event.preventDefault();
    modal.classList.remove('modal--show');
});


converter.addEventListener('keyup', (event) => {
    converter.value = event.target.value;

})


/* button.addEventListener('click', (event) => {
event.preventDefault();

let resultado = 0;
resultado = converter.value*50;
showConverter.innerHTML = resultado;
}) */