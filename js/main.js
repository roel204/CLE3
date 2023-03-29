window.addEventListener('load', init);


let pinboard;
let imageUrls = [];
let dataUrls = [];

function init()
{
    pinboard = document.getElementById("pinboard")
    imageUrls = ["img/placeholder.png", "img/Zorg_in_de_buurt.png", "img/Veiligheid_in_zorg.png", "img/vragen_over_zorg.png"]
    dataUrls = ["roelMap/roelHTML.html", "stijnMap/stijnHTML.html", "matsMap/matsHTML.html", "lindseyMap/lindseyHTML.html"]

    for (let imageUrl of imageUrls) {
        const image = document.createElement("img");
        image.src = imageUrl;
        image.classList.add('pinboardItem')
        image.setAttribute("data-url", dataUrls[imageUrls.indexOf(imageUrl)]);
        pinboard.appendChild(image);
    }

    document.addEventListener("click", imageClickHandler)
}

function imageClickHandler(e) {
    if (e.target.className !== 'hennie') {
        if (e.target.nodeName === "IMG") {
            window.location.href = e.target.getAttribute("data-url");
        }
    }


}

