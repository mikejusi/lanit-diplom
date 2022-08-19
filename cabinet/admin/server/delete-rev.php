<?php
  $db = mysqli_connect('localhost', 'root', '', 'lanit');

  $id = $_POST['id'];

  $query = "DELETE FROM reviews WHERE id = '$id'";
  mysqli_query($db, $query)
    or die('Error');

    header('Location: ../review-del.php');
    
  mysqli_close($db);
?>