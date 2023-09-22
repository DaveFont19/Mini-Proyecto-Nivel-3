<?php
session_start();
if (isset($_SESSION["user-data"])) {
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "login_db";
        $user_data = $_SESSION["user-data"];

        $db = new mysqli($host, $username, $password, $database);
        $stmnt = $db->query("SELECT * FROM usuarios WHERE email = '$user_data[email]'");
        $usuario = $stmnt->fetch_assoc();
    } catch (mysqli_sql_exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
} else {
    header("location: /views/login.php");
    exit();
}

?>