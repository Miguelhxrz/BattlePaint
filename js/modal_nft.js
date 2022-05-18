const showModal = document.querySelector('.modal__cta--btn');
const closeModal = document.querySelector('.modal__close');
const modal = document.querySelector('.modal');

showModal.addEventListener('click', (event) => {
    event.preventDefault();
    modal1.classList.add('modal--show');
});

closeModal.addEventListener('click', (event) => {
    event.preventDefault();
    modal.classList.remove('modal--show');
});