<?php
  $db = mysqli_connect('localhost', 'root', '', 'lanit');

  $id = $_POST['id'];

  $query = "DELETE FROM users WHERE id = '$id'";
  mysqli_query($db, $query)
    or die('Error');

    header('Location: ../users.php');
    
  mysqli_close($db);
?>