$(document).ready(function() {
    let wrapperMenu = document.querySelector('.wrapper-menu');
    wrapperMenu.addEventListener('click', function(){
      wrapperMenu.classList.toggle('open');  
    })
});