<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ланит</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>В имени пользователя или пароле былпа допущена ошибка.</h3><br/>
                  <p class='link'>Вернуться на страницу <a href='login.php'>Авторизации</a>.</p>
                  </div>";
        }
    } else {
?>
    <form class="form mx-auto rounded my-5 p-4" method="post" name="login">
        <h1 class="login-title text-center pt-4 pb-3">Авторизация</h1>
        <div class="d-grid w-75 mx-auto">
            <input class="form-control mb-3" type="text" class="login-input" name="username" placeholder="Имя пользователя" autofocus="true"/>
            <input class="form-control mb-3" type="password" class="login-input" name="password" placeholder="Пароль"/>
            <input class="btn btn-custom mb-3" type="submit" value="Войти" name="submit" class="login-button"/>
            <p class="link">Нету аккаунта? <a href="registration.php">Создать</a></p>
            <p><a href="../index.php">Главная</a></p>
        </div>
  </form>

<?php
    }
?>
</body>
</html>