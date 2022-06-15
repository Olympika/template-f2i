<?php 

require_once 'Database.php';

$nom = htmlspecialchars ($_POST['nom']);
$prenom = htmlspecialchars ($_POST["prenom"]);
$email = htmlspecialchars  ($_POST["email"]);
$phone = htmlspecialchars ($_POST["phone"]);
$mdp1 = htmlspecialchars ($_POST["mdp1"]);
$mdp2 = htmlspecialchars ($_POST["mdp2"]);

if (strlen($nom) == 0 || strlen($nom) > 255 OR empty($nom)) {
    echo "erreur nom";
    die ();
}

if (strlen($prenom) == 0 || strlen($prenom) > 255 OR empty($nom)) {
    echo "erreur prenom";
    die ();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
    echo "L'adresse mail ".$email." est incorrecte";
    die ();
}

if (strlen($phone) == 0 || strlen($phone) > 18 OR empty($phone)) {
    echo "le numéro de téléphone est invalide";
    die ();
}

if (empty($date) || strlen($date) > 20) {
    echo "La date est invalide";
    die ();
}

if (strlen($mdp1) < 12 || $mdp1 != $mdp2 || strlen($mdp1) > 255) {
    echo "Les mots de passe sont invalides";
    die ();
}

$rechercheEmail = Database::Select('user', 'email = ?', [$email]);

if ($rechercheEmail == false) {
    echo "erreur de vérification";
    die ();
}

$email = $rechercheEmail->fetchAll();

if (count($email) > 0) {
    echo "L'utilisateur est déjà inscrit";
    die ();
}

$newPassword = password_hash($mdp1, PASSWORD_ARGON2I);

$insert = Database::Insert ('user'[
$nom;
$prenom;
$email;
$date;
$phone;
$newPassword;
]); 

if ($insert == false) {
    echo "un problème a eu lieu lors de l'insertion";
    die ();
}

header ('Location: https://localhost/index.php');