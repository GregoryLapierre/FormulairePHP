<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormulairePHP</title>
</head>
<body>
    <form method="post" action="http://localhost:3000/contact.php">
        <p>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
        </p>

        <p>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom">
        </p>

        <p>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
        </p>

        <p>
            <label for="telephone">Téléphone :</label>
            <input type="tel" name="telephone" id="telephone">
        </p>

        <p>
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse">
        </p>

        <input type="submit" value="Envoyer" />

        <input type="reset" value="Effacer" />



    </form>



    <?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];

  $info = [$nom,$prenom,$email,$telephone,$adresse];

  function validatePhoneNumber ($string) {  //création fonction pour valider le tél
    $phoneNumberArr = str_split($string); //création tableau avec str pour séparer les chiffres
    if($phoneNumberArr[0] != 0) {   //si le premier chiffre != 0 alors...
        return false;
    }
    foreach($phoneNumberArr as $value) { //la foreach !! trop puissante mdr
        if(!is_numeric($value)) { // vérif que chaque caractère = numérique
            return false;
        }
    }
    if(strlen($string) != 10) { //vérif taille du numéro
        return false;
    }
    return true;
}

  
  if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($adresse)) {
    echo 'Champs manquants';
  } 
  elseif(strlen($prenom)<3){
    echo 'Le prénom est incorrect. Il contient moins de 3 caractères.';
  } 
  elseif(strlen($nom)<3){
    echo 'Le nom est incorrect. Il contient moins de 3 caractères.';
  } 
  elseif(!ctype_alpha($nom)){
  echo 'Le nom est incorrect. Il contient un ou plusieurs chiffres.';
  } 
  elseif(!ctype_alpha($prenom)){
  echo 'Le prénom est incorrect. Il contient un ou plusieurs chiffres.';
  } 
  elseif(!strpos($email,".") || !strpos($email,"@")){
  echo 'Le mail est incorrect. Il ne contient pas de \'@\' ou de \'.\' ';
  }
  elseif(strlen($adresse)<10){
    echo 'L\'adresse est incorrect. Elle contient moins de 10 caractères.';
  } 
  elseif(validatePhoneNumber($telephone) === false){
    echo 'Le numéro de téléphone doit contenir 10 chiffres et commencer par \'0\'.';
  } 

  else {
      print_r($info);
  }

?>

</body>
</html>











