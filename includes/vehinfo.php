<head>
  <link rel="stylesheet" href="../styles.css">
</head>
<div class="vehicleinfo" id="vehinfo">
  <div class="vehnumbers">
    <div class="vinnumber">
      vin Number:
      <br>
      <input type="text" name="vinnumber" value="">
    </div>
    <div class="stocknumber">
      Stock #:
      <br>
      <input type="text" name="stknumber" value="">
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
        <td> <input type="text" id="year" value=""  placeholder="year"> </td>
        <td> <input type="text" id="make" value=""  placeholder="make"> </td>
        <td> <input type="text" id="model" value=""  placeholder="model"> </td>
        <td> <input type="text" id="color" value=""  placeholder="color"> </td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="vehstatus">
    <select class="statussel" name="statussel">
      <option value="options" selected>options</option>
    </select>
  </div>
  <div class="comments">
    comments
    <br>
    <textarea name="comarea" rows="8" cols="80"></textarea>
  </div>
  <div class="buttons">
    <button type="button" name="button">cancel</button>
    <!-- <button type="button" name="button">checklist</button> -->
    <button type="button" name="button">Save and Exit</button>
  </div>
</div>