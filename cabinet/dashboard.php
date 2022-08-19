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

    $new =  zp(); ?>

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
            <div class="profile-image text-center pb-2">
                <img class="w-25" src="https://cdn.hackaday.io/images/resize/600x600/7578051501714835360.png">
            </div>
            <hr>
            <div class="profile-info">
                <div class="d-flex justify-content-center gap__profile">
                    <div class="w-profile-info text-center">
                        <p>Добро пожаловать,
                            <br>
                            <?php echo $_SESSION['username']; ?>!
                        </p>
                    </div>

                    <div class="w-profile-info text-center">
                        <p>Ваш Email:
                            <br>
                            <?php foreach ($new as $st): ?>
                                <?= $st['email'] ?>
                            <?php endforeach; ?>
                        </p>
                    </div>

                    <div class="w-profile-info text-center">
                        <p>Дата создания:
                            <br>                                 
                            <?php foreach ($new as $datetime): ?>
                                <?= $datetime['create_datetime'] ?>
                            <?php endforeach; ?>
                        </p>
                    </div>
                   
                </div>
                <div class="text-center">
                    <p class="btn btn-primary"><a class="text-white text-decoration-none" href="history-profile.php">История отзывов</a></p>
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