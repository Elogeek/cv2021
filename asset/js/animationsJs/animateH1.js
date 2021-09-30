// Animation h1
let title = document.querySelector('h1');

title.addEventListener('click',changeColor);
title.addEventListener('mouseout', refreshTitle);

function changeColor() {
    title.style.color = 'black';
    title.style.fontSize = '4rem';
}

function refreshTitle() {
    title.style.color = 'white';
    title.style.fontSize = '';
}
