window.addEventListener('load', init);

apiUrl = "http://localhost/Jaar1/CLE3/stijnMap/zorgDichtbij.php"
let locationList = document.getElementById("locaties")

let hospitalName = document.getElementById("locationZiek")
let hospitalUrl = document.getElementById("locationZiekLink")
let hospitalMaps = document.getElementById("locationZiekMaps")

let ApothecaryName = document.getElementById("locationApo")
let ApothecaryUrl = document.getElementById("locationApoLink")
let ApothecaryMaps = document.getElementById("locationApoMaps")

let DoctorName = document.getElementById("locationHuis")
let DoctorUrl = document.getElementById("locationHuisLink")
let DoctorMaps = document.getElementById("locationZiekMaps")

let favorite = document.getElementById("favoriteToggle")
let favorites = document.getElementById("favorietenLijst")
let clearfavourites = document.getElementById("clearFavorites")
let locations = []
let locationDetail = []
let favoriteList = []
const box = document.getElementById("box");

function init(){
    if (typeof window.localStorage === "undefined") {
    console.error('Local storage is not available in your browser');
    return;
}
    getLocation()

    favorite.addEventListener("click", favoriteChoice)
    locationList.addEventListener("change", locationChoice)
    clearfavourites.addEventListener("click", clearFavourites)

    hennieTalk("Welkom bij zorg in de buurt. Kies de voor jouw dichtsbijzijnde woonplek.")
}

function getLocation() {
    fetch(apiUrl)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(ajaxLocationSuccessHandler)
        .catch(ajaxErrorHandler);
}

function ajaxLocationSuccessHandler(data) {
    for (let location of data){
        let locationItem = document.createElement("option")
        locationItem.innerText = location.name
        locationItem.value = location.id
        locationList.appendChild(locationItem)
        locations.push(location)

        favoriteList[location.id] = "no";
        if (localStorage.getItem(location.id) !== null){
            favoriteList[location.id] = localStorage.getItem(location.id)
        }
        localStorage.setItem(location.id, favoriteList[location.id])
        if (favoriteList[location.id] === "yes"){
            let favouriteLocation = document.createElement("li")
            favouriteLocation.innerHTML = locations[location.id].name
            favouriteLocation.dataset.listId = location.id
            favorites.appendChild(favouriteLocation)
        }

        if (location.zorgLocationUrl !== "#"){
            fetch(location.zorgLocationUrl)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(response.statusText);
                    }
                    return response.json();
                })
                .then(ajaxLocationDetailSuccessHandler)
                .catch(ajaxErrorHandler);
        }
    }
}

function ajaxLocationDetailSuccessHandler(data){
    locationDetail[data.id] = data
}

function ajaxErrorHandler(data) {
    console.error("er is een fout opgetreden")
    console.error(data)
}

function locationChoice(e){

    hospitalName.innerHTML = locationDetail[locationList.value].ziekenhuis
    hospitalUrl.setAttribute("href", locationDetail[locationList.value].ziekenhuisUrl)
    hospitalMaps.setAttribute("href", locationDetail[locationList.value].ziekenhuisMaps)


    ApothecaryName.innerHTML = locationDetail[locationList.value].apotheek
    ApothecaryUrl.setAttribute("href", locationDetail[locationList.value].apotheekUrl)
    ApothecaryMaps.setAttribute("href", locationDetail[locationList.value].apotheekMaps)

    DoctorName.innerHTML = locationDetail[locationList.value].huisarts
    DoctorUrl.setAttribute("href", locationDetail[locationList.value].DoctorUrl)
    DoctorMaps.setAttribute("href", locationDetail[locationList.value].DoctorMaps)

    if (localStorage.getItem(locationList.value) === "yes"){
        favorite.src = "stijnImg/Favorite.png"
    } else{
        favorite.src = "stijnImg/Unfavorite.png"
    }
    console.log(`de nieuwe locatie is ${locations[locationList.value].name}`)
    console.log(favoriteList)
    box.innerHTML = ""
    if (locations[locationList.value].name === "geen locatie"){
        hennieTalk("Welkom bij zorg in de buurt. Kies de voor jouw dichtsbijzijnde woonplek.")
    } else{
        hennieTalk(`Hier zie je de best gereviewde ziekenhuis, apotheek en huisarts van ${locations[locationList.value].name}. klik op de "bezoek website" \n om hun website te bezoeken. Klik op "Zoek op Googlemaps" om een route te vinden ernaar toe.`)

    }
}

function favoriteChoice(e){

    if (favoriteList[locationList.value] === "yes"){
        favorite.src = "stijnImg/Unfavorite.png"
        favoriteList[locationList.value] = "no"
        localStorage.setItem(locationList.value, "no")
        let favouriteLocations = document.querySelectorAll("listId")
        for(let favouriteLocation of favouriteLocations){
            if (favouriteLocation.getAttribute("listId") === locationList.value){
                favouriteLocation.remove()
            }
        }

    } else{
        favorite.src = "stijnImg/Favorite.png"
        favoriteList[locationList.value] = "yes"
        localStorage.setItem(locationList.value, "yes")
        let favouriteLocation = document.createElement("li")
        favouriteLocation.innerHTML = locations[locationList.value].name
        favouriteLocation.dataset.listId = location.id
        favorites.appendChild(favouriteLocation)
    }
    console.log(favoriteList)
}

function clearFavourites(){
    for(let location of locationList){
        favoriteList[location.value] = "no"
        localStorage.setItem(location.value, "no")
    }
    if (localStorage.getItem(locationList.value) === "yes"){
        favorite.src = "stijnImg/Favorite.png"
    } else{
        favorite.src = "stijnImg/Unfavorite.png"
    }
    favorites.innerHTML = ""
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
