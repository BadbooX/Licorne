var nav = document.querySelector('nav');
var souliprog = document.getElementById('souliProg');
var targetUnderline = document.getElementById('targetUnderline')
window.addEventListener('scroll', function(){
    if(window.pageYOffset > 10){
        nav.classList.add('bg-dark', 'shadow');
    }else{
        nav.classList.remove('bg-dark', 'shadow');
    }
})

targetUnderline.addEventListener("mouseover", function( event ) {
    
    souliprog.style.transition = 'all 1s ease';
        souliprog.style.transform = 'scale(-0.3)';
        souliprog.style.width += '650px';
  
    // on réinitialise la couleur après quelques instants
    setTimeout(function() {
      
    }, Infinity);
  }, false);
targetUnderline.addEventListener("mouseout", function( event ) {
    
    souliprog.style.transition = 'all 1s ease';
        souliprog.style.transform = 'scale(0)';
        souliprog.style.width -= '0px';
  
    // on réinitialise la couleur après quelques instants
    setTimeout(function() {
      
    }, Infinity);
  }, false);