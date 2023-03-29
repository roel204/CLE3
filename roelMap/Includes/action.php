<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "title" => "Pizza",
            "image" => "Italian",
        ],
        [
            "id" => 2,
            "title" => "Kale",
            "image" => "Dutch",
        ],
        [
            "id" => 3,
            "title" => "Lasagna",
            "image" => "Italian",
        ],
        [
            "id" => 4,
            "title" => "Kebab",
            "image" => "Turkish",
        ],
        [
            "id" => 5,
            "title" => "Paella",
            "image" => "Spanish",
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