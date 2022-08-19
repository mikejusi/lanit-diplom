<?php
$connect = mysqli_connect('localhost', 'root', '', 'lanit');

if (!$connect) {
    die('Error connect to DataBase');
}

$name=$_POST['name'];
$price=$_POST['price'];
$img=$_POST['img'];
$category=$_POST['category'];


$sql="INSERT INTO product(name, img, price, category) VALUES ('$name','$img','$price','$category')";

$result=mysqli_query($connect, $sql);

if($result){
    header('Location: ../index.php');
}

?>