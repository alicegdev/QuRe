document
  .getElementById("status_select")
  .addEventListener("change", function (e) {
    console.log(this.value);
    let champAModifier = document.getElementById("specific-form-group");
    let champAModifier2 = document.getElementById("specific-form-group2");
    if (e.target.value === "doctor") {
      champAModifier.innerHTML =
        "<label for='exampleInputEmail1'>Numéro RPPS</label><input type='number' class='form-control' id='numero_RPPS' aria-describedby='numero RPPS' placeholder='Entrez votre n° RPPS'/>";
      champAModifier2.innerHTML = "";
    } else if (e.target.value === "patient") {
      champAModifier.innerHTML =
        '<label for="secu_number">Numéro de Sécurité Sociale</label><input type="number" class="form-control" id="secu_number"aria-describedby="numéro de Sécurité Sociale" placeholder="Entrez votre n°SS suivi de la clé"/>';
      champAModifier2.innerHTML =
        '<div class="form-group"><label for="File Input">Joignez une copie de votre carte Vitale</label><input type="file" class="form-control-file" id="FormControlFile1"></div>';
    } else if (e.target.value === "pharmacist") {
      champAModifier.innerHTML = "";
      champAModifier2.innerHTML = "";
    }
  });
