<?php
include 'header.php';
?>



<div class="row bg-light vh-100 align-items-center">
  <div class="col-9 col-sm-7 col-md-6 col-lg-3 bg-white rounded shadow p-5 mx-auto">
    <div class="h2 text-center mb-4">Please register</div>
    <form action="registered.php" method="post">
      <input type="text" name="username" class="form-control mb-3" placeholder="username">
      <input type="email" name="email" class="form-control mb-3" placeholder="email">
      <input type="password" name="password" class="form-control mb-3" placeholder="password">
      <input type="submit" name="register" value="Register" class="btn  btn-primary w-100">
    </form>
  </div>
</div>




<?php
include 'footer.php';
?>