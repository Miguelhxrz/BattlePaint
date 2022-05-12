document.addEventListener('DOMContentLoaded', function() {

  const card = document.getElementsByClassName('nft__card ');

  const card_arr = [...card];

  card_arr.forEach(card => {
    card.addEventListener('click', () => {
      window.location = '../view/character_view.php'
    })
  })












})