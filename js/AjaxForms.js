let form = document.getElementById("formLogin");
let btnSubmit = form.querySelectorAll("input")[2];
let btnSubmitMessage = btnSubmit.value;
let iconMessage = document.getElementById("iconMessage");

const login = e => {
  e.preventDefault();
  let usuario = form.querySelectorAll("input")[0].value;
  let clave = form.querySelectorAll("input")[1].value;
  Ajaxfetch(usuario, clave);
};

const Ajaxfetch = (usuario, clave) => {
  $.ajax({
    type: "POST",
    url: "valida_usr.php",
    data: { usuario: usuario, pass: clave }
  }).done(response => {
    let loginMessage = JSON.parse(response)[1];
    let loginBandera = JSON.parse(response)[0];
    changeMessageLogin(loginMessage, loginBandera);
  });
};

const changeMessageLogin = (message, bandera) => {
  if (bandera) {
    btnSubmit.value = message;
    setTimeout(() => {
      document.location.href = "http://localhost:8080/farmacia/inicio.php";
    }, 2000);
  } else {
    btnSubmit.value = message;
    setTimeout(() => {
      document.location.href = "http://localhost:8080/farmacia/index.php";
    }, 3000);
  }

  /*setTimeout(() => {
    btnSubmit.value = btnSubmitMessage;
  }, 2000);*/
};

form.addEventListener("submit", login);

/*
fa-check
fa-times
*/
