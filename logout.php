<?php 
session_start();
// session_unset();yeh bhi sahi hai(unset1)
unset($_SESSION['username']);  /*yeh bhi sahi hai (unset 2)*/
header("location:index.php")
?>