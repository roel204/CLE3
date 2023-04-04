<?php
/**
 * @return array
 */
function getQuestions()
{
    return [
        [
            "id" => 1,
            "question" => "Kan ik met mijn partner meeverhuizen naar de zorginstelling?",
            "answer" => "Een partner meeverhuizen naar een zorginstelling is mogelijk. Als u moet worden opgenomen in een Wlz-instelling voor verpleging en verzorging (bijvoorbeeld een verpleeghuis) of gehandicaptenzorg, dan kan uw partner ervoor kiezen om met u mee te verhuizen naar deze instelling. Meeverhuizen kan ook als uw partner zelf geen indicatie heeft voor Wlz-zorg.",
        ],
        [
            "id" => 2,
            "question" => "Waar vind ik een goede zorgaanbieder in mijn buurt?",
            "answer" => "U wilt een zorgaanbieder die bij u past. Met de informatie op ZorgkaartNederland vindt u een zorgaanbieder die voldoet aan uw wensen en eisen.",
        ],
        [
            "id" => 3,
            "question" => "Waar kan ik een klacht indienen over een zorgaanbieder?",
            "answer" => "Als u niet tevreden bent over de kwaliteit van de ontvangen zorg, hebt u verschillende mogelijkheden. U kunt klagen bij de klachtenfunctionaris of de klachtencommissie van de zorgaanbieder zelf, maar ook bij het zorgkantoor of bij andere instanties, zoals de Inspectie voor de gezondheidszorg (IGZ) en de Geschillencommissie Verpleging, Verzorging en Thuiszorg. Vanaf 2017 kunt u met een klacht ook terecht bij een geschillencommissie.",
        ],
        [
            "id" => 4,
            "question" => "Waar vind ik goede informatie over zorgverzekeraars en zorgkantoren?",
            "answer" => "Zorgkantoren en zorgverzekeraars willen iedereen die in aanmerking wil komen voor langdurige zorg tijdig en begrijpelijk informeren. De informatie daarover vindt u op www.zorgkantoor.nl ",
        ],
        [
            "id" => 5,
            "question" => "Wanneer kan iemand een beroep doen op de Wlz (Wet langdurige zorg)?",
            "answer" => "De Wlz is bedoeld voor zorg aan mensen die blijvend behoefte hebben aan permanent toezicht en 24 uur per dag zorg in de nabijheid. Het gaat hier om mensen met een lichamelijke, verstandelijke, auditieve of visuele beperking. Ook mensen met langdurige psychische problemen kunnen een beroep doen op de Wlz.",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
//function getQuestionDetails($id)
//{
//    $tags = [
//        1 => [
//            "recipe" => "Put it in the oven and go!",
//            "tags" => ['cheese', 'oven']
//        ],
//        2 => [
//            "recipe" => "You can make this delicious Dutch meal by ...",
//            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
//        ],
//        3 => [
//            "recipe" => "Very nice when your grandma prepares this meal",
//            "tags" => ['omnomnom']
//        ],
//        4 => [
//            "recipe" => "Everytime in the city after midnight",
//            "tags" => ['kapsalon', 'tasty', 'meat']
//        ],
//        5 => [
//            "recipe" => "Specialty when on holiday in Spain",
//            "tags" => ['fish']
//        ],
//    ];
//
//    return $tags[$id];
//}