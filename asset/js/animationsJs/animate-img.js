// Image animation
let myImg = document.querySelector('figure');
myImg.addEventListener('mouseenter', moveImg);

/*
Move the image
 */
function moveImg(){
    myImg.style.cssText = `
     transform-origin : center center;
     transform : rotate(45deg)
    `;
}

/*
 Refresh the img
 */
myImg.addEventListener('click', refreshImg);

function refreshImg() {
    myImg.style.cssText = `
     transform: rotate(360deg)
    `;
}