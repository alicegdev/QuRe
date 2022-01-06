<!DOCTYPE html>
<?php require_once 'control.php'; ?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Infos Patient</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="profil-user.css"
    />
  </head>
  <body>
      <?php   $test2 = $pdo->getInfoUtilisateur(1);  ?>
      <section class="title">Informations personnelles</section>
      <form method="POST" action="profil-user.php">
        <section class="profil-user-form">
        <div class="form-group">
        <label for="name">Nom</label>
        <div class="champ">
        <!--TO DO : mettre la variable correspondante de la BDD dans le placeholder-->
          <input
            type="text"
            class="form-control"
            id="input_last_name"
            name="nom"
            aria-describedby="Nom"
            value="<?php echo $test2[1] ?>"
            readonly="readonly"
          />
    
          <a class="modify" href="#" id="modify-last-name">✏️</a>
        </div>
        </div>
        <!--TO DO : mettre la variable correspondante de la BDD dans le placeholder-->
        <div class="form-group">
          <label for="firstName">Prénom</label>
          <div class="champ">
          <input
            type="text"
            class="form-control"
            id="input_first-name"
            name="prenom"
            aria-describedby="Prénom"
            value="<?php echo $test2[2] ?>"
            readonly="readonly"
          />
        <a class="modify" href="#" id="modify_first-name">✏️</a></div>
        </div>
        <!--TO DO : mettre la variable correspondante de la BDD dans le placeholder-->
        <div class="form-group">
          <label for="dateOfBirth">Date de naissance</label>
          <div class="champ">
          <input
            type="date"
            class="form-control"
            id="input_birthdate"
            aria-describedby="input_birthdate"
            value="<?php echo $test2[8] ?>"
            readonly="readonly"
          />
        <a class="modify" href="#" id="modify-birthdate">✏️</a></div>
        </div>
        <!--TO DO : mettre la variable correspondante de la BDD dans le placeholder-->
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse e-mail</label>
          <div class="champ">
          <input
            type="email"
            class="form-control"
            id="input_email"
            name="email"
            aria-describedby="emailHelp"
            value="<?php echo $test2[6] ?>"
            readonly="readonly"
          />
        <a class="modify" href="#" id="modify-email">✏️</a></div>
        </div>
        <!--TO DO : mettre la variable correspondante de la BDD dans le placeholder-->
        <div class="form-group">
          <label for="inputPassword1">Mot de passe</label>
          <div class="champ">
          <input
            type="password"
            class="form-control"
            id="input_password"
            name="mdp"
            value="<?php echo $test2[7] ?>"
            readonly="readonly"
          />
        <a class="modify" id="modify-password" href="#">✏️</a></div>
        </div>
        <!--TO DO : récupérer le fichier stocké en BDD-->    
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
      <?php 
      if($_POST['nom']!=null OR $_POST['prenom']!=null OR $_POST['email']!=null OR $_POST['mdp']!=null){
      $test1 = $pdo->setInfoUtilisateur($_POST['nom'], $_POST['prenom'], $_POST['email'], hash('sha256', $_POST['mdp'])); 
      header("Refresh:0");
      }
      else{echo 'ERREUR';}
          ?>
    </section>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="userProfile.js"></script>
  </body>
</html>
