// Animation img
let myImg = document.querySelector('figure');
myImg.addEventListener('mouseenter', moveImg);

function moveImg(){
    myImg.style.cssText = `
     transform-origin : center center;
     transform : rotate(45deg)
    `;
}

// Refresh img
myImg.addEventListener('click', refreshImg);

function refreshImg() {
    myImg.style.cssText = `
     transform: rotate(360deg)
    `;
}