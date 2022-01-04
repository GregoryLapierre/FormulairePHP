<?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];

  $info = [$nom,$prenom,$email,$telephone,$adresse];
  
  if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($adresse)) {
    echo 'Champs manquants';
  } else {
      print_r($info);
  }


?>
