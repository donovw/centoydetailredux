function loadVehInfo(param) {
  let elements = document.querySelectorAll("body > div:not(#vehinfocontainer)");
  let searchparam = document.getElementById('mainsearch').value;
  if (searchparam.length !== 6) {
    alert("search field cannot be empty");
  } else {
    fetch("scripts/getdbveh.php?by=" + param + "&sparam=" + searchparam)
      .then(re => re.json())
      .then(js => {
        if (js === null) {
          alert("vehicle does not exist");
        } else {
          elements.forEach((index) => {
            index.style.opacity = ".2";
          })
          $("#vehinfocontainer").load("./includes/vehinfo.php", () => {
            data = Object.keys(js);
            data.forEach((k) => {
              if (k === "id") {
                return
              }
              document.getElementById(k).value = js[k];
            })
            $("#exitnosave").on("click", close);
            $("#exitsave").on("click", saveInfo)
          })
        }
      })
  }

  function close() {
    $("#vehinfocontainer").empty();
    elements.forEach((index) => {
      index.style.opacity = "1";
      document.getElementById('mainsearch').value = "";
    })
  }

  function saveInfo() {
    let form = document.getElementById('vehinfoform');
    let fdata = new FormData(form);
    fetch("./scripts/savevehinfo.php", {
      method: "POST",
      mode: 'cors',
      body: fdata
    }).then(res => {
      if (res.status !== 201 && res.status !== 202 ) {
        alert(res.statusText);
      }
      console.log(res.statusText);
      close();
    });
  }
}


function formatRecon(value) {
  if (isNaN(value) === true) {
    alert("recon estimate cannot contain letters")
  } else {
    if (value.toString().includes(".") === true) {
      $("#recoest").val(formatMoney(value))
    } else {
      value = value + ".00";
      $("#recoest").val(formatMoney(value))
    }
  }
}
