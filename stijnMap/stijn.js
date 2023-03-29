window.addEventListener('load', init);

apiUrl = "http://localhost/Jaar1/CLE3/stijnMap/zorgDichtbij.php"

function init()
{   getLocation()
}

function getLocation() {
    fetch(apiUrl)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(ajaxSuccessHandler)
        .catch(ajaxErrorHandler);
}

function ajaxSuccessHandler(data) {
    console.log(data)
}

function ajaxErrorHandler(data) {
    console.error(data)
}