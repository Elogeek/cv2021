//Image animation

$(document).ready( function() {
    $('#figureImg').hover(
        function () {$(this).on.animate().css('rotateY(0deg)',1000).animate().css('rotateY(90deg)',1000).animate().css('rotateX(360deg)',1000)
        },
        function () {$(this).stop()}
    );

});



