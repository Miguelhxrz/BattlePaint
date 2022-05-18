const showbutton = document.querySelector('#modal__point');
const modal = document.querySelector('#modal1');
const closeModal1 = document.querySelector('.modal__close');
showbutton.addEventListener('click', (event) => {
    event.preventDefault();
    modal.classList.add('modal--show');
});

closeModal1.addEventListener('click', (event) => {
    event.preventDefault();
    modal.classList.remove('modal--show');
});