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
    if (isset($_POST['reg'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        $reg_us = $result->fetch();

        if (empty($name)) {
            $error_name = '<p class="error">введите имя</p>';
        }

        if (empty($email)) {
            $error_email = '<p class="error">введите почту</p>';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = '<p class="error">неверный формат почты</p>';
        } elseif ($reg_us != false) {
            $error_email = '<p class="error">почта уже существует</p>';
        }

        if (empty($password)) {
            $error_password = '<p class="error">введите пароль</p>';
        } elseif (mb_strlen($password) < 6) {
            $error_password = '<p class="error">введите не менее 6 символов</p>';
        } elseif ($password != $password2) {
            $error_password2 = '<p class="error">пароли не совпадают</p>';
        }

        if (empty($error_name) && empty($error_email) && empty($error_password) && empty($error_password2)) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name,email,password,role)
            VALUES ('$name','$email','$password_hash', 1)";
            $conn->query($sql);
            echo '<script>document.location.href="login_up.php"</script>';
        }
    }
    ?>
    <div class="sign container">
        <h2>Регистрация</h2>
        <form action="" method="POST" name="reg">
            <label for="name">имя</label>
            <input type="text" id="name" name="name" value="<?= $name ?>">
            <?
            if (isset($error_name)) {
                echo $error_name;
            }
            ?>
            <label for="email">email</label>
            <input type="text" id="email" name="email" value="<?= $email ?>">
            <?
            if (isset($error_email)) {
                echo $error_email;
            }
            ?>
            <label for="password">пароль</label>
            <input type="password" id="password" name="password">
            <?
            if (isset($error_password)) {
                echo $error_password;
            }
            ?>
            <label for="password2">подтверждение пароля</label>
            <input type="password" id="password" name="password2">
            <?
            if (isset($error_password2)) {
                echo $error_password2;
            }
            ?>
            <input type="submit" value="зарегистрироваться" name="reg">
        </form>
        <div class="sign_up_login">
            <p>уже есть аккаунт? </p><a href="login_up.php">войти</a>
        </div>
    </div>
</body>

<? include('includes/footer.php') ?>

</html>