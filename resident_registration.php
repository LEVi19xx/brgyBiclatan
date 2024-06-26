<?php 
     require('classes/resident.class.php');
    $residentbmis->create_resident();
     //$data = $bms->get_userdata();

     
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title> Barangay Biclatan Information System </title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <!-- bootstrap css --> 
        <link href="design.css" rel="stylesheet" type="text/css"> 
        
        <!-- fontawesome icons -->
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <style>
        
        .field-icon {
        margin-left: 74%;
        margin-top: -8%;
        position: absolute;
        z-index: 2;
        }

    </style>
    
    <body >

        <!-- eto yung navbar -->
        <nav class="navbar navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" style="color: white;">Barangay Biclatan Information System</a>
        </nav>

        <div class="container-fluid"  style="margin-top: 4em;">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Registration Form</h1>
                    <br>
                </div>
            </div>

            <div class="row margin mtop"> 
                <div class="col-sm"> </div>

                <div class="col-sm-8">   
                    <div class="card mbottom" style="margin-bottom: 3em;">
                        <div class="card-body" >
                            <form method="post" class=""> 
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Last Name: </label>
                                            <input type="text" class="form-control" name="lname"  placeholder="Enter Last Name" pattern="[A-Za-z]{2,}" title="Please enter at least 2 letters, and only use letters." required>
                                            <div class="valid-feedback"></div>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="mtop" >First Name: </label>
                                            <input type="text" class="form-control" name="fname"  placeholder="Enter First Name" pattern="[A-Za-z ]{2,}" title="Please enter at least 2 letters, and only use letters." required><div class="valid-feedback"></div>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="col"> 
                                        <div class="form-group">
                                            <label class="mtop"> Middle Name: </label>
                                            <input type="text" class="form-control" name="mi" placeholder="Enter Middle Name" pattern="[A-Za-z]{2,}" title="Please enter at least 2 letters, and only use letters.">
                                        </div>
                                    </div>
                                </div>

                                <div class="row"> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="mtop">Contact Number:</label>
                                            <input type="tel" class="form-control" name="contact" maxlength="11" pattern="[0-9]{11}" placeholder="0912-345-6789" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label>Email: </label>
                                            <input type="email" class="was validated form-control" name="email"  placeholder="Enter Email" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="form-group">
                                        <label>Password:</label>
                                                <input type="password" class="form-control" id="password-field" name="password" placeholder="Enter Password" minlength="8" maxlength="16" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@_#*])[A-Za-z\d@_#*]{8,16}$" title="Password must be 8-16 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character (@, _, #, or *)." required>
                                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Password must be 8-16 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character (@, _, #, or *).</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> House No: </label>
                                            <input type="text" class="form-control" name="houseno"  placeholder="Enter House No." maxlength="4" pattern="\d{1,4}" title="Please enter numbers only." required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                        <label> Street: </label>
                                            <input type="text" class="form-control" name="street"  placeholder="Enter Street Name" pattern="[A-Za-z0-9\s]{2,}" title="Please enter at least 2 letters, and only use letters." required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Barangay: </label>
                                                <input type="text" class="form-control" name="brgy"  value="Biclatan" readonly required>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                        <label> Municipality: </label>
                                                <input type="text" class="form-control" name="municipal" value="General Trias" readonly required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="mtop">Birth Date: </label>
                                            <input type="date" class="form-control" name="bdate" id="birthdate" oninput="calculateAge()" required max="<?php echo date('Y-m-d'); ?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="mtop">Place of Birth </label>
                                            <input type="text" class="form-control" name="bplace"  placeholder="Enter Place of Birth" required pattern="[^\d]*">
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label class="mtop">Nationality:</label>
                                            <select class="form-control" name="nationality" onchange="updateNationality(this.value)" required>
                                                <option value="American">American</option>
                                                <option value="Australian">Australian</option>
                                                <option value="Brazilian">Brazilian</option>
                                                <option value="British">British</option>
                                                <option value="Canadian">Canadian</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="Filipino" selected>Filipino</option>
                                                <option value="French">French</option>
                                                <option value="German">German</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Indonesian">Indonesian</option>
                                                <option value="Italian">Italian</option>
                                                <option value="Japanese">Japanese</option>
                                                <option value="Korean">Korean</option>
                                                <option value="Malaysian">Malaysian</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Thai">Thai</option>
                                                <option value="Vietnamese">Vietnamese</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col"> 
                                        <div class="form-group">
                                            <label>Civil Status: </label>
                                            <select class="form-control" name="status" id="status" required>
                                                <option value="">Choose your Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Divorced">Divorced</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input class="form-control" name="age" id="age"  required readonly>
                                        </div>
                                    </div>

                                    <div class="col rb">
                                        <div class="form-group">
                                            <label class="mtop">Sex:</label>
                                            <select class="form-control" name="sex" id="sex" required>
                                                <option value="">Choose your Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>         
                                </div>

                                <div class="row">
                                    
                                    <div class="col rb"> 
                                        <div class="form-group">
                                            <label>Are you a registered voter? </label>
                                            <select class="form-control" name="voter" id="regvote" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>                                    
                                    <!--<div class="col rb"> 
                                        <div class="form-group">
                                            <label>Are you head of the family? </label>
                                            <select class="form-control" name="family_role" id="famhead" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>-->
                                    <div class="col rb"> 
                                        <div class="form-group">
                                            <label>PWD? </label>
                                            <select class="form-control" name="pwd" id="pwd" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col rb"> 
                                        <div class="form-group">
                                            <label>Indigent? </label>
                                            <select class="form-control" name="indigent" id="indigent" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>                                    
                                    <div class="col rb"> 
                                        <div class="form-group">
                                            <label>Single Parent? </label>
                                            <select class="form-control" name="single_parent" id="single_parent" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col rb"> 
                                        <div class="form-group">
                                            <label>Malnourished? </label>
                                            <select class="form-control" name="malnourished" id="malnourished" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col rb"> 
                                        <div class="form-group">
                                            <label>Member of 4Ps? </label>
                                            <select class="form-control" name="four_ps" id="four_ps" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>                                    
                                    <!--<div class="col rb"> 
                                        <div class="form-group">
                                            <label>COVID-19 Vaccinated? </label>
                                            <select class="form-control" name="vaccinated" id="vaccinated" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col rb"> 
                                        <div class="form-group">
                                            <label>Pregnancy Status: </label>
                                            <select class="form-control" name="pregnancy" id="pregnancy" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>-->

                                </div>

                                <br>
                                    
                                <input type="hidden" class="form-control" name="role" value="resident">
                                <center><button style="width: 130px;" class="btn btn-primary" type="submit" name="add_resident"> Submit </button>
                                <a style="width: 130px;" class="btn btn-danger" href="index_login.php"> Back to Login</a></center>
                            </form>
                        </div>
                    </div> 
                </div>
                <div class="col-sm"> </div>
            </div>
        </div>

        <!-- Footer -->

        <footer id="footer" class="bg-primary text-white d-flex-column text-center">

            <!--Copyright-->

            <div class="py-3 text-center">
              2023 - 
                <script>
                document.write(new Date().getFullYear())
                </script> 
                | Barangay Biclatan Information System
            </div>

        </footer>

        <script>
            $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
            input.attr("type", "text");
            } else {
            input.attr("type", "password");
            }
            });

        function calculateAge() {
        var birthdate = document.getElementById('birthdate').value;
        var today = new Date();
        var birthdateObj = new Date(birthdate);
        var age = today.getFullYear() - birthdateObj.getFullYear();

        // Check if the birthday has occurred this year
        if (today.getMonth() < birthdateObj.getMonth() || (today.getMonth() === birthdateObj.getMonth() && today.getDate() < birthdateObj.getDate())) {
            age--;
        }

        // Update the "Age" input field
        document.getElementById('age').value = age;
    }
        </script>

        <script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
    </body>
</html>

