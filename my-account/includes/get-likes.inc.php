<?php

//session_start();

if (isset($_SESSION['user_id'])) {

    $user_id = $_SESSION['user_id'];

    include_once "../account-login/classes/dbh.class.php";
    include_once "classes/get-likes.class.php";
    include_once "classes/get-likes-controller.class.php";

    $getLikes = new GetLikesController($user_id);
    $getLikes->returnLikes();
    //header("Location: ");
} else {
    header("Location: ../");
}
