<?php

include "../header.php";
include "includes/get-comments.inc.php";
include "includes/get-likes.inc.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../");
    exit();
}

if (isset($_SESSION["comments"])) {
    $comments = $_SESSION["comments"];
    foreach ($comments as $comment) {
        echo $comment["comment"];
        echo "<br>";
    }
} else {
    echo "No comments!";
}
if (isset($_SESSION["likes"])) {
    $likes = $_SESSION["likes"];
    echo "You like these routes: <br>";
    foreach ($likes as $like) {
        echo $like["route_id"];
        echo "<br>";
    }
} else {
    echo "No likes!";
}
