<?php
include("auth_session.php");

if ($_SESSION['username'] == "admin"){
  header('Location: admin/index.php');
  }
?>

<?php
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="lanit";

    $pdo=mysqli_connect($host, $user ,$pass, $dbname);

 
    function zp(){
    global $pdo;
    $idaboba = $_SESSION['username'];
    $new = $pdo->query("SELECT * FROM  users  where username = '$idaboba'");
    return $new;
                                        
    }

    $new =  zp(); 

    function rev(){
        global $pdo;
        $idaboba = $_SESSION['username'];
        $rv = $pdo->query("SELECT * FROM  reviews  where username = '$idaboba'");
        return $rv;
                                            
        }
    
        $rv =  rev(); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ваш профиль</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="w-50 mx-auto bg-light rounded my-5">
        <div class="form p-4">
            <div class="profile-info">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Профиль</a></li>
                        <li class="breadcrumb-item active" aria-current="page">История отзывов</li>
                    </ol>
                </nav>
                <div class="d-gird">
                    <div class="border p-2 rounded mb-3">
                        <?php foreach ($rv as $revv): ?>
                            <div class="d-flex">
                                <p class="me-1">Текст отзыва: </p>
                                <?= $revv['text'] ?>
                            </div>

                            <div class="d-flex">
                                <p class="me-1">Статус отзыва: </p>
                                <?= $revv['status'] ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="text-center">
                    <p class="btn btn-danger"><a class="text-white text-decoration-none" href="logout.php">Выйти из аккаунта</a></p>
                    <p class="btn btn-primary"><a class="text-white text-decoration-none" href="../index.php">Главная</a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>