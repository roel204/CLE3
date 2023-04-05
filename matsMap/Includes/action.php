<?php
/**
 * @return array
 */
function getDataOntruiming()
{
    return [
        [
            "id" => "1",
            "catagory" => "Ontruiming",
            "title" => "In geval van brand",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "2",
            "catagory" => "Ontruiming",
            "title" => "In geval van inbraak",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "3",
            "catagory" => "Ontruiming",
            "title" => "In geval van een gaslek",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "4",
            "catagory" => "Pijn",
            "title" => "Hoofdpijn",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "5",
            "catagory" => "Pijn",
            "title" => "Keelpijn",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "6",
            "catagory" => "Pijn",
            "title" => "Buikpijn",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "7",
            "catagory" => "Pijn",
            "title" => "Spierpijn in armen of benen",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "8",
            "catagory" => "Pijn",
            "title" => "Pijn in boven en/of onderrug",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "9",
            "catagory" => "Pijn",
            "title" => "Pijn in de nek & schouders",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "10",
            "catagory" => "Ziekte",
            "title" => "Griep",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "11",
            "catagory" => "Ziekte",
            "title" => "Corona",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
        ],
        [
            "id" => "12",
            "catagory" => "Ziekte",
            "title" => "Anders",
            "description" => "",
            "source" => "https://www.dezorgbrandveilig.nl",
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