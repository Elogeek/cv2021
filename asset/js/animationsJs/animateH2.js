// Animation h2
let titleH2 = document.querySelector('h2');

titleH2.addEventListener('mouseover',moveTitle);
titleH2.addEventListener('mouseleave',stopAnimationTitle2);

/*
 Move the title <h2>
 */
function moveTitle() {

    titleH2.animate([
        // keyframes
        { transform: 'translateY(15px)' },
        { transform: 'translateX(-300px)' }
    ], {
        // timing options
        duration: 1000,
        iterations: 1
    });

}

/*
  Stop animation title <h2>
 */
function  stopAnimationTitle2() {
    titleH2.style.animationPlayState = 'paused';
}