/* Animation h3 */

$(document).ready(function() {
    // Animation title school (diplômes)
    $('#titleSchool').dblclick(function() {
        $(this).css(
            {
                'font-size': '3rem',
                'color': 'white',
                'fontStyle' : 'italic',
                'background-color': 'orange'
            }
        );
    });

    $('#titleSchool').mouseover(function() {
        $(this).css(
            {
                'font-size': '',
                'background-color': 'white',
                'color': 'crimson'
            }
        );
    });
    // Animation title table (hobbies)
    $('#titleTable').dblclick(function() {
        $(this).css(
            {
                'font-size': '3rem',
                'color': 'white',
                'fontStyle' : 'italic',
                'background-color': 'orange'
            }
        );
    });

    $('#titleTable').mouseover(function() {
        $(this).css(
            {
                'font-size': '',
                'background-color': 'white',
                'color': 'crimson'
            }
        );
    });
    // Animation title (expérience)
    $('#titleExp').dblclick(function() {
        $(this).css(
            {
                'font-size': '3rem',
                'color': 'white',
                'fontStyle' : 'italic',
                'background-color': 'orange'
            }
        );
    });

    $('#titleExp').mouseover(function() {
        $(this).css(
            {
                'font-size': '',
                'background-color': 'white',
                'color': 'crimson'
            }
        );
    });

});