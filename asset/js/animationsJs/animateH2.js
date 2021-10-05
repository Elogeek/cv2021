// Animation h2
$(document).ready(function() {

    $('h2').hover(function () {

            $(this).animate({transform: 'translateY(15px)'}).animate({transform: 'translateX(-300px)'})
        },
        function() {
            $(this).stop(true);
        })
});







