let welcome = document.getElementById("header-session");
let headerWelcome = document.getElementById("header-welcome");
let overlay = document.getElementById("overlay");

let animationDiplay = e => {
  e.preventDefault();
  headerWelcome.classList.toggle("visible");
  overlay.classList.toggle("overlay");
};

welcome.addEventListener("click", animationDiplay);
