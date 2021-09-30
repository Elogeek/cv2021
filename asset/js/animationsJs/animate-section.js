// Animation <section>
let arrow = document.getElementById('arrowDetail');
let form = document.querySelector('form');

arrow.addEventListener('click', displayForm);
arrow.addEventListener('dblclick', resetForm);

/*
 Display form
 */
function displayForm() {
    form.style.display = 'flex';
}

/*
Refresh form
 */
function resetForm() {
    form.style.display = 'none';
}