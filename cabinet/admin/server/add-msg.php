<?php
$connect = mysqli_connect('localhost', 'root', '', 'lanit');

if (!$connect) {
    die('Error connect to DataBase');
}

$name=$_POST['name'];
$message=$_POST['message'];
$userclass='self';

$sql="INSERT INTO message(name, message, userclass) VALUES ('$name','$message','$userclass')";

$result=mysqli_query($connect, $sql);

if($result){
    header('Location: ../message-add.php');
}

?>