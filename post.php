<?php
session_start();
$db=mysqli_connect('localhost','root','','signup');

if (!$db) {
  die("Ooopps There was reaching the database");
}

if (isset($_POST['signup'])) {
  

$firstname=mysql_real_escape_string($_POST['names']);
$email=mysql_real_escape_string($_POST['email']);
$password1=mysql_real_escape_string($_POST['psw']);
$password2=mysql_real_escape_string($_POST['psw-repeat']);
$remember=mysql_real_escape_string($_POST['remember']);
if ($password1 != $password2) {
  echo "passwords dont match";
}
$password=$password1;
$sql="INSERT INTO persons(names,email,password) 
values ('$firstname','$email','$password')";

 mysqli_query($db,$sql);
  header("location:online.php");
  echo "record added";
  $_SESSION['success']="welcome";

}

?>