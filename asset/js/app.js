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
    wordSearch(result);
    // Select word and definition in json file
    function wordSearch (result) {
        for (let i = 0; i<=result.length; i++) {
            let dt = document.createElement('dt');
            dt.textContent = result[i] ['word'];
            dl.appendChild(dt);

            let dd = document.createElement('dd');
            dd.textContent = result[i] ['definition'];
            dl.appendChild(dd);
        }
    }

};

xhr.send();


/* Recovery the file li.json */
let listLi = document.getElementById('listLi');

let requestXhr = new XMLHttpRequest();
requestXhr.open('GET', 'asset/js/li.json', true);
 requestXhr.responseType = 'json';

 requestXhr.onload = function() {
    if (this.status !== 200) {
       const errorBis = JSON.parse(requestXhr.responseText);
        alert(errorBis);
    }
    else {
        let resultBis = requestXhr.response;
        searchLi(resultBis);
    }

     // Select all li in json file
     function searchLi (resultBis) {
         for (let i = 0; i<=resultBis.length; i++) {
             let li = document.createElement('li');
             li.textContent = resultBis[i]['firstLi'];
             listLi.appendChild(li);

             let lili = document.createElement('li');
             lili.textContent = resultBis[i]['twoLi']
             listLi.appendChild(lili);
         }
    }

 };

requestXhr.send();


/*  Design footer
let footer = document.querySelector('footer');
footer.style.display = 'none';
 */











