<?php
/**
 * @return array
 */
function getLocations()
{
    return [
        [
            "id" => 1,
            "name" => "Amsterdam",
            "zorgLocationUrl" => "zorgDichtbij.php?id=1"
        ],
        [
            "id" => 2,
            "name" => "Rotterdam",
            "zorgLocationUrl" => "zorgDichtbij.php?id=2"
        ],
        [
            "id" => 3,
            "name" => "Den Haag",
            "zorgLocationUrl" => "zorgDichtbij.php?id=3"
        ],
        [
            "id" => 4,
            "name" => "Utrecht",
            "zorgLocationUrl" => "zorgDichtbij.php?id=4"
        ],
        [
            "id" => 5,
            "name" => "Eindhoven",
            "zorgLocationUrl" => "zorgDichtbij.php?id=5"
        ],
        [
            "id" => 6,
            "name" => "Groningen",
            "zorgLocationUrl" => "zorgDichtbij.php?id=6"
        ],
        [
            "id" => 7,
            "name" => "Tilburg",
            "zorgLocationUrl" => "zorgDichtbij.php?id=7"
        ],
        [
            "id" => 8,
            "name" => "Almere",
            "zorgLocationUrl" => "zorgDichtbij.php?id=8"
        ],
        [
            "id" => 9,
            "name" => "Breda",
            "zorgLocationUrl" => "zorgDichtbij.php?id=9"
        ],
        [
            "id" => 10,
            "name" => "Nijmegen",
            "zorgLocationUrl" => "zorgDichtbij.php?id=10"
        ],
        [
            "id" => 11,
            "name" => "Apeldoorn",
            "zorgLocationUrl" => "zorgDichtbij.php?id=11"
        ],
        [
            "id" => 12,
            "name" => "Arnhem",
            "zorgLocationUrl" => "zorgDichtbij.php?id=12"
        ],
        [
            "id" => 13,
            "name" => "Haarlem",
            "zorgLocationUrl" => "zorgDichtbij.php?id=13"
        ],
        [
            "id" => 14,
            "name" => "Haarlemmermeer",
            "zorgLocationUrl" => "zorgDichtbij.php?id=14"
        ],
        [
            "id" => 15,
            "name" => "Enschede",
            "zorgLocationUrl" => "zorgDichtbij.php?id=15"
        ],
        [
            "id" => 16,
            "name" => "Amersfoort",
            "zorgLocationUrl" => "zorgDichtbij.php?id=16"
        ],
        [
            "id" => 17,
            "name" => "Zaanstad",
            "zorgLocationUrl" => "zorgDichtbij.php?id=17"
        ],
        [
            "id" => 18,
            "name" => "'s-Hertogenbosch",
            "zorgLocationUrl" => "zorgDichtbij.php?id=18"
        ],
        [
            "id" => 19,
            "name" => "Zwolle",
            "zorgLocationUrl" => "zorgDichtbij.php?id=19"
        ],
        [
            "id" => 20,
            "name" => "Leeuwarden",
            "zorgLocationUrl" => "zorgDichtbij.php?id=20"
        ],
        [
            "id" => 21,
            "name" => "Zoetermeer",
            "zorgLocationUrl" => "zorgDichtbij.php?id=21"
        ],
        [
            "id" => 22,
            "name" => "Leiden",
            "zorgLocationUrl" => "zorgDichtbij.php?id=22"
        ],
        [
            "id" => 23,
            "name" => "Maastricht",
            "zorgLocationUrl" => "zorgDichtbij.php?id=23"
        ],
        [
            "id" => 24,
            "name" => "Ede",
            "zorgLocationUrl" => "zorgDichtbij.php?id=24"
        ],
        [
            "id" => 25,
            "name" => "Dordrecht",
            "zorgLocationUrl" => "zorgDichtbij.php?id=25"
        ],
        [
            "id" => 26,
            "name" => "Westland",
            "zorgLocationUrl" => "zorgDichtbij.php?id=26"
        ],
        [
            "id" => 27,
            "name" => "Alphen aan den Rijn",
            "zorgLocationUrl" => "zorgDichtbij.php?id=27"
        ],
        [
            "id" => 28,
            "name" => "Alkmaar",
            "zorgLocationUrl" => "zorgDichtbij.php?id=28"
        ],
        [
            "id" => 29,
            "name" => "Emmen",
            "zorgLocationUrl" => "zorgDichtbij.php?id=29"
        ],
        [
            "id" => 30,
            "name" => "Delft",
            "zorgLocationUrl" => "zorgDichtbij.php?id=30"
        ],
        [
            "id" => 31,
            "name" => "Venlo",
            "zorgLocationUrl" => "zorgDichtbij.php?id=31"
        ],
        [
            "id" => 32,
            "name" => "Deventer",
            "zorgLocationUrl" => "zorgDichtbij.php?id=32"
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getLocationDetails($id)
{
    $tags = [
        1 => [
            "id" => 1,
            "naam" => "Amsterdam",
            "apotheek" => "placeholder apo 1",
            "apotheekUrl" => "placeholder apo url 1",
            "ziekenhuis" => "Ziekenhuis: Antoni van Leeuwenhoek, locatie Plesmanlaan",
            "ziekenhuisUrl" => "https://www.avl.nl/",
            "huisarts" => "placeholder huis 1",
            "huisartsUrl" => "placeholder huis url 1"
        ],
        2 => [
            "id" => 2,
            "naam" => "Rotterdam",
            "apotheek" => "placeholder apo 2",
            "apotheekUrl" => "placeholder apo url 2",
            "ziekenhuis" => "Maasstad Ziekenhuis, hoofdlocatie",
            "ziekenhuisUrl" => "https://www.maasstadziekenhuis.nl/",
            "huisarts" => "placeholder huis 2",
            "huisartsUrl" => "placeholder huis url 2"
        ],
        3 => [
            "id" => 3,
            "naam" => "Den Haag",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "HMC Bronovo",
            "ziekenhuisUrl" => "https://www.haaglandenmc.nl/",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        4 => [
            "id" => 4,
            "naam" => "Utrecht",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "UMC Utrecht, locatie Heidelberglaan",
            "ziekenhuisUrl" => "https://www.umcutrecht.nl/nl",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        5 => [
            "id" => 5,
            "naam" => "Eindhoven",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "Máxima MC, locatie Eindhoven",
            "ziekenhuisUrl" => "https://www.mmc.nl/",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        6 => [
            "id" => 6,
            "naam" => "Groningen",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        7 => [
            "id" => 7,
            "naam" => "Tilburg",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        8 => [
            "id" => 8,
            "naam" => "Almere",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        9 => [
            "id" => 9,
            "naam" => "Breda",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        10 => [
            "id" => 10,
            "naam" => "Nijmegen",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        11 => [
            "id" => 11,
            "naam" => "Apeldoorn",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        12 => [
            "id" => 12,
            "naam" => "Arnhem",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        13 => [
            "id" => 13,
            "naam" => "Haarlem",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        14 => [
            "id" => 14,
            "naam" => "Haarlemmermeer",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        15 => [
            "id" => 15,
            "naam" => "Enschede",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        16 => [
            "id" => 16,
            "naam" => "Amersfoort",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        17 => [
            "id" => 17,
            "naam" => "Zaanstad",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        18 => [
            "id" => 18,
            "naam" => "s-Hertogenbosch",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        19 => [
            "id" => 19,
            "naam" => "Zwolle",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        20 => [
            "id" => 20,
            "naam" => "Leeuwarden",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        21 => [
            "id" => 21,
            "naam" => "Zoetermeer",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        22 => [
            "id" => 22,
            "naam" => "Leiden",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        23 => [
            "id" => 23,
            "naam" => "Maastricht",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        24 => [
            "id" => 24,
            "naam" => "Ede",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        25 => [
            "id" => 25,
            "naam" => "Dordrecht",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        26 => [
            "id" => 26,
            "naam" => "Westland",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        27 => [
            "id" => 27,
            "naam" => "Alphen aan den Rijn",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        28 => [
            "id" => 28,
            "naam" => "Alkmaar",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        29 => [
            "id" => 29,
            "naam" => "Emmen",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        30 => [
            "id" => 30,
            "naam" => "Delft",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        31 => [
            "id" => 31,
            "naam" => "Venlo",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        32 => [
            "id" => 32,
            "naam" => "Deventer",
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ]
    ];

    return $tags[$id];
}