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

    favoriteLocations = JSON.parse(localStorage.getItem('favoriteStorage')) || [];

    document.addEventListener("click", favoriteClickHandler)
    detailDialog = document.getElementById('location-detail');
    detailContent = detailDialog.querySelector('.modal-content');
    detailDialog.addEventListener('click', detailModalClickHandler);
    detailDialog.addEventListener('close', dialogCloseHandler);


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

    for (let location of data){

        let locatieKaartje = document.createElement("div")
        locatieKaartje.classList.add("locatieKaartje")
        locatieKaartje.dataset.id = location.id

        locationGallery.appendChild(locatieKaartje)

        ajaxRequest(location.zorgLocationUrl, ajaxLocationDetailSuccessHandler)

    }
}

function ajaxLocationDetailSuccessHandler(data){

    let locationKaart = document.querySelector(`.locatieKaartje[data-id='${data.id}']`);

    locationList[data.id] = data



    let locationName = document.createElement("h2")
    locationName.innerHTML = data.naam
    locationKaart.appendChild(locationName)

    updateFavoriteList()
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

    let favoriet = document.createElement("img")

    favoriet.src = "stijnImg/Unfavorite.png"
    favoriet.dataset.id = location.id
    favoriet.classList.add("favoriteBtn")
    favoriet.setAttribute("width", 25)
    favoriet.setAttribute("height", 25)
    if (localStorage.getItem('favoriteStorage')?.includes(favoriet.dataset.id)){
        favoriet.src = "stijnImg/Favorite.png"
    }else{
        favoriet.src = "stijnImg/Unfavorite.png"
    }
    detailContent.appendChild(favoriet)

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

function favoriteClickHandler(e) {

    if (e.target.classList.contains("favoriteBtn")) {
        console.log("ër is geklikt")
        const favoriteBtn = e.currentTarget;
        if (localStorage.getItem('favoriteStorage')?.includes(e.target.dataset.id)) {
            favoriteLocations.splice(favoriteLocations.indexOf(e.target.dataset.id), 1);
            e.target.src = "stijnImg/Unfavorite.png"
        } else {
            favoriteLocations.push(e.target.dataset.id)
            e.target.src = "stijnImg/Favorite.png"
        }
        localStorage.setItem('favoriteStorage', JSON.stringify(favoriteLocations));
        updateFavoriteList()
    }
}

function updateFavoriteList(){
    favoriteList.innerHTML = ""
    for (let favorite of favoriteLocations){
        let favoriteListItem = document.createElement("li")
        favoriteListItem.innerHTML = locationList[favorite].naam
        favoriteList.appendChild(favoriteListItem)
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