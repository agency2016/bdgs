
  
  jQuery(document).ready(function(){
   $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 300) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
   
     //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  }); 

});


    
  //<![CDATA[
    jQuery(window).load(function() { // makes sure the whole site is loaded
      $('#status').fadeOut(); // will first fade out the loading animation
      $('#preloader').delay(700).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(700).css({'overflow':'visible'});
    })
  //]]>