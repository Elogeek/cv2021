// Image animation
let myImg = document.querySelector('figure');
myImg.addEventListener('mouseenter', startAnimationImg);

/*
Move (rotate) the image
 */
function startAnimationImg(){
    myImg.style.cssText = `
     transform-origin : center center;
     transform : rotate(45deg)
    `;
}

/*
 Refresh the img
 */
myImg.addEventListener('click', stopAnimationImg);

function stopAnimationImg() {
    myImg.style.cssText = `
     transform: rotate(360deg)
    `;
}