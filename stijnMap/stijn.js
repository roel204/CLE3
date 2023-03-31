window.addEventListener('load', init);

apiUrl = "http://localhost/Jaar1/CLE3/stijnMap/zorgDichtbij.php"
let locationList = document.getElementById("locaties")
let hospitalName = document.getElementById("locationZiek")
let ApothecaryName = document.getElementById("locationApo")
let DoctorName = document.getElementById("locationHuis")
let favorite = document.getElementById("favoriteToggle")
let locations = []
let locationDetail = []
let favoriteList = []

function init(){
    if (typeof window.localStorage === "undefined") {
    console.error('Local storage is not available in your browser');
    return;
}
    getLocation()
    favorite.addEventListener("click", favoriteChoice)
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

function locationChoice(){
    hospitalName.innerHTML = locationDetail[locations[locationList.value].id].ziekenhuis
    ApothecaryName.innerHTML = locationDetail[locations[locationList.value].id].apotheek
    DoctorName.innerHTML = locationDetail[locations[locationList.value].id].huisarts
    if (favoriteList.includes(locations[locationList.value])){
        favorite.src = "stijnImg/Favorite.png"
    } else {
        favorite.src = "stijnImg/unFavorite.png"
    }
}

function favoriteChoice(){

    // if (favoriteList.includes(locations[locationList.value].name)){
    //     favorite.src = "stijnImg/unFavorite.png"
    //     let index = favoriteList.indexOf(locations[locationList.value].name)
    //     favoriteList = favoriteList.splice(index,1)
    //     console.log(`je hebt ${locations[locationList.value].name} verwijdert van je favorieten`)
    //
    // } else {
    //     favorite.src = "stijnImg/Favorite.png"
    //     favoriteList[locationList] = locations[locationList.value]
    //     console.log(`je hebt ${locations[locationList.value].name} toegevoegd aan je favorieten`)
    // }
    console.log(favoriteList)
}


