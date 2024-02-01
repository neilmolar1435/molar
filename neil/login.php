<?php
session_start();
require 'config.php';
if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
    header('location: loginform.php');
  }

if (isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) && empty($password)){
        header('location: loginform.php?status=Email-and-Password-Required');
    }elseif(empty($email)){
        header('location: loginform.php?status=email-required');
    }elseif(empty($password)){
        header('location: loginform.php?status=password-required');
    }else{
        $sql = "SELECT * FROM user WHERE email = '$email' && password = '$password'";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) === 1){
            $row = mysqli_fetch_assoc($query);

            if($row['email'] == $email && $row['password'] == $password){
                $_SESSION['id'] = $row['id'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['age'] = $row['age'];
                $_SESSION['birthday'] = $row['birthday'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['civilstatus'] = $row['civilstatus'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['role'] = $row['role'];
                header('location:admin/dashboard.php');
                exit();
            }
        }else{
            header('location:  loginform.php?status=Incorrect-Email-or-Password');

        }
    }

}

?>