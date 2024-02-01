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
    <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white col-2" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 " href="dashboard.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo($role == 0 ? 'd-lock ' : 'd-none') ?> " href="myprofile.php">My Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo($role == 0 ? 'd-lock' : 'd-none') ?> " href="users.php">Users</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 " href="logout.php">Log Out</a>
                  </div>
            </div>
            
            <div class="container-fluid">
              <div class="form1">
                <h2>
                  <center>MY PROFILE</center>
                </h2>
              </div>
                    <div class="container mt-3">

                    <div class="col-6">
                      <label>ID</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['id'];?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6">
                      <label>Full Name</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['fullname'];?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6">
                    <label>Age</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['age'];?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6">
                    <label>Birthday</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['birthday'];?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6">
                    <label>Address</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['address'];?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6">
                    <label>Gender</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['gender'];?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6">
                    <label> Civil Status</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['civilstatus'];?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6">
                    <label>Email</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['email'];?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6">
                    <label>Password</label>
                      <input class="form-control" type="text" value="<?php echo $_SESSION['password'];?>" aria-label="readonly input example" readonly>
                    </div>
                    
            </div>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>