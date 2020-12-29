<?php
require("connection.php");
// $name =$_POST['userN'];
// $passwd =$_POST['passW'];

// $sql="SELECT * FROM `admin_login` where username='$name' and password='$passwd'";
// $res = mysqli_query($connection,$sql)
// or die("fail jalo re query tumcho".mysql_error());

// if (mysqli_num_rows($res) <= 0){
//     echo "

//     <script>
//     window.alert('incorrect password! Try Again Or Continue As User');
// window.history.back()
// </script>
//     ";

    
// } else{}
if ( !isset($_SESSION['uname'])){
    include 'login page.php';}
    else{
   require('webpage header.php');
 echo "


     
        <!--========== PAGE CONTENT ==========-->
     
    <body style='background-color:#D5D5D1;'>       
     
            <div class='container g-padding-y-150--xs'>
        <div class='row'>
            <div  class='col-lg-4 col-md-4 col-sm-3 col-xs-12'>
            <div  class='thumbnail'>
                <img src='edit bus.png'>
                <div class='caption'>
                    <h1>Bus Editor</h1>
                    <p>Here You can edit , delete ,add buses to the website</p>
                    <a class='btn btn-primary' role='button' href='add_delete_edit_bus.php'>EDITOR</a>
                 </div>
            </div>  
            </div>
            
            <div  class='col-lg-4 col-md-4 col-sm-3 col-xs-12'>
            <div  class='thumbnail'>
                <img src='edit bus.png'>
                <div class='caption'>
                    <h1>Stop orders</h1>
                    <p>Here You can add stop orders of the bus</p>
                    <a class='btn btn-primary' role='button' href='stoporder.php'>EDITOR</a>
                 </div>
            </div>  
            </div>

            <div  class='col-lg-4 col-md-4 col-sm-5 col-xs-12'>
            <div  class='thumbnail'>
                <img src='register.png'>
                <div class='caption'>
                    <h1>Bus Registration</h1>
                    <p>Here You can see the who has registered their buses and confirm them by providing username and password </p>
                    <a class='btn btn-primary' role='button' href='pending_requests.php'>Manage</a>
                 </div>
            </div>  
            
            </div>


            <div  class='col-lg-4 col-md-4 col-sm-4 col-xs-12'>
            <div  class='thumbnail'>
                <img src='edit route.jpg'>
                <div class='caption'>
                    <h1>Route Editor</h1>
                    <p>Here You can edit , delete ,add Routes and manage bus stops of the website</p>
                    <a class='btn btn-primary' role='button' href='show.php'>EDITOR</a>
                 </div>
            </div>  
            </div>
            


            <div  class='col-lg-4 col-md-4 col-sm-3 col-xs-12'>
            <div  class='thumbnail'>
                <img src='cu.jpg'>
                <div class='caption'>
                    <h1>View Contact Us </h1>
                    
                    <a class='btn btn-primary' role='button' href='view_contact_us.php'>VIEW</a>
                 </div>
            </div>  
            </div>

                        <div  class='col-lg-4 col-md-4 col-sm-5 col-xs-12'>
            </div>



                        <div  class='col-lg-4 col-md-4 col-sm-4 col-xs-12'>
              <div  class='thumbnail'>
                <img src='bustimingimg.jpg'>
                <div class='caption'>
                    <h1>Bus Timings</h1>
                    <p>Here Here you can manage the timings of the diffrent buses as per ktc schedules</p>
                    <a class='btn btn-primary' role='button' href='bus timing manager.php'>Manage</a>
                 </div>
            </div>  
          </div>


        </div>
        
    </div>
      </body>        
        <!--========== END PAGE CONTENT ==========-->

        
      

     
     

    ";
    require('webpage footer.php');
}
?>