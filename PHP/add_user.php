<?php
include('connect.php');
$email  = $_POST["email"];
$mdp    = $_POST["password"];
$nom    = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel    = $_POST["tel"];
$dateN  = $_POST["date_naissance"];


$sql = "INSERT INTO user (email, password, nom, prenom, tel, date_naissance) VALUES ('$email', '$mdp', '$nom', '$prenom', '$tel', '$dateN')";
// use exec() because no results are returned
$data = $conn->exec($sql);

if ($data) {
  header('Location:login/utils/profile.php');
}else {
  echo "Erreur veuillez réessayer";
}



$conn = null;

?>
