<?php
  include('/../../connect.php');

  if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    connectUser($email, $password);
  }

  function userFound($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM user WHERE(email='$email' AND password='$password')");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetch();
    if($data) {
      return $data;
    } else {
      return false;
    }
  }

  function connectUser($email, $password) {
    global $conn;

    if($data = userFound($email, $password)) {
      session_start();
      $_SESSION['user'] = $data;
      $_SESSION['logged'] = true;
      header('Location:../profile.php');
    }
    else {
      header('Location:../index.php');
    }
  }
  function userLogged() {
    return (isset($_SESSION['logged']) && $_SESSION['logged'] == true);
  }

  function logoutUser() {
    session_start();
    session_destroy();
    header('Location:./index.php');
  }

?>
