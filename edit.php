<?php
    // Only allows access to page if the user has been through the authentication
    session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header("Location: ./login_form.php?error_msg=Unauthenticated");
    }
    // connection settings
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    //update the order status when submit, return to manager.php when done.
    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        $edit = mysqli_query($conn, "UPDATE orderdb SET order_status =" . $_POST['edit_status'] ." WHERE order_id =" . $_POST['id']);
        header('Location: manager.php');
    }
    //receiving the id in the url when clicked "edit" in the manager.php page
    if (isset($_GET['order_id'])) {
        $order = $_GET['order_id'];
    } 
    //query the order status so that the form below can check the default value when open the page.
    $query = mysqli_query($conn, "SELECT order_status FROM orderdb WHERE order_id = $order");
    $result = mysqli_fetch_assoc($query);
    $order_status = $result['order_status'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Le Xuan Nhat, Dang Nam Khanh, Duong Quang Thanh">
    <meta name="keyword" content="edit">
    <meta name="description" content="Assignment 1">
    <link rel="stylesheet" href="styles/style.css">
    <title>Edit</title>
</head>
<body>
	<?php include 'includes/header.inc' ?>
    <!-- Edit form  -->
    <div class="editpage">
        <form action="edit.php" method="post" class="edit_form" novalidate>
            <input type="hidden" name="id" value="<?= $order?>">
            <label for="edit_status">Status</label>
            <select name="edit_status" id="edit_status">
                <option value="1" <?= $order_status == 'PENDING' ? 'selected' : '' ?>>PENDING</option>
                <option value="2" <?= $order_status == 'FULLFILLED' ? 'selected' : '' ?>>FULLFILLED</option>
                <option value="3" <?= $order_status == 'PAID' ? 'selected' : '' ?>>PAID</option>
                <option value="4" <?= $order_status == 'ARCHIVED' ? 'selected' : '' ?>>ARCHIVED</option>
            </select>
            <div>
                <p><a href="manager.php">Cancel</a></p>
                <input type="submit" value="Save">
                
            </div>
        </form>
    </div>
	<?php include 'includes/footer.inc' ?>

</body>
</html>