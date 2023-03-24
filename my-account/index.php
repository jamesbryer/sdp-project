<?php

include "../header.php";
include "includes/get-comments.inc.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../");
    exit();
}

if (isset($_SESSION["comments"])) {
    $comments = $_SESSION["comments"];
    foreach ($comments as $comment) {
        echo $comment["comment"];
    }
} else {
    echo "button not pressed!";
}
