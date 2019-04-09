var btn = document.getElementById("show-hide")
var frm = document.getElementById("add-form")

btn.onclick = function() {
  if (frm.style.display == "none") {
    frm.style.display = "";
    btn.innerHTML= "Скрыть &and;";
  } else {
    frm.style.display = "none";
    btn.innerHTML= "Добавить страну &or;";
  }
}
