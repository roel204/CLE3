window.addEventListener('load', init);

let apiUrl = "algemeneVragen.php"
let questions = [];

function init()
{
    hennieTalk("Hier kunt u verschillende veelgestelde vragen zien, klik op één van de vragen voor gegeven antwoorden.")
    Fetch(apiUrl)
}

function Fetch(api) {
    fetch(api)
        .then(response => {
            if (!response.ok) {
                throw new Error(response.statusText)
            }
            return response.json()
        })
        .then(ajaxSuccessHandler)
        .catch(ajaxErrorHandler)
}

function ajaxSuccessHandler(data){
    questions = data;
    const qList = document.getElementById("pinboardL");
    for(let question of questions){
        let block = document.createElement("div");
        let text = document.createElement("h2");
        block.classList.add("qBlock")
        text.innerText = question.question;
        qList.appendChild(block)
        block.appendChild(text)

        block.addEventListener("click", clickHandler)
    }

}

function clickHandler(e){
    let selected = e.target;
    if(selected.className === "qBlock"){
        let quest = questions[selected.dataset.id];

    }
}

function hennieTalk(text) {

    const message = text;
    const delay = 10;

    let i = 0;
    let interval = setInterval(() => {
        if (message[i] === ' ') {
            box.innerHTML += '&nbsp;';
        } else {
            box.innerText += message[i];
        }
        i++;
        if (i >= message.length) clearInterval(interval);
    }, delay);
}

function ajaxErrorHandler(e) {
    console.error(e)
}