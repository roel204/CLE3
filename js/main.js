window.addEventListener('load', init);


let pinboard;
let imageUrls = [];
let dataUrls = [];

function init()
{
    pinboard = document.getElementById("pinboard")
    imageUrls = ["images/placeholder.png", "images/placeholder.png", "images/placeholder.png", "images/placeholder.png"]
    dataUrls = ["roelMap/rechtInZorg.php", "stijnMap/zorgDichtbij.php", "matsMap/veiligheidInZorg.php", "lindseyMap/algemeneVragen.php"]

    for (let imageUrl of imageUrls) {
        const image = document.createElement("img");
        image.src = imageUrl;
        image.classList.add("clickable");
        image.setAttribute("data-url", dataUrls[imageUrls.indexOf(imageUrl)]);
        pinboard.appendChild(image);
    }

    document.addEventListener("click", imageClickHandler)
}

function imageClickHandler(e) {
    if (e.target.tagName === "IMG") {
        window.location.href = e.target.getAttribute("data-url");
    }
}

