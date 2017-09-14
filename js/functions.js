jQuery(document).ready(function($) {
    $('#layer-one').mousemove(function (e) {
        parallax(e, this, 1);
        parallax(e, document.getElementById('layer-two'), 4);
        parallax(e, document.getElementById('layer-three'), 2);
        parallax(e, document.getElementById('layer-four'), 3);
    });
    $('i').click(function() {
       $( "div.content" ).toggleClass('vis')
   });
    $('#highlights').zenith();
// start function
$(function() {
    var $meters = $(".meter > div");
    var $section = $('#trigger');
    var $h = $(".meter > div > h4")
    var $queue = $({});
    function loadDaBars() {
        $meters.each(function() {
            var $el = $(this);
            var origWidth = $el.width();
            $el.width(0);
            $queue.queue(function(next) {
                $el.animate({width: origWidth}, 1000, next);
            });
        });
    }
    $(document).bind('scroll', function(ev) {
        var scrollOffset = $(document).scrollTop();
        var containerOffset = $section.offset().top - window.innerHeight;
        if (scrollOffset > containerOffset) {
            loadDaBars();
            // unbind event not to load scrolsl again
            $(document).unbind('scroll');
        }
    });
});
// end function
$('.owl-carousel').owlCarousel({
   items:5,
   loop:true,
   autoplay:true,
   autoplayTimeout:2500,
   smartSpeed:1000,
   autoplayHoverPause:true, 
   dots:false,
   nav:false,
   responsive:{
    0:{
        items:1
    },
    600:{
        items:3
    },
    1000:{
        items:5
    }
}
});
$(function(){
    $(".up a").click(function(e){
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 1000);
    });
    window.onscroll = function() {scrollFunction()};
    $('.up').css('display','none');
    function scrollFunction() {
        if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            $('.up').css('display','block');
        } else {
            $('.up').css('display','none');
        }
    }
});
$(function(){
    jQuery( "#menu" ).menu({
      items: "> :not(.ui-widget-header)"
  });
});

      $('div.menu__toggle').click(function(){
        $('section.menu--circle').css("width","320px");
        $('div.menu__listings').css("left","-323px");

      });

});
function parallax(e, target, layer) {
    var layer_coeff = 100 / layer;
    var x = (jQuery(window).width() - target.offsetWidth) / 2 - (e.pageX - (jQuery(window).width() / 2)) / layer_coeff;
    var y = (jQuery(window).height() - target.offsetHeight) / 2 - (e.pageY - (jQuery(window).height() / 2)) / layer_coeff;
    jQuery(target).offset({ top: y ,left : x });
};