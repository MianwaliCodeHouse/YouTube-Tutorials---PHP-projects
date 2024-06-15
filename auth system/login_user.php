<?php

if (isset($_POST['login']) && $_POST['login'] == "Login") {
  $userName = $_POST['username'];
  $password = $_POST['password'];
  $query = "select * from users where userName='$userName' && password='$password';";
  include "db.php";
  $result = mysqli_query($db, $query);
  if ($result) {

    $result = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['userId'] = $result['id'];
    $_SESSION['userEmail'] = $result['email'];
    header('location: index.php');
  } else {
    echo 'not login';
  }
}
