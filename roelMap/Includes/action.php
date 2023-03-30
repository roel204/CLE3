<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => "1",
            "title" => "De waarde van ouder worden",
            "description" => "<p>Mensen in Nederland worden steeds ouder. In 2030 zijn er 2.1 miljoen mensen ouder dan 75 jaar. Bijna een verdubbeling ten opzichte van de 1,3 miljoen mensen in 2019. De Rijksoverheid wil dat iedereen waardig oud kan worden.</p><h3>Trends ouderenzorg</h3><ul><li>Er zijn steeds meer mensen van 75 jaar en ouder.</li><li>Veel ouderen zullen langer gezond blijven, maar een grote groep zal ook te maken krijgen met gezondheidsproblemen.</li><li>Er zijn te weinig zorgprofessionals in de ouderenzorg aan het werk.</li><li>Vooral in de krimpregio’s zal de stijging van het aantal ouderen en het tekort aan zorgprofessionals meer problemen opleveren dan in andere regio’s.</li></ul><p>Voor meer informatie over onderwerpen zoals: <br> Eenzaamheid, Verbeterde verpleeghuiszorg, Langer thuis wonen. <br> Volg onderstaande link naar de website van Rijksoverheid.</p>",
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
        ],
        [
            "id" => "6",
            "title" => "title 6",
            "description" => "Description 6",
            "source" => "Source 6",
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