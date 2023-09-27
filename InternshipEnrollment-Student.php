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
                <section class="enrollment">
                    <header>Industrial Training Application</header>
                    <form action="student_update.php" class="form" method='POST'> 
                        <div class="enrollment-column">
                            <div class="input-box">
                                <label>Full Name</label>
                                <input type="text" name="studentName" placeholder="Full Name (as in NRIC)" required />
                            </div>

                            <div class="input-box">
                                <label>Student ID </label>
                                <input type="text" name="studentId" placeholder="Student ID (e.g.: 22PMR12345)"
                                    required />
                            </div>
                        </div>

                        <div class="enrollment-column">
                            <div class="input-box">
                                <label>Student IC</label>
                                <input type="text" id="icNumber" name="studentIc"
                                    placeholder="IC Number (e.g.: XXXXXX-XX-XXXX)" required />
                            </div>

                            <div class="input-box">
                                <label>Phone Number</label>
                                <input type="text" id="student_phoneNo" name="studentPhoneNo"
                                    placeholder="Phone Number (e.g.: XXX-XXXXXXX)" required /><br>
                            </div>
                        </div>
                        <div class="enrollment-column">
                            <div class="input-box">
                                <label>Email Address</label>
                                <input type="text" id="school_email" name="schoolEmail"
                                    placeholder="School Email Address" required />
                            </div>
                            <div class="input-box">
                                <label>Gender</label>
                                <input type="text" name="gender" placeholder="Female/ Male" required />
                            </div>
                        </div>

                        <div class="enrollment-column">

                            <div class="input-box">
                                <label>Do you want transport ?</label>
                                <input type="text" id="school_email" name="transport" placeholder="1 for Yes/ 0 for No"
                                    required />
                            </div>
                            <div class="input-box">
                                <label>CGPA (Latest)</label>
                                <input type="text" id="cgpa" name="cgpa" placeholder="Enter your Latest CGPA"
                                    required />
                            </div>
                        </div>





                        <div class="input-box">
                            <label for="programme">Your Programme of Study</label>
                            <select name="programme" id="programme" onchange="program_select();">
                                <option value="FOAS">Faculty of Applied Sciences (FOAS)</option>
                                <option value="FOCS">Faculty of Computing and Information Technology (FOCS)</option>
                                <option value="FAFB">Faculty of Accountancy, Finance & Business (FAFB)</option>
                                <option value="FOBE">Faculty of Built Environment (FOBE)</option>
                                <option value="FOET">Faculty of Engineering and Technology (FOET)</option>
                                <option value="FCCI">Faculty of Communication and Creative Industries (FCCI)</option>
                                <option value="FSSH">Faculty of Social Science and Humanities (FSSH)</option>
                            </select>
                        </div>

                        <div class="input-box" id="course-box">
                            <label>Your course</label>
                            <select id="course" name="course" required>
                                <option value="Bioscience with Chemistry">Bachelor of Science (Honours) in Bioscience
                                    with Chemistry</option>
                                <option value="Analytical Chemistry">Bachelor of Science (Honours) in Analytical
                                    Chemistry</option>
                                <option value="Food Science">Bachelor of Science (Honours) in Food Science</option>
                                <option value="Nutrition">Bachelor of Science (Honours) in Nutrition</option>
                                <option value="Sports and Exercise Science">Bachelor of Science (Honours) in Sports and
                                    Exercise Science
                                </option>
                                <option value="Applied Physics">Bachelor of Science (Honours) in Applied Physics
                                </option>
                                <option value="Sports Coaching and Performance Analysis">Bachelor of Science (Honours)
                                    in Sports Coaching and
                                    Performance Analysis</option>
                            </select>
                        </div>

                        <div class="input-box" id="course-box-focs" style="display:none;">
                            <label>Your course</label>
                            <select id="course-focs" name="course" required>
                                <option value="Management Mathematics with Computing">Bachelor of Science (Honours) in
                                    Management Mathematics
                                    with Computing</option>
                                <option value="Bachelor of Software Engineering (Honours)">Bachelor of Software
                                    Engineering (Honours)</option>
                                <option
                                    value="Bachelor of Computer Science (Honours) in Interactive Software Technology">
                                    Bachelor of Computer
                                    Science (Honours) in Interactive Software Technology</option>
                                <option
                                    value="Bachelor of Information Systems (Honours) in Enterprise Information Systems">
                                    Bachelor of
                                    Information Systems (Honours) in Enterprise Information Systems</option>
                                <option
                                    value="Bachelor of Information Technology (Honours) in Software Systems Development">
                                    Bachelor of
                                    Information Technology (Honours) in Software Systems Development</option>
                                <option value="Bachelor of Information Technology (Honours) in Internet Technology">
                                    Bachelor of Information
                                    Technology (Honours) in Internet Technology</option>
                                <option value="Bachelor of Information Technology (Honours) in Information Security">
                                    Bachelor of Information
                                    Technology (Honours) in Information Security</option>
                                <option value="Bachelor of Computer Science (Honours) in Data Science">Bachelor of
                                    Computer Science (Honours)
                                    in Data Science</option>
                                <option value="Diploma in Information Technology">Diploma in Information Technology
                                </option>
                                <option value="Diploma in Information Systems">Diploma in Information Systems</option>
                                <option value="Diploma in Computer Science">Diploma in Computer Science</option>
                            </select>
                        </div>

                        <div class="input-box" id="course-box-fafb" style="display:none;">
                            <label>Your course</label>
                            <select id="course-fafb" name="course" required>
                                <option value="Bachelor of Commerce (Honours)">Bachelor of Commerce (Honours)</option>
                                <option value="Bachelor of Finance (Honours)">Bachelor of Finance (Honours)</option>
                                <option value="Bachelor of Banking and Finance (Honours)">Bachelor of Banking and
                                    Finance (Honours)</option>
                                <option value="Bachelor of Finance and Investment (Honours)">Bachelor of Finance and
                                    Investment (Honours)
                                </option>
                                <option value="Bachelor of Business (Honours) in Entrepreneurship">Bachelor of Business
                                    (Honours) in
                                    Entrepreneurship</option>
                                <option value="Bachelor of Business (Honours) in Human Resource Management">Bachelor of
                                    Business (Honours) in
                                    Human Resource Management</option>
                                <option value="Bachelor of Business (Honours) in International Business">Bachelor of
                                    Business (Honours) in
                                    International Business</option>
                                <option value="Bachelor of Business (Honours) in Logistics and Supply Chain Management">
                                    Bachelor of Business
                                    (Honours) in Logistics and Supply Chain Management</option>
                                <option value="Bachelor of Business (Honours) in Marketing">Bachelor of Business
                                    (Honours) in Marketing
                                </option>
                                <option value="Bachelor of Retail Management (Honours)">Bachelor of Retail Management
                                    (Honours)</option>
                                <option value="Bachelor of Business Administration (Honours)">Bachelor of Business
                                    Administration (Honours)
                                </option>
                                <option value="Bachelor of Corporate Administration (Honours)">Bachelor of Corporate
                                    Administration (Honours)
                                </option>
                                <option value="Bachelor of Economics (Honours)">Bachelor of Economics (Honours)</option>
                                <option value="Bachelor of Business (Honours) in Business Analytics">Bachelor of
                                    Business (Honours) in
                                    Business Analytics</option>
                                <option value="Bachelor of Accounting (Honours)">Bachelor of Accounting (Honours)
                                </option>
                            </select>
                        </div>

                        <div class="input-box" id="course-box-fobe" style="display:none;">
                            <label>Your course</label>
                            <select id="course-fobe" name="course" required>
                                <option value="Bachelor of Quantity Surveying (Honours)">Bachelor of Quantity Surveying
                                    (Honours)</option>
                                <option value="Bachelor of Real Estate Management (Honours)">Bachelor of Real Estate
                                    Management (Honours)
                                </option>
                                <option value="Bachelor of Interior Architecture (Honours)">Bachelor of Interior
                                    Architecture (Honours)
                                </option>
                                <option value="Bachelor of Construction Management and Economics (Honours)">Bachelor of
                                    Construction
                                    Management and Economics (Honours)</option>
                                <option value="Bachelor of Science in Architecture (Honours)">Bachelor of Science in
                                    Architecture (Honours)
                                </option>
                            </select>
                        </div>

                        <div class="input-box" id="course-box-foet" style="display:none;">
                            <label>Your course</label>
                            <select id="course-foet" name="course" required>
                                <option value="Bachelor of Mechatronics Engineering with Honours">Bachelor of
                                    Mechatronics Engineering with
                                    Honours</option>
                                <option value="Bachelor of Electrical and Electronics Engineering with Honours">Bachelor
                                    of Electrical and
                                    Electronics Engineering with Honours</option>
                                <option value="Bachelor of Mechanical Engineering with Honours">achelor of Mechanical
                                    Engineering with Honours
                                </option>
                            </select>
                        </div>

                        <div class="input-box" id="course-box-fcci" style="display:none;">
                            <label>Your course</label>
                            <select id="course-fcci" name="course" required>
                                <option value="Communication (Honours) in Advertising">Bachelor of Communication
                                    (Honours) in Advertising
                                </option>
                                <option value="Communication (Honours) in Broadcasting">Bachelor of Communication
                                    (Honours) in Broadcasting
                                </option>
                                <option value="Communication (Honours) in Journalism">Bachelor of Communication
                                    (Honours) in Journalism
                                </option>
                                <option value="Communication (Honours) in Media Studies">Bachelor of Communication
                                    (Honours) in Media Studies
                                </option>
                                <option value="Public Relations (Honours)">Bachelor of Public Relations (Honours)
                                </option>
                                <option value="Design (Honours) in Graphic Design">Bachelor of Design (Honours) in
                                    Graphic Design</option>
                                <option value="Design (Honours) in Fashion Design">Bachelor of Design (Honours) in
                                    Fashion Design</option>
                                <option value="Creative Multimedia (Honours)">Bachelor of Creative Multimedia (Honours)
                                </option>
                            </select>
                        </div>

                        <div class="input-box" id="course-box-fssh" style="display:none;">
                            <label>Your course</label>
                            <select id="course-fssh" name="course" required>
                                <option value="Hospitality Management (Honours)">Bachelor of Hospitality Management
                                    (Honours)</option>
                                <option value="Tourism Management (Honours)">Bachelor of Tourism Management (Honours)
                                </option>
                                <option value="Social Science (Honours) in Psychology">Bachelor of Social Science
                                    (Honours) in Psychology
                                </option>
                                <option value="Arts (Honours) English with Drama">Bachelor of Arts (Honours) English
                                    with Drama</option>
                                <option value="Arts (Honours) English with Education">Bachelor of Arts (Honours) English
                                    with Education
                                </option>
                                <option value="Arts in English Studies (Honours)">Bachelor of Arts in English Studies
                                    (Honours)</option>
                                <option value="Early Childhood Education (Honours)">Bachelor of Early Childhood
                                    Education (Honours)</option>
                            </select>
                        </div>


                        <div class="input-box">
                            <label>Year of Study</label>
                            <input type="text" id="tutorial_group" name="year" placeholder="Enter year of study"
                                required />
                        </div>


                        <div class="input-box address">
                            <label>Current Address</label>
                            <textarea class="address" name="studentAddress" rows="3" placeholder="Enter street address"
                                required style="border: 1px solid #ddd;border-radius: 6px;"></textarea>
                        </div>

                        <div class="box-header">Parent Details</div>

                        <div class="enrollment-column">
                            <div class="input-box">
                                <label>Parent/Guardian name</label>
                                <input type="text" name="parentName" placeholder="Parent or guardian name" required />
                            </div>

                            <div class="input-box">
                                <label>Relationships</label>
                                <input type="text" name="relationships" placeholder="Father/Mother/Guardian" required />
                            </div>
                        </div>

                        <div class="input-box">
                            <label>Phone Number</label>
                            <input type="text" id="parent_phoneNo" name="parentPhoneNo"
                                placeholder="Personal Phone Number (e.g.: XXX-XXXXXXX)" required /><br>
                        </div>

                        <div class="input-box address">
                            <label>Hometown Address</label>
                            <textarea class="address" name="parentAddress" rows="3" placeholder="Enter street address"
                                required style="border: 1px solid #ddd;border-radius: 6px;"></textarea>
                        </div>

                        <div class="box-header">Terms and conditions</div>
                        <div class="input-box">
                            <p style="background-color: #F5F5F5; padding: 20px;text-align: justify;">Please ensure all
                                the above information provided are accurate. The information gathered will be used for
                                preparing students' Industrial Training related documents.</p>
                        </div>

                        <div class="input-box">
                            <p style="background-color: #F5F5F5; padding: 20px;text-align: justify;">I UNDERSTAND THAT I
                                MUST COMPLETE THE FULL DURATION OF THE INDUSTRIAL TRAINING PROGRAMME PERIOD
                                SATISFACTORILY IN ORDER TO PASS THE INDUSTRIAL TRAINING COURSE. I AGREE TO
                                ABIDE BY THE RULES AND REGULATIONS OF THE COMPANY CONCERNED AND I WILL ALWAYS UPHOLD THE
                                GOOD NAME OF THE UNIVERSITY AT ALL TIMES DURING THE WHOLE DURATION OF THE INDUSTRIAL
                                TRAINING PROGRAMME.</p>
                        </div>

                        <label for="accept-terms">
                            <input type="checkbox" id="accept-terms" value="accepted"
                                style="margin-top: 30px;margin-left: 580px;color: red;" required>
                            I accept the terms and conditions
                        </label>

                        <button type="submit" name="submit">Submit</button>
                    </form>
                </section>

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
