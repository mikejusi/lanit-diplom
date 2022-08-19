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
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form mt-5 text-center text-white'>
                  <h3>Вы успешно создали  аккаунт.</h3><br/>
                  <p class='link'>Перейдите к <a href='login.php'>Авторизации</a></p>
                  </div>";
        } else {
            echo "<div class='form mt-5 text-center text-white'>
                  <h3>При создании аккаунта произошли ошибки.</h3><br/>
                  <p class='link'>Вернитесь на страницу <a href='registration.php'>Регистрации</a>.</p>
                  </div>";
        }
    } else {
?>
    <form class="form mx-auto rounded my-5 p-4" action="" method="post">
        <h1 class="login-title text-center pt-4 pb-3">Регистрация</h1>
        <div class="d-grid w-75 mx-auto">
            <input class="form-control mb-3" type="text" class="login-input" name="username" placeholder="Имя пользователя" required />
            <input class="form-control mb-3" type="email" class="login-input" name="email" placeholder="Email">
            <input class="form-control mb-3" type="password" class="login-input" name="password" placeholder="Пароль">
            <input class="btn btn-custom mb-3" type="submit" name="submit" value="Создать аккаунт" class="login-button">
            <p class="link">Уже зарегестрированы? <a class="href" href="login.php">Войти</a></p>
        </div>
    </form>
<?php
    }
?>
</body>
</html>