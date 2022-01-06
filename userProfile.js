let modifyPassword = document.getElementById("modify-password");
let modifyEmail = document.getElementById("modify-email");
let modifyBirthdate = document.getElementById("modify-birthdate");
let modifyLastName = document.getElementById("modify-last-name");
let modifyFirstName = document.getElementById("modify_first-name");

pencil(modifyPassword, "input_password");
pencil(modifyEmail, "input_email");
pencil(modifyLastName, "input_last_name");
pencil(modifyFirstName, "input_first-name");

function pencil(modify, input) {
  modify.addEventListener("click", () => {
    let champ = document.getElementById(input);
    champ.disabled = false;
    if (champ.disabled === false) {
      let boutonAnnuler = document.createElement("input");
      // créer un élément type button, faire un appendChild sur Modify puis modifier ses attributs et son HTML
      modify.innerHTML = "";
      modify.appendChild(boutonAnnuler);
      boutonAnnuler.value = "Annuler";
      boutonAnnuler.type = "reset";
      boutonAnnuler.addEventListener("click", () => {
        if (champ.id === "input_last_name") {
          champ.value = `${variableNom}`;
        } else if (champ.id === "input_email") {
          champ.value = `${variableEmail}`;
        } else if (champ.id === "input_password") {
          champ.value = `${variableMdp}`;
        } else if (champ.id === "input_first-name") {
          champ.value = `${variableMdp}`;
        }
        champ.readOnly = "readonly";
      });
    }
  });
}
