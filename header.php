<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Road Finder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a href="/sdp-project/" class="navbar-brand">
                <img class="d-inline-block" src="/sdp-project/assets/logo_1.png" alt="Logo" width="110px" height="55px">
                Road Discoverer
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    //page names and urls
                    $pages = array(
                        "Road Map" => "/sdp-project/",
                        "Add to Map" => "/sdp-project/add-to-map/",
                        "Login" => "/sdp-project/login/"
                    );
                    $currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

                    //if each page name is the current page, add the active class to the li
                    foreach ($pages as $pageName => $pageURL) {
                        $class = ($currentPage == $pageURL) ? "active" : "";
                        echo "<li class='nav-item'><a class='nav-link $class' href='$pageURL'>$pageName</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>

    </nav>