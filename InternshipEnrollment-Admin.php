<!-- Fetch Table Results from Database -->
<?php
include 'connect.php';

$query = "SELECT * FROM STUDENT";
$result = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="https://tarumtwebimagebucket.s3.us-east-1.amazonaws.com/siteIcon.png" />
    <title> TARUMT - Internship Enrollment Form</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="components/topNavBar.js" type="text/javascript" defer></script>
    <script src="components/middleNavBar.js" type="text/javascript" defer></script>
    <script src="components/footer.js" type="text/javascript" defer></script>
    <script src="components/StockAd_header.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/internship-enrollment-style.css" />
    <link rel="stylesheet" href="css/company-itp-style.css" />
    <script src="js/internship-enrollment.js"></script>
    <style>
        main {
            background-color: #F2F2F2;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 30%;
            margin-bottom: 16px;
            padding: 0 8px;
            margin-top: -200px;
            margin-left: 30px;
        }

        .column2 {
            float: left;
            width: 30%;
            margin-bottom: 16px;
            padding: 0 8px;
            margin-left: 30px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .card:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0);
            margin: 8px;
        }

        .about-section {
            padding-top: 20px;
            text-align: center;
            background-color: #8B9DA4;
            color: black;
            height: 450px;
            background-image: url('https://tarumtwebimagebucket.s3.us-east-1.amazonaws.com/dashImg.jpg');
        }

        .container {
            padding: 0 16px;
        }

        .container img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }


        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: black;
            text-align: center;
        }

        .button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <header-component></header-component>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu"><middle-component></middle-component></div>
                <div class="sb-sidenav-footer">
                    <!--pass in logged in user details-->
                    <div class="small">Logged in as:</br> UserA</div>
                    <a href="LogoutConfirmation.html"><i class="fas fa-sign-out-alt" id="sideBarIcon"
                            style="float:right;margin-right:10px;"></i></a>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <main>
                    <!--Table-->
                    <div class="table">
                        <!--Table Header-->
                        <div class="itp-header">
                            <h1>
                                Student Enrollment List
                            </h1>
                            <div class="itp-search-header">
                                <div class="search-box">
                                    <i class="fas fa-search" style="margin-right:15px;color:#808080;"></i>
                                    <input type="text" placeholder="Search ....">
                                </div>
                            </div>
                        </div>
                        <!--Table Content-->
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Programme</th>
                                    <th>Tutorial Group</th>
                                    <th>Contact No</th>
                                    <th>Contact Email</th>
                                    <th>Own transporty?</th>
                                    <th>CGPA</th>
                                    <th>Address</th>
                                    <th>Emergency Contact Name</th>
                                    <th>Emergency Contact Phone</th>
                                    <th>Relationships</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['STUDENT_ID']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['STUDENT_NAME']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['PROGRAMME']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['TUTORIAL_GROUP']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['PHONE_NUMBER']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['EMAIL']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['HAS_OWN_TRANSPORT']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['CGPA']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['CURRENT_ADDRESS']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['EMERGENCY_CONTACT_NAME']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['EMERGENCY_CONTACT_PHONE']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['EMERGENCY_CONTACT_RELATIONSHIP']; ?>
                                        </td>
                                        
                                    </tr>

                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </main>
            </main>
            <!--footer-->
            <footer class="py-4 bg-light mt-auto">
                <footer-component></footer-component>
            </footer>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
