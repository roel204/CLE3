<?php
/**
 * @return array
 */
function getData()
{
    return [
        [
            "id" => "1",
            "catagory" => "Ontruiming",
            "title" => "In geval van brand",
            "titleUrl" => "veiligheidInZorg.php?id=1"
        ],
        [
            "id" => "2",
            "catagory" => "Ontruiming",
            "title" => "In geval van inbraak",
            "titleUrl" => "veiligheidInZorg.php?id=2"
        ],
        [
            "id" => "3",
            "catagory" => "Ontruiming",
            "title" => "In geval van een gaslek",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.ad.nl/alphen/een-gaslek-wat-doe-je-dan~a7c3e3b7/",
            "titleUrl" => "veiligheidInZorg.php?id=3"
        ],
        [
            "id" => "4",
            "catagory" => "Pijn",
            "title" => "Hoofdpijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/hoofdpijn/ik-heb-hoofdpijn",
            "titleUrl" => "veiligheidInZorg.php?id=4"
        ],
        [
            "id" => "5",
            "catagory" => "Pijn",
            "title" => "Keelpijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/keelpijn/ik-heb-keelpijn",
            "titleUrl" => "veiligheidInZorg.php?id=5"
        ],
        [
            "id" => "6",
            "catagory" => "Pijn",
            "title" => "Buikpijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/buikpijn/ik-heb-last-van-buikpijn",
            "titleUrl" => "veiligheidInZorg.php?id=6"
        ],
        [
            "id" => "7",
            "catagory" => "Pijn",
            "title" => "Pijn in de borst",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/pijn-op-borst",
            "titleUrl" => "veiligheidInZorg.php?id=7"
        ],
        [
            "id" => "8",
            "catagory" => "Pijn",
            "title" => "Pijn in de onderrug",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/pijn-onder-in-rug",
            "titleUrl" => "veiligheidInZorg.php?id=8"
        ],
        [
            "id" => "9",
            "catagory" => "Pijn",
            "title" => "Nekpijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/nekpijn",
            "titleUrl" => "veiligheidInZorg.php?id=9"
        ],
        [
            "id" => "10",
            "catagory" => "Ziekte",
            "title" => "Griep",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/griep",
            "titleUrl" => "veiligheidInZorg.php?id=10"
        ],
        [
            "id" => "11",
            "catagory" => "Ziekte",
            "title" => "Corona",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/corona",
            "titleUrl" => "veiligheidInZorg.php?id=11"
        ],
        [
            "id" => "12",
            "catagory" => "Ziekte",
            "title" => "Veroudering",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.cwz.nl/aandoeningen/ouderdomsziekten/#:~:text=Ouderdomsziekten%20worden%20ook%20wel%20geriatrische,(slijtage%20van%20de%20gewrichten).",
            "titleUrl" => "veiligheidInZorg.php?id=12"
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDetails($id)
{
    $tags = [
        1 => [
            "id" => "1",
            "title" => "In geval van brand",
            "catagory" => "Ontruiming",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        2 => [
            "id" => "2",
            "title" => "In geval van inbraak",
            "catagory" => "Ontruiming",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.senioren.nl/verklein-kans-op-inbraak-zorg-huis-beveiligd-is/",
        ],
        3 => [

            "title" => "In geval van een gaslek",
            "catagory" => "Ontruiming",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.ad.nl/alphen/een-gaslek-wat-doe-je-dan~a7c3e3b7/",
        ],
        4 => [
            "id" => "4",
            "title" => "Hoofdpijn",
            "catagory" => "Pijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/hoofdpijn/ik-heb-hoofdpijn",
        ],
        5 => [
            "id" => "5",
            "title" => "Keelpijn",
            "catagory" => "Pijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/keelpijn/ik-heb-keelpijn",
        ],
        6 => [
            "id" => "6",
            "title" => "Buikpijn",
            "catagory" => "Pijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/buikpijn/ik-heb-last-van-buikpijn",
        ],
        7 => [
            "id" => "7",
            "title" => "Pijn in de borst",
            "catagory" => "Pijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/pijn-op-borst",
        ],
        8 => [
            "id" => "8",
            "title" => "Pijn in de onderrug",
            "catagory" => "Pijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/pijn-onder-in-rug",
        ],
        9 => [
            "id" => "9",
            "title" => "Nekpijn",
            "catagory" => "Pijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/nekpijn",
        ],
        10 => [
            "id" => "10",
            "title" => "Griep",
            "catagory" => "Ziekte",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/griep",
        ],
        11 => [
            "id" => "11",
            "title" => "Corona",
            "catagory" => "Ziekte",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/corona",
        ],
        12 => [
            "id" => "12",
            "title" => "Veroudering",
            "catagory" => "Ziekte",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.cwz.nl/aandoeningen/ouderdomsziekten/#:~:text=Ouderdomsziekten%20worden%20ook%20wel%20geriatrische,(slijtage%20van%20de%20gewrichten).",
        ]
    ];

    return $tags[$id];
}