<?php

include('connect.php');

//Get the update details from the page
if (isset($_POST['submit'])) {
    $companyUpdateId = $_POST['companyId'];
    $name = $_POST['name'];
    $remark = $_POST['remark'];
    $contactPerson = $_POST['contactPerson'];
    $designation = $_POST['designation'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "UPDATE COMPANY SET COMPANY_NAME='$name', REMARK='$remark', COMPANY_CONTACT_PERSON='$contactPerson',
        COMPANY_DESIGNATION='$designation', COMPANY_CONTACT_NO='$contactNo', COMPANY_EMAIL='$email', COMPANY_ADDRESS='$address'
        WHERE COMPANY_ID = '$companyUpdateId'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        //Display success message and redirect 
        echo '<script type="text/javascript">';
        echo 'var successMessage = "Company data updated successfully !";';
        echo 'alert (successMessage);';
        echo 'window.location.href = "ITPCompany-Admin.php";';
        echo '</script>';
    } else {

        die(mysqli_error($con));
    }

}



?>