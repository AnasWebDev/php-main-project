<?php
    //Start Session
    session_start();

    // Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/php-main-project/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define("DB_NAME", "food-order");

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // Database Connection
    $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error()); // Selcting Database

?>