// Recovery the file dd.
let dl = document.getElementById('wordDefinition');

const xhr = new XMLHttpRequest();
xhr.open('GET', 'asset/js/dd.json', true);
xhr.responseType = 'json';


xhr.onload = function() {
    if(xhr.status !== 200) {
        const error = JSON.parse(xhr.responseText);
        alert(error);
    }
    let result = xhr.response;
    console.log(result);
    wordSearch(result);
    // select word and definition in json file
    function wordSearch (result) {
        for (let i = 0; i<=result.length; i++) {
            let dt = document.createElement('dt');
            dt.textContent = result[i]['word'];
            dl.appendChild(dt);

            let dd = document.createElement('dd');
            dd.textContent = result[i]['definition']
            dl.appendChild(dd);
        }
    }

};

xhr.send(JSON.stringify(xhr));


/* Recovery the file li.json */
let listLi = document.getElementById('listLi');

let requestXhr = new XMLHttpRequest();
requestXhr.open('GET', 'asset/js/li.json', true);
 requestXhr.responseType = 'json';

 requestXhr.onload = function() {
    if (this.status === 200) {
       const errorBis = JSON.parse(requestXhr.responseText);
        alert(errorBis);
    }
     let content = requestXhr.response;
     console.log(content)
     links(content);

 };

// select all li in json file
function links(content) {
    let ul = document.createElement('ul');
    ul.className = 'links';
    listLi.appendChild(ul);
    let linkContent = document.querySelector('.links');

    for (let i = 0; i <= content.length; i++) {
        let li = document.createElement('li');
        li.textContent = "<a href='" + content[i]['un'] + "'>" + "</a>";
        linkContent.appendChild(li);
    }
}
requestXhr.send(JSON.stringify(requestXhr));


/*  Design footer
let footer = document.querySelector('footer');
footer.style.display = 'none';
 */











