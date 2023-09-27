<?php
include "connect.php";

if (isset($_POST['STUDENT_ID']) && isset($_POST['PASSWORD'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $userid = validate($_POST['STUDENT_ID']);
    $pass = validate($_POST['PASSWORD']);
}
$sql = "SELECT * FROM STUDENT WHERE STUDENT_ID = '$userid' AND PASSWORD ='$pass'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['STUDENT_ID'] === $userid && $row['PASSWORD'] === $pass) {
        echo '<script type="text/javascript">';
        echo 'var successMessage = "Logged In successfully !";';
        echo 'alert (successMessage);';
        echo 'window.location.href = "dashboard.html";';
        echo '</script>';
        exit();
    }
} else {
    header("Location: index.html?error=Incorrect user id or password");
}
?>