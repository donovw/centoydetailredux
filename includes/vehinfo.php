
<div class="vehicleinfo" id="vehinfo">
  <form id="vehinfoform">
  <div class="vehnumbers">
    <div class="vinnumber">
      <label for="vin">vin Number:</label>
      <br>
      <input type="text" id="vin" name="vin" value="" readonly autofocus autocomplete="none" maxlength="17" placeholder="VIN">
    </div>
    <div class="stocknumber">
      <label for="stk">Stock #:</label>
      <br>
      <input type="text" id="stk" name="stk" value="" readonly placeholder="STOCK #">
    </div>
  </div>
  <div class="vehinfotable">
    <table>
    <thead>
      <th> <label for="year">Year</label> </th>
      <th> <label for="make">Make</label> </th>
      <th> <label for="model">Model</label> </th>
      <th> <label for="color">Color</label> </th>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" id="year" value="" name="year" readonly placeholder="year"> </td>
        <td> <input type="text" id="make" value="" name="make" readonly placeholder="make"> </td>
        <td> <input type="text" id="model" value="" name="model" readonly placeholder="model"> </td>
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
    <label for="comment">comments</label>
    <br>
    <textarea name="comment" id="comment" rows="8" cols="80"></textarea>
  </div>
  <div class="est">
    <label for="estimate">RECON ESTIMATE:</label>
     <input type="text" name="estimate" id="estimate" value="" onchange="formatRecon(this.value)">
  </div>
  <input type="hidden" name="update" id="update" value="true">
</form>

  <div class="buttons">
    <button type="button" name="button" id="exitnosave">Cancel</button>
    <!-- <button type="button" name="button">checklist</button> -->
    <button type="button" name="button" id="exitsave">Save and Exit</button>
  </div>
</div>
