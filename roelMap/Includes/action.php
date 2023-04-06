<?php
/**
 * @return array
 */
function getData()
{
    return [
        [
            "id" => "1",
            "title" => "De waarde van ouder worden",
            "description" => "<p>Mensen in Nederland worden steeds ouder. In 2030 zijn er 2.1 miljoen mensen ouder dan 75 jaar. Bijna een verdubbeling ten opzichte van de 1,3 miljoen mensen in 2019. De Rijksoverheid wil dat iedereen waardig oud kan worden.</p><h3>Trends ouderenzorg</h3><ul><li>Er zijn steeds meer mensen van 75 jaar en ouder.</li><li>Veel ouderen zullen langer gezond blijven, maar een grote groep zal ook te maken krijgen met gezondheidsproblemen.</li><li>Er zijn te weinig zorgprofessionals in de ouderenzorg aan het werk.</li><li>Vooral in de krimpregio’s zal de stijging van het aantal ouderen en het tekort aan zorgprofessionals meer problemen opleveren dan in andere regio’s.</li></ul><p>Voor meer informatie, volg onderstaande link naar de website van Rijksoverheid.</p>",
            "source" => "https://www.rijksoverheid.nl/onderwerpen/ouderenzorg/waardig-ouder-worden",
        ],
        [
            "id" => "2",
            "title" => "Mensenrechten Verpleeghuis",
            "description" => "<p>Het College voor de Rechten van de Mens heeft onderzoek gedaan naar de manier waarop ouderen behandeld worden in verpleeghuizen. Het rapport benadrukt dat het belangrijk is dat ouderen met waardigheid en zelfstandigheid behandeld worden. Dit heeft te maken met dagelijkse handelingen die grote invloed hebben op het leven van ouderen. <br> Er zijn twee belangrijke mensenrechten die van toepassing zijn in de verpleeghuiszorg: Het recht om niet vernederd of slecht behandeld te worden en het recht op privacy. Het is extra belangrijk om in verpleeghuizen maatregelen te nemen om de lichamelijke en geestelijke integriteit van ouderen te beschermen. <br> Hierbij moet er ook aandacht zijn voor het vinden van zinvolle bezigheden voor de bewoners. Zorgprofessionals suggereren bijvoorbeeld om levensboeken te maken en bewoners te betrekken bij huishoudelijke taken.</p>",
            "source" => "https://www.waardigheidentrots.nl/verslagen/verpleeghuiszorg-en-mensenrechten-nieuwe-blik-op-menswaardige-zorg/",
        ],
        [
            "id" => "3",
            "title" => "Ouderen en Mensenrechten",
            "description" => "<p>Ouderen zijn mensen van 65 jaar en ouder die vaak zorg nodig hebben en beschermd moeten worden tegen misbruik en verwaarlozing. Er zijn juridische kwesties zoals het recht van ouderen op inspraak bij behandeling en bij opname in een verzorgingstehuis en privacy in tehuizen. <br> Er zijn weinig normen voor de bescherming van ouderen, maar het beginsel van gelijkheid stelt dat mensen niet ongeschikt mogen worden verklaard op basis van hun leeftijd. <br> Ouderen in ontwikkelingslanden hebben het moeilijk door de toenemende vergrijzing en gebrek aan voorzieningen. Het netwerk van HelpAge International ondersteunt ouderen in ontwikkelingslanden en stelt dat er meer aandacht moet komen voor mishandeling, oplichting en misdaden waar ouderen slachtoffer van worden. <br> Het aantal ouderen groeit en hoewel er een internationale dag van de ouderen is, is er weinig aandacht voor ouderen in vergelijking met kinderen. Er bestaat geen internationaal verdrag voor de mensenrechten van ouderen.</p>",
            "source" => "https://www.amnesty.nl/encyclopedie/ouderen-en-mensenrechten",
        ],
        [
            "id" => "4",
            "title" => "Algemene Ouderdomswet",
            "description" => "<p>De Algemene Ouderdomswet (AOW) is een regeling van de Nederlandse overheid waarmee mensen vanaf 66 jaar en 7 maanden oud een basisinkomen krijgen als ze gestopt zijn met werken. Het is bedoeld als ondersteuning om van te leven wanneer iemand niet meer werkt. <br> De hoogte van het bedrag dat je ontvangt, hangt af van hoe lang je hebt gewerkt en hoeveel AOW-premie je hebt betaald. Als je lang genoeg hebt gewerkt en AOW-premie hebt betaald, krijg je de volledige AOW-uitkering. Als je minder lang hebt gewerkt, krijg je minder. <br> Het is belangrijk om te weten dat je niet automatisch AOW krijgt als je de leeftijd van 66 jaar en 7 maanden bereikt. Je moet zelf een aanvraag indienen bij de Sociale Verzekeringsbank (SVB). <br> Als je naast je AOW-uitkering nog andere inkomsten hebt, kan dat invloed hebben op de hoogte van je AOW. Het kan zijn dat je minder AOW ontvangt als je bijvoorbeeld een pensioen hebt opgebouwd.</p>",
            "source" => "https://nl.wikipedia.org/wiki/Algemene_Ouderdomswet",
        ],
        [
            "id" => "5",
            "title" => "Rechtwijzer Senioren",
            "description" => "<p>Op onderstaande website kunt u veel informatie vinden, ik raad u aan om op onderstaande link te klikken en alle onderwerpen op uw gemak door te lezen. <br> Deze voldende onderwerpen worden besproken: <br> <ul><li>Algemene Ouderdomswet (AOW)</li><li>Loon & Pensioen</li><li>Belasting en toeslagen</li><li>Bijzondere bijstand</li><li>Financieel advies senioren</li></ul></p>",
            "source" => "https://www.fnv.nl/cao-sector/senioren/hulp-en-advies/rechtenwijzer-senioren",
        ]
    ];
}

/**
 * @param $id
 * @return array
 */
function getDetails($id)
{
    $tags = [
        1 => [
            "description" => "<p>Mensen in Nederland worden steeds ouder. In 2030 zijn er 2.1 miljoen mensen ouder dan 75 jaar. Bijna een verdubbeling ten opzichte van de 1,3 miljoen mensen in 2019. De Rijksoverheid wil dat iedereen waardig oud kan worden.</p><h3>Trends ouderenzorg</h3><ul><li>Er zijn steeds meer mensen van 75 jaar en ouder.</li><li>Veel ouderen zullen langer gezond blijven, maar een grote groep zal ook te maken krijgen met gezondheidsproblemen.</li><li>Er zijn te weinig zorgprofessionals in de ouderenzorg aan het werk.</li><li>Vooral in de krimpregio’s zal de stijging van het aantal ouderen en het tekort aan zorgprofessionals meer problemen opleveren dan in andere regio’s.</li></ul><p>Voor meer informatie over onderwerpen zoals: <br> Eenzaamheid, Verbeterde verpleeghuiszorg, Langer thuis wonen. <br> Volg onderstaande link naar de website van Rijksoverheid.</p>",
            "source" => "https://www.rijksoverheid.nl/onderwerpen/ouderenzorg/waardig-ouder-worden"
        ],
        2 => [
            "description" => "Description 2",
            "source" => "https://www.waardigheidentrots.nl/verslagen/verpleeghuiszorg-en-mensenrechten-nieuwe-blik-op-menswaardige-zorg/",
        ],
        3 => [
            "description" => "Description 3",
            "source" => "https://www.amnesty.nl/encyclopedie/ouderen-en-mensenrechten",
        ],
        4 => [
            "description" => "Description 4",
            "source" => "https://www.fnv.nl/cao-sector/senioren/hulp-en-advies/rechtenwijzer-senioren",
        ],
        5 => [
            "description" => "Description 5",
            "source" => "Source 5",
        ],
        6 => [
            "description" => "Description 6",
            "source" => "Source 6",
        ],
    ];

    return $tags[$id];
}