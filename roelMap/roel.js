window.addEventListener('load', init);

let apiUrl = "rechtInZorg.php"
let jsonData = [];
let favoriteItems = [];


function init()
{
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error(response.statusText)
            }
            return response.json()
        })
        .then(createList)
        .catch(ajaxErrorHandler)

    favoriteItems = JSON.parse(localStorage.getItem('favorite')) || [];

    hennieTalk("Op deze pagina kunt u meer leren over uw rechten. Klik op een van de titels voor meer info.")

}

function createList(e) {
    jsonData = e
    const list = document.getElementById("list")
    for (let data of jsonData) {
        let block = document.createElement("div")
        let title = document.createElement("h2")
        let favoriteBtn = document.createElement("i")
        block.classList.add("recht-block")
        block.classList.add("clickable")
        title.classList.add("clickable")
        favoriteBtn.classList.add("favoriteBtn")
        favoriteBtn.classList.add("far", "fa-star")
        block.dataset.id = data.id
        title.dataset.id = data.id
        favoriteBtn.dataset.id = data.id
        list.appendChild(block)
        block.appendChild(favoriteBtn)
        block.appendChild(title)

        title.innerText = data.title

        if (JSON.parse(localStorage.getItem('favorite'))?.includes(data.id)) {
            block.classList.add("favorite")
            favoriteBtn.classList.remove("far")
            favoriteBtn.classList.add("fas")
        }

        block.addEventListener("click", clickHandler)

        favoriteBtn.addEventListener("click", favoriteClickHandler)
    }
}


function clickHandler(e) {
    if (e.target.classList.contains("clickable")) {
        let dialog = document.getElementById("dialog")
        let dialogTitle = document.getElementById("dialog-title")
        let dialogDescription = document.getElementById("dialog-description")
        let dialogSource = document.getElementById("dialog-source")
        let closeButton = document.getElementById("modal-close")
        dialogTitle.innerText = jsonData.find(obj => obj.id === e.target.dataset.id).title
        dialogDescription.innerHTML = jsonData.find(obj => obj.id === e.target.dataset.id).description
        dialogSource.innerText = jsonData.find(obj => obj.id === e.target.dataset.id).source
        dialogSource.href = jsonData.find(obj => obj.id === e.target.dataset.id).source
        dialog.showModal()
        closeButton.addEventListener("click", function () {
            dialog.close()
        })
    }
}

function favoriteClickHandler(e) {
    if (e.target.classList.contains("favoriteBtn")) {
        const favoriteBtn = e.currentTarget;
        if (JSON.parse(localStorage.getItem('favorite'))?.includes(e.target.dataset.id)) {
            favoriteItems.splice(favoriteItems.indexOf(e.target.dataset.id), 1);
            e.target.parentNode.classList.remove("favorite")
            favoriteBtn.classList.remove("fas")
            favoriteBtn.classList.add("far")
        } else {
            favoriteItems.push(e.target.dataset.id)
            e.target.parentNode.classList.add("favorite")
            favoriteBtn.classList.remove("far")
            favoriteBtn.classList.add("fas")
        }
        localStorage.setItem('favorite', JSON.stringify(favoriteItems));
    }
}

function hennieTalk(text) {
    const box = document.getElementById("box");
    const message = text;
    const delay = 50;

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