<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "StarterPackPHP";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM User WHERE email = 'test@test.com'");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $user = $stmt->fetch();
  print_r($user);
}
catch(PDOException $e)
{
  echo "Error: " . $e->getMessage();
}

$conn = null;

?>
