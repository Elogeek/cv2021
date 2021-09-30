// Animation h2
let titleH2 = document.querySelector('h2');

titleH2.addEventListener('mouseover',moveTitle);

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
        iterations: Infinity
    });

}