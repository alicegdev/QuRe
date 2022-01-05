<!DOCTYPE html>
<?php require_once 'control.php'; ?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Inscription</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="inscription.css"
    />
  </head>
  <body>
    <section class="title">S'inscrire</section>
    <section class="inscription-form">
      <div class="col-md-6"></div>
      <form class="col-md-6" method="POST" action="inscription.php">
        <section class="choice">
      <label for="pet-select">Choisissez votre statut</label>

      <select name="status" id="status_select">
        <option value="">---</option>
        <option value="patient">Patient</option>
        <option value="doctor">Médecin</option>
        <option value="pharmacist">Pharmacien</option>
      </select>
        <div class="form-group" id="specific-form-group"></div>
        <div class="form-group">
          <label for="name">Nom</label>
          <input
            type="text"
            class="form-control"
            id="input_last_name"
            name="nom"
            aria-describedby="Nom"
            placeholder="Nom"
          />
        </div>
        <div class="form-group">
          <label for="firstName">Prénom</label>
          <input
            type="text"
            class="form-control"
            id="input_first_name"
            name="prenom"
            aria-describedby="Prénom"
            placeholder="Prénom"
          />
        </div>
        <div class="form-group">
          <label for="dateOfBirth">Date de naissance</label>
          <input
            type="date"
            class="form-control"
            id="input_first_name"
            name="dateNaiss"
            aria-describedby="Date de naissance"
            placeholder="Date de naissance"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse e-mail</label>
          <input
            type="email"
            class="form-control"
            id="input_email"
            name="email"
            aria-describedby="emailHelp"
            placeholder="Entrez votre adresse e-mail"
          />
        </div>
        <div class="form-group">
          <label for="inputPassword1">Mot de passe</label>
          <input
            type="password"
            class="form-control"
            id="input_password1"
            name="mdp"
            placeholder="Mot de passe"
          />
        </div>
        <div class="form-group">
          <label for="inputPassword2">Répéter votre mot de passe</label>
          <input
            type="password"
            class="form-control"
            id="input_password2"
            name="mdp2"
            placeholder="Répétez votre mot de passe"
          />
        </div>
        <div id="specific-form-group2"></div>        
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1"
            >Je certifie que les informations envoyées sont exactes.</label
          >
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
      <p>Déjà inscrit ? <a href="connexion.php">Connectez-vous.</a></p>
      <?php 
      if($_POST['status']=="patient"){
        $statut = 1;
      }elseif($_POST['status']=="doctor"){
        $statut = 2;
      }elseif($_POST['status']=="pharmacist"){
        $statut = 3;
      }
      if($_POST['mdp']==$_POST['mdp2']){
      $test1 = $pdo->inscription($_POST['nom'], $_POST['prenom'], $_POST['dateNaiss'], $_POST['email'], hash('sha256', $_POST['mdp']), $statut); 
      }
      else{
        echo "Les mots de passes ne sont pas identiques !";
      }
      ?>
    <div class="col-md-6"></div>
    </section>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="inscription.js"></script>
  </body>
</html>
