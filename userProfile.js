let modifyPassword = document.getElementById("modify-password");
let modifyEmail = document.getElementById("modify-email");
let modifyBirthdate = document.getElementById("modify-birthdate");
let modifyLastName = document.getElementById("modify-last-name");
let modifyFirstName = document.getElementById("modify_first-name");

pencil(modifyPassword, "input_password");
pencil(modifyEmail, "input_email");
pencil(modifyBirthdate, "input_birthdate");
pencil(modifyLastName, "input_last_name");
pencil(modifyFirstName, "input_first-name");

function pencil(modify, input) {
  modify.addEventListener("click", () => {
    let champ = document.getElementById(input);
    champ.disabled = false;
    if (champ.disabled === false) {
      modify.innerHTML = '<button class="cancel">Annuler</button>';
    }
  });
}
