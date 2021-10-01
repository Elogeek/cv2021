// Animation h1
let title = document.querySelector('h1');

title.addEventListener('click',startAnimationTitle);
title.addEventListener('mouseout',stopAnimationTitle);

/*
Change color h1
 */
function startAnimationTitle() {
    title.style.color = 'black';
    title.style.fontSize = '4rem';
}

/*
Stop animation title (h1)
 */
function stopAnimationTitle() {
    title.style.color = 'white';
    title.style.fontSize = '';
}
