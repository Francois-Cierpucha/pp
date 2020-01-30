<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/head_foot.css"> <!-- Header and Footer CSS file -->
    <link rel="stylesheet" href="../css/Accueil.css"> <!-- Accueil CSS file -->
    <?php
    if(basename($_SERVER["PHP_SELF"]) == 'localisation.php'){ ?>
    <link rel="stylesheet" href="../css/Map.css"> <!-- Map CSS fil -->
    <?php } ?>
    <title>Pachyonychie-Congenita-lecoeuraupied-Accueil</title>
  </head>
  <body>
<!-- header start -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center bg-dark parralax">
          <h1>Pachyonichie congénita</h1>
          <p id="titlle">Le coeur au pied</p>
        </div>
      </div>
    </div>
<!-- header end -->
<!-- navbar start -->
        <div class="container-fluid" id="navbar">
          <div class="row">
            <div class="col-md-12">
              <a href="maladie.php">Maladie</a>
              <a href="#">Evénement</a>
              <a href="localisation.php">Localisation</a>
              <a href="../../Accueil.php">Accueil</a>
              <a href="#">Gallerie</a>
              <a href="soin.php">Soin</a>
              <a href="contact.php">Contact</a>
            </div>
          </div>
        </div>
<!-- navbar end -->