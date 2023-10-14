<?php
//Start Session
session_start();


//Create constants to store non repeating Values
define('SITEURL', 'http://localhost/food-order/');
define('LOCALHOST', 'localhost');//Constants -> capital letter
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cse311project');

//3. Execute query and save data in Database
// Database Connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // mysqli_connect() will try to connect to our database using our credentials
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //selecting database

?>
