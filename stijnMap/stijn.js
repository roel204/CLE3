window.addEventListener('load', init);

apiUrl = "http://localhost/Jaar1/CLE3/stijnMap/zorgDichtbij.php"
let locationList = document.getElementById("locaties")
let locationArray = []

function init(){
    getLocation()
    let locationlist = document.getElementById("locaties")
    locationlist.addEventListener("change",locationChoice)
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
    console.log(data)
    for (let location of data){
        let locationItem = document.createElement("option")
        locationItem.innerText = location.name
        locationItem.value = location.id
        locationList.appendChild(locationItem)
        locationArray.push(location)
    }
}

function ajaxErrorHandler(data) {
    console.error("er is een fout opgetreden")
    console.error(data)
}

function locationChoice(){
    console.log(locationArray[locationList.value].name)
}