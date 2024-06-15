<?php
session_start();

if (isset($_SESSION['userId']) && isset($_SESSION['userEmail'])) {

  header('location: index.php');
} else {
}
