<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Générer ordonnance</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="espace-patient.css" />
  </head>
  <body>
    <section class="header">
        <a href="espace-patient.html"><img src="Fichiers hors-code/QuRe_logo.png" class="logo"></a></img>
      </section>
    <section class="title">Espace Patient</section>
    <div class="buttons-container">
      <button type="button" class="btn btn-primary">
        <!-- TODO: transformer les liens vers les pages html en pages php ? -->
        <a
          href="QR-code-infos.html"
          class="text-center text-white text-decoration-none"
          >QR Code informations médicales</a
        >
      </button>
      <button type="button" class="btn btn-primary">
        <a
          href="menu-ordonnances.html"
          class="text-center text-white text-decoration-none"
          >Ordonnance</a
        >
      </button>
      <button type="button" class="btn btn-primary">
        <a
          href="profil-user.html"
          class="text-center text-white text-decoration-none"
          >Modifier mes informations</a
        >
      </button>
    </div>
    <div class="col-md-4"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>