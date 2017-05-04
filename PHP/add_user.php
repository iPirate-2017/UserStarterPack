<?php
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "root";
$db = "StarterPackPHP";

$email  = $_POST["email"];
$mdp    = $_POST["password"];
$nom    = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel    = $_POST["tel"];
$dateN  = $_POST["date_naissance"];



try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO User (email, password, nom, prenom, tel, date_naissance) VALUES ('$email', '$mdp', '$nom', '$prenom', '$tel', '$dateN')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
