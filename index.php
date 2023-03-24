<?php
include "header.php";
?>

<div class="container" id="container">
  <form id="location-form">
    <div class="form-row" style="padding: 10px;">
      <div class="col">
        <input id="search-box" type="search" placeholder="Enter your location" class="form-control centre" required />
      </div>
    </div>
    <div class="form-row" style="padding-bottom: 10px; padding-left: 10px; padding-right: 10px;">
      <div class=" col">
        <select id="radius-select" class="custom-select mr-sm-2 centre" required>
          <option value="" selected disabled>Select a radius</option>
          <option value="5">5 miles</option>
          <option value="10">10 miles</option>
          <option value="15">15 miles</option>
          <option value="20">20 miles</option>
          <option value="50">50 miles</option>
          <option value="100">100 miles</option>
          <option value="200">200 miles</option>
          <option value="100000">Unlimited</option>
        </select>
      </div>
      <div class="col">
        <select id="route-select" name="route" class="custom-select mr-sm-2 centre" style="width: 100%;">
          <option value="" selected disabled>Select a Route</option>
        </select>
      </div>
    </div>
  </form>

  <div id="map" style="height: 800px; width: 100%"></div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4zHL_BVdWGuaMWXwxk4iCNKlGNF-BJoU&region=UK&libraries=places&callback=Function.prototype">
</script>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</body>

</html>