// Animation h3
let titleSchool = document.getElementById('titleSchool');
let tableTitle = document.getElementById('titleTable');
let otherTitle = document.getElementById('titleExp');

// Start animation
otherTitle.addEventListener('dblclick',startAnimationH3);
tableTitle.addEventListener('dblclick',startAnimationH3);
titleSchool.addEventListener('dblclick', startAnimationH3);

/*
    Change background-color the titles <h3>
 */
function startAnimationH3() {
    this.style.backgroundColor = 'orange';
    this.style.fontSize = "3rem";
    this.style.fontStyle = 'italic';
    this.style.color = "white";
}

// Stop animation
otherTitle.addEventListener('mouseover', stopAnimateH3);
tableTitle.addEventListener('mouseover', stopAnimateH3);
titleSchool.addEventListener('mouseover', stopAnimateH3);

/*
Stop animation h3
 */

function stopAnimateH3() {
    this.style.cssText = `
    background-color: white;
    font-style: normal;
    color: crimson;
    `
}