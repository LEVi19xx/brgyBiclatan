<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barangay Biclatan Information System</title>

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admn_dashboard.php">
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

            <!-- Announcement Management -->
        

            <!-- Certificate of Residency -->
            <li class="nav-item">
                <a class="nav-link" href="admn_certofres.php">
                    <i class="fas fa-file-word"></i>
                    <span> Certificate of Residency</span></a>
            </li>


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

            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="admn_blotterreport.php">
                    <i class="fas fa-user-shield"></i>
                    <span>Blotter Report</span></a>
            </li>

            <div class="sidebar-heading">
                Settings
            </div>

            <li class="nav-item">
                <a class="nav-link" href="activities.php">
                    <i class="fas fa-info-circle"></i>
                    <span> Barangay Activities</span></a>
            </li>

            <!-- Announcement Management -->
            <li class="nav-item">
                <a class="nav-link" href="brgyInfo_modal.php">
                    <i class="fas fa-info-circle"></i>
                    <span> Barangay Info</span></a>
            </li>

            <!-- Announcement Management -->
            <!--<li class="nav-item">
                <a class="nav-link" href="position_modal.php">
                    <i class="fas fa-star"></i>
                    <span> Position</span></a>
            </li>-->

            <!-- Certificate of Residency -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->


                <style>
/* CSS for navbar */

/* Overall style for navbar */
.navbar {
    padding: 10px 20px;
    border-bottom: 1px solid #e0e0e0; /* light gray border at the bottom */
    background-color: #f8f9fa; /* light background color */
}

/* Style for the logo and system name */
.navbar-brand {
    display: flex;
    align-items: center;
    font-size: 1.5rem; /* slightly larger font size for system name */
    font-weight: bold; /* bold text for system name */
    color: #343a40; /* dark gray color for text */
}

/* Style for the logo image */
.navbar-brand img {
    height: 40px;
    width: 40px;
    margin-right: 10px; /* space between logo and system name */
    border-radius: 50%; /* make the logo image round */
}

/* Style for search input */
.navbar-search .input-group {
    margin-top: 10px; /* top margin */
}

.navbar-search .form-control {
    border-radius: 20px 0 0 20px; /* rounded edges on left side */
    border: 1px solid #ced4da;
    padding: 5px 10px;
}

/* Style for search button */
.navbar-search .input-group-append .btn {
    border-radius: 0 20px 20px 0; /* rounded edges on right side */
    background-color: #007bff; /* blue background */
    color: white;
}

/* Style for user dropdown */
.navbar-nav .nav-item .dropdown-toggle {
    color: #343a40; /* dark gray color */
    border: 0;
    outline: none;
    background-color: transparent;
    font-weight: bold; /* bold text for user info */
}

.navbar-nav .dropdown-menu {
    border-radius: 10px; /* rounded edges for dropdown menu */
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16); /* slight shadow effect */
    padding: 10px;
}

.navbar-nav .dropdown-item {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    color: #343a40; /* dark gray color */
    font-size: 1rem;
}

.navbar-nav .dropdown-item i {
    margin-right: 10px; /* space between icon and text */
    color: #007bff; /* blue color for icons */
}

/* Hover effect for dropdown items */
.navbar-nav .dropdown-item:hover {
    background-color: #f8f9fa; /* light gray background on hover */
}

/* Media query for responsiveness */
@media (max-width: 767px) {
    .navbar-brand {
        font-size: 1.2rem; /* Adjust font size for smaller screens */
    }
    .btn {
        margin-left: -10px;
    }
}
.clicked {
    color: white;
    background-color: #023EBA !important; /* Change to desired background color */
}
#accordionSidebar.collapsed .nav-link-text {
    display: none;
}
</style>


                <nav class="navbar navbar-expand-lg navbar-light bg-primary topbar mb-4 static-top shadow">
    <!-- Logo at pangalan ng system sa kaliwang bahagi -->
    <button class="btn btn-link btn-sm order-1 order-lg-0 ml-3" id="sidebarToggle" href="#">
    <i class="fas fa-bars text-white"></i>
</button>
    <div class="navbar-brand d-flex align-items-center">
      
    </div>
   
   
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      
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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $userdetails['surname'];?> <?= $userdetails['firstname'];?>
                <span class="caret" style="margin-left: 2px;"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="admin_profile.php?id_admin=<?= $userdetails['id_admin'];?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Personal Profile
                </a>
                <a class="dropdown-item" href="logout.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script>
    // Get the toggle button
    var toggleButton = document.getElementById('sidebarToggle');

    // Add event listener for click event
    toggleButton.addEventListener('click', function() {
        // Get the sidebar element
        var sidebar = document.getElementById('accordionSidebar');
        
        // Toggle the 'collapsed' class to hide or show the sidebar
        sidebar.classList.toggle('collapsed');
        
        // Save the state to local storage
        localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
    });

    // Function to check the local storage and collapse/expand sidebar accordingly
    function checkSidebarState() {
        var sidebar = document.getElementById('accordionSidebar');
        var isCollapsed = localStorage.getItem('sidebarCollapsed');
        if (isCollapsed === 'true') {
            sidebar.classList.add('collapsed');
        } else {
            sidebar.classList.remove('collapsed');
        }
    }

    // Call the function when the page loads
    window.onload = checkSidebarState;

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
</script>


</body>
</html>