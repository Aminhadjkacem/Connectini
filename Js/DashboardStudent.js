function updateText() {
    var link = document.getElementById("invitation-link");
    link.innerHTML = "Envoyé";
    link.removeAttribute("onclick");
    link.removeAttribute("href");
  }