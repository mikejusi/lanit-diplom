<?php
  $db = mysqli_connect('localhost', 'root', '', 'lanit');

  $id = $_POST['id'];

  $query = "DELETE FROM product WHERE id = '$id'";
  mysqli_query($db, $query)
    or die('Error');

    header('Location: ../delete-product.php');
    
  mysqli_close($db);
?>