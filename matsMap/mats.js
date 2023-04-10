window.addEventListener('load', init);

//Globals
let apiUrl = 'http://localhost/CLE3/matsMap/veiligheidInZorg.php';
let pinboard;
let infoData = {};
let detailDialog;
let detailContent;

/**
 * Initialize after the DOM is ready
 */
function init()
{
    hennieTalk()

    pinboard = document.getElementById('pinboard')
    pinboard.addEventListener("click", detailWindow);

    detailDialog = document.getElementById('detail');
    detailContent = document.querySelector('.modal-content');
    detailDialog.addEventListener('click', detailModalClickHandler)

    betterCallAjax(apiUrl, createHelpCards);
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

function createHelpCards(data)
{
    for (let info of data) {
        let infoCard = document.createElement('div');
        infoCard.classList.add('info-card');
        infoCard.dataset.name = info.title
        pinboard.appendChild(infoCard);

        betterCallAjax(info.titleUrl, fillInfoCard);
    }}

function fillInfoCard(info)
{
    console.log(info)
    let infoCard = document.querySelector(`.info-card[data-name='${info.title}']`);
    infoCard.classList.add(`${info.catagory}`)

    let title = document.createElement('h3');
    title.innerHTML = "Onderwerp: " + info.title;
    infoCard.appendChild(title);

    let catagory = document.createElement('h3');
    catagory.innerHTML = "Catagorie: " + info.catagory;
    infoCard.appendChild(catagory)



    // !!! store pokémon info for later use !!!
    infoData[info.id] = info;
}

function detailWindow(e)
{
    let clickedItem = e.target;

    if (clickedItem.nodeName !== 'DIV') {
        return;
    }

    detailDialog.showModal();

    let info = infoData[clickedItem.dataset.id];

    detailContent.innerHTML = '';

    let title = document.createElement('h1');
    title.innerHTML = `${info.title}`
    detailContent.appendChild(title);

    let source = document.createElement('a');
    source.innerHTML = info.source
    detailContent.appendChild(source);

    locationGallery.classList.add('dialog-open');
}

function detailModalClickHandler(e)
{
    if (e.target.nodeName === 'DIALOG' || e.target.nodeName === 'BUTTON') {

        detailDialog.close();
        modalcontent.innerHTML = ""
    }
}

function dialogCloseHandler(e)
{
    locationGallery.classList.remove('dialog-open');
}

//
// function detailWindow(e) {
//     let clickedItem = e.target;
//
//     if (clickedItem.nodeName !== 'BUTTON'){
//         return;
//     }
//     detailDialog.showModal();
//
//     let info = infoData[clickedItem.dataset.id];
//
//     detailContent.innerHTML= '';
//
//     let title = document.createElement('h1');
//     title.innerHTML = `${info.title} (#${info.id})`;
//     detailContent.appendChild(title);
//
//     let image = document.createElement('img');
//     image.src = pokemon.sprites.other['official-artwork'].front_shiny;
//     image.classList.add('pokemon-card');
//     detailContent.appendChild(image);
//
//     let types = document.createElement('h3');
//     if (pokemon.types.length === 2) {
//         types.innerHTML = pokemon.types['0'].type.name + ' / ' + pokemon.types['1'].type.name;}
//     if (pokemon.types.length === 1) {
//         types.innerHTML = pokemon.types['0'].type.name}
//     detailContent.appendChild(types);
// }
//
// function detailModalClickHandler(e) {
//     if (e.target.nodeName === 'DIALOG' || e.target.nodeName === 'BUTTON') {
//         detailDialog.close();
//         gallery.classList.remove('dialog-open');
//     }
// }

function ajaxErrorHandler()
{
    let errorMessage = document.createElement('div');
    errorMessage.classList.add('error');
    console.log("Er ging iets fout")
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