<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $studentId = $_POST['studentId'];
    $studentIc = $_POST['studentIc'];
    $studentPhoneNo = $_POST['studentPhoneNo'];
    $email = $_POST['schoolEmail'];
    $gender = $_POST['gender'];
    $transport = $_POST['transport'];
    $cgpa = $_POST['cgpa'];
    $programme = $_POST['programme'];
    $year = $_POST['year'];
    $studentAddress = $_POST['studentAddress'];
    $parentName = $_POST['parentName'];
    $relationships = $_POST['relationships'];
    $parentPhoneNo = $_POST['parentPhoneNo'];
    $parentAddress = $_POST['parentAddress'];

    $sql = "UPDATE STUDENT SET STUDENT_IC='$studentIc', GENDER='$gender', YEAR_OF_STUDY=$year, PROGRAMME='$programme',
    EMAIL='$email', PHONE_NUMBER='$studentPhoneNo', HAS_OWN_TRANSPORT=$transport, CGPA=$cgpa, CURRENT_ADDRESS='$studentAddress',
    EMERGENCY_CONTACT_NAME='$parentName', EMERGENCY_CONTACT_PHONE='$parentPhoneNo', EMERGENCY_CONTACT_RELATIONSHIP='$relationships', HOMETOWN_ADDRESS='$parentAddress' 
     WHERE STUDENT_ID ='$studentId'";
     
    $update_result = mysqli_query($con, $sql);
    if (!$update_result) {
        die(mysqli_error($con));
    }

    if ($update_result) {
        //Display success message and redirect 
        echo '<script type="text/javascript">';
        echo 'var successMessage = "Student enrollment data updated successfully !";';
        echo 'alert (successMessage);';
        echo 'window.location.href = "InternshipEnrollment-Admin.php";';
        echo '</script>';
    } else {
        die(mysqli_error($con));
    }
}
?>