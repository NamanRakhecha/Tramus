<?php require('webpage header.php'); ?>

<?php
if(isset($_POST['Designation'])){
require('connect.php');

$Designation=$_POST['Designation'];
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$House_no=$_POST['House_no'];
$Building=$_POST['Building'];
$City=$_POST['City'];
$State=$_POST['State'];
$Pincode=$_POST['Pincode'];
$Bus_name=$_POST['Bus_name'];
$Registration_number=$_POST['Registration_number'];
$Trips=$_POST['Trips'];
$Start_point=$_POST['Start_point'];
$End_point=$_POST['End_point'];
$Via=$_POST['Via'];



$sql="insert into `unregistered_request`(`Designation`,`First_Name`,`Last_Name`,`Email`,`Phone`,`House_no`,`Building`,`City`,`State`,`Pincode`,`Bus_name`,`Registration_number`,`Trips`,`Start_point`,`End_point`,`Via`) VALUES('$Designation','$First_Name','$Last_Name','$Email','$Phone','$House_no','$Building','$City','$State','$Pincode','$Bus_name','$Registration_number','$Trips','$Start_point','$End_point','$Via')";

if(mysqli_query($conn,$sql))
{echo "<script type='text/javascript'>alert('Data submitted successfully!!!')</script>";
    header('location:registerbus.php');
}
//else
    //echo mysqli_error();
    }
?>
    <body style="background-color:#F58B0C;">       
    <div class="g-position--relative">             
            <div class="g-container--md g-padding-y-150--sm g-padding-y-50--xs g-padding-y-95--lg">
                <div class="g-margin-b-130--xs"></div>
                <div class="g-text-center--xs">
                    <h2 class="g-font-size-30--xs g-margin-b-70--xs g-font-size-36--md g-color--white">Register Your Bus </h2>
                </div>
            
                
                <form action="registerbus.php" method="POST" name="RegisterBus" class="center-block g-width-500--sm g-width-550--md ">
                    <div class="g-margin-b-30--xs col-xs-15">
                        <select name="Designation" class="form-control s-form-v3__input" required>
                        <option value="" disabled selected hidden>* Designation-Driver/Conductor</option>    
                        <option value="Driver">Driver</option>
                        <option value="Conductor">Conductor</option>
                        </select>
                    </div>
                      
                    <div class="g-margin-b-30--xs">
                        <input type="text" name="First_Name" class="form-control s-form-v3__input" placeholder="* First Name" required>
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" name="Last_Name" class="form-control s-form-v3__input" placeholder="* Last Name" required>
                    </div>                    

                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" name="Email" class="form-control s-form-v3__input" placeholder="* Email" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="tel"  pattern="^\d{10}$" name="Phone"   class="form-control s-form-v3__input" placeholder="* Phone" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="text" name="House_no" class="form-control s-form-v3__input" placeholder="* H.No" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="text" name="Building" class="form-control s-form-v3__input" placeholder="* Building Name" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="text" name="City" class="form-control s-form-v3__input" placeholder="* City" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="text" name="State" class="form-control s-form-v3__input" placeholder="* State" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                        <input type="text" pattern="[0-9]{6}" maxlength="6" name="Pincode" class="form-control s-form-v3__input" placeholder="* Pincode" required>
                        </div>
                    </div>
                    <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Enter Bus Details</p>
                  
                </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" name="Bus_name" class="form-control s-form-v3__input" placeholder="* Name Of the Bus" required>
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="text" name="Registration_number" class="form-control s-form-v3__input" placeholder="* Registration Number" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="number" name="Trips" class="form-control s-form-v3__input" placeholder="* No. of trips" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="text" name="Start_point" class="form-control s-form-v3__input" placeholder="* Start Point" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs">
                            <input type="text" name="End_point" class="form-control s-form-v3__input" placeholder="* End Point" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="Via" class="form-control s-form-v3__input" placeholder="* Via" required>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="Submit" name="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                    </div>
                </form>
                            <img class="img-responsive" src="img/mockups/regbus.png" alt="Mockup Image">
            </div>
        </div>
    </body>

<?php require('webpage footer.php'); ?>