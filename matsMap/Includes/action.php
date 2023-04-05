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
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "2",
            "catagory" => "Ontruiming",
            "title" => "In geval van inbraak",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.senioren.nl/verklein-kans-op-inbraak-zorg-huis-beveiligd-is/",
        ],
        [
            "id" => "3",
            "catagory" => "Ontruiming",
            "title" => "In geval van een gaslek",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.ad.nl/alphen/een-gaslek-wat-doe-je-dan~a7c3e3b7/",
        ],
        [
            "id" => "4",
            "catagory" => "Pijn",
            "title" => "Hoofdpijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/hoofdpijn/ik-heb-hoofdpijn",
        ],
        [
            "id" => "5",
            "catagory" => "Pijn",
            "title" => "Keelpijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/keelpijn/ik-heb-keelpijn",
        ],
        [
            "id" => "6",
            "catagory" => "Pijn",
            "title" => "Buikpijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/buikpijn/ik-heb-last-van-buikpijn",
        ],
        [
            "id" => "7",
            "catagory" => "Pijn",
            "title" => "Pijn in de borst",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/pijn-op-borst",
        ],
        [
            "id" => "8",
            "catagory" => "Pijn",
            "title" => "Pijn in de onderrug",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/pijn-onder-in-rug",
        ],
        [
            "id" => "9",
            "catagory" => "Pijn",
            "title" => "Nekpijn",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/nekpijn",
        ],
        [
            "id" => "10",
            "catagory" => "Ziekte",
            "title" => "Griep",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/griep",
        ],
        [
            "id" => "11",
            "catagory" => "Ziekte",
            "title" => "Corona",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.thuisarts.nl/corona",
        ],
        [
            "id" => "12",
            "catagory" => "Ziekte",
            "title" => "Veroudering",
            "description" => "<h1>Stappenplan</h1><ul><li></li><li></li><li></li></ul>:",
            "source" => "https://www.cwz.nl/aandoeningen/ouderdomsziekten/#:~:text=Ouderdomsziekten%20worden%20ook%20wel%20geriatrische,(slijtage%20van%20de%20gewrichten).",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "recipe" => "Put it in the oven and go!",
            "tags" => ['cheese', 'oven']
        ],
        2 => [
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Everytime in the city after midnight",
            "tags" => ['kapsalon', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
    ];

    return $tags[$id];
}