$(window).scroll(function(){
      if ($(this).scrollTop() > 220) {
          $('.styky_').addClass('fixed');
      } else {
          $('.styky_').removeClass('fixed');
      }
});
