<?php

require "../config.php";

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    header("location: users.php");
} 
  ?>
