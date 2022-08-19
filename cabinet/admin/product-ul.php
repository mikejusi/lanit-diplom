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

  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
  <link rel='stylesheet' href='//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
 <div class="left-side">
    <a href="index.php"> 
        <i class="fa-solid fa-cart-plus active"></i>
    </a>

    <a href="users.php"> 
        <i class="fa-solid fa-users"></i>
    </a>

    <a  href="message.php">        
        <i class="fa-solid fa-envelope-open-text"></i>
    </a>

    <a href="rewiew.php">    
        <i class="fa-solid fa-gear"></i>
    </a>
   
    <a class="mt-auto" href="../logout.php"> 
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
    </a>

 </div>
 <div class="main-container">
  <div class="header">

  <a href="../../index.php"><div class="logo">ЛАНИТ</div></a>

  <a class="header-link" href="index.php">
    <i class="fa-solid fa-cart-plus"></i>
    Добавить
   </a>
   <a class="header-link" href="redact-product.php">
   <i class="fa-solid fa-pen-to-square"></i>
    Отредактировать
   </a>
   <a class="header-link" href="delete-product.php">
    <i class="fa-solid fa-trash-can"></i>
     Удаление
   </a>
   <a class="header-link active" href="product-ul.php">
   <i class="fa-solid fa-list-ul"></i>
    Список товаров
   </a>
   <div class="user-info">

    <div class="user-name">Admin</div>
    <i class="fa-solid fa-circle-user profile"></i>
   </div>
  </div>
  
  <div class="main">
      <h1>Список товара</h1>

      <table class="table text-white table__custom" id="table" 
			 data-toggle="table"
			 data-search="true"
			 data-filter-control="true" 
			 data-show-export="true"
			 data-click-to-select="true"
			 data-toolbar="#toolbar">
       
        <thead>
            <tr>
            <th scope="col" data-field="id" data-filter-control="input" data-sortable="true">Id</th>
            <th scope="col" data-field="email" data-filter-control="select" data-sortable="true">Название</th>
            <th scope="col" data-field="name" data-filter-control="input" data-sortable="true">Цена</th>
            <th scope="col" data-field="img" data-filter-control="input" data-sortable="true">Картинка</th>
            <th scope="col" data-field="date" data-filter-control="input" data-sortable="true">Категория</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pr as $product) : ?>
                <tr>
                <td><?= $product['id'];?></td>
                <td><?= $product['name'];?></td>
                <td><?= $product['price'];?></td>
                <td><?= $product['img'];?></td>
                <td><?= $product['category'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

  </div>
     
    <!-- </div>
   </div> -->
  </div>
 </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="./script.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js'></script>
  <script src='//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script>
</body>
</html>
