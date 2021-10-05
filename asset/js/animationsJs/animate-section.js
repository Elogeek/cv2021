// Animation <section>
$(document).ready(function() {
    $('#arrowDetail').click(function() {
        $('form').show().css({'display': 'flex'});
    });

    $('#arrowDetail').dblclick(function() {
        $('form').hide().css({'display': 'none'});
    });
});