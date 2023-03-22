window.addEventListener('load', init);

let imageRoel;
let imageStijn;
let imageMats;
let imageLindsey;
let pinboard;

function init()
{
    pinboard = document.getElementById("pinboard")
    imageRoel = document.createElement("img")
    imageStijn = document.createElement("img")
    imageMats = document.createElement("img")
    imageLindsey = document.createElement("img")
    imageRoel.src = "../images/placeholder.png"
    imageStijn.src = "../images/placeholder.png"
    imageMats.src = "../images/placeholder.png"
    imageLindsey.src = "../images/placeholder.png"
    pinboard.appendChild(imageStijn)
}
