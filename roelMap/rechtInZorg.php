<?php

require_once "includes/action.php";

if (!isset($_GET['id'])) {
    $data = getDishes();
} else {
    $data = getDishDetails($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senioren in de Zorg</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="icon" href="../img/RH.png">
    <script type="text/javascript" src="roel.js" defer></script>
</head>
<body>

<main>
    <section id="pinboard" class="pinboard">

    </section>
    <section>
        <img class="hennie" src="../img/hennie.png" alt="Hennie">
    </section>
</main>

</body>
</html>