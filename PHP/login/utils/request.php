<?php
  include('../../connect.php');

  if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    connectUser($email, $password);
  }

  function userFound($email, $password) {
    global $conn;
    $response = $conn->query("SELECT * FROM user WHERE(email='$email' AND password='$password')");
    $data = $response->fetch();
    if($data) {
      return true;
    } else {
      return false;
    }
  }

  function connectUser($email, $password) {
    global $conn;
    if(userFound($email, $password)) {
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
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
