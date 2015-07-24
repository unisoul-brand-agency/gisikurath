$(document).ready(function() {



$(".trigger").click(function() {
    $(this).addClass('current');
    $('.trigger:not(.current)').next(".toggle").slideUp('slow');
    $(this).removeClass('current').next(".toggle").delay(500).slideToggle("slow");
});


$(".menu-item-type-taxonomy a").click(function () {
   $(".toggle").slideUp('slow').delay(500);
});

$(".close-modal").click(function () {
   $(".toggle").slideUp('slow');
});

$(".brand").click(function () {
   $(".toggle").slideUp('slow');
});




 $(function(){
      var navStatesInPixelHeight = [60,100];
        
      var changeNavState = function(nav, newStateIndex) {
        nav.data('state', newStateIndex).stop().animate({
          height : navStatesInPixelHeight[newStateIndex] + 'px'
        }, 600);    
      };
        
      var boolToStateIndex = function(bool) {
        return bool * 1;    
      };
        
      var maybeChangeNavState = function(nav, condState) {
        var navState = nav.data('state');
        if (navState === condState) {
          changeNavState(nav, boolToStateIndex(!navState));
        }
      };
        
      $('#gsk_logo').data('state', 1);
        
      $(window).scroll(function(){
        var $nav = $('#gsk_logo');
            
        if ($(document).scrollTop() > 0) {
          maybeChangeNavState($nav, 1);
        } else {
          maybeChangeNavState($nav, 0); 
        }
      });
    });


/* stick nav */
$('.home-header').scrollToFixed();

 $('.recipes-search-form').scrollToFixed({ marginTop: 80});

//COMMENTS DISPLAY


$(".all-comments").click(function () {
   $(".comment-list").slideToggle('slow');
});
});



/*
$('.toggle').click(function(e) {
  e.preventDefault();
  var $this = $(this);
  if ($this.next().hasClass('show')) {
    $this.next().removeClass('show');
    $this.next().slideUp(350);
  } else {
    $this.parent().parent().find('li .inner').removeClass('show');
    $this.parent().parent().find('li .inner').slideUp(350);
    $this.next().toggleClass('show');
    $this.next().slideToggle(350);
  }
});
  $('.icon-wrapper').click(menuMorph);
  
  function menuMorph(){
    $('.middle').toggleClass('hidemiddle');
    $('.bottom').toggleClass('rotateup');
    $('.top').toggleClass('rotatedown');
    $('.menu-wrapper').toggleClass('visable');
  };
*/
/* LOGO RESIZE SCRIPT  */
   
/* LOGO RESIZE SCRIPT  */

/* stick nav

  $(function(){
    $('.home-header').nail({
      lOr: 'top',
      defaultCall: function(nailObj){
        nailObj.find('nav').html('home-header');
      },
        fixedCall: function(nailObj){
          nailObj.css('');
          nailObj.find('nav').html('Fixed Position');
        },
        floorCall: function(nailObj){
          nailObj.css('backgroundColor', '#000');
          nailObj.find('pnav').html('Reached Bottm');
        }
    });
  })
*/


  





