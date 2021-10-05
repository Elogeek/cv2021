// Animation <section>
$(document).ready(function() {
    $('#arrowDetail').click(function() {
        $('form').show().css();
    });

    $('#arrowDetail').dblclick(function() {
        $('form').hide().css();
    });
});