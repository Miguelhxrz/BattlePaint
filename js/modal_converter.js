// Modal PP to PB
const showModal = document.querySelector('.modal1__cta');
const closeModal = document.querySelector('.modal__close');
const modal1 = document.querySelector('.modal1');

showModal.addEventListener('click', (event) => {
    event.preventDefault();
    modal1.classList.add('modal--show');
});

closeModal.addEventListener('click', (event) => {
    event.preventDefault();
    modal1.classList.remove('modal--show');
});

// Modal PB to USD