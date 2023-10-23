<?php
    session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header("Location: ./login.php");
    }

    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if ($conn) {
        $new_table = file_get_contents("./functions/orderdb.sql");
        if (mysqli_multi_query($conn, $new_table)) {
            do {
                // advance to the next result set
                if ($result = mysqli_store_result($conn)) {
                    mysqli_free_result($result);
                }
            } while (mysqli_next_result($conn));
        }
    }

    $query = "SELECT * FROM orderdb JOIN pcdb JOIN mousedb JOIN kbdb ON orderdb.pc = pcdb.pc AND orderdb.mouse = mousedb.mouse AND orderdb.kb = kbdb.kb ";

    if (isset($_POST['cname']) && $_POST['cname'] != ""){
        $cname = $_POST['cname'];
        $query .= "WHERE firstname like '$cname%'" ;
    }

    if (isset($_POST['searchpc']) && $_POST['searchpc'] != ""){
        $searchpc = $_POST['searchpc'];
        if (isset($_POST['cname']) && $_POST['cname'] != ""){
            $query .= " AND pcdb.pc = $searchpc";
        } else {
            $query .= "WHERE pcdb.pc = $searchpc";
        }
    }

    if (isset($_POST['c_status']) && $_POST['c_status'] != ""){
        $c_status = $_POST['c_status'];
        if ((isset($_POST['cname']) && $_POST['cname'] != "") || (isset($_POST['searchpc']) && $_POST['searchpc'] != "")) {
            $query .= " AND order_status = $c_status";
        } else {
            $query .= "WHERE order_status = $c_status";
        }
    }

    if (isset($_POST['sort_value'])) {
        $sort_value = $_POST['sort_value'];
        $query .= " ORDER BY $sort_value ";
    }

    if (isset($_POST['sort_order']) && $_POST['sort_order'] != "") {
        $sort_order = $_POST['sort_order'];
        $query .= "$sort_order ";
    }

    $result = mysqli_query($conn, $query);

    if (isset($_GET['order_id'])) {
        $del_id = $_GET['order_id'];
        $delete = mysqli_query($conn, "DELETE FROM orderdb WHERE order_id = $del_id");
        header("Location: ./manager.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Le Xuan Nhat, Dang Nam Khanh, Duong Quang Thanh">
    <meta name="keyword" content="manager">
    <meta name="description" content="Assignment 2">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css">
    <title>Manager</title>
</head>

<body id="manage">
    <?php
    include 'includes/header.inc';

    ?>
    <main>
        <div id="intromn">
            <h1>Manager Page</h1>
        </div>

        <div id="main_form">
            <form action="manager.php" method="post" novalidate>
                <label for="cname">Customer Name:</label>
                <input type="text" id="cname" name="cname" value="<?php if (isset($cname)) echo htmlspecialchars($cname) ?>">

                <label for="searchpc">PC:</label>
                <select id="searchpc" name="searchpc">
                    <option value="">--- Please select PC ---</option>
                    <option value="1" <?php if (isset($searchpc) && $searchpc == "1") echo 'selected' ?>>Entry Point</option>
                    <option value="2" <?php if (isset($searchpc) && $searchpc == "2") echo 'selected' ?>>The Upgrade</option>
                    <option value="3" <?php if (isset($searchpc) && $searchpc == "3") echo 'selected' ?>>Stretching Budget</option>
                    <option value="4" <?php if (isset($searchpc) && $searchpc == "4") echo 'selected' ?>>Clean and Minimal</option>
                    <option value="5" <?php if (isset($searchpc) && $searchpc == "5") echo 'selected' ?>>Compact Package</option>
                    <option value="6" <?php if (isset($searchpc) && $searchpc == "6") echo 'selected' ?>>Big Leap</option>
                    <option value="7" <?php if (isset($searchpc) && $searchpc == "7") echo 'selected' ?>>Serious Business</option>
                    <option value="8" <?php if (isset($searchpc) && $searchpc == "8") echo 'selected' ?>>Premium PC</option>
                    <option value="9" <?php if (isset($searchpc) && $searchpc == "9") echo 'selected' ?>>The Enthusiast</option>
                </select>
                
                <label for="c_status">Status selection:</label>
                <select name="c_status" id="c_status">
                    <option value="">--- Please select status ---</option>
                    <option value="1" <?php if (isset($c_status) && $c_status == "1") echo 'selected' ?>>PENDING</option>
                    <option value="2" <?php if (isset($c_status) && $c_status == "2") echo 'selected' ?>>FULLFILLED</option>
                    <option value="3" <?php if (isset($c_status) && $c_status == "3") echo 'selected' ?>>PAID</option>
                    <option value="4" <?php if (isset($c_status) && $c_status == "4") echo 'selected' ?>>ARCHIVED</option>
                </select>

                <label for="sort_value">Sort by:</label>
                <select id="sort_value" name="sort_value">
                    <option value="order_id" <?php if (isset($sort_value) && $sort_value == "order_id") echo 'selected' ?>>ID</option>
                    <option value="order_time" <?php if (isset($sort_value) && $sort_value == "order_time") echo 'selected' ?>>Order Date</option>
                    <option value="firstname" <?php if (isset($sort_value) && $sort_value == "firstname") echo 'selected' ?>>Name</option>
                    <option value="pcdb.pcname" <?php if (isset($sort_value) && $sort_value == "pcdb.pcname") echo 'selected' ?>>PC</option>
                    <option value="mousedb.mousename" <?php if (isset($sort_value) && $sort_value == "mousedb.mousename") echo 'selected' ?>>Mouse</option>
                    <option value="kbdb.kbname" <?php if (isset($sort_value) && $sort_value == "kbdb.kbname") echo 'selected' ?>>Keyboard</option>
                    <option value="order_cost" <?php if (isset($sort_value) && $sort_value == "order_cost") echo 'selected' ?>>Total</option>
                    <option value="order_status" <?php if (isset($sort_value) && $sort_value == "order_status") echo 'selected' ?>>Status</option>
                </select>

                <label for="sort_order">Sort order:</label>
                <select id="sort_order" name="sort_order">
                    <option value="ASC" <?php if (isset($sort_order) && $sort_order == "ASC") echo 'selected' ?>>Ascending</option>
                    <option value="DESC" <?php if (isset($sort_order) && $sort_order == "DESC") echo 'selected' ?>>Descending</option>
                </select>

                <input type="submit" value="Confirm">
            </form>

        </div>

        <?php
        if (!$conn) {
            echo "<p>Database connection failure</p>";
        } else {
            if (!$result) {
                echo "<p>Some thing is wrong with ", $query, "</p>";
            } else {
                echo "<table>";
                echo "<tr>\n "
                    . "<th scope=\"col\">ID</th>"
                    . "<th scope=\"col\">Order Date</th>"
                    . "<th scope=\"col\">Name</th>"
                    . "<th scope=\"col\">PC</th>"
                    . "<th scope=\"col\">Mouse</th>"
                    . "<th scope=\"col\">Keyboard</th>"
                    . "<th scope=\"col\">Total</th>"
                    . "<th scope=\"col\">Status</th>"
                    . "<th scope=\"col\">Options</th>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>\n ";
                    echo "<td>", $row["order_id"], "</td>\n ";
                    echo "<td>", $row["order_time"], "</td>\n ";
                    echo "<td>", $row["firstname"], "</td>\n ";
                    echo "<td>", $row["pcname"], "</td>\n ";
                    echo "<td>", $row["mousename"], "</td>\n ";
                    echo "<td>", $row["kbname"], "</td>\n ";
                    echo "<td>", $row["order_cost"], "</td>\n ";
                    echo "<td>", $row["order_status"], "</td>\n ";
                    echo "<td> <a href='edit.php?order_id=" . $row['order_id'] . "'>Edit</a>";
                    if ($row['order_status'] === 'PENDING') {
                        echo " <a href='manager.php?order_id=" . $row['order_id'] . "' class='delbtn'>Delete</a>";
                    }
                    echo "</td>\n";
                    echo "</tr>\n";
                }
                echo "</table>\n ";
                mysqli_free_result($result);
            }
            mysqli_close($conn);
        }
        ?>
        <a href="logout.php" id="logoutbutton">Logout</a>

    </main>


    <?php include 'includes/footer.inc' ?>

</body>

</html>