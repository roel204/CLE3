window.addEventListener('load', init);

apiUrl = "http://localhost/Jaar1/CLE3/stijnMap/zorgDichtbij.php"
let locationList = document.getElementById("locaties")

let hospitalName = document.getElementById("locationZiek")
let hospitalUrl = document.getElementById("locationZiekLink")


let ApothecaryName = document.getElementById("locationApo")
let ApothecaryUrl = document.getElementById("locationApoLink")


let DoctorName = document.getElementById("locationHuis")
let DoctorUrl = document.getElementById("locationHuisLink")


let favorite = document.getElementById("favoriteToggle")
let favorites = document.getElementById("favorietenLijst")
let clearfavourites = document.getElementById("clearFavorites")

let ziekling = document.getElementById("locationZiekLink")
let apoLink = document.getElementById("locationApoLink")
let huisLink = document.getElementById("locationHuisLink")

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
    console.log("locations fetched")
    for (let location of data){
        let locationItem = document.createElement("option")
        locationItem.innerText = location.name
        locationItem.value = location.id
        locationList.appendChild(locationItem)
        locations.push(location)

        favoriteList[location.id] = "no";
        if (localStorage.getItem(location.id) !== null){
            favoriteList[location.id] = localStorage.getItem(favoriteStorage[location.id])
        }
        console.log(favoriteList)


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

    updateFavorites()
}

function ajaxLocationDetailSuccessHandler(data){
    console.log(`details fetched from ${data.id}`)
    locationDetail[data.id] = data
}

function ajaxErrorHandler(data) {
    console.error("er is een fout opgetreden")
    console.error(data)
}

function locationChoice(e){

    hospitalName.innerHTML = locationDetail[locationList.value].ziekenhuis
    hospitalUrl.setAttribute("href", locationDetail[locationList.value].ziekenhuisUrl)

    ApothecaryName.innerHTML = locationDetail[locationList.value].apotheek
    ApothecaryUrl.setAttribute("href", locationDetail[locationList.value].apotheekUrl)

    DoctorName.innerHTML = locationDetail[locationList.value].huisarts
    DoctorUrl.setAttribute("href", locationDetail[locationList.value].DoctorUrl)

    if (favoriteList[locationList.value] === "yes"){
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
        hennieTalk(`Hier zie je de best gereviewde ziekenhuis, apotheek en huisarts van ${locations[locationList.value].name}. klik op de "bezoek website" \n om hun website te bezoeken.`)

    }
}

function favoriteChoice(e){

    if (favoriteList[locationList.value] === "yes"){
        favorite.src = "stijnImg/Unfavorite.png"
        favoriteList[locationList.value] = "no"
        updateFavorites()

    } else{
        favorite.src = "stijnImg/Favorite.png"
        favoriteList[locationList.value] = "yes"
        updateFavorites()

    }
    console.log(favoriteList)
}

function clearFavourites(){
    for(let location of locationList){
        favoriteList[location.value] = "no"
        updateFavorites()
    }
    if (localStorage.getItem(locationList.value) === "yes"){
        favorite.src = "stijnImg/Favorite.png"
    } else{
        favorite.src = "stijnImg/Unfavorite.png"
    }

}

function updateFavorites(){
    favorites.innerHTML = ""
    localStorage.setItem("favoriteStorage", favoriteList)
    for(let favoriteLocation of locations){
        let favorite = favoriteList[favoriteLocation.id]
        if (favorite === "yes"){
            let favoriteItem = document.createElement("li")
            favoriteItem.innerHTML = locations[favoriteLocation.id].name
            favorites.appendChild(favoriteItem)
        }
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

function buttonLink(){

}