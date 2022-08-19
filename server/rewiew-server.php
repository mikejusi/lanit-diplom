<?php
include '../db.php';

$name=$_SESSION['username'];
$text=$_POST['text'];

$sql="INSERT INTO reviews(username, text) VALUES ('$name','$text')";

$result=mysqli_query($pdo, $sql);

if($result){
    header('Location: ../index.php');
}

?>