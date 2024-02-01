<?php
    session_start();
    require "../config.php";


    if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
        header('location: ../loginform.php');
    }
    if($_SESSION['role'] = 0){
        header("location: dashboard.php");
    }

    $sql = "SELECT * from user";
    $result = $conn->query($sql);

    $error = false;

    if(isset($_GET['error'])){
        $error = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="../users.css">
        <title>Users</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body>
    <div class="navbar">
     <h2>STUDENT REGISTRATION</h2>
     
</div>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white " id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 " href="dashboard.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo($role == 0 ? 'd-block ': "d-none") ?>" href="myprofile.php">My Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo($role == 0 ? 'd-block ' : 'd-none') ?>" href="users.php">Users</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 " href="logout.php">Log Out</a>
                </div>
            </div>
                <div class="container-fluid mx-3">
                    <div class="container mt-3">
                        
                        <a href="new-user.php" class="btn btn-primary">New User</a>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Action</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Birthday</th>
                                    <th scope="col">Civil Status</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">image</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if($result->num_rows > 0){
                                    while($user = $result->fetch_assoc()){
                                       
                            ?> 
                                <tr>
                                    <td><a href="edit-user.php?id=<?php echo($user['id']) ?>">Edit</a> | <a href="delete.php?id=<?php echo($user['id']) ?>">Delete</a></td>
                                    <td><?php echo $user['fullname']?></td>
                                    <td><?php echo $user['age']?></td>
                                    <td><?php echo $user['gender']?></td>
                                    <td><?php echo $user['address']?></td>
                                    <td><?php echo $user['birthday']?></td>
                                    <td><?php echo $user['civilstatus']?></td>
                                    <td><?php echo $user['email']?></td>
                                    <td><?php echo $user['role']?></td>
                                    <td><img src="../profiles/<?php echo $user['image_path']?>"></td>
                                  

                                    <div class="d-flex col-10 align-center">
                 
                            <?php
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
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