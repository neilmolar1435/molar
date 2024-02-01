<?php 
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
    header('location: ../loginform.php');
}

if(isset($_SESSION['role'])){
    $role = $_SESSION['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>


<div class="navbar">
     <h2>STUDENT REGISTRATION</h2>
     
</div>
        
    <div class="side">
       <a class="list-group-item list-group-item-action list-group-item-light p-3 a" href="dashboard.php">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo($role == 1 ? 'd-lock ' : 'd-none') ?> " href="userprofile.php">User Profile</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo($role == 0 ? 'd-lock ' : 'd-none') ?>" href="myprofile.php">My Profile</a>
       <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo($role == 0 ? 'd-lock ' : 'd-none') ?>" href="users.php">Users</a>
       <a class="list-group-item list-group-item-action list-group-item-light p-3 a" href="logout.php">Log Out</a>
    </div>
</body>
</html>