document.addEventListener('DOMContentLoaded', function() {

  const card = document.getElementsByClassName('nft__card');

  const nft_cards = Array.from(card);

  const nft__rank = document.getElementsByClassName('nft__rank');

  const nft_ranks = Array.from(nft__rank);

  const send = document.getElementsByClassName( 'form__hidden' );
  
  const send_to = Array.from(send);

  console.log(send_to);

  const rank_style = {
    'S': 'tier-s',
    'A': 'tier-a',
    'B': 'tier-b'
  }

  for (let i = 0; i < nft_cards.length; i++) {

    nft_cards[i].classList.add(rank_style[nft_ranks[i].textContent.trim()]);
  
  }

  for (let i = 0; i < nft_cards.length; i++) {

    nft_cards[i].addEventListener( "click", () => {

      send_to[i].submit();

    } )
  
  }
  
  
  





})