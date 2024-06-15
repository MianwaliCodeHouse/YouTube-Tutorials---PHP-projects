<?php


if (isset($_POST['register']) && $_POST['register'] == 'Create Acount') {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $terms = $_POST['terms'];
  include 'db.php';
  $query = "SELECT COUNT(userName) as un FROM `users` WHERE userName='$username'";
  $result = mysqli_query($db, $query);
  $result = mysqli_fetch_assoc($result);
  if ($result['un'] > 0) {
    echo 'username already exist';
  }
  $query = "SELECT COUNT(email) as e FROM `users` WHERE email='$email'";
  $result = mysqli_query($db, $query);
  $result = mysqli_fetch_assoc($result);
  if ($result['e'] > 0) {
    echo 'email already exist';
  }


  $query = "INSERT INTO `users`(`name`, `userName`, `email`, `password`, `terms`) VALUES ('$name','$username','$email','$password',$terms)";
  $result = mysqli_query($db, $query);
  if ($result) {
    echo 'account created';
    header('location: login.php');
  } else {
    echo 'account not created';
  }
} else {
  echo 'bade';
}

?>

<script>
  // setTimeout(() => {
  //   window.location.href = '/';
  // }, 1500);
</script>