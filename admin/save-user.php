<?php

require "../config.php";
if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
    header('location: ../loginform.php');
  }

$fullname   = $_POST['fullname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$civilstatus = $_POST['civilstatus'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$role       = $_POST['role'];

$profile = $_FILES['profile']['name'];
$temp = $_FILES['profile']['tmp'];
$uploads = '../profiles/' . $profile;



$sql = "INSERT INTO user (fullname, age,image_path, gender, address, birthday, civilstatus, email, password, role ) VALUES ('$fullname','$age','$profile', '$gender','$address','$birthday','$civilstatus', '$email', '$password','$role')";
$query = mysqli_query($conn, $sql);

if (move_uploaded_file($temp, $uploads)) {
    header("location: users.phpid=$id");
} else {
    header("location: new-user.php?error");
}

