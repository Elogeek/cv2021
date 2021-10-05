//Image animation

$(document).ready( function() {
    $('#figureImg').hover(
        function () {$(this).animate().css('rotateX(0deg)',1000).toggleClass('rotateImg').animate().css('rotateX(360deg)',1000)
        },
        function () {$(this).stop()}
    );

});



