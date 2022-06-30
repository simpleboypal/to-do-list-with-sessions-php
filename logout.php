<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);

echo header('location: index.php?msg=logout');
       
?>