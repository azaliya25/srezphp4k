<? include('includes/connect.php') ?>
<? include('includes/session.php') ?>
<? include('includes/header.php') ?>

<?
if (!isset($USER)) {
    echo '<script>document.location.href="index.php"</script>';
}
?>

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

    <div class="us container">
        <?
        if (isset($_POST['edit'])) {
            $user_id = isset($USER['id']);
            $name = $_POST['name'];

            $ins_sql = "UPDATE users SET
                        name = '$name'
                        WHERE id=$user_id";
            $conn->query($ins_sql);
        }
        ?>
        <div class='user_info'>
            <div class='user_foto_btn'>
                <a href="?do=exit">выход</a>
                <h2>Добро пожаловать, <?= $USER['name'] ?>!</h2>
            </div>
            <div class='user_form'>
                <form action='' method='POST' name="edit">

                    <label for='name'>имя</label><br>
                    <input type='text' id='name' name='name' value='<?= $USER['name'] ?>'><br>

                    <div class='submit-button-container'>
                        <input type='submit' value='сохранить' name="edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<? include('includes/footer.php') ?>

</html>