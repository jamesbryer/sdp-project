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

?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>