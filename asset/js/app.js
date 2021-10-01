/*
 Dancing letters animation label
*/
let label = document.querySelectorAll('label');
let myForm = document.querySelector('fieldset');

/*
Generate a random colors
*/
function rainbowColor() {
    let color = '';
    for(let i = 0; i < 3; i++) {
        let random = Math.floor(Math.random() * 256).toString(16);
        color += (random.length ===  1 ? "0" + random : random);
    }
    return "#" + color;
}

// Create a span
let span = document.createElement('span');
span.innerHTML = rainbowColor();
document.body.append(span);

// Add span in the form
span.id = 'resultDancingColor';
myForm.appendChild(span);

// Recovery the file li.json TODO

//const xhr = new XMLHttpRequest();
//let json = 'li.json';
//xhr.open('GET', json);

//xhr.responseType = 'json';
//xhr.onload = function() {};
//xhr.send();



// Recovery the file dd.json

/*  Design footer
let footer = document.querySelector('footer');
footer.style.display = 'none';
 */




