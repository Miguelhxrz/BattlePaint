document.addEventListener('DOMContentLoaded', function() {

  const btn_sell = document.querySelector('.modal__sell--btn');

  const container_sell = document.querySelector('.modal__sell');

  const modal_close = document.querySelector('.modal__close');

  const form_sell = document.querySelector( '.modal__sell--container' );

  const send_btn = document.querySelector( '.modal__sell--button' )

  btn_sell.addEventListener( 'click', (e) => {

    e.preventDefault();

    container_sell.classList.add( 'modal--show' );


  } )


  modal_close.addEventListener( 'click', () => {


    container_sell.classList.remove( 'modal--show' );


  } );

  send_btn.addEventListener( 'click', () => {

    form_sell.submit();

  } )















})