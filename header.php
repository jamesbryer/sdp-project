<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Road Finder</title>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4zHL_BVdWGuaMWXwxk4iCNKlGNF-BJoU&region=UK&libraries=places&callback=Function.prototype">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img class="d-inline-block" src="assets/logo_1.png" alt="Logo" width="110px" height="55px">
                Road Discoverer
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="/Applications/MAMP/htdocs/sdp-project/" class="nav-link active">Road Map</a>
                    </li>
                    <li class="nav-item">
                        <a href="/Applications/MAMP/htdocs/sdp-project/add-to-map" class="nav-link">Add to Map</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Log In/Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>