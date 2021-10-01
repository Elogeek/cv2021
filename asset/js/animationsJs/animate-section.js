// Animation <section>
let arrow = document.getElementById('arrowDetail');
let form = document.querySelector('form');

arrow.addEventListener('click', displayForm);
arrow.addEventListener('dblclick', hideForm);

/*
 Display form
 */
function displayForm() {
    form.style.display = 'flex';
}

/*
Hide form
 */
function hideForm() {
    form.style.display = 'none';
}