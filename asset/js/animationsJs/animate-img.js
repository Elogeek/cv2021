// Image animation
let figureImg = document.querySelector('figure');
figureImg.addEventListener('mouseenter', startAnimationImg);

/*
Move (rotate) the image
 */
function startAnimationImg(){
    figureImg.animate([{transform: 'rotateY(0deg)' }], {delay : 1000, duration : 1000, fill : "forwards" })
    figureImg.animate([{transform: 'rotateY(90deg)'}], {delay : 1000, fill: "forwards"})
    figureImg.animate([{transform: 'rotateX(360deg)' }], {delay : 1000, duration : 1000, fill : "forwards" })
}

/*
 Stop rotate the img
 */
figureImg.addEventListener('mouseleave', stopAnimationImg);

function stopAnimationImg() {
   figureImg.style.animationPlayState = "paused";

}
