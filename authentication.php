<?php
// Used to pass data between PHP pages
    session_start();

?>

<?php
    // data for connecting 
    require_once("settings.php");
    // function to remove unnecessary characters
    require_once("./functions/functions.php");

    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn) {
        echo "<p>Database connection failure</p>";
    }
    // remove unnecessary characters from username and password
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = sanitise_input($_POST["username"]);
        $password = sanitise_input($_POST["password"]);
    }

    // match with the data from server
    $query_userpass = "SELECT * FROM s104169523_db.manager WHERE username = '$username' AND password = '$password';";
    $result = mysqli_query($conn, $query_userpass);

    // if matched -> connect, if not go back to login.php
    if (mysqli_num_rows($result) == 0) {
        header("Location: ./login.php");
    } else {
        $_SESSION["authenticated"] = true;
        header("Location: ./manager.php");
    }
?>