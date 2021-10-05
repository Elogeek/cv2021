// Animation h1
$(document).ready(function() {
    $('h1').click(function() {
        $(this).css(
            {
                'font-size': '4rem',
                'color': 'black'
            }
        );
    });

    $('h1').mouseout(function() {
        $('h1').css(
            {
                'font-size': '',
                 'color': 'white'
            }
        );
    });
});