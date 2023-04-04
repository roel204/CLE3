window.addEventListener('load', init);

apiUrl = "http://localhost/Jaar1/CLE3/lindseyMap/algemeneVragen.php"

function init()
{
    hennieTalk("Hier kunt u verschillende veelgestelde vragen zien, klik op één van de vragen voor gegeven antwoorden.")
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