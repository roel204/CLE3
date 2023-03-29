window.addEventListener('load', init);

let apiUrl = "https://raw.githubusercontent.com/Roel-H/CLE3/master/roelMap/rechtInZorg.php"

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
    console.log("YIPEE")
    let block = document.createElement("div")

}

function ajaxErrorHandler(e) {
    console.error(e)
}