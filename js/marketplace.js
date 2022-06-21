document.addEventListener('DOMContentLoaded', function() {

  const forms = document.getElementsByClassName('form__hidden');

  const nft_forms = Array.from(forms);
  
  const card = document.getElementsByClassName('nft__card');

  const nft_cards = Array.from(card);

  const nft__rank = document.getElementsByClassName('nft__rank');

  const nft_ranks = Array.from(nft__rank);

  const rank_style = {
    'S': 'tier-s',
    'A': 'tier-a',
    'B': 'tier-b'
  }

  console.log(nft_forms);

  for (let i = 0; i < nft_cards.length; i++) {

  nft_cards[i].classList.add(rank_style[nft_ranks[i].textContent.trim()]);

  }

  for (let i = 0; i < nft_cards.length; i++) {

    nft_cards[i].addEventListener('click', () => {

      nft_forms[i].submit();

    } )


  }


  


})

