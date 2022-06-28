document.addEventListener('DOMContentLoaded', function() {

  const character_container = document.querySelector('.character__container');


  const rank_style = {
    'S': 'tier-s',
    'A': 'tier-a',
    'B': 'tier-b'
  }

 const rank = document.getElementById('nft__rank').textContent;


 character_container.classList.add( rank_style[rank.trim()] );




  











})