<?php
 include("./config.php");
$uname = htmlspecialchars($_POST['uname']);
$umessage = htmlspecialchars($_POST['umessage']);

$query = "INSERT INTO chatroo (name, message) VALUES ('$uname','$umessage')";
$run = mysqli_query($con, $query);

?>