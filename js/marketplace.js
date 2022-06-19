document.addEventListener('DOMContentLoaded', function() {

  const card = document.querySelector('.nft__card');

  const nft__rank = document.querySelector('.nft__rank').textContent.trim();

  const rank_style = {
    'S': 'tier-s',
    'A': 'tier-a',
    'B': 'tier-b'
  }

  card.classList.add(rank_style[nft__rank]);



})