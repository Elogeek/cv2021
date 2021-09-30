// Animation <section>
let arrow = document.getElementById('arrowDetail');
let form = document.querySelector('form');

arrow.addEventListener('click', displayForm);
arrow.addEventListener('dblclick', resetForm);

function displayForm() {
    form.style.display = 'flex';
}

function resetForm() {
    form.style.display = 'none';
}