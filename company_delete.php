<?php
include 'dbinfo.inc';

//Access the parameter from URL
if (isset($_GET['companyDeleteId'])) {
    $companyId = $_GET['companyDeleteId'];

    $delete_sql = "DELETE FROM COMPANY WHERE COMPANY_ID='$companyId'";
    $result = mysqli_query($con, $delete_sql);

    //If delete successfully then display the message
    if ($result) {
        echo '<script type="text/javascript">';
        echo 'var successMessage = "Company data delete successfully !";';
        echo 'alert (successMessage);';
        echo 'window.location.href = "ITPCompany-Admin.php";';
        echo '</script>';
    } else {
        die(mysqli_error($con));
    }

}

?>
