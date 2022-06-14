<?php 

//traiter donnée

$nom = htmlspecialchars ($_POST['nom']);
$prenom = htmlspecialchars ($_POST["prenom"]);
$email = htmlspecialchars  ($_POST["email"]);
$phone = htmlspecialchars ($_POST["phone"]);
$mdp1 = htmlspecialchars ($_POST["mdp1"]);
$mdp2 = htmlspecialchars ($_POST["mdp2"]);

// != : contraire / !function c'est le contraire / != différent de / && == AND / ==! strictement différent 
// strlen : la longueur d'un string *



if (strlen($nom) == 0 || strlen($nom) > 255 OR empty($nom)) {
    echo "erreur nom";
}

if (strlen($prenom) == 0 || strlen($prenom) > 255 OR empty($nom)) {
    echo "erreur prenom";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
    echo "L'adresse mail ".$email." est incorrecte";
}

if (strlen($phone) == 0 || strlen($phone) > 18 OR empty($phone)) {
    echo "le numéro de téléphone est invalide";
}
   
// function validateAge($birthday, $age = 12) {
//     // $birthday peut être un UNIX_TIMESTAMP ou juste une string-date
//     if(is_string($birthday)) {
//         $birthday = strtotime($birthday);
//     }

//     // 31536000 est le nombre de seconde dans 365 jours
//     if(time() - $birthday < $age * 31536000)  {
//         echo "la date de  aissance n'est pas valide";
//     }
// }

if (empty($date) || strlen($date) > 20) {
    echo "La date est invalide";
}

if (strlen($mdp1) < 12 || $mdp1 != $mdp2 || strlen($mdp1) > 255) {
    echo "Les mots de passe sont invalides";
}
