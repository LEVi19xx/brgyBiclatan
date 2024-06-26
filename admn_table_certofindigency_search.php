<?php
	// require the database connection
	require 'classes/conn.php';
    $bmis->delete_certofindigency();
	if(isset($_POST['search_certofindigency'])){
		$keyword = $_POST['keyword'];
?>
<table class="table table-hover text-center table-bordered table-responsive" >

    <thead class="alert-info">
        <tr>
            <th> Actions</th>
            <th> Resident ID </th>
            <th> Surname </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Nationality </th>
            <th> Address </th>
            <th> Purpose </th>
            <th> Date </th>
        </tr>
    </thead>

    <tbody>     
        <?php
            
            $stmnt = $conn->prepare("SELECT * FROM `tbl_rescert` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
                or  `id_resident` LIKE '%$keyword%' or  `nationality` LIKE '%$keyword%' or  `houseno` LIKE '%$keyword%'
            or `street` LIKE '%$keyword%' or `brgy` LIKE '%$keyword%' or `municipal` LIKE '%$keyword%' or `date` LIKE '%$keyword%' or `purpose` LIKE '%$keyword%'");
            $stmnt->execute();
            
            while($view = $stmnt->fetch()){
        ?>
            <tr>
                <td>    
                    <form action="" onsubmit="return confirmAction();" method="post">
                        <a class="btn btn-success" target="blank" style="width: 80px; font-size: 15px; border-radius:5px; margin-bottom: 2px;" href="indigency_form.php?id_indigency=<?= $view['id_indigency'];?>">Generate</a> 
                        <input type="hidden" name="id_indigency" value="<?= $view['id_indigency'];?>">
                        <button class="btn btn-danger" style="width: 80px; font-size: 15px; border-radius:5px;" type="submit" name="delete_certofindigency"> Delete </button>
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
                <td> <?= $view['nationality'];?> </td>
                <td> <?= $view['houseno'];?>, <?= $view['street'];?>, <?= $view['brgy'];?>, <?= $view['municipal'];?></td>
                <td> <?= $view['purpose'];?> </td>
                <td> <?= $view['date'];?> </td>
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
            <th> Nationality </th>
            <th> Address </th>
            <th> Purpose </th>
            <th> Date </th>
        </tr>
    </thead>
    
    <tbody>
        <?php if(is_array($view)) {?>
            <?php foreach($view as $view) {?>
                <tr>
                    <td>    
                        <form action="" onsubmit="return confirmAction();" method="post">
                            <a class="btn btn-success" target="blank" style="width: 80px; font-size: 15px; border-radius:5px; margin-bottom: 2px;" href="indigency_form.php?id_indigency=<?= $view['id_indigency'];?>">Generate</a> 
                            <input type="hidden" name="id_indigency" value="<?= $view['id_indigency'];?>">
                            <button class="btn btn-danger" style="width: 80px; font-size: 15px; border-radius:5px;" type="submit" name="delete_certofindigency"> Delete </button>
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
                    <td> <?= $view['nationality'];?> </td>
                    <td> <?= $view['houseno'];?>, <?= $view['street'];?>, <?= $view['brgy'];?>, <?= $view['municipal'];?></td>
                    <td> <?= $view['purpose'];?> </td>
                    <td> <?= $view['date'];?> </td>
                </tr>
            
            <?php
                }
            ?>
        <?php
            }
        ?>
    </tbody>
    
</table>

<?php
	}
$con = null;
?>