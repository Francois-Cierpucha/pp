<?php
if(isset($_POST['send'])) {     // On vérifie que le boutton submit à bien été validé
  $errorMessage = array();
  $regName = '#^[\'a-zàâçèéêîôùû\s-]+$#i';    //  Regex vérifiant tout les champs name
  $regMail = '#^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$#i';    //  Regex vérifiant tout les champs Email
  $regPhone = '#^[+0-9]+$#';      //regex vérifiant tout les champs numéro d téléphone
  $regTextArea = '/^([;<>])^/'; //regex textarea
// Vérification des champs
// Vérification du champ lastName
  if (!empty($_POST['lastName'])){      // Si le champ est remplit et evoyé
    if (preg_match($regName, $_POST['lastName'])) {     // Si le les données rentrer corresponde à la regex
      $lastName = htmlspecialchars($_POST['lastName']);       // htmlspecialchars retire toutes les blises empêchant les injection SQL
    }else {
      $errorMessage['lastName'] = 'Votre nom n\'est pas comforme';    // tableau affichant lorsque les champs sont mal remplit
    }
  }else {
    $errorMessage['lastName'] = 'Votre nom n\'est pas remplit';   // tableau affichant lorsque les champs ne sont pas remplit
  }
// Vérification du champ^firstName
  if (!empty($_POST['firstName'])) {
    if (preg_match($regName, $_POST['firstName'])) {
      $firstName = htmlspecialchars($_POST['firstName']);
    } else {
      $errorMessage['firstName'] = 'Votre prènom n\'est pas comforme';
    }
  } else {
    $errorMessage['firstName'] = 'Votre prènom n\'est pas remplit';
  }
// Vérification du champ email
  if (!empty($_POST['email'])) {
    if (preg_match($regMail, $_POST['email'])) {
      $email = htmlspecialchars($_POST['email']);
      $email = 'From:' . $email;
    } else {
      $errorMessage['email'] = 'Vous n\'avez pas remplit votre email correctement';
    }
  } else {
    $errorMessage['email'] = 'Vous n\'avez pas remplit votre email';
  }
// Vérification du champ phone
  if (!empty($_POST['phone'])) {
    if (preg_match($regPhone, $_POST['phone'])) {
      $phone = htmlspecialchars($_POST['phone']);
    } else {
      $errorMessage['phone'] = 'Votre numèro de téléphone n\'est pas valide';
    }
  } else {
    $errorMessage['phone'] = 'Votre numèro de téléphone n\'est pas remplit';
  }
  if (!empty($_POST['text'])) {
    if (!preg_match($regTextArea, $_POST['text'])) {
      $text = htmlspecialchars($_POST['text']);
    } else {
      $errorMessage['text'] = 'Votre text ne doit pas contenir de ; ou de <> ';
    }
  } else {
    $errorMessage['text'] = 'Votre texte n\'est pas remplit ';
  }
  if(count($errorMessage) == 0){
      mail('francoiscierpucha@gmail.com', 'Mon sujet', $text, $email);
      $emailValidate = 'Le mail à bien été envoyé';
  }
}
?>
