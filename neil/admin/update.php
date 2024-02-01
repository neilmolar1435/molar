<?php

require "../config.php";


if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
  header('location: ../loginform.php');
}

$id = $_GET['id'];
$fullname = $_POST['fullname'];
$age  = $_POST['age'];
$gender  = $_POST['gender'];
$address  = $_POST['address'];
$birthday  = $_POST['birthday'];
$civilstatus  = $_POST['civilstatus'];
$email   = $_POST['email'];

$sql = "UPDATE user SET fullname='$fullname', age='$age', gender='$gender',address='$address', birthday='$birthday', civilstatus='$civilstatus', email='$email' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header("location: users.php");
} 