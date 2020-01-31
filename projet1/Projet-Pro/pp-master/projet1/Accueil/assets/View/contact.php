<?php include_once '../controler/contactCtrl.php' ?>  <!-- On inclut le controler pour sécuriser le formulaire -->
<?php include_once 'head.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h2>Contacter nous</h2>     
        </div>    
    </div>
    <form method="POST" action="#">
        <div class="row pt-5">
            <div class="col-md-6 text-center form-group<?= isset($errorMessage['lastName']) ? ' has-danger' : '' ?>">
                <label class="form-control-label" for="lastName">Votre nom : </label>
                <input class="form-control <?= isset($errorMessage['lastName']) ? 'is-invalid' : '' ?>"type="text" name="lastName" id="lastName" placeholder="Potier" value="<?= !empty($_POST['lastName']) ? $_POST['lastName'] : '' ?>" />
                <?php if (isset($errorMessage['lastName'])) { ?>
                    <p class="<?= isset($errorMessage['lastName']) ? 'invalid-feedback' : '' ?>"><?= $errorMessage['lastName'] ?></p><?php }
                ?>
            </div>
            <div class="col-md-6 text-center form-group<?= isset($errorMessage['firstName']) ? ' has-danger' : '' ?>">
                <label class="form-control-label" for="firstName">Votre prénom : </label>
                <input class="form-control <?= isset($errorMessage['firstName']) ? 'is-invalid' : '' ?>" type="text" name="firstName" id="firstName" placeholder="Sylvie" value="<?= !empty($_POST['firstName']) ? $_POST['firstName'] : '' ?>" />
                <?php if (isset($errorMessage['firstName'])) { ?>
                    <p class="<?= isset($errorMessage['firstName']) ? 'invalid-feedback' : '' ?>"><?= $errorMessage['firstName'] ?></p><?php }
                ?>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6 text-center form-group<?= isset($errorMessage['email']) ? ' has-danger' : '' ?>">
                <label class="form-control-label" for="email">Votre mail : </label>
                <input class="form-control <?= isset($errorMessage['email']) ? 'is-invalid' : '' ?>" type="mail" name="email" id="email" placeholder="syliepotier.sp@gmail.com" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>" />
<?php if (isset($errorMessage['email'])) { ?>
                    <p class="<?= isset($errorMessage['email']) ? 'invalid-feedback' : '' ?>"><?= $errorMessage['email'] ?></p><?php }
?>
            </div>
            <div class="col-md-6 text-center form-group<?= isset($errorMessage['phone']) ? ' has-danger' : '' ?>">
                <label class="form-control-label" for="phone">Votre téléphone : </label>
                <input class="form-control <?= isset($errorMessage['phone']) ? 'is-invalid' : '' ?>" type="text" name="phone" id="phone" placeholder="0610516646" value="<?= !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" />
<?php if (isset($errorMessage['phone'])) { ?>
                    <p class="<?= isset($errorMessage['phone']) ? 'invalid-feedback' : '' ?>"><?= $errorMessage['phone'] ?></p><?php }
?>
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-md-12 text-center form-group<?= isset($errorMessage['text']) ? ' has-danger' : '' ?>">
                <label class="form-control-label" for="text">Votre Texte : </label>
                <textarea class="form-control <?= isset($errorMessage['text']) ? 'is-invalid' : '' ?>"name="text" id="text" placeholder="Veuillez remplir ce champ de votre texte." rows="10" cols="100"><?= !empty($_POST['text']) ? $_POST['text'] : '' ?></textarea>
<?php if (isset($errorMessage['text'])) { ?>
                    <p class="<?= isset($errorMessage['text']) ? 'invalid-feedback' : '' ?>"><?= $errorMessage['text'] ?></p><?php }
?>
            </div>
            <div class="col-md-12 text-center mt-3">
                <input class="submit" type="submit" name="send" value="Envoyer" />
            </div>
        </div>
    </form>
</div>
<div class="container-fluid contact_information_box">
    <div class="row mt-5 pt-3 mb-5">
        <div class="col-md-12 text-center">
            <h2>Nos coordonnées</h2>
        </div>
    </div>
    <div class="row mt-5 pb-5 contact_information">
        <div class="offset-md-2 col-md-4 pl-5">
            <p><strong>Fix :</strong> 03.44.09.48.75</p>
            <p><strong>Port :</strong> 06.10.51.66.46</p>
        </div>
        <div class="offset-md-1 col-md-4 pl-5">
            <p><strong>Adresse :</strong> 31 square de lattre de Tassigny 60400 Noyon</p>
            <p><strong>Mail :</strong> sylviepotier.sp@gmail.com</p>
        </div>
    </div>
</div>
<div class="googleMapResponsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.748200919306!2d2.9966251425738437!3d49.58363850471118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e873ee4a089f73%3A0x8d6da9d49b4c873f!2s31%20Square%20de%20Lattre%20de%20Tassigny%2C%2060400%20Noyon!5e0!3m2!1sfr!2sfr!4v1580207930402!5m2!1sfr!2sfr" width="1888" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>        
</div>
<?php include_once 'footer.php'; ?>