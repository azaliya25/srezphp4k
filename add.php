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
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];

        $sql = "INSERT INTO products (name,description)
                            VALUES ('$name','$description')";
        $conn->query($sql);
        echo '<script>document.location.href="index.php"</script>';
    }
    ?>
    <div class="redact container">
        <h2>ДОБАВЛЕНИЕ</h2>
        <div class="add_redact_form">

            <form action="" method="POST" enctype="multipart/form-data" name="add">
                <div class="add_redact_form_block">
                    <label for="name">наименование</label><br>
                    <input type="text" id="name" name="name"><br>

                    <label for="description">описание</label><br>
                    <textarea class="add_redact_block_tovar" id="description" name="description"></textarea><br>
                </div>

                <input type="submit" value="добавить" name="add">
            </form>

        </div>
    </div>
</body>

<? include('includes/footer.php') ?>

</html>