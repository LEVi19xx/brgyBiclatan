<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_bspermit'])){
		$keyword = $_POST['keyword'];
?>
	<table class="table table-hover text-center table-bordered table-responsive">

    <thead class="alert-info">
        <tr>
            <th> Actions</th>
            <th> Resident ID </th>
            <th> Surname </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Business Name </th>
            <th> Address </th>
            <th> Business Industry </th>
            <th> Area of Establishment </th>
        </tr>
    </thead>

    <tbody>     
        <?php
            
            $stmnt = $conn->prepare("SELECT * FROM `tbl_bspermit` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
            or `bsname` LIKE '%$keyword%' or  `id_resident` LIKE '%$keyword%' or  `houseno` LIKE '%$keyword%' or  `street` LIKE '%$keyword%'
            or `brgy` LIKE '%$keyword%' or `municipal` LIKE '%$keyword%' or `bsindustry` LIKE '%$keyword%' or `aoe` LIKE '%$keyword%' ");
            $stmnt->execute();
            
            while($view = $stmnt->fetch()){
        ?>
            <tr>
                <td>    
                    <form action=""  onsubmit="return confirmAction();" method="post">
                        <a class="btn btn-success" target="blank"  style="width: 80px; font-size: 15px; border-radius:5px; margin-bottom: 2px;" href="businesspermit_form.php?id_bspermit=<?= $view['id_bspermit'];?>">Generate</a> 
                        <input type="hidden" name="id_bspermit" value="<?= $view['id_bspermit'];?>">
                        <button class="btn btn-danger"  style="width: 80px; font-size: 15px; border-radius:5px;" type="submit" name="delete_bspermit"> Delete </button>
                    </form>
                    <script>
                                                    function confirmAction() {
                                                        // Display a confirmation dialog
                                                        var confirmation = confirm("Are you sure you want to proceed?");

                                                        // If the user confirms, return true to submit the form
                                                        if (confirmation) {
                                                            return true;
                                                        } else {
                                                            // If the user cancels, return false to prevent form submission
                                                            return false;
                                                        }
                                                    }
                                                </script>
                </td>
                <td> <?= $view['id_resident'];?> </td> 
                <td> <?= $view['lname'];?> </td>
                <td> <?= $view['fname'];?> </td>
                <td> <?= $view['mi'];?> </td>
                <td> <?= $view['bsname'];?> </td>
                <td> <?= $view['houseno'];?>, <?= $view['street'];?>, <?= $view['brgy'];?>, <?= $view['municipal'];?> </td>
                <td> <?= $view['bsindustry'];?> </td>
                <td> <?= $view['aoe'];?> </td>
            </tr>
        <?php
        }
        ?>
    </tbody>

</table>
<?php		
	}else{
?>
<table class="table table-hover text-center table-bordered table-responsive">

    <thead class="alert-info">
        <tr>
            <th> Actions</th>
            <th> Resident ID </th>
            <th> Surname </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Business Name </th>
            <th> Address </th>
            <th> Business Industry </th>
            <th> Area of Establishment </th>
        </tr>
    </thead>

    <tbody>
        <?php if(is_array($view)) {?>
            <?php foreach($view as $view) {?>
                <tr>
                    <td>    
                        <form action="" onsubmit="return confirmAction();" method="post">
                            <a class="btn btn-success" target="blank"  style="width: 80px; font-size: 15px; border-radius:5px; margin-bottom: 2px;" href="businesspermit_form.php?id_bspermit=<?= $view['id_bspermit'];?>">Generate</a> 
                            <input type="hidden" name="id_bspermit" value="<?= $view['id_bspermit'];?>">
                            <button class="btn btn-danger"  style="width: 80px; font-size: 15px; border-radius:5px;" type="submit" name="delete_bspermit"> Delete </button>
                        </form>
                        <script>
                                                    function confirmAction() {
                                                        // Display a confirmation dialog
                                                        var confirmation = confirm("Are you sure you want to proceed?");

                                                        // If the user confirms, return true to submit the form
                                                        if (confirmation) {
                                                            return true;
                                                        } else {
                                                            // If the user cancels, return false to prevent form submission
                                                            return false;
                                                        }
                                                    }
                                                </script>
                    </td>
                    <td> <?= $view['id_resident'];?> </td> 
                    <td> <?= $view['lname'];?> </td>
                    <td> <?= $view['fname'];?> </td>
                    <td> <?= $view['mi'];?> </td>
                    <td> <?= $view['bsname'];?> </td>
                    <td> <?= $view['houseno'];?>, <?= $view['street'];?>, <?= $view['brgy'];?>, <?= $view['municipal'];?> </td>
                    <td> <?= $view['bsindustry'];?> </td>
                    <td> <?= $view['aoe'];?> </td>
                </tr>
            <?php
                }
            ?>
        <?php
            }
        ?>
    </tbody>
    
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
<!-- responsive tags for screen compatibility -->
<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
<!-- custom css --> 
<link href="customcss/regiformstyle.css" rel="stylesheet" type="text/css">
<!-- bootstrap css --> 
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
<!-- fontawesome icons -->
<script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>

<?php
	}
$con = null;
?>