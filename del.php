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

<body class="body_admin">
    <?
    $get_id = $_GET['id'];

    if (isset($_GET['del'])) {
        $get_id = $_GET['id'];
        $del_sql = "DELETE FROM products WHERE id='$get_id'";
        $result = $conn->query($del_sql);
        $row = $result->fetch();

        echo '<script>document.location.href="index.php"</script>';
    }
    ?>
    <div class="del container">
        <h2>УДАЛЕНИЕ ТОВАРА</h2>
        <h3>ВЫ ДЕЙСТВИТЕЛЬНО ХОТИТЕ УДАЛИТЬ ТОВАР?</h3>
        <div class="action_del">
            <a href="products.php?id=<?= $get_id ?>" class="del_a_cancel">отменить</a>
            <a href="del.php?id=<?= $get_id . '&del' ?>" class="del_a_delete">удалить</a>
        </div>
    </div>
</body>

<? include('includes/footer.php') ?>

</html>