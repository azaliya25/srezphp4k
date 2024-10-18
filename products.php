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
    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id='$get_id'";
        $result = $conn->query($sql);
        $row = $result->fetch();
    }
    ?>

    <div class="catal-div">

        <div class="catalog-card">
            <img src="images/catalog/hair-loss.png" alt="Hair loss">
            <p class="catalog-card-name"><?= $row['name'] ?></p>
            <p class="catalog-card-description"><?= $row['description'] ?></p>
        </div>
        <? if (isset($USER)) { ?>
            <div class="red-del">
                <a href='redact.php?id=<?= $get_id ?>'>редактировать</a>
                <a href='del.php?id=<?= $get_id ?>'>удалить</a>
            </div>
        <? } ?>
        
    </div>

    <? include('includes/footer.php') ?>
</body>

</html>