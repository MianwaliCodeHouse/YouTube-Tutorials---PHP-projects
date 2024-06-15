

<?php

session_start();
include 'db.php';
if ($_POST['login']) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = 'SELECT * FROM users where email="' . $email . '" AND password="' . $password . '";';
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) > 0) {
    $row=mysqli_fetch_assoc($result);
    $_SESSION['userId']=$row['id'];
    $_SESSION['userName']=$row['userName'];
    header('location: index.php');
  } else {
    echo 'not logined';
    header('location: login.php');
  }
}


?>