// Modal PP to PB
const showModal1 = document.querySelector('.modal1__cta');
const closeModal1 = document.querySelector('.modal__close');
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

// Modal USD to PB
const showModal3 = document.querySelector('.modal3__cta');
const closeModal3 = document.querySelector('.modal3__close');
const modal3 = document.querySelector('.modal3');

showModal3.addEventListener('click', (event) => {
    event.preventDefault();
    modal3.classList.add('modal--show');
});

closeModal3.addEventListener('click', (event) => {
    event.preventDefault();
    modal3.classList.remove('modal--show');
});