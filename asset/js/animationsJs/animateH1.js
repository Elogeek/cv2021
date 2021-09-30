// Animation h1
let title = document.querySelector('h1');

title.addEventListener('click',changeColor);
title.addEventListener('mouseout', refreshTitle);

/*
Change color h1
 */
function changeColor() {
    title.style.color = 'black';
    title.style.fontSize = '4rem';
}

/*
 Refresh color initial h1
 */
function refreshTitle() {
    title.style.color = 'white';
    title.style.fontSize = '';
}
