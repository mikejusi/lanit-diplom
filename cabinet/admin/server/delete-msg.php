<?php
  $db = mysqli_connect('localhost', 'root', '', 'lanit');

  $id = $_POST['id'];

  $query = "DELETE FROM message WHERE id = '$id'";
  mysqli_query($db, $query)
    or die('Error');

    header('Location: ../message.php');
    
  mysqli_close($db);
?>