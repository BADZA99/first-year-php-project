const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const login = document.getElementById("login");
const password = document.getElementById("password");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const submit = document.getElementById("submit");
submit.addEventListener("click", validation);
function validation(event) {
  if (nom.value == "" ||
    prenom.value == "" ||
    login.value == "" ||
    password.value == "" ||
    email.value == "" ||
    phone.value == ""
  ) {
    event.preventDefault();
    alert("tout les champs sont obligatoires");
  }
  // le nom,prenom doivent contenir que des lettres
  else if (!nom.value.match(/^[a-zA-Z]+$/)) {
    event.preventDefault();
    alert("le nom doit contenir que des lettres");
  } else if (!prenom.value.match(/^[a-zA-Z]+$/)) {
    event.preventDefault();
    alert("le prenom doit contenir que des lettres");
  }
  // le login doit contenir que des lettres et des chiffres
  else if (!login.value.match(/^[a-zA-Z0-9]+$/)) {
    event.preventDefault();
    alert("le login doit contenir que des lettres et des chiffres");
  }
  // le mot de passe doit contenir que des lettres et des chiffres
  else if (!password.value.match(/^[a-zA-Z0-9]+$/)) {
    event.preventDefault();
    alert("le mot de passe doit contenir que des lettres et des chiffres");
  }
  // le email doit contenir un @ et un .
  else if (!email.value.match(/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/)) {
    event.preventDefault();
    alert("le email doit contenir un @ et un .");
  }
  // le telephone doit contenir que des chiffres
  else if (!phone.value.match(/^[0-9]+$/)) {
    event.preventDefault();
    alert("le telephone doit contenir que des chiffres");
  } else {
  }
}
