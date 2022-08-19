<?php
include '../db.php';
session_start();


$name=$_SESSION['username'];
$message=$_POST['message'];

$sql="INSERT INTO message(name, message) VALUES ('$name','$message')";

$result=mysqli_query($pdo, $sql);

if($result){
    header('Location: ../index.php');
}

?>