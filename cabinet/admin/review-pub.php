<?php
require_once 'request.php';

include("../auth_session.php");

if ($_SESSION['username'] != "admin"){
  header('Location: ../dashboard.php');
  }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>admin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="wrapper">
  <div class="left-side">
    <a href="index.php"> 
        <i class="fa-solid fa-cart-plus"></i>
    </a>

    <a href="users.php"> 
        <i class="fa-solid fa-users"></i>
    </a>

    <a  href="message.php">        
        <i class="fa-solid fa-envelope-open-text"></i>
    </a>

    <a href="rewiew.php">    
        <i class="fa-solid fa-gear active"></i>
    </a>
   
    <a class="mt-auto" href="../logout.php"> 
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
    </a>

  </div>
  <div class="main-container">
    <div class="header">

    <a href="../../index.php"><div class="logo">ЛАНИТ</div></a>

    <a class="header-link" href="rewiew.php">
      <i class="fa-solid fa-list-ul"></i>
      Список отзывов
    </a>

    <a class="header-link" href="review-del.php">
        <i class="fa-solid fa-trash-can"></i>
        Удаление 
    </a>

    <a class="header-link active" href="review-pub.php">
      <i class="fa-solid fa-eye"></i>
        Публикация 
    </a>

    <div class="user-info">

    <div class="user-name">Admin</div>
      <i class="fa-solid fa-circle-user profile"></i>
    </div>
  </div>
  
  <div class="main">
    <form method="post" action="server/edit-rev-status.php">
      <h1>Изменить статус отзыва</h1>
      <input class="form-control w-15 mb-2" type="text" name="idChange" placeholder = "ID отзыва">
      <select class="form-select mb-2 w-15" name="status" aria-label="Default select example">
        <option selected value="проверено">Проверено</option>
        <option value="В стадии проверки">В стадии проверки</option>
      </select>
      <input class="btn button mt-3" type="submit" name="delete" value="Изменить">
    </form>



  </div>
 </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
