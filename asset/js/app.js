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

// Animation h2
let titleH2 = document.querySelector('h2');

titleH2.addEventListener('mouseover',moveTitle);

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

// Animation h3
let titleh3 = document.getElementById('education');
let tableTitle = document.getElementById('titleTable');
let otherTitle = document.getElementById('titleExp');

otherTitle.addEventListener('dblclick',partyBckgColor);
tableTitle.addEventListener('dblclick',partyBckgColor);
titleh3.addEventListener('dblclick', partyBckgColor);


function partyBckgColor() {
    this.style.backgroundColor = 'orange';
    this.style.fontSize = "3rem";
    this.style.fontStyle = 'italic';
    this.style.color = "white";
}

// Animation <section>
let arrow = document.getElementById('arrowDetail');
let form = document.querySelector('form');

arrow.addEventListener('click', displayForm);
arrow.addEventListener('dblclick', resetForm);

function displayForm() {
    form.style.display = 'flex';
}

function resetForm() {
    form.style.display = 'none';
}

// Animation label TODO
let label = document.querySelector("#label");
console.log(label.value); //récupération des lettres

//entourer chaque lettre d'un span pour mettre une couleur différente par lettre
let span = document.createElement('span');
span.id = "result";
label.append(span);

let wordFin = [];
wordFin = [label.value()];

// rechercher la position de la lettre via le tableau


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

// Récupération li.json TODO
const  xhr = new XMLHttpRequest();
xhr.open();



// Récupération dd.json

/* Footer
let footer = document.querySelector('footer');
footer.style.display = 'none';
 */




