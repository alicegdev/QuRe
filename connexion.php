<!DOCTYPE html>
<?php require_once 'control.php'; ?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="Style/inscription.css" />
  </head>
  <body>
    <section class="title">Se connecter</section>
    <section class="connection-form">
      <div class="col-md-6"></div>
      <form class="col-md-6" method="POST" action="connexion.php">
        <div class="form-group">
          <label for="email">E-mail</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            aria-describedby="Adresse Email"
            placeholder="Adresse Email"
          />
        </div>
        <div class="form-group">
          <label for="mdp">Mot de passe</label>
          <input
            type="password"
            class="form-control"
            id="mdp"
            name="mdp"
            aria-describedby="Mot de Passe"
            placeholder="Mot de Passe"
          />
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
      <?php
          $test1 = $pdo->connexion($_POST['email'], hash('sha256', $_POST['mdp']));
          
          echo "connexion réussi ! Bienvenue ", $test1[2]," ", $test1[1]," !";
          ?>
      <div class="col-md-6"></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
