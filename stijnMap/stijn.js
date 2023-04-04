window.addEventListener('load', init);

apiUrl = "zorgDichtbij.php"

let locationGallery = document.getElementById("locatieGallery")
let favoriteList = document.getElementById("favorietenLijst")

let locationList = [];
let favoriteLocations = [];

let modalcontent = document.getElementById("modal-content")

let detailDialog;
let detailContent;

function init(){

    detailDialog = document.getElementById('location-detail');
    detailContent = detailDialog.querySelector('.modal-content');
    detailDialog.addEventListener('click', detailModalClickHandler);
    detailDialog.addEventListener('close', dialogCloseHandler);

    locationGallery.addEventListener("click", locationClickHandler)
    ajaxRequest(apiUrl, ajaxLocationSuccessHandler)

    hennieTalk("welkom bij zorg in de buurt. Klik op jouw de voor jouw gemeente om de dichtsbijzijnde zorglocaties te zien")
}

function ajaxRequest(url, successHandler)
{
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(successHandler)
        .catch(ajaxErrorHandler);
}

function ajaxLocationSuccessHandler(data){

    console.log(data)

    for (let location of data){


        let locatieKaartje = document.createElement("div")
        locatieKaartje.classList.add("locatieKaartje")
        locatieKaartje.dataset.id = location.id

        locationGallery.appendChild(locatieKaartje)

        ajaxRequest(location.zorgLocationUrl, ajaxLocationDetailSuccessHandler)

    }
}

function ajaxLocationDetailSuccessHandler(data){
    console.log(data)
    let locationKaart = document.querySelector(`.locatieKaartje[data-id='${data.id}']`);

    locationList[data.id] = data

    let locationName = document.createElement("h2")
    locationName.innerHTML = data.naam
    locationKaart.appendChild(locationName)
}

function ajaxErrorHandler(data) {
    console.error("er is een fout opgetreden")
    console.error(data)
}

function locationClickHandler(e)
{
    let clickedItem = e.target;

    if (clickedItem.nodeName !== 'DIV') {
        return;
    }

    let location = locationList[clickedItem.dataset.id];

    detailContent.innerHTML = '';

    let title = document.createElement('h1');
    title.innerHTML = location.naam
    detailContent.appendChild(title);


    let ziekTitle = document.createElement("p")
    ziekTitle.innerHTML = location.ziekenhuis
    detailContent.appendChild(ziekTitle);

    let ziekLink = document.createElement("a")
    ziekLink.setAttribute("href", location.ziekenhuisUrl)
    ziekLink.setAttribute("target","_blank")
    ziekLink.innerHTML = "link naar website"
    detailContent.appendChild(ziekLink);


    let apoTitle = document.createElement("p")
    apoTitle.innerHTML = location.apotheek
    detailContent.appendChild(apoTitle);

    let apoLink = document.createElement("a")
    apoLink.setAttribute("href", location.apotheekUrl)
    apoLink.setAttribute("target","_blank")
    apoLink.innerHTML = "link naar website"
    detailContent.appendChild(apoLink);


    let huisTitle = document.createElement("p")
    huisTitle.innerHTML = location.huisarts
    detailContent.appendChild(huisTitle);

    let huisLink = document.createElement("a")
    huisLink.setAttribute("href", location.huisartsUrl)
    huisLink.setAttribute("target","_blank")
    huisLink.innerHTML = "link naar website"
    detailContent.appendChild(huisLink);


    detailDialog.showModal();
    locationGallery.classList.add('dialog-open');
    console.log(detailContent)

}

function detailModalClickHandler(e)
{
    if (e.target.nodeName === 'DIALOG' || e.target.nodeName === 'BUTTON') {
        console.log(detailContent)
        detailDialog.close();
        modalcontent.innerHTML = ""
    }


}

function dialogCloseHandler(e)
{
    console.log(detailContent)
    locationGallery.classList.remove('dialog-open');


}

function updateFavorites(locationId){
    if (locationId === "yes" || locationId === "no"){
        if (favoriteLocations[locationId] === "yes"){
            favoriteLocations[locationId] = "no"
        } else {
            favoriteLocations[locationId] = "yes"
        }
    }
    favoriteList.innerHTML = ""
    for (let location of favoriteLocations){
        if (location === "yes"){
            let favoriteListItem = document.createElement("li")
            favoriteListItem.innerHTML = locationList[locationId].naam
            favoriteList.appendChild(favoriteListItem)
        }
    }
}

function hennieTalk(text) {

    const message = text;
    const delay = 16;

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