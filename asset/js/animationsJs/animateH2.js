// Animation h2
$(document).ready(function() {

    $('h2').mouseover(function() {
        $(this).animate().css({transform: 'translateY(15px)'},1000).animate({transform: 'translateX(-300px)'}, 1000)
    });

    $('h2').mouseleave(function () {
        $(this).stop(true);
    })

});



