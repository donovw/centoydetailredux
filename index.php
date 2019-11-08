<?php require 'header.php'; ?>
<div id="vehinfocontainer"></div>
<div class="maincontainer">

<div class="searchform">
  Search for Vehicle
    <input type="text" name="mainsearch" id="mainsearch" value="" maxlength="17" placeholder="VIN OR STOCK #">
    <div class="searchbuttons">
      <button type="button" name="button" onclick="loadVehInfo('vin')">Search by Vin</button>
      <button type="button" name="button" onclick="loadVehInfo('stk')">Search by Stock</button>
    </div>
</div>
</div>
<?php require 'footer.php'; ?>
