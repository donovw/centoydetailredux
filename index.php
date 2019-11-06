<?php require 'header.php'; ?>
<div class="maincontainer">
  <?php include "includes/vehinfo.php" ?>
<div class="searchform">
  Search for Vehicle
    <input type="text" name="mainsearch" value="" maxlength="17" placeholder="VIN OR STOCK #">
    <div class="searchbuttons">
      <button type="button" name="button">Search by Vin</button>
      <button type="button" name="button">Search by Stock</button>
    </div>
</div>
</div>
<?php require 'footer.php'; ?>
