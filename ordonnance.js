let addDrugBtn = document.getElementById("add_drug");
let addedDrugInputs = document.getElementById("added_drug_inputs");
let ordonnanceForm = document.getElementsByClassName("ordonnance-form");
let anotherDrug = document.createElement("a");
let anotherDrug2 = document.createElement("a");

// let drugInput =
//   '<label for="drug_prescribed">Médicament prescrit</label><input type="text" class="form-control" id="input_drug" placeholder="Médicament prescrit"/>';
// let quantityInput =
//   '<label for="quantity">Quantité</label><input type="number" class="form-control" id="input_quantity" placeholder="Quantité"/><p class="text-details">mg</p>';
// let frequencyInput =
//   '<input type="number" class="form-control" id="input_posologie" placeholder="Nombre de fois"/><p class="text-details">par </p> <input type="text" class="form-control" id="input_posologie" placeholder="Jour, semaine..."/>';
function addDrugInput() {
  addDrugBtn.addEventListener("click", () => {
    addedDrugInputs.innerHTML =
      '<div class="form-group"><label for="drug_prescribed">Médicament prescrit</label><input type="text" class="form-control" id="input_drug" placeholder="Médicament prescrit"/></div><div class="form-group"><label for="quantity">Quantité</label></div><div class="form-group"><input type="number" class="form-control" id="input_quantity" placeholder="Quantité"/><p class="text-details">mg</p><input type="number" class="form-control" id="input_posologie" placeholder="Nombre de fois"/><p class="text-details">par </p> <input type="text" class="form-control" id="input_posologie" placeholder="Jour, semaine..."/><div class="form-group"></div>';
    addedDrugInputs.appendChild(anotherDrug);
    anotherDrug.innerHTML = "<a href=#>➕ Ajouter médicament</a>";
    anotherDrug.style.marginLeft = "77%";
    anotherDrug.addEventListener("click", () => {
      anotherDrug.appendChild(anotherDrug2);
      anotherDrug2.innerHTML =
        '<div></div><div class="form-group"><label for="drug_prescribed">Médicament prescrit</label><input type="text" class="form-control" id="input_drug" placeholder="Médicament prescrit"/></div><div class="form-group"><label for="quantity">Quantité</label></div><div class="form-group"><input type="number" class="form-control" id="input_quantity" placeholder="Quantité"/><p class="text-details">mg</p><input type="number" class="form-control" id="input_posologie" placeholder="Nombre de fois"/><p class="text-details">par </p> <input type="text" class="form-control" id="input_posologie" placeholder="Jour, semaine..."/></div><div class="form-group"><label for="drug_comment">Commentaire médicament</label><input type="text-area" size=500 class="form-control" id="input_drug_comment" placeholder="Commentaire traitement"/></div>';
    });
  });
}

addDrugInput();
