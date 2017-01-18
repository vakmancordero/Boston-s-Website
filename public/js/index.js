$(document).ready(function(){
   
    var marginWindow = $(window).height();
    var marginFot = marginWindow - $('.footerPrincipal').height();
    var marginSeñalamiento = ((marginWindow / 100) * 50) - $('.señalDerecha').height();
    var marginSeñalDerecha = $(window).width();
    var marginSeñalDerecha = marginSeñalDerecha - 50;
   
    $('.principal').css("height", marginWindow);        
    $('.footerPrincipal').css("margin-top", marginFot);
    
    $('.señalamiento').css("margin-top" , marginSeñalamiento);
    $('.señalDerecha').css("margin-left" , marginSeñalDerecha);
    
    
    function slider() {
        
      var texto = $('#fade').text();

      if (texto == texto1) {
        $('#fade').fadeOut( "slow", function() {
            $('#fade').text(texto2);
        });
        $('#fade').fadeIn( "slow", function() {
        });
      }

      else if (texto == texto2) {
        $('#fade').fadeOut( "slow", function() {
            $('#fade').text(texto3);
        });
        $('#fade').fadeIn( "slow", function() {});
      }
     
  }

  setInterval(slider,3500);
    
});

