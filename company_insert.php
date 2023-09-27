<?php
include 'connect.php';

$query = "SELECT * FROM COMPANY";
$result = mysqli_query($con, $query);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $remark = $_POST['remark'];
    $contactPerson = $_POST['contactPerson'];
    $designation = $_POST['designation'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    //Get the last running number
    $lastIdQuery = "SELECT MAX(COMPANY_ID) as max_id FROM COMPANY";
    $fetchResult = mysqli_query($con, $lastIdQuery);
    $row = mysqli_fetch_assoc($fetchResult); //Fetch result
    $lastId = $row['max_id'];

    if ($lastId) {
        preg_match('/\d+$/', $lastId, $matches);
        if (!empty($matches)) {
            $runningNumber = (int) $matches[0] + 1;
            $newId = sprintf('C%05d', $runningNumber);
        } else {
            echo "Failed to extract running number from the last ID.";
            exit;
        }
    } else {
        //If no previous records, start from the first number
        $newId = 'C00001';
    }

    //Insert record
    $sql = "INSERT INTO COMPANY VALUES('$newId', '$name', '$remark', '$contactPerson', '$designation', '$contactNo', '$email', '$address')";
    $add_result = mysqli_query($con, $sql);
    if (!$add_result) {
        die(mysqli_error($con));
    }

    if ($add_result) {
        //Display success message and redirect 
        echo '<script type="text/javascript">';
        echo 'var successMessage = "New company data added successfully !";';
        echo 'alert (successMessage);';
        echo 'window.location.href = "ITPCompany-Admin.php";';
        echo '</script>';
    } else {
        die(mysqli_error($con));
    }
}
?>