<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $id_resident = $_GET['id_resident'];
   $view = $residentbmis->get_single_resident($id_resident);
   $residentbmis->update_resident();

?>

<?php 
    include('dashboard_sidebar_start.php');
?>

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-2"> </div> 
        <div class="col-md-8"> 
            <div class="card">
                <div class="card-header bg-primary text-white"> Update Barangay Resident Data</div>
                <div class="card-body">
                    <form method="post"> 
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label> Last Name: </label>
                                    <input type="text" class="form-control" name="lname"  value="<?= $view['lname']?>" required>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="form-group">
                                    <label class="mtop" >First Name: </label>
                                    <input type="text" class="form-control" name="fname"  value="<?= $view['fname']?>" required>
                                </div>
                            </div>

                            <div class="col"> 
                                <div class="form-group">
                                    <label class="mtop"> Middle Name: </label>
                                    <input type="text" class="form-control" name="mi"value="<?= $view['mi']?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col">
                                <div class="form-group">
                                    <label class="mtop">Contact Number:</label>
                                    <input type="tel" class="form-control" name="contact" maxlength="11" pattern="[0-9]{11}" value="<?= $view['contact']?>" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Email: </label>
                                    <input type="email" class="form-control" name="email"  value="<?= $view['email']?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label> House No: </label>
                                    <input type="text" class="form-control" name="houseno"  value="<?= $view['houseno']?>" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label> Street: </label>
                                    <input type="text" class="form-control" name="street"  value="<?= $view['street']?>" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label> Barangay: </label>
                                    <input type="text" class="form-control" name="brgy"  value="<?= $view['brgy']?>" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label> Municipality: </label>
                                    <input type="text" class="form-control" name="municipal" value="<?= $view['municipal']?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="mtop">Birth Date: </label>
                                    <input type="date" class="form-control" name="bdate"  value="<?= $view['bdate']?>" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="mtop">Birth Place </label>
                                    <input type="text" class="form-control" name="bplace"  value="<?= $view['bplace']?>" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="mtop">Nationality: </label>
                                    <input type="text" class="form-control" name="nationality"  value="<?= $view['nationality']?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col"> 
                                <div class="form-group">
                                    <label>Status: </label>
                                    <input class="form-control" name="status" id="status" value="<?= $view['status']?>"  required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="number" class="form-control" name="age" value="<?= $view['age']?>" required>
                                </div>
                            </div>

                            <div class="col rb">
                                <div class="form-group">
                                    <label class="mtop">Sex</label>
                                    <input type="text" class="form-control" name="sex" id="sex" value="<?= $view['sex']?>" required>
                                </div>
                            </div>         
                        </div>

                        <div class="row">
                                    
                            <div class="col rb"> 
                                <div class="form-group">
                                    <label>Are you a registered voter? </label>
                                    <select class="form-control" name="voter" id="regvote" required>
                                        <option value="" <?php if($view['voter'] == '') echo 'selected="selected"'; ?>>...</option>
                                        <option value="Yes" <?php if($view['voter'] == 'Yes') echo 'selected="selected"'; ?>>Yes</option>
                                        <option value="No" <?php if($view['voter'] == 'No') echo 'selected="selected"'; ?>>No</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>                                    
                                   
                            <div class="col rb"> 
                                <div class="form-group">
                                    <label>PWD? </label>
                                    <select class="form-control" name="pwd" id="pwd" required>
                                        <option value="" <?php if($view['pwd'] == '') echo 'selected="selected"'; ?>>...</option>
                                        <option value="Yes" <?php if($view['pwd'] == 'Yes') echo 'selected="selected"'; ?>>Yes</option>
                                        <option value="No" <?php if($view['pwd'] == 'No') echo 'selected="selected"'; ?>>No</option>
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
                                        <option value="" <?php if($view['indigent'] == '') echo 'selected="selected"'; ?>>...</option>
                                        <option value="Yes" <?php if($view['indigent'] == 'Yes') echo 'selected="selected"'; ?>>Yes</option>
                                        <option value="No" <?php if($view['indigent'] == 'No') echo 'selected="selected"'; ?>>No</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>                                    
                            <div class="col rb"> 
                                <div class="form-group">
                                    <label>Single Parent? </label>
                                    <select class="form-control" name="single_parent" id="single_parent" required>
                                        <option value="" <?php if($view['single_parent'] == '') echo 'selected="selected"'; ?>>...</option>
                                        <option value="Yes" <?php if($view['single_parent'] == 'Yes') echo 'selected="selected"'; ?>>Yes</option>
                                        <option value="No" <?php if($view['single_parent'] == 'No') echo 'selected="selected"'; ?>>No</option>
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
                                        <option value="" <?php if($view['malnourished'] == '') echo 'selected="selected"'; ?>>...</option>
                                        <option value="Yes" <?php if($view['malnourished'] == 'Yes') echo 'selected="selected"'; ?>>Yes</option>
                                        <option value="No" <?php if($view['malnourished'] == 'No') echo 'selected="selected"'; ?>>No</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class="col rb"> 
                                <div class="form-group">
                                    <label>Member of 4Ps? </label>
                                    <select class="form-control" name="four_ps" id="four_ps" required>
                                        <option value="" <?php if($view['four_ps'] == '') echo 'selected="selected"'; ?>>...</option>
                                        <option value="Yes" <?php if($view['four_ps'] == 'Yes') echo 'selected="selected"'; ?>>Yes</option>
                                        <option value="No" <?php if($view['four_ps'] == 'No') echo 'selected="selected"'; ?>>No</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>

                        </div>

                        <br>
                        <hr>

                        <input type="hidden" class="form-control" name="role" value="resident">
                        <center><button class="btn btn-primary" style="width: 120px; font-size: 18px; border-radius:30px;" type="submit" name="update_resident"> Update </button>
                        <a href="admn_resident_crud.php" class="btn btn-danger" style="width: 120px; font-size: 18px; border-radius:30px;"> Back </a></center>
                        
                    </form>
                </div>
            </div>
            <div class="col-md-2"> </div>
        </div>
    </div>

</div>
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- /.container-fluid -->

<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
