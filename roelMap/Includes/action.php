<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => "1",
            "title" => "De waarde van ouder worden.",
            "description" => "Description 1",
            "source" => "https://www.rijksoverheid.nl/onderwerpen/ouderenzorg/waardig-ouder-worden",
        ],
        [
            "id" => "2",
            "title" => "Mensenrechten Verpleeghuis",
            "description" => "Description 2",
            "source" => "https://www.waardigheidentrots.nl/verslagen/verpleeghuiszorg-en-mensenrechten-nieuwe-blik-op-menswaardige-zorg/",
        ],
        [
            "id" => "3",
            "title" => "Ouderen en Mensenrechten",
            "description" => "Description 3",
            "source" => "https://www.amnesty.nl/encyclopedie/ouderen-en-mensenrechten",
        ],
        [
            "id" => "4",
            "title" => "Rechtwijzer Senioren",
            "description" => "Description 4",
            "source" => "https://www.fnv.nl/cao-sector/senioren/hulp-en-advies/rechtenwijzer-senioren",
        ],
        [
            "id" => "5",
            "title" => "title 5",
            "description" => "Description 5",
            "source" => "Source 5",
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