<?php
session_start();
require "../config.php";

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
    header('location: ../loginform.php');
  }
$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id='$id'";
$result = $conn->query($sql);

$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="edituser.css">
        <title>Edit User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white">Update</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
      <div class="container-fluid mt-5 mx-3">
           <div class="card mx-3">
                <div class="card-header">
                     Update Student
                 </div>
            <form action="update.php?id=<?php echo($user['id']) ?>" method="post">
                <div class="card-body">
                  <div class="row">
                        <div class="col-8">
                            <label>Full Name</label>
                            <input class="form-control" name="fullname" type="text" placeholder="fullname" aria-label="default input example" value="<?php echo($user['fullname']) ?>">
                      </div>
                      <div class="col-4">
                      <label>Age</label>
                           <input class="form-control" name="age" type="text" placeholder="Age" aria-label="default input example" value="<?php echo($user['age']) ?>">
                       </div>
                  </div>
                  <div class="row mt-3">
                       <div class="col-6">
                       <label>Gender</label>
                          <input class="form-control" name="gender" type="text" placeholder="Gender" aria-label="default input example" value="<?php echo($user['gender']) ?>">
                      </div>
                       <div class="col-6">
                       <label>Address</label>
                          <input class="form-control" name="address" type="text" placeholder="Address" aria-label="default input example" value="<?php echo($user['address']) ?>">
                       </div>
                   </div>
                    <div class="row mt-3">
                       <div class="col-6">
                       <label>Birthdate</label>
                           <input class="form-control" name="birthday" type="text" placeholder="Birthday" aria-label="default input example" value="<?php echo($user['birthday']) ?>">
                       </div>
                        <div class="col-6">
                        <label>Civil Status</label>
                          <input class="form-control" name="civilstatus" type="text" placeholder="Civil Status" aria-label="default input example" value="<?php echo($user['civilstatus']) ?>">
                       </div>
                    </div>
                   <div class="row mt-3">
                        <div class="col-6">
                        <label>Email</label>
                            <input class="form-control" name="email" type="text" placeholder="Email" aria-label="default input example" value="<?php echo($user['email']) ?>">
                         </div>
                    </div>
                                    
                       <div class="card-footer">
                         <input type="submit" value="Update" class="btn btn-primary btn-sm">
                         <a href="users.php" class="btn btn-secondary btn-sm">Back</a>
                     </div>
                </form>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>