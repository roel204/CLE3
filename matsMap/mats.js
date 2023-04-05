window.addEventListener('load', init);

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
        image.setAttribute("data-url", dataUrls[imageUrls.indexOf(imageUrl)]);
        pinboard.appendChild(image);
    }

    document.addEventListener("click", imageClickHandler)
}

function imageClickHandler(e) {
    if (e.target.className !== 'hennie') {
        if (e.target.nodeName === "IMG") {
            detailWindow();
        }
    }
}

function hennieTalk() {

    const message =
"Hier vind U informatie over wat U het best eerst kan doen in verschilldende situaties die te maken hebben met Uw veiligheid.";
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

function detailWindow(e) {
    let clickedItem = e.target;

    if (clickedItem.nodeName !== 'BUTTON'){
        return;
    }

    detailDialog.showModal();

    let pokemon = pokemonData[clickedItem.dataset.id];

    detailContent.innerHTML= '';

    let title = document.createElement('h1');
    title.innerHTML = `${pokemon.name} (#${pokemon.id})`;
    detailContent.appendChild(title);
}
