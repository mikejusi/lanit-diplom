<?php

$connect = mysqli_connect('localhost', 'root', '', 'lanit');

    if (!$connect) {
        die('Error connect to DataBase');
    }

	$idChange = $_POST['idChange'];
	$status = $_POST['status'];

$sql="UPDATE `reviews` SET `status` = '$status' WHERE `reviews`.`id` = $idChange";

$result=mysqli_query($connect, $sql);

if($result){
    header('Location: ../review-pub.php');
}

?>