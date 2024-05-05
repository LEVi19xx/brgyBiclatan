<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barangay Biclatan Information System</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>

    <style>
        .clicked {
            color: white;
            background-color: #023EBA !important; /* Change to desired background color */
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <img src="logojpg.jpg" alt="Logo" style="height: 40px; width: 40px; margin-right: 10px; height: 40px;
    width: 40px;
    margin-right: 10px; /* space between logo and system name */
    border-radius: 50%; ">
                <div class="sidebar-brand-text">Administrator Dashboard </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li id="dashboard" class="nav-item">
                <a class="nav-link" href="admin_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Management
            </div>

            <!-- Request CRUD -->
            <li id="request" class="nav-item">
                <a class="nav-link" href="admn_resident_request.php">
                    <i class="fas fa-paper-plane"></i>
                    <span> Pending of Approvals</span></a>
            </li>

            <!-- Barangay Staff CRUD -->
            <li id="staff" class="nav-item">
                <a class="nav-link" href="admn_officials.php">
                    <i class="fas fa-user-tie"></i>
                    <span> Barangay Officials</span></a>
            </li>

            <!-- Resident CRUD -->
            <li id="resident" class="nav-item">
                <a class="nav-link" href="admn_resident_crud.php">
                    <i class="fas fa-users"></i>
                    <span> Barangay Residents</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Barangay Services
            </div>

            <!-- Announcement Management -->
            <li class="nav-item">
                <a class="nav-link" href="admn_announcement_crud.php">
                    <i class="fas fa-bullhorn"></i>
                    <span> Announcements</span></a>
            </li>

            <!-- Certificate of Residency -->
            <li class="nav-item">
                <a class="nav-link" href="admn_certofres.php">
                    <i class="fas fa-file-word"></i>
                    <span> Certificate of Residency</span></a>
            </li>

            <!-- Business Clearance -->
            <li class="nav-item">
                <a class="nav-link" href="admn_bspermit.php">
                    <i class="fas fa-file-contract"></i>
                    <span>Business Clearance</span></a>
            </li>

            <!-- Barangay Clearance -->
            <li class="nav-item">
                <a class="nav-link" href="admn_brgyclearance.php">
                    <i class="fas fa-file"></i>
                    <span>Barangay Clearance</span></a>
            </li>

            <!-- Certificate of Indigency -->
            <li class="nav-item">
                <a class="nav-link" href="admn_certofindigency.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Certificate of Indigency</span></a>
            </li>

            <!-- Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="admn_blotterreport.php">
                    <i class="fas fa-user-shield"></i>
                    <span>Blotter Report</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Settings
            </div>

            <li class="nav-item">
                <a class="nav-link" href="activities.php">
                    <i class="fas fa-info-circle"></i>
                    <span> Barangay Activities</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="brgyInfo_modal.php">
                    <i class="fas fa-info-circle"></i>
                    <span> Barangay Info</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Hamburger Icon -->
                        <li class="nav-item">
                            <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" onclick="toggleSidebar()">
                                <i class="fa fa-bars"></i>
                            </button>
                        </li>
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <div class="dropdown ml-auto">
                            <button title="Your Account" class="btn btn-primary dropdown-toggle" style="margin-right: 2px;" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?> <?= $userdetails['firstname'];?>
                                <span class="caret" style="margin-left: 2px;"></span>
                            </button>
                            <ul class="dropdown-menu" style="width: 175px;" >
                                <a class="btn" href="admin_profile.php?id_admin=<?= $userdetails['id_admin'];?>"> <i class="fas fa-user"> &nbsp; </i>Personal Profile  </a>
                                <!--<a class="btn" href="admin_changepass.php?id_admin=<?= $userdetails['id_admin'];?>"> <i class="fas fa-lock" >&nbsp;</i> Change Password  </a>-->
                                <a class="btn" href="logout.php"> <i class="fas fa-sign-out-alt">&nbsp;</i> Logout  </a>
                            </ul>
                        </div>
                    </ul>
                </nav>

                <!-- Your content goes here -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- Your footer code -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <!-- Your scroll to top button code -->

    <!-- Logout Modal-->
    <!-- Your logout modal code -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Your custom JavaScript -->
    <script>
        // Get the current URL
        var url = window.location.href;
        // Get the sidebar items
        var sidebarItems = document.querySelectorAll('.nav-item');

        // Loop through each sidebar item
        sidebarItems.forEach(function(item) {
            // Check if the item's link matches the current URL
            if (item.querySelector('a').href === url) {
                // Add the 'clicked' class to the item
                item.classList.add('clicked');
            }
        });

        // Function to toggle sidebar
        function toggleSidebar() {
            var sidebar = document.getElementById('accordionSidebar');
            sidebar.classList.toggle('toggled');
        }
    </script>

</body>

</html>
