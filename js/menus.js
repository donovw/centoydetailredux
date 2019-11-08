function openMenu(menu) {
  event.stopPropagation();
  document.getElementById(menu).style.display = "flex";

  $('#'+ menu).click(function(e){
    e.stopPropagation();
});
  let elements = document.querySelectorAll('div:not(#' + menu +')');
  elements.forEach((index) => {
    index.addEventListener("click", closeMenu)
    if (menu == "login") {
      index.style.opacity = ".2";
    }

  })
  function closeMenu() {
    event.stopPropagation();
    document.getElementById(menu).style.display = "none";
    elements.forEach((index) => {
      index.removeEventListener("click", closeMenu);
      if (menu == "login") {
        index.style.opacity = "1";
      }
    })
  }
};
