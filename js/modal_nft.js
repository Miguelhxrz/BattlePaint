document.addEventListener('DOMContentLoaded', function() {
    
    const showModal = document.querySelector('.modal__cta--btn');



    const closeModal = document.querySelector('.modal__close');


    const modal = document.querySelector('.modal');


    showModal.addEventListener('click', () => {
        modal.classList.add('modal--show');
    });

    closeModal.addEventListener('click', (event) => {
        event.preventDefault();
        modal.classList.remove('modal--show');
    });


})