<?php

//session_start();

if (isset($_SESSION['user_id'])) {

    $user_id = $_SESSION['user_id'];

    include_once "../account-login/classes/dbh.class.php";
    include_once "classes/get-comments.class.php";
    include_once "classes/get-comments-controller.class.php";

    $getComments = new GetCommentsController($user_id);
    $getComments->returnComments();
    //header("Location: ");
} else {
    header("Location: ../");
}
