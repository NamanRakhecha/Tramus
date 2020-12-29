<?php  require('webpage header.php'); ?>

<?php
require('connect.php');

if(isset($_GET['id_reg_no'])){
	$id_reg_no=$_GET['id_reg_no'];
	$sql="select * from buses where id_reg_no='".$id_reg_no."'";
	$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	
	if($num>0){
		while($row=mysqli_fetch_array($res))
		{
		 $id_reg_no=$row['id_reg_no'];
		 $bus_name=$row['bus_name'];
		 $drivers_id=$row['drivers_id']; 
		 $stops_id=$row['stops_id'];
		 $status=$row['status'];
        }
	}
}
?>
<body style='background-color:#A2A9B1;'>;       

<div class="g-position--relative">             
<div class="g-container--md g-padding-y-70--sm g-padding-y-80--lg">
           
<div class="container g-padding-y-150--xs">

<form action="update_bus.php" method="POST" name="editform" class="form-horizontal">


<div class="form-group">
	<label class="control-label col-sm-3 col-lg-2 text-uppercase" for="reg_num">Bus Registration Number</label>	
	<div class="col-sm-6">
    <input type="text" name="id_reg_no" class="form-control" value="<?php echo $id_reg_no ?>" required readonly>
    </div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3 col-lg-2 text-uppercase" for="bus_name">Bus Name</label>	
	<div class="col-sm-6">
	<input type="text" name="bus_name" class="form-control" value="<?php echo $bus_name ?>" required>
    </div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3 col-lg-2 text-uppercase" for="drivers_id">Driver's Id</label>	
	<div class="col-sm-6">
	<input type="number" name="drivers_id" class="form-control" value="<?php echo $drivers_id ?>" required readonly>
    </div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3 col-lg-2 text-uppercase" for="stops_id">Stop's Id</label>	
	<div class="col-sm-6">
	<input type="number" name="stops_id" class="form-control" value="<?php echo $stops_id ?>" required readonly>
    </div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3 col-lg-2 text-uppercase" for="status">Status</label>	
	<div class="col-sm-6">
	<input type="number" name="status" min="0" max="1" class="form-control" value="<?php echo $status ?>" required>
    </div>
</div>

<div class="form-group">
      <div class="col-sm-offset-4 col-sm-offset-6  col-xs-offset-2 g-padding-y-80--xs">	
            <button type="submit" name="submit" class="btn btn-danger btn-lg text-uppercase g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                    
      </div>   
                     
</div>


</form>
</div>
</div>
</div>
</body>


<?php require('webpage footer.php'); ?>