<!-- Fetch Table Results from Database -->
<?php
include 'connect.php';

$query = "SELECT * FROM COMPANY";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="https://tarumtwebimagebucket.s3.us-east-1.amazonaws.com/siteIcon.png" />
    <title>Internship ITP</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="components/topNavBar.js" type="text/javascript" defer></script>
    <script src="components/middleNavBar.js" type="text/javascript" defer></script>
    <script src="components/footer.js" type="text/javascript" defer></script>
    <script src="components/StockAd_header.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="css/company-itp-style.css" />
    <link rel="stylesheet" href="js/company-itp.js" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                <!--Prompt out window = Add Company-->
                <div id="add-company-window" class="modal">
                    <span onclick="document.getElementById('add-company-window').style.display='none'" class="close"
                        title="Close Modal">×</span>
                    <form class="modal-content" method="POST" action='company_insert.php'>
                        <header style="margin-top: 30px;font-weight: bold;">Add New Company Record</header>
                        <div class="input-box">
                            <label>Company Name</label>
                            <input type="text" name="name" placeholder="New company name" required />
                        </div>
                        <div class="input-box">
                            <label>Remark</label>
                            <input type="text" name="remark" placeholder="Additional remark for the company" />
                        </div>
                        <div class="input-box">
                            <label>Contact Person</label>
                            <input type="text" name="contactPerson" placeholder="Contact person in the company" />
                        </div>
                        <div class="input-box">
                            <label>Designation</label>
                            <input type="text" name="designation" placeholder="Contact person designation" />
                        </div>
                        <div class="input-box">
                            <label>Contact No</label>
                            <input type="text" name="contactNo" placeholder="Contact person phone No/Company No" />
                        </div>
                        <div class="input-box">
                            <label>Contact Email</label>
                            <input type="text" name="email" placeholder="Contact person email address" />
                        </div>
                        <div class="input-box">
                            <label>Company Address</label>
                            <input type="text" name="address" placeholder="Company address" />
                        </div>
                        <div class="clearfix" style="margin-top: 10px;margin-bottom: 10px;">
                            <button type="submit"
                                onclick="document.getElementById('add-company-window').style.display='none'"
                                class="cancelbtn">Cancel</button>
                            <button type="submit" name="submit"
                                onclick="document.getElementById('add-company-window').style.display='none'"
                                class="confirmbtn">Confirm Add Company</button>
                        </div>
                    </form>
                </div>

                <!--Prompt out window = Update Company-->
                <div id="update-company-window" class="modal">
                    <span onclick="document.getElementById('update-company-window').style.display='none'" class="close"
                        title="Close Modal">×</span>
                    <form class="modal-content" method="POST" action="company_update.php">
                        <header style="margin-top: 30px;font-weight: bold;">Update Company Record</header>
                        <div class="input-box">
                            <input type="hidden" name="companyId" id="companyId" placeholder="Company id" />
                        </div>

                        <div class="input-box">
                            <label>Company Name</label>
                            <input type="text" name="name" placeholder="New company name" required />
                        </div>
                        <div class="input-box">
                            <label>Remark</label>
                            <input type="text" name="remark" placeholder="Additional remark for the company" />
                        </div>
                        <div class="input-box">
                            <label>Contact Person</label>
                            <input type="text" name="contactPerson" placeholder="Contact person in the company" />
                        </div>
                        <div class="input-box">
                            <label>Designation</label>
                            <input type="text" name="designation" placeholder="Contact person designation" />
                        </div>
                        <div class="input-box">
                            <label>Contact No</label>
                            <input type="text" name="contactNo" placeholder="Contact person phone No/Company No" />
                        </div>
                        <div class="input-box">
                            <label>Contact Email</label>
                            <input type="text" name="email" placeholder="Contact person email address" />
                        </div>
                        <div class="input-box">
                            <label>Company Address</label>
                            <input type="text" name="address" placeholder="Company address" />
                        </div>
                        <div class="window-button">
                            <button type="submit"
                                onclick="document.getElementById('update-company-window').style.display='none'"
                                class="cancelbtn">Cancel</button>
                            <button type="submit" name="submit"
                                onclick="document.getElementById('update-company-window').style.display='none'"
                                class="confirmbtn">Confirm Update Company</button>
                        </div>
                    </form>
                </div>

                <!--Table-->
                <div class="table">
                    <!--Table Header-->
                    <div class="itp-header">
                        <h1>
                            ITP Company
                            List
                        </h1>
                        <div class="itp-search-header">
                            <div class="search-box">
                                <i class="fas fa-search" style="margin-right:15px;color:#808080;"></i>
                                <input type="text" placeholder="Search ....">
                            </div>
                        </div>
                        <div class="itp-header-button">
                            <button onclick="document.getElementById('add-company-window').style.display='block'"
                                class="add-company-button">
                                <i class="fa fa-plus-circle" style="margin-right:10px;"></i>Add New Company</button>
                        </div>

                    </div>
                    <!--Table Content-->
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company Name</th>
                                <th>Remark</th>
                                <th>Contact Person</th>
                                <th>Designation</th>
                                <th>Contact No</th>
                                <th>Contact Email</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <tr id="company-row-<?php echo $row['COMPANY_ID']; ?>">
                                    <td>
                                        <?php echo $row['COMPANY_ID']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['COMPANY_NAME']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['REMARK']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['COMPANY_CONTACT_PERSON']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['COMPANY_DESIGNATION']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['COMPANY_CONTACT_NO']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['COMPANY_EMAIL']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['COMPANY_ADDRESS']; ?>
                                    </td>
                                    <td style="display: flex;">
                                        <button class="edit-button"
                                            onclick="openUpdateCompanyWindow('<?php echo $row['COMPANY_ID']; ?>', '<?php echo $row['COMPANY_NAME']; ?>', 
                                            '<?php echo $row['REMARK']; ?>', '<?php echo $row['COMPANY_CONTACT_PERSON']; ?>', '<?php echo $row['COMPANY_DESIGNATION']; ?>', 
                                            '<?php echo $row['COMPANY_CONTACT_NO']; ?>', '<?php echo $row['COMPANY_EMAIL']; ?>', '<?php echo $row['COMPANY_ADDRESS']; ?>')">
                                            <i class='far fa-edit'></i></button>
                                        <!-- <a href="company_update.php?companyUpdateId=<?php echo $row['COMPANY_ID']; ?>"><button class="edit-button"><i class='far fa-edit'></i></button></a> -->
                                        <button class="delete-button"
                                            onclick="confirmDelete('<?php echo $row['COMPANY_ID']; ?>')"><i
                                                class="fa fa-trash"></i></button></a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                        <div id="successModal" class='dialog'>
                            <div class="dialog-content">
                                <span class="close" onclick="closeSuccessModal()">&times;</span>
                                <p> New company data added successfully!</p>
                            </div>
                            <div>
                    </table>
                </div>
            </main>
            <!--Footer-->
            <footer class="py-4 bg-light mt-auto">
                <footer-component></footer-component>
            </footer>
        </div>


    </div>
    <script>
        $(document).ready(function () {
            // Function to filter table rows based on search input
            function filterTable(searchValue) {
                searchValue = searchValue.toLowerCase(); // Convert to lowercase for case-insensitive search

                // Loop through each table row
                $("tbody tr").each(function () {
                    const companyId = $(this).attr("id").replace("company-row-", "");
                    const id = $(this).find("td:nth-child(1)").text().toLowerCase();
                    const companyName = $(this).find("td:nth-child(2)").text().toLowerCase();
                    const remark = $(this).find("td:nth-child(3)").text().toLowerCase();
                    const contactPerson = $(this).find("td:nth-child(4)").text().toLowerCase();
                    const designation = $(this).find("td:nth-child(5)").text().toLowerCase();
                    const contactNo = $(this).find("td:nth-child(6)").text().toLowerCase();
                    const email = $(this).find("td:nth-child(7)").text().toLowerCase();
                    const address = $(this).find("td:nth-child(8)").text().toLowerCase();

                    // Check if the searchValue is found in the company name
                    if (id.includes(searchValue) || companyName.includes(searchValue) || remark.includes(searchValue) || contactPerson.includes(searchValue) || designation.includes(searchValue) || contactNo.includes(searchValue) || email.includes(searchValue) || address.includes(searchValue)) {
                        $(this).show(); // Display if matched
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Add an event listener to the search input
            $(".search-box input[type='text']").on("input", function () {
                const searchValue = $(this).val(); // Get value from input
                filterTable(searchValue);
            });
        });

        //Function to open the update company window and pass the company ID
        function openUpdateCompanyWindow(companyId, name, remark, contactPerson, designation, contactNo, email, address) {
            document.querySelector('#update-company-window input[name="companyId"]').value = companyId;//Set company ID input field in the update form
            document.querySelector('#update-company-window input[name="name"]').value = name;
            document.querySelector('#update-company-window input[name="remark"]').value = remark;
            document.querySelector('#update-company-window input[name="contactPerson"]').value = contactPerson;
            document.querySelector('#update-company-window input[name="designation"]').value = designation;
            document.querySelector('#update-company-window input[name="contactNo"]').value = contactNo;
            document.querySelector('#update-company-window input[name="email"]').value = email;
            document.querySelector('#update-company-window input[name="address"]').value = address;
            document.getElementById('update-company-window').style.display = 'block';
            // document.querySelector('#update-company-window form').action = 'company_update.php';

        }

        //Function to delete
        function confirmDelete(companyId) {
            var confirmDelete = confirm("Are you sure want to delete this record?");
            if (confirmDelete) {
                window.location.href = "company_delete.php?companyDeleteId=" + companyId;
            }
        }
    </script>
</body>

</html>
