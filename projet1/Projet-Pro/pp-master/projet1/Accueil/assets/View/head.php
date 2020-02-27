<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="../css/head_foot.css"> <!-- Header and Footer CSS file -->
        <link rel="stylesheet" href="../css/Accueil.css"> <!-- Accueil CSS file -->
        <?php if (basename($_SERVER["PHP_SELF"]) == 'localisation.php') { ?>
            <link rel="stylesheet" href="../css/Map.css"> <!-- Map CSS fil -->
        <?php } ?>
        <?php if (basename($_SERVER["PHP_SELF"]) == 'maladie.php') { ?>
            <link rel="stylesheet" href="../css/maladie.css"> <!-- Map CSS fil -->
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
        <nav class="navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" id="navbar">
                    <a class="nav-item nav-link" href="maladie.php">Maladie</a>
                    <a class="nav-item nav-link" href="evenement.php">Evénement</a>
                    <a class="nav-item nav-link" href="localisation.php">Localisation</a>
                    <a class="nav-item nav-link" href="../../Accueil.php">Accueil</a>
                    <a class="nav-item nav-link" href="#">Gallerie</a>
                    <a class="nav-item nav-link" href="soin.php">Soin</a>
                    <a class="nav-item nav-link" href="contact.php">Contact</a>
                </div>
            </div>
        </nav>
        <!-- navbar end -->