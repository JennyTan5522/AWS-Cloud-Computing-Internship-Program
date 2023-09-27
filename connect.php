<?php
$con = mysqli_connect("php-database.crsnlhosmjue.us-east-1.rds.amazonaws.com", "admin", "TheFourMusketeers666", "tarumt_db");
if (!$con) {
    die("Connection Error");
}else{
    echo "Connected successfully!";
}
?>