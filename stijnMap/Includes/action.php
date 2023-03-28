<?php
/**
 * @return array
 */
function getLocations()
{
    return [
        [
            "id" => 1,
            "name" => "Amsterdam"
        ],
        [
            "id" => 2,
            "name" => "Rotterdam"
        ],
        [
            "id" => 3,
            "name" => "Den Haag"
        ],
        [
            "id" => 4,
            "name" => "Utrecht"
        ],
        [
            "id" => 5,
            "name" => "Eindhoven"
        ],
        [
            "id" => 6,
            "name" => "Groningen"
        ],
        [
            "id" => 7,
            "name" => "Tilburg"
        ],
        [
            "id" => 8,
            "name" => "Almere"
        ],
        [
            "id" => 9,
            "name" => "Breda"
        ],
        [
            "id" => 10,
            "name" => "Nijmegen"
        ],
        [
            "id" => 11,
            "name" => "Apeldoorn"
        ],
        [
            "id" => 12,
            "name" => "Arnhem"
        ],
        [
            "id" => 13,
            "name" => "Haarlem"
        ],
        [
            "id" => 14,
            "name" => "Haarlemmermeer"
        ],
        [
            "id" => 15,
            "name" => "Enschede"
        ],
        [
            "id" => 16,
            "name" => "Amersfoort"
        ],
        [
            "id" => 17,
            "name" => "Zaanstad"
        ],
        [
            "id" => 18,
            "name" => "'s-Hertogenbosch"
        ],
        [
            "id" => 19,
            "name" => "Zwolle"
        ],
        [
            "id" => 20,
            "name" => "Leeuwarden"
        ],
        [
            "id" => 21,
            "name" => "Zoetermeer"
        ],
        [
            "id" => 22,
            "name" => "Leiden"
        ],
        [
            "id" => 23,
            "name" => "Maastricht"
        ],
        [
            "id" => 24,
            "name" => "Ede"
        ],
        [
            "id" => 25,
            "name" => "Dordrecht"
        ],
        [
            "id" => 26,
            "name" => "Westland"
        ],
        [
            "id" => 27,
            "name" => "Alphen aan den Rijn"
        ],
        [
            "id" => 28,
            "name" => "Alkmaar"
        ],
        [
            "id" => 29,
            "name" => "Emmen"
        ],
        [
            "id" => 30,
            "name" => "Delft"
        ],
        [
            "id" => 31,
            "name" => "Venlo"
        ],
        [
            "id" => 32,
            "name" => "Deventer"
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
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        2 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        3 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        4 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        5 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        6 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        7 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        8 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        9 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        10 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        11 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        12 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        13 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        14 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        15 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        16 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        17 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        18 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        19 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        20 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        21 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        22 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        23 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        24 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        25 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        26 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        27 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        28 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        29 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        30 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        31 => [
            "apotheek" => "placeholder apo",
            "apotheekUrl" => "placeholder apo url",
            "ziekenhuis" => "placeholder ziek",
            "ziekenhuisUrl" => "placeholder ziek url",
            "huisarts" => "placeholder huis",
            "huisartsUrl" => "placeholder huis url"
        ],
        32 => [
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