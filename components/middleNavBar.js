class Middle extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = `
        <head>
		<link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        </head>
                
                    
                        <div class="nav">

                        <!--This is the menu heading-->
                        <p id="companyFullName"> &copy; TARUMT 2023 </p>
                            <div class="sb-sidenav-menu-heading">PROFILE</div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                Profile
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="myProfile.html">My Profile</a>
                                    <a class="nav-link" href="internshipDetails.html">Internship Details</a>
                                    <a class="nav-link" href="changePassword.html">Change Password</a>
                                </nav>
                            </div>
            
                            <div class="sb-sidenav-menu-heading">CORE</div>
                            <a class="nav-link" href="dashboard.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#annoucement" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Announcement
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="annoucement" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="Announcement.html">Student View</a>
                                <a class="nav-link" href="Announcement-admin.html">Admin View</a>
                            </nav>
                        </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                            Enrollment
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                        <div class="collapse" id="collapseLayout" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="InternshipEnrollment-Student.php">Student View</a>
                                <a class="nav-link" href="InternshipEnrollment-Admin.php">Admin View</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        ITP Company
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="ITPCompany-Student.php" >
                                Student View
                            </a>
                            <a class="nav-link collapsed" href="ITPCompany-Admin.php" >
                                Admin View
                            </a>
                          
                        </nav>
                    </div>

    

                            <a class="nav-link" href="application_materials.html">
                            <div class="sb-nav-link-icon"><i class="far fa-clone"></i></div>
                            Application Materials
                            </a>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#ITPForms" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                            ITP Forms
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                        <div class="collapse" id="ITPForms" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="ITP_Forms-Student.html">Student View</a>
                                <a class="nav-link" href="ITP_Forms-Admin.html">Admin View</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#report" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                        ITP Report
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                    <div class="collapse" id="report" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="Report_Submission-Student.html">Student Submission</a>
                            <a class="nav-link" href="Report_Submission-Admin.html">Admin View</a>
                        </nav>
                    </div>
                        

                            <br/><br/>



                           
                        </div>
                    
                    
                    

           
        `;
    }
}
customElements.define('middle-component', Middle);