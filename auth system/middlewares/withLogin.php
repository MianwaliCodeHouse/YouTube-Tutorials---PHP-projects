<?php
session_start();

if(isset($_SESSION['userId']) && isset($_SESSION['userEmail'])){

}else{
  header('location: login.php');
}
?>