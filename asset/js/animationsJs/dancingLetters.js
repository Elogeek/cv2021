// Dancing letters animation label

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

// one span by letter

$('label').on('mouseenter', function () {
    $(this).each(function (index, value) {
        let b = this.textContent;
        this.innerHTML = '';

        for (let a = 0, letters = b.length; a < letters; ++a) {
            // Create a span
            let span = document.createElement('span');
            span.id = 'resultDancingColor';
            this.appendChild(span);
            span.textContent = b[a];
            span.style.color = rainbowColor();

        }

    })

});


