window.addEventListener('load', init);

let apiUrl = "http://localhost/CLE3/roelMap/rechtInZorg.php"
let jsonData = [];

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
}

function createList(e) {
    jsonData = e
    const list = document.getElementById("list")
    for (let data of jsonData) {
        let block = document.createElement("div")
        let title = document.createElement("h2")
        block.classList.add("recht-block")
        block.classList.add("clickable")
        title.classList.add("clickable")
        block.dataset.id = data.id
        title.dataset.id = data.id
        list.appendChild(block)
        block.appendChild(title)

        title.innerText = data.title

        block.addEventListener("click", clickHandler)
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

function ajaxErrorHandler(e) {
    console.error(e)
}