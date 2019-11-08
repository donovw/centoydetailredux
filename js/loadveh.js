function loadVehInfo(param) {
  let elements = document.querySelectorAll("body > div:not(#vehinfocontainer)");
  elements.forEach((index) => {
        index.style.opacity = ".2";
    })
    $("#vehinfocontainer").load("./includes/vehinfo.php");
    let searchparam = document.getElementById('mainsearch').value;
    fetch("scripts/getdbveh.php?by=" + param + "&sparam=" + searchparam)
      .then(re => re.json())
      .then(js => {
        if (js === null) {
          alert("vehicle does not exist");
        } else {
          $('#vinnumber').val(js['vin']).prop("readonly","1");
          $('#stknumber').val(js['stk']).prop("readonly","1");
          $('#year').val(js['year']).prop("readonly","1");
          $('#make').val(js['make']).prop("readonly","1");
          $('#model').val(js['model']).prop("readonly","1");
          $('#color').val(js['color']).prop("readonly","1");
          $('#statussel').val(js['status']);
          $('#comarea').val(js['comment']);
        //  $('#recoest').val(formatMoney(js['estimate'])).prop("readonly","1");

}
})
}
