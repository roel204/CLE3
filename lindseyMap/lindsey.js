window.addEventListener('load', init);

apiUrl = "http://localhost/Jaar1/CLE3/lindseyMap/algemeneVragen.php"

function init()
{
    hennieTalk("Hier kunt u verschillende veelgestelde vragen zien, klik op één van de vragen voor gegeven antwoorden.")
    apiFetch(apiUrl)
    favoriteItems = JSON.parse(localStorage.getItem('favorite')) || [];
    hennieTalk("Op deze pagina kunt u meer leren over uw rechten. Klik op een van de titels voor meer info.")
}

function apiFetch(api) {
    fetch(api)
        .then(response => {
            if (!response.ok) {
                throw new Error(response.statusText)
            }
            return response.json()
        })
        .then(createList)
        .catch(ajaxErrorHandler)
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