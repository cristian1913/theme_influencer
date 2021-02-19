$(window).scroll(function(){
      if ($(this).scrollTop() > 150) {
          $('.styky_').addClass('fixed');
      } else {
          $('.styky_').removeClass('fixed');
      }
});
