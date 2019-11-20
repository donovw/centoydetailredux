
<div class="vehicleinfo" id="vehinfo">
  <form id="vehinfoform" action="../classes/vehicle.class.php" method="post">
  <div class="vehnumbers">
    <div class="vinnumber">
      vin Number:
      <br>
      <input type="text" id="vin" name="vin" value=""  placeholder="VIN">
    </div>
    <div class="stocknumber">
      Stock #:
      <br>
      <input type="text" id="stk" name="stk" value=""  placeholder="STOCK #">
    </div>
  </div>
  <div class="vehinfotable">
    <table>
    <thead>
      <th>Year</th>
      <th>Make</th>
      <th>Model</th>
      <th>Color</th>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" id="year" value="" name="year"  placeholder="year"> </td>
        <td> <input type="text" id="make" value="" name="make"  placeholder="make"> </td>
        <td> <input type="text" id="model" value="" name="model"  placeholder="model"> </td>
        <td> <input type="text" id="color" value="" name="color" placeholder="color"> </td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="vehstatus">
    <select class="statussel" id="status" name="status">
      <option value="options" selected>options</option>
    </select>
  </div>
  <div class="comments">
    comments
    <br>
    <textarea name="comment" id="comment" rows="8" cols="80"></textarea>
  </div>
  <div class="est">
    RECON ESTIMATE: <input type="text" name="estimate" id="estimate" value="" onchange="formatRecon(this.value)">
  </div>
  <input type="hidden" name="update" id="update" value="false">
  <button type="submit" name="button">test</button>
</form>

  <div class="buttons">
    <button type="button" name="button" id="exitnosave">Cancel</button>
    <!-- <button type="button" name="button">checklist</button> -->
    <button type="button" name="button" id="exitsave">Save and Exit</button>
  </div>
</div>
