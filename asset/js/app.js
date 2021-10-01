// Recovery the file dd.
let myDefinition = document.getElementById('worldDefinition');
const word = document.getElementById('word');
const definitionWord = document.getElementById('definition');

const xhr = new XMLHttpRequest();
xhr.open('GET', 'asset/js/dd.json', true);
xhr.responseType = 'json';


xhr.onload = function() {
    if(xhr.status !== 200) {
        const error = JSON.parse(xhr.responseText);
        alert(error);
    }
    let response = xhr.response;
    console.log(response);

   word.innerHTM = response.word;
   definitionWord.textContent = response.definition;


};

xhr.send(JSON.stringify(xhr));


/* Recovery the file li.json

let xhr2 = new XMLHttpRequest();
xhr2.open('GET', 'asset/js/dd.json', true);

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












