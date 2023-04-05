window.addEventListener('load', init);


let apiUrl = "http://localhost/CLE3/matsMap/veiligheidInZorg.php"
let jsonData = [];
let pinboard = document.getElementById("pinboard")
let detailDialog;
let detailContent;

function init()
{
    hennieTalk()

    imageUrls = ["matsimg/Ontruiming.png", "matsimg/Pijn.png", "matsimg/Ziekte.png"]
    dataUrls = ["https://www.google.nl", "https://www.google.nl", "https://www.google.nl"]

    for (let imageUrl of imageUrls) {
        const image = document.createElement("img");
        image.src = imageUrl;
        image.classList.add('pinboardItem')
        image.addEventListener("click", detailWindow);
        image.setAttribute("data-url", dataUrls[imageUrls.indexOf(imageUrl)]);
        pinboard.appendChild(image);
    }

    detailDialog = document.getElementById('detail');
    detailContent = document.querySelector('.modal-content');

    betterCallAjax(apiUrl, getApiItems);
}

function betterCallAjax(link, succesHandler)
{
    fetch(link)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(succesHandler)
        .catch(ajaxErrorHandler);
}

function getApiItems(data)
{
    for (let items of data.results) {
        let pokemonCard = document.createElement('div');
        pokemonCard.classList.add('ApiItem');
        pokemonCard.dataset.name = items.name
        }

        betterCallAjax(items.url, fillApiItems);
    }

function fillApiItems() {

}

function detailWindow(e) {
    detailDialog.showModal();

}

function ajaxErrorHandler() {
    console.log("dit gaat niet zo goed")
}

function hennieTalk() {

    const message =
        "Hier vind U informatie over wat U het best eerst kan doen in verschilldende situaties " +
        "die te maken hebben met Uw veiligheid.";
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