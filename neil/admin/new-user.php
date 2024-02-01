<?php 
session_start();
require '../config.php';

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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="../newuser.css">
        <title>Users</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
    </head>
    <body>
    <div class="navbar">
     <h2>STUDENT REGISTRATION</h2>
</div>
    
                <div class="container-fluid mt-5 mx-3">
                    <div class="card mx-3">
                        <div class="card-header">
                            New User Form
                        </div>
                         <form class="mt-5" action="save-user.php"  method="post"  enctype="multipart/form-data">
                                
                            <div class="card-body">
                                  <div class="row mt-3">
                                        <div class="col-6">
                                            <input class="form-control" name="fullname" type="text" placeholder="Full Name" aria-label="default input example"require>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" name="age" type="text" placeholder="Age" aria-label="default input example"require>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <input class="form-control" name="gender" type="text" placeholder="Gender" aria-label="default input example"require>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" name="address" type="text" placeholder="Address" aria-label="default input example"require>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <input class="form-control" name="birthday" type="text" placeholder="Birthday" aria-label="default input example"require>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" name="civilstatus" type="text" placeholder="Civil Status" aria-label="default input example"require>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-8">
                                            <input class="form-control" name="email" type="email" placeholder="Email address" aria-label="default input example">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" name="password" type="password" placeholder="Password" aria-label="default input example">
                                        </div>
                                    </div>
                                     

                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" name="role" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Admin">
                                        <label class="form-check-label" for="inlineRadio1"><span class="badge bg-danger">Admin User</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="role" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="User">
                                        <label class="form-check-label" for="inlineRadio2"><span class="badge bg-warning">Regular user</span></label>
                                    </div>

                                 
                               </div>

                               <div class="form-check form-check-inline mt-3">
                                <input type="file" name="profile">
                                </div>

                            <div class="card-footer">
                                <input type="submit" value="Save User" class="btn btn-primary btn-sm">
                                <a href="users.php" class="btn btn-secondary btn-sm">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>