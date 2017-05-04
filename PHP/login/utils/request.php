<?php
<<<<<<< HEAD
  require('/../../connect.php');
=======
  include('../../connect.php');
>>>>>>> refs/remotes/origin/master

  if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    connectUser($email, $password);
  }

  function userFound($email, $password) {
    global $conn;
<<<<<<< HEAD
    $response = $conn->query('SELECT * FROM user WHERE(email=\''. $email.'\' AND password=\''.$password.'\')');
=======
    $response = $conn->query("SELECT * FROM user WHERE(email='$email' AND password='$password')");
>>>>>>> refs/remotes/origin/master
    $data = $response->fetch();
    if($data) {
      return true;
    } else {
      return false;
    }
  }

  function connectUser($email, $password) {
    global $conn;
<<<<<<< HEAD

=======
>>>>>>> refs/remotes/origin/master
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
