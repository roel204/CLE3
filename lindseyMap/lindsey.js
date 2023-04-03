window.addEventListener('load', init);



function init()
{
    hennieTalk("Hier kunt u verschillende veelgestelde vragen zien, klik op één van de vragen voor een antwoord.")
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