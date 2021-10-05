// Animation <section>
$(document).ready(function() {
    $('#arrowDetail').click(function() {
        $(this).show().css({'display': 'flex'});
    });

    $('form').dblclick(function() {
        $(this).hide().css({'display': 'none'});
    });
});