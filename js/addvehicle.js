async function addVehicle() {
  await loadVehiclePage();
  dimElements();
  document.getElementById('vin').setAttribute("oninput", "verifyLength()");
  document.getElementById('vin').removeAttribute("readonly");
}

async function loadVehiclePage() {
  await fetch("includes/vehinfo.php")
    .then(res => res.text())
    .then(text => {
      document.getElementById('vehinfocontainer').innerHTML = text;
      console.log("loaded page");
    })
}

function dimElements() {
  let elements = document.querySelectorAll("body > div:not(#vehinfocontainer)"); //dim background
  elements.forEach((index) => {
    index.style.opacity = ".2"
  });
}
async function verifyLength() {
  if (event.target.value.length === 17) {
    let vindecode = await getVehInfo(event.target.value);
    console.log("error: " + vindecode.Results['0'].ErrorText);
    if (vindecode.Results['0'].ErrorCode !== "0") {
      alert("Please Enter a valid Vin");
    } else {
      $('#year').val(vindecode.Results['0'].ModelYear);
      $('#make').val(vindecode.Results['0'].Make);
      $('#model').val(vindecode.Results['0'].Model);
      document.getElementById('stk').removeAttribute("readonly", "0");
    }
  }
}


async function getVehInfo(res) {
  const uri1 = 'https://vpic.nhtsa.dot.gov/api/vehicles/DecodeVinValues/';
  const uri2 = '?format=json';
  let fulluri = uri1 + res + uri2;
  let response = await fetch(fulluri);
  let json = response.json();
  return json;
}
