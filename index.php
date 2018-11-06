<?php 
session_start();
if (!isset($_SESSION['usrnm'])) {
  header('location: login.php');
}else{
	header('location: dashboard.php');
}
?>