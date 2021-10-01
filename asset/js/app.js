// Recovery the file dd.
let myDefinition = document.getElementById('worldDefinition');
const xhr = new XMLHttpRequest();
xhr.open('GET', json, true);
let json = 'dd.json';

xhr.responseType = 'json';
xhr.onload = function() {
    if(xhr.responseText) {
        const error = JSON.parse(xhr.responseText);
        alert(error);
    }
    else {
        myDefinition = xhr.responseText;

        let dt = document.createElement('dt');
        dt.textContent = myDefinition['word'];
        myDefinition.appendChild(dt);

        let dd = document.createElement('dd');
        dd.textContent = myDefinition['definition']
        myDefinition.appendChild(dd);
    }

};


xhr.send(JSON.stringify(xhr));


// Recovery the file li.json

let xhr2 = new XMLHttpRequest();
let fileJson = 'li.json';
xhr2.open('GET', json, true);

xhr2.responseType = 'json';
xhr2.onload = function() {
    if (this.readyState === 4 && this.status === 200) {
        document.getElementById("firstLi").innerHTML = xhr2.responseText;
        document.getElementById("twoLi").textContent = xhr2.responseText;
    }
}

xhr2.send();

/*  Design footer
let footer = document.querySelector('footer');
footer.style.display = 'none';
 */












