<?php
define('DB_SERVER', 'tar-database.crsnlhosmjue.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'TheFourMusketeers666');
define('DB_DATABASE', 'tarumt_db');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

$database = mysqli_select_db($con, DB_DATABASE);

?>

<?php

define('DB_SERVER', 'tar-database.crsnlhosmjue.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'TheFourMusketeers666');
define('DB_DATABASE', 'tarumt_db');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);

if (!$con) {
    die("Connection Error");
}
?>

