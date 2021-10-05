//Image animation

$(document).ready( function() {
    $('#figureImg').hover(
        function () {$(this).toggleClass('rotateImg')
        },
        function () {$(this).stop()}
    );

});



