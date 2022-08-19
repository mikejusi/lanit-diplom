<?php

$connect = mysqli_connect('localhost', 'root', '', 'lanit');

    if (!$connect) {
        die('Error connect to DataBase');
    }

	$idChange = $_POST['idChange'];
	$name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_POST['img'];


$sql="UPDATE `product` SET `name` = '$name', `price` = '$price', `img` = '$img' WHERE `product`.`id` = $idChange";

$result=mysqli_query($connect, $sql);

if($result){
    header('Location: ../redact-product.php');
}

?>