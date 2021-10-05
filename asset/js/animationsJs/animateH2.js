// Animation h2
$(document).ready(function() {

    $('h2').mouseover(function() {
        $(this).animate().css({"animation-play-state": "running","transform": 'translateY(15px)'},1000).animate({transform: 'translateX(-300px)'}, 1000).fadeTo(2000,0.3)
    });

    $('h2').mouseleave(function () {
        $(this).css({'animation-play-state': 'paused'})
    })

});



