/*
 Dancing letters animation label
*/
let label = document.querySelectorAll('label');

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

// Cool ma function est géniale !!!!
let span = document.createElement('span');
span.innerHTML = rainbowColor();
document.body.append(span);

// Create a span
span.id = 'resultDancingColor';
span.prepend(label);





// Recovery the file li.json TODO
//const  xhr = new XMLHttpRequest();




// Recovery the file dd.json

/*  Design footer
let footer = document.querySelector('footer');
footer.style.display = 'none';
 */




