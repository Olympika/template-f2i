<?php 
session_start();

require_once 'Database.php';

$username = htmlspecialchars($_POST['username']);

$mdp = htmlspecialchars($_POST['mdp']);

if (strlen($username) > 255){
  echo $username." mail invalide". "<br>";
  die();
}

if(strlen($mdp) < 2 ||  strlen($mdp) > 20 ) {
  echo "erreur mdp";
  die();
}

$rechercheUser = Database::Select('evaluation','username = ?', [$username]);

if ($rechercheUser == false) {
  echo "erreur de vérification";
  die();
}

$user = $rechercheUser->fetchAll();
if (password_verify($mdp,$user[0]['password'])) {
  echo 'Le mot de passe est valide !';
  $_SESSION['evaluation'] = $user;
  header('Location: espace.php');
} else {
  echo 'Le mot de passe est invalide.';
}
