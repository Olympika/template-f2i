<?php 

require_once 'Database.php';

$username = htmlspecialchars($_POST["username"]);
$mdp1 = htmlspecialchars($_POST["mdp1"]);
$mdp2 = htmlspecialchars($_POST["mdp2"]);

if (strlen($username) == 0 || strlen($username) > 255 OR empty($username)) {
    echo "erreur username";
    die ();
}

//si les deux mots de passe ne correspondent pas, alors un popup s'affiche et une redirection s'en suit//
if (strlen($mdp1) < 8 || $mdp1 != $mdp2 || strlen($mdp1) > 255) {
    echo "<script>
    window.location.href = 'http://localhost/evaluation.php';
    alert('Les mots de passe sont invalides');
    </script>";
    die();
} 

$rechercheUser = Database::Select('evaluation', 'username = ?', [$username]);

if ($rechercheUser == false) {
    echo "erreur de vérification";
    die ();
}

$userTest = $rechercheUser->fetchAll();

if (count($userTest) > 0) {
    echo "L'utilisateur est déjà inscrit";
    header ('Location: http://localhost/evaluation.php');
    die ();
}

$newPassword = password_hash($mdp1, PASSWORD_ARGON2I);

$insert = Database::Insert ('evaluation',[
$username,
$newPassword,
]); 

if ($insert == false) {
    echo "un problème a eu lieu lors de l'insertion";
    die ();
}
