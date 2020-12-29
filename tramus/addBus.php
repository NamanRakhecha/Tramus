  <?php require('webpage header.php') ?>
        <!--========== END HEADER ==========-->

        <?php
require('connect.php');

if(isset($_POST['id_reg_no'])){

$id_reg_no=$_POST['id_reg_no'];
$bus_name=$_POST['bus_name'];
$drivers_id=$_POST['drivers_id'];
$stops_id=$_POST['stops_id'];
$status=$_POST['status'];


$sql="insert into `buses`(`id_reg_no`,`bus_name`,`drivers_id`,`stops_id`,`status`) VALUES('$id_reg_no','$bus_name','$drivers_id','$stops_id','$status')";

if(mysqli_query($conn,$sql))
    echo "<script type='text/javascript'>
       alert('Bus added successfully !');
    </script>";
else
    echo "<script type='text/javascript'>
       alert('Sorry! Cannot add this bus... Please try again !');
    </script>";

}
?>

        <!--========== PAGE CONTENT ==========-->
       <!-- Add Bus Form -->
       <body style='background-color:#9999ff;'>       

        <div class="g-position--relative">
            <div class="g-container--md g-padding-y-120--xs g-padding-y-125--sm">
            	<br><br>
                <form action="addBus.php" method="POST" name="addBusDb" class="center-block g-width-500--sm g-width-550--md">
	                <div class="g-margin-b-30--xs">
                        <input type="text" name="id_reg_no" class="form-control s-form-v3__input" placeholder="* Bus Registration Number" required>
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" name="bus_name" class="form-control s-form-v3__input" placeholder="* Bus Name" required>
                    </div>
                    <div class="row g-row-col-5 g-margin-b-25--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="number" name="drivers_id" class="form-control s-form-v3__input" placeholder="* Driver's id" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="number" name="stops_id" class="form-control s-form-v3__input" placeholder="* Stop's id" required>
                        </div>
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="number" name="status" class="form-control s-form-v3__input" placeholder="* Status" required>
                    </div>

                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </body>
        <!-- End Add Bus Form -->
        <!--========== END PAGE CONTENT ==========-->

       <?php require('webpage footer.php') ?>