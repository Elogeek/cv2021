//Image animation

$(document).ready( function() {
    $('#figureImg').hover(
        function () {$(this).on.animate().css('rotateY(0deg)',1000).animate('rotateY(90deg)',1000).animate('rotateX(360deg)',1000)
        },
        function () {$(this).stop()}
    );

});



