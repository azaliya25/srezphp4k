<? include('includes/connect.php') ?>
<? include('includes/session.php') ?>
<? include('includes/header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANUAL</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon/favicon.svg" type="image/x-icon">

</head>

<body>
    <?
    $email = '';
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        $log_us = $result->fetch();

        if (empty($email)) {
            $error_email = '<p class="error">введите почту</p>';
        } elseif ($log_us == false) {
            $error_email = '<p class="error">вы не зарегестрированы</p>';
        } elseif (empty($password)) {
            $error_password = '<p class="error">введите пароль</p>';
        } elseif (!password_verify($password, $log_us['password'])) {
            $error_password = '<p class="error">неверный пароль</p>';
        }

        if (empty($error_email) && empty($error_password)) {
            $_SESSION['user_id'] = $log_us['id'];
            echo '<script>document.location.href="user_profile.php"</script>';
        }
    }
    ?>
    <div class="login container">
        <h2>авторизация</h2>
        <form action="" method="POST" name="login">
            <div class="login_up_for">
                <label for="email">email</label><br>
                <input type="email" id="email" name="email" value="<?= $email ?>">
                <?
                if (isset($error_email)) {
                    echo $error_email;
                }
                ?>
            </div>
            <div class="login_up_for">
                <label for="password">пароль</label><br>
                <input type="password" id="password" name="password">
                <?
                if (isset($error_password)) {
                    echo $error_password;
                }
                ?>
                <div class="forgot-password">
                    <a href="/forgot-password">забыли пароль?</a>
                </div>
            </div>

            <input type="submit" value="войти" name="login">
        </form>
        <div class="login_up_sign">
            <p>у вас нет аккаунта? </p><a href="sign_up.php"> зарегистрироваться</a>
        </div>
    </div>
</body>

<? include('includes/footer.php') ?>
</html>