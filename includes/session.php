<? session_start();

include('includes/connect.php');

if (isset($_SESSION['user_id'])) {
    $USER_ID = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id='$USER_ID'";
    $result = $conn->query($sql);
    $USER = $result->fetch();
}

if (isset($_GET['do'])) {
    if ($_GET['do'] == 'exit') {
        session_unset();
        echo '<script>document.location.href="index.php"</script>';
    }
}
?>