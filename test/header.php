<?php
$pages = array(
    "Road Map" => "/sdp-project/",
    "Add to Map" => "/sdp-project/add-to-map/",
    "Login" => "/sdp-project/login/"
);
$currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

foreach ($pages as $pageName => $pageURL) {
    $class = ($currentPage == $pageURL) ? "active" : "";
    echo "<li class='nav-item'><a class='nav-link $class' href='$pageURL'>$pageName</a></li>";
}
?>