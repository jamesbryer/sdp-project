<?php
include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3 style="margin-top: 5px;">Add to Map</h3>
            <p id="welcome-text">Welcome! If you would like to contribute to our map, just click/tap the start point of
                your road, then
                the end point! Click submit and its all done!</p>
        </div>
    </div>
    <div class="row" id="buttons">
        <div class="col"><button id="submit-btn" class="btn btn-outline-secondary btn-block">Submit</button></div>
        <div class="col"><button id="reset-btn" class="btn btn-outline-secondary btn-block">Reset</button></div>
    </div>
    <div id="map" style="margin-top: 10px;"></div>
</div>
<br />

<script src="script.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtwLJf7L22miHaKQlI9StgOIpa2XdYaPk&callback=initMap">
</script>
</body>

</html>