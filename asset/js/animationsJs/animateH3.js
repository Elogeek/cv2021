// Animation h3
let titleh3 = document.getElementById('education');
let tableTitle = document.getElementById('titleTable');
let otherTitle = document.getElementById('titleExp');

otherTitle.addEventListener('dblclick',partyBckgColor);
tableTitle.addEventListener('dblclick',partyBckgColor);
titleh3.addEventListener('dblclick', partyBckgColor);


/*
    Change background-color the titles <h3>
 */
function partyBckgColor() {
    this.style.backgroundColor = 'orange';
    this.style.fontSize = "3rem";
    this.style.fontStyle = 'italic';
    this.style.color = "white";
}
