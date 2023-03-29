<?php

require_once "includes/action.php";

if (!isset($_GET['id'])) {
    $data = getDishes();
} else {
    $data = getDishDetails($_GET['id']);
}
?>
