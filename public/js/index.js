$(document).ready(function(){
   
    var marginWindow = $(window).height();
    var marginFot = marginWindow - $('.footerPrincipal').height();
    var marginSeñalamiento = ((marginWindow / 100) * 50) - $('.señalDerecha').height();
    var marginSeñalDerecha = $(window).width();
    var marginSeñalDerecha = marginSeñalDerecha - 50;
    var marginMensaje = marginWindow / 2;
        marginMensaje = marginMensaje - ($('.mensaje').height() / 2);
        
    $('.slider').height(marginWindow);
        
    $('.mensaje').css("margin-top",marginMensaje);
   
    $('.principal').css("height", marginWindow);        
    $('.footerPrincipal').css("margin-top", marginFot);
    
    $('.señalamiento').css("margin-top" , marginSeñalamiento);
    $('.señalDerecha').css("margin-left" , marginSeñalDerecha);
    
    var x = 0;
function slider(){ 

    if( x == 0 ) { 
        x++;
    }
    
    else if(x == 1) {
    $('#uno').fadeOut(1000);            
        x++;        
    }
    
    else if( x == 2) { 
        
        $('#uno').fadeIn(1000);    
        x = 1
    }
    
    
        
 }    
    
    

setInterval(slider,8000);
  
$( window ).resize(function() {
       
       
    var marginWindow = $(window).height();
    var marginFot = marginWindow - $('.footerPrincipal').height();
    var marginSeñalamiento = ((marginWindow / 100) * 50) - $('.señalDerecha').height();
    var marginSeñalDerecha = $(window).width();
    var marginSeñalDerecha = marginSeñalDerecha - 50;
    var marginMensaje = marginWindow / 2;
        marginMensaje = marginMensaje - ($('.mensaje').height() / 2);
        
    $('.mensaje').css("margin-top",marginMensaje);
    $('.slider').height(marginWindow);
    $('.principal').css("height", marginWindow);        
    $('.footerPrincipal').css("margin-top", marginFot);
    
    $('.señalamiento').css("margin-top" , marginSeñalamiento);
    $('.señalDerecha').css("margin-left" , marginSeñalDerecha);
       
   });
    
});

