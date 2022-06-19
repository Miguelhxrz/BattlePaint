document.addEventListener('DOMContentLoaded', function() {
    
const showModal = document.querySelector('.modal__cta--btn');
const closeModal = document.querySelector('.modal__close');
const modal = document.querySelector('.modal');

console.log(showModal);

showModal.addEventListener('click', () => {
    modal.classList.add('modal--show');
    console.log('holi');
});

closeModal.addEventListener('click', (event) => {
    event.preventDefault();
    modal.classList.remove('modal--show');
});

})