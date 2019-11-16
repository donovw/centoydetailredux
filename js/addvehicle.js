async function addVehicle() {
  let elements = document.querySelectorAll("body > div:not(#vehinfocontainer)");//dim background
    elements.forEach((index) => {
    index.style.opacity = ".2"});
  await loadVehiclePage();
    

}

async function loadVehiclePage() {
   await fetch("includes/vehinfo.php")
   .then(res => res.text())
   .then(text => {
     document.getElementById('vehinfocontainer').innerHTML = text;
     console.log("loaded page");
   })
}
