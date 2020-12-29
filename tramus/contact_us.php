  <?php require('webpage header.php') ?>
        <!--========== END HEADER ==========-->

        <!--========== PAGE CONTENT ==========-->
       <!-- Contact us Form -->
       <body style="background-color:#050404;">
        <div class="g-position--relative">
            <div class="g-container--md g-padding-y-150--xs g-padding-y-145--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Get in Touch</h2>
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs">
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                            <p class="g-color--white-opacity">tramus.bca@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Address</h4>
                            <p class="g-color--white-opacity">VVM's Shree Damodar College Of Commerce And Economics Comba Margao-Goa</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Call at</h4>
                            <p class="g-color--white-opacity">+91-8668617507</p>
                        </div>
                    </div>
                </div>
                <form action="contact_us.php" method="POST" name="Contact_us" class="center-block g-width-500--sm g-width-550--md">
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
                        <div class="col-sm-6">
                            <input type="tel"  pattern="^\d{10}$" name="Phone"   class="form-control s-form-v3__input" placeholder="* Phone" required>
                        </div>
                    </div>
                    <div class="g-margin-b-70--xs">
                        <textarea  name="Message" class="form-control s-form-v3__input" rows="5" placeholder="* Your Message" required></textarea>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="Submit" name="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                    </div>
                </form>
                <img class="img-responsive" src="img/mockups/contactus.png" alt="Mockup Image">
            </div>
        </div>
    </body>
        <!-- End Contact us Form -->
        <!--========== END PAGE CONTENT ==========-->

<?php
require('connect.php');

  if (isset($_POST['submit'])) {

$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Message=$_POST['Message'];

$sql="insert into `contact_us` (`First_Name`,`Last_Name`,`Email`,`Phone`,`Message`) VALUES('$First_Name','$Last_Name','$Email','$Phone','$Message')";

if(mysqli_query($conn,$sql))
    echo  "Reload";
else
    echo mysqli_error();
    }
      else 
         echo "Empty Table";

?>
       <?php require('webpage footer.php') ?>