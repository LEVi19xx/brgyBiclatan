<?php 
    require('classes/main.class.php');
    require('classes/resident.class.php');
    
    $userdetails = $bmis->get_userdata();
    $bmis->create_brgyclearance();

?>

<!DOCTYPE html>

<html>
  <head> 
    <title> Barangay Biclatan Information System </title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
      <!-- responsive tags for screen compatibility -->
      <meta name="viewport" content="width=device-width, initial-scale=1"><!-- bootstrap css --> 
      <link href="bootstrap.css" rel="stylesheet" type="text/css">
      <!-- fontawesome icons --> 
      <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
  
        <style>

            /* Navbar Buttons */

            .btn1 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            margin-left: 13%;
            padding: 8px 22px;
            }

            .btn2 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            padding: 8px 22px;
            margin-left: .1%;
            }

            .btn3 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            padding: 8px 22px;
            margin-left: .1%;
            }

            .btn4 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            padding: 8px 22px;
            margin-left: .1%;
            }

            .btn5 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            padding: 8px 22px;
            margin-left: .1%;
            }

            /* Darker background on mouse-over */
            .btn1:hover {
            background-color: RoyalBlue;
            color: black;
            }

            .btn2:hover {
            background-color: RoyalBlue;
            color: black;
            }

            .btn3:hover {
            background-color: RoyalBlue;
            color: black;
            }

            .btn4:hover {
            background-color: RoyalBlue;
            color: black;
            }

            .btn5:hover {
            background-color: RoyalBlue;
            color: black;
            }

            /* Back-to-Top */

            .top-link {
            transition: all 0.25s ease-in-out;
            position: fixed;
            bottom: 0;
            right: 0;
            display: inline-flex;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            margin: 0 3em 3em 0;
            border-radius: 50%;
            padding: 0.25em;
            width: 80px;
            height: 80px;
            background-color: #3661D5;
            }
            .top-link.show {
            visibility: visible;
            opacity: 1;
            }
            .top-link.hide {
            visibility: hidden;
            opacity: 0;
            }
            .top-link svg {
            fill: white;
            width: 24px;
            height: 12px;
            }
            .top-link:hover {
            background-color: #3498DB;
            }
            .top-link:hover svg {
            fill: #000000;
            }

            .screen-reader-text {
            position: absolute;
            clip-path: inset(50%);
            margin: -1px;
            border: 0;
            padding: 0;
            width: 1px;
            height: 1px;
            overflow: hidden;
            word-wrap: normal !important;
            clip: rect(1px, 1px, 1px, 1px);
            }
            .screen-reader-text:focus {
            display: block;
            top: 5px;
            left: 5px;
            z-index: 100000;
            clip-path: none;
            background-color: #eee;
            padding: 15px 23px 14px;
            width: auto;
            height: auto;
            text-decoration: none;
            line-height: normal;
            color: #444;
            font-size: 1em;
            clip: auto !important;
            }

            .container1
            {
                background-color: #3498DB;
                height: 342px;
                color: black;
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
            }

            .applybutton
            {
                width: 100% !important;
                height: 50px !important;
                border-radius: 20px;
                margin-top: 5%;
                margin-bottom: 8%;
                font-size: 25px;
                letter-spacing: 2px;
            }

            .paa
            {
                margin-top: 10px;
                position: relative;
                left: -28%;
            }

            .text1{
                margin-top: 30px;
                font-size: 50px;
            }

            .picture{
                height: 120px;
                width: 120px;
            }

            /* width */
            ::-webkit-scrollbar {
            width: 5px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
            background: #f1f1f1; 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: #888; 
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: #555; 
            }

            .card4 {
                width: 250px;
                height: 210px;
                overflow: hidden;
                margin: auto;
                color: white;
            }

            .card3 {
                width: 250px;
                height: 210px;
                overflow: hidden;
                margin: auto;
                color: white;
            }

            .card2 {
                width: 250px;
                height: 210px;
                overflow: auto;
                margin: auto;
                color: white;
            }

            .card1 {
                width: 250px;
                height: 210px;
                overflow: auto;
                margin: auto;
                color: white;
            }

            a{
                color:white;
                }
            .shfooter .collapse {
                display: inherit;
            }
                @media (max-width:767px) {
            .shfooter ul {
                    margin-bottom: 0;
            }

            .shfooter .collapse {
                    display: none;
            }

            .shfooter .collapse.show {
                    display: block;
            }

            .shfooter .title .fa-angle-up,
            .shfooter .title[aria-expanded=true] .fa-angle-down {
                    display: none;
            }

            .shfooter .title[aria-expanded=true] .fa-angle-up {
                    display: block;
            }

            .shfooter .navbar-toggler {
                    display: inline-block;
                    padding: 0;
            }

            }

            .resize {
                text-align: center;
            }
            .resize {
                margin-top: 3rem;
                font-size: 1.25rem;
            }
            /*RESIZESCREEN ANIMATION*/
            .fa-angle-double-right {
                animation: rightanime 1s linear infinite;
            }

            .fa-angle-double-left {
                animation: leftanime 1s linear infinite;
            }
            @keyframes rightanime {
                50% {
                    transform: translateX(10px);
                    opacity: 0.5;
            }
                100% {
                    transform: translateX(10px);
                    opacity: 0;
            }
            }
            @keyframes leftanime {
                50% {
                    transform: translateX(-10px);
                    opacity: 0.5;
            }
                100% {
                    transform: translateX(-10px);
                    opacity: 0;
            }
            }

            /* Contact Chip */

            .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #2C54C1;
            margin-top: 5px;
            }

            .chip img {
            float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            }

            .zoom {
            transition: transform .3s;
            }

            .zoom:hover {
            -ms-transform: scale(1.4); /* IE 9 */
            -webkit-transform: scale(1.4); /* Safari 3-8 */
            transform: scale(1.4); 
            }

        </style>
  </head>

    <body>

        <!-- Back-to-Top and Back Button -->

        <a data-toggle="tooltip" title="Back-To-Top" class="top-link hide" href="" id="js-top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M12 6H0l6-6z"/></svg>
            <span class="screen-reader-text">Back to top</span>
        </a>

        <!-- Eto yung navbar -->
<style>

.text1 {
    font-size: 2.5rem;
}

.text2 {
    font-size: 1.1rem;
}

.picture {
    width: 100px;
    height: auto;
}

        </style>
  </head>

    <body>

        <!-- Back-to-Top and Back Button -->

        <a data-toggle="tooltip" title="Back-To-Top" class="top-link hide" href="" id="js-top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M12 6H0l6-6z"/></svg>
            <span class="screen-reader-text">Back to top</span>
        </a>

        <!-- Eto yung navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="logo">
        <a href="#"><img src="assets/goloo.png" alt="logo" height="60px" /></a>
    </div>
    <a class="navbar-brand" href="resident_homepage.php"><b>Biclatan InfoSystem</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="resident_homepage.php" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
                <a href="#down3" class="nav-link">PROCEDURE</a>
            </li>
            <li class="nav-item">
                <a href="#down1" class="nav-link">REGISTRATION</a>
            </li>
        </ul>
    </div>

    <div class="dropdown ml-auto">
        <button title="Your Account" class="btn btn-primary dropdown-toggle" style="margin-right: 2px;" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
            <span class="caret" style="margin-left: 2px;"></span>
        </button>
        <ul class="dropdown-menu" style="width: 175px;">
            <li><a class="dropdown-item" href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-user"></i> &nbsp; Personal Profile</a></li>
            <li><a class="dropdown-item" href="resident_changepass.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-lock"></i>&nbsp; Change Password</a></li>
            <li><a class="dropdown-item" href="logout.php"> <i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a></li>
        </ul>
    </div>
</nav>

        <div class="container-fluid container1"  style="height:450px; background-color: #ececec;"> 
            <div class="row"> 
                <div class="col"> 
                    <div class="header">
                        <h1 class="text1">Barangay Clearance </h1>
                        <h5> A Barangay Clearance is a document issued by the Barangay Secretary and signed by the 
                        <br> Barangay Captain stating that you are a living at that specific place and you are 
                        <br> of good moral character. Somehow, a smaller version of NBI or Police clearance.</h5>
                    </div>

                    <br>

                    <div class="d-flex justify-content-center">
                <img class="picture" src="icons/Documents/docu1.png" alt="Document 1">&nbsp;
                <img class="picture" src="icons/Documents/docu3.png" alt="Document 3">&nbsp;
                <img class="picture" src="icons/Documents/docu2.png" alt="Document 2">&nbsp;
            </div>
                </div>
            </div>
        </div>

        <div id="down3"></div>

        <br>
        

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    
                    <br><h1>Procedure</h1>
                    <hr style="background-color: black;">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <i class="fas fa-laptop fa-4x"></i>

                    <br>
                    <br>

                    <h3>Step 1: Fill-Up</h3>
                    <p style="text-align:justify;">Fill-Up the entire form in our system.</p>
                    
                </div>

                <div class="col">
                    <i class="fas fa-user-check fa-4x"></i>

                    <br>
                    <br>

                    <h3>Step 2: Assessment</h3>
                    <p style="text-align:justify;">Verify all of the information you've been given
                    in our system that we can use to make the information of your document
                    accurately.</p>
                </div>

                <div class="col">
                    <i class="fas fa-file fa-4x"></i>

                    <br>
                    <br>

                    <h3>Step 3: Release</h3>
                    <p style="text-align:justify;">Releasing of your document. Please bring any valid ID.</p>
                    
                </div>
            </div>

            <div id="down2"></div>

            <br>
            <br>
            <br>

            
            </div>
        </div>

        <div id="down1"></div>

        <br>
        

        <!-- Button trigger modal -->

        <div class="container">

            <br><h1 class="text-center">Registration</h1>
            <hr style="background-color:black;">

            <div class="col">   
                <button type="button" class="btn btn-primary applybutton" data-toggle="modal" data-target="#exampleModalCenter">
                    Request Form
                </button>
            </div>


            <!-- Modal -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Barangay Clearance Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- Modal Body -->

                        <div class="modal-body">
                            <form method="post">

                                <div class="row"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last Name:</label>
                                            <input name="lname" type="text" class="form-control" 
                                            placeholder="Enter Last Name" value="<?= $userdetails['surname']?>">
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mi" class="mtop">Middle Name </label>
                                            <input name="mi" type="text" class="form-control" 
                                            placeholder="Enter Middle Name" value="<?= $userdetails['mname']?>" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First Name:</label>
                                            <input name="fname" type="text" class="form-control" 
                                            placeholder="Enter First Name" value="<?= $userdetails['firstname']?>" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="purposes">Purposes:</label>
                                            <select class="form-control" name="purpose" id="purposes" placeholder="Enter Status" required>
                                                <option value="">Choose your Purpose</option>
                                                <option value="Local Employment">Local Employment</option>
                                                <option value="Loan">Loan</option>
                                                <option value="School/S.S.S Requirements">School/S.S.S Requirements</option>
                                                <option value="NBI/Police Clearance">NBI/Police Clearance</option>
                                                <option value="Postal ID Application">Postal ID</option>
                                                <option value="Bank Requirements">Bank Requirements</option>
                                                <option value="Water/Electric service Connection">Water/Electric service Connection</option>
                                                <option value="Legal Purpose">Legal Purpose</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> House No: </label>
                                            <input type="text" class="form-control" name="houseno"  
                                            placeholder="Enter House No." value="<?= $userdetails['houseno']?>"  required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Street: </label>
                                            <input type="text" class="form-control" name="street"  
                                            placeholder="Enter Purok" value="<?= $userdetails['street']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                            <!--<label> Barangay: </label>-->
                                            <input type="hidden" class="form-control" name="brgy"  value="Yuson"
                                            placeholder="Enter Barangay" value="<?= $userdetails['brgy']?>" required>

                             
                                            <!--<label> Municipality: </label>-->
                                            <input type="hidden" class="form-control" name="municipal" value="Guimba"
                                            placeholder="Enter Municipality" value="<?= $userdetails['municipal']?>" required>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select class="form-control" name="status" id="status" placeholder="Enter Status" value="<?= $userdetails['status']?>" required>
                                            <option value="">Choose your Status</option>
                                            <option value="Single">Single</option>
                                                <option value="In a relationship">In a relationship</option>
                                                <option value="Engaged">Engaged</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Divorces">Divorced</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Age" class="mtop">Age: </label>
                                            <input type="number" name="age" class="form-control" 
                                            placeholder="Enter your Age" value="<?= $userdetails['age']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                        <!-- Modal Footer -->
            
                        <div class="modal-footer" style="justify-content: flex-start; margin-left: 130px; width: 100%; border: none;">
                            <div class="paa">
                                <input name="id_resident" type="hidden" class="form-control" value="<?= $userdetails['id_resident']?>">
                                <input name="addedby" type="hidden" class="form-control" value="<?= $userdetails['surname']?> <?= $userdetails['firstname']?> <?= $userdetails['mname']?>">
                                <button name ="create_brgyclearance" type="submit" class="btn btn-primary">Submit Request</button>
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        </form>
        

        <br>
        <br>
        <br>

        <!-- Footer -->

        <footer id="footer" class="bg-primary text-white d-flex-column text-center">
            <hr class="mt-0">

            
                    <!--/.Third column-->

                    <hr class="clearfix w-100 d-md-none mb-0">
 
                    <!--Fourth column-->

                    <div class="col-md-3 mx-auto shfooter" id="down">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Contact Us:</h5>
                        <div class="d-md-none title" data-target="#Contact-Us" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold">Contact Us:
                            <div class="float-right navbar-toggler">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                        </div>
                        <ul class="list-unstyled collapse" id="Contact-Us">
                            <li>
                                <div class="zoom">
                                    <div class="chip" style="font-size:10px;">
                                            <img src="assets/goloo.png" alt="Person" width="96" height="96">
                                        Barangay Biclatan | (046) 509 1644
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

             <!--/.Footer Links-->

            <hr class="mb-0">

            <!--Copyright-->

            <div class="py-3 text-center">
                Copyright 2023 -
                <script>
                document.write(new Date().getFullYear())
                </script> 
                  | Barangay Biclatan Information System
            </div>

        </footer>


        <script>
            // Set a variable for our button element.
            const scrollToTopButton = document.getElementById('js-top');

            // Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
            const scrollFunc = () => {
            // Get the current scroll value
            let y = window.scrollY;
            
            // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
            if (y > 0) {
                scrollToTopButton.className = "top-link show";
            } else {
                scrollToTopButton.className = "top-link hide";
            }
            };

            window.addEventListener("scroll", scrollFunc);

            const scrollToTop = () => {
            // Let's set a variable for the number of pixels we are from the top of the document.
            const c = document.documentElement.scrollTop || document.body.scrollTop;
            
            // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
            // We'll also animate that scroll with requestAnimationFrame:
            // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
            if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                // ScrollTo takes an x and a y coordinate.
                // Increase the '10' value to get a smoother/slower scroll!
                window.scrollTo(0, c - c / 10);
            }
            };

            // When the button is clicked, run our ScrolltoTop function above!
            scrollToTopButton.onclick = function(e) {
            e.preventDefault();
            scrollToTop();
            }
        </script>

        <script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>

        <script>
            $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
                } // End if
            });
            });
        </script>

        <script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>

    </body>
</html>
