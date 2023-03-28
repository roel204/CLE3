<?php
//Require functions for actions
require_once "includes/action.php";

//Based on the existence of the GET parameter, 1 of the 2 functions will be called
if (!isset($_GET['id'])) {
    $data = getLocations();
} else {
    $data = getLocationDetails($_GET['id']);
}

//Set the header & output JSON so the client will know what to expect.

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senioren in de Zorg</title>
  <link rel="stylesheet" href="../css/style.css"/>
  <link rel="icon" href="../images/RH.png">
  <script type="text/javascript" src="stijn.js" defer></script>
</head>
<body>
<header>
</header>
<main>
  <section class="pinboard">
    <section class="bedieningspaneel">
        <select name="locaties" id="locaties">

        </select>
    </section>
  </section>
</main>

<footer>

</footer>
</body>
</html>