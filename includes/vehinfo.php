
<div class="vehicleinfo" id="vehinfo">
  <form id="vehinfoform">
  <div class="vehnumbers">
    <div class="vinnumber">
      vin Number:
      <br>
      <input type="text" id="vinnumber" name="vinnumber" value="" placeholder="VIN">
    </div>
    <div class="stocknumber">
      Stock #:
      <br>
      <input type="text" id="stknumber" name="stknumber" value="" placeholder="STOCK #">
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
        <td> <input type="text" id="year" value="" name="year" placeholder="year"> </td>
        <td> <input type="text" id="make" value="" name="make" placeholder="make"> </td>
        <td> <input type="text" id="model" value="" name="Model" placeholder="model"> </td>
        <td> <input type="text" id="color" value="" name="color" placeholder="color"> </td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="vehstatus">
    <select class="statussel" id="statussel" name="statussel">
      <option value="options" selected>options</option>
    </select>
  </div>
  <div class="comments">
    comments
    <br>
    <textarea name="comarea" id="comarea" rows="8" cols="80"></textarea>
  </div>
  <div class="est">
    RECON ESTIMATE: <input type="text" name="recoest" id="recoest" value="" onchange="formatRecon(this.value)">
  </div>
</form>

  <div class="buttons">
    <button type="button" name="button" id="exitnosave">Cancel</button>
    <!-- <button type="button" name="button">checklist</button> -->
    <button type="button" name="button" id="exitsave">Save and Exit</button>
  </div>
</div>
