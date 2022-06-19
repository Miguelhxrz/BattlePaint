// Modal PP to PB
const showModal1 = document.querySelector('.modal1__cta');
const closeModal1 = document.querySelector('.modal__close')

const modal1 = document.querySelector('.modal1');

showModal1.addEventListener('click', (event) => {
    event.preventDefault();
    modal1.classList.add('modal--show');
});

closeModal1.addEventListener('click', (event) => {
    event.preventDefault();
    modal1.classList.remove('modal--show');
});

// Modal PB to USD
const showModal2 = document.querySelector('.modal2__cta');
const closeModal2 = document.querySelector('.modal2__close');
const modal2 = document.querySelector('.modal2');

showModal2.addEventListener('click', (event) => {
    event.preventDefault();
    modal2.classList.add('modal--show');
});

closeModal2.addEventListener('click', (event) => {
    event.preventDefault();
    modal2.classList.remove('modal--show');
});


//convertidor de paint point a paint backet
const converter = document.getElementById('input__quantity1');
const button = document.querySelector('.modal__convert--button');
const showConverter = document.querySelector('.modal__convert');
converter.addEventListener('keyup', (event) => {
    converter.value = event.target.value;

})

button.addEventListener('click', (event) => {
event.preventDefault();
let resultado = 0;

resultado = converter.value/100;
showConverter.innerHTML = resultado;
})


//convertidor de paint backet a usd
const converter2 = document.getElementById('input__quantity2');
const button2 = document.querySelector('.modal__convert--button2');
const showConverter2 = document.querySelector('.modal__convert2');
converter2.addEventListener('keyup', (event) => {
    converter2.value = event.target.value;

})

button2.addEventListener('click', (event) => {
event.preventDefault();
let resultado = 0;

resultado = converter2.value*50;
showConverter2.innerHTML = resultado;
})

