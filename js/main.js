window.addEventListener('load', init);


let pinboard;
let imageUrls = [];
let dataUrls = [];

function init()
{
    pinboard = document.getElementById("pinboard")
    imageUrls = ["img/Recht_in_zorg.png", "img/Zorg_in_de_buurt.png", "img/Veiligheid_in_zorg.png", "img/vragen_over_zorg.png"]
    dataUrls = ["roelMap/roelHTML.html", "stijnMap/stijnHTML.html", "matsMap/matsHTML.html", "lindseyMap/lindseyHTML.html"]

    for (let imageUrl of imageUrls) {
        const image = document.createElement("img");
        image.src = imageUrl;
        image.classList.add('pinboardItem')
        image.setAttribute("data-url", dataUrls[imageUrls.indexOf(imageUrl)]);
        pinboard.appendChild(image);
    }

    document.addEventListener("click", imageClickHandler)

    hennieTalk("Hallo, Ik ben Hennie! Uw virtuele gids door deze website. Klik op één van de icoontjes op het prikbord.")

}

function imageClickHandler(e) {
    if (e.target.className !== 'hennie') {
        if (e.target.nodeName === "IMG") {
            window.location.href = e.target.getAttribute("data-url");
        }
    }


}

function hennieTalk(text) {
    const box = document.getElementById("box");
    const message = text;
    const delay = 69;

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


