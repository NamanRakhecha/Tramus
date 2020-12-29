<?php


    echo "    
      

</div></div>
      
 <footer class='g-bg-color--dark'>
            <!-- Links -->
            <div class='g-hor-divider__dashed--white-opacity-lightest'>
                <div class='container g-padding-y-80--xs'>
                    <div class='row'>
                        <div class='col-sm-2 g-margin-b-20--xs g-margin-b-0--md'>
                            <ul class='list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs'>
                                <li><a class='g-font-size-15--xs g-color--white-opacity' href='index.php'>Home</a></li>
                                <li><a class='g-font-size-15--xs g-color--white-opacity' href='about.php'>About</a></li>
                                <li><a class='g-font-size-15--xs g-color--white-opacity' href='faq.php'>FAQ</a></li>
                                <li><a class='g-font-size-15--xs g-color--white-opacity' href='feedback.php'>View Feedback</a></li>
                                
                            </ul>
                        </div>
                        <div class='col-sm-2 g-margin-b-20--xs g-margin-b-0--md'>
                            <ul class='list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs'>
                                <li><a class='g-font-size-15--xs g-color--white-opacity' href='team.php'>Teams</a></li>
                                <li><a class='g-font-size-15--xs g-color--white-opacity' href='contact_us.php'>Contact Us</a></li>
                              <li><a class='g-font-size-15--xs g-color--white-opacity' href='terms and condition.php'>Terms &amp; Conditions</a></li>
                              
                            </ul>
                        </div>
                        <div class='col-sm-2 g-margin-b-40--xs g-margin-b-0--md'>
                            <ul class='list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs'>
                                <li><a class='g-font-size-15--xs g-color--white-opacity' href='registerbus.php'>Register your Bus</a></li>
                                <li><a class='g-font-size-15--xs g-color--white-opacity' href='index_app_landing.php'>Download Bus APP</a></li>
                                <li><a class='g-font-size-15--xs g-color--white-opacity'  href='login page.php'>Administrator</a></li>
                               
                            </ul>
                        </div>
                        <div class='col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md'>
                            <h3 class='g-font-size-18--xs g-color--white'>Tramus</h3>
                            <p class='g-color--white-opacity'>Somewhere between sophistication and simplicity lies our website that you can use to track your local bus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class='container g-padding-y-50--xs'>
                <div class='row'>
                    <div class='col-xs-6'>
                        <a href='index.php'>
                            <img class='g-width-100--xs g-height-auto--xs' src='img/logo.png' alt='Tramus Logo'>
                        </a>
                    </div>
                    <div class='col-xs-6 g-text-right--xs'>
                        COPYRIGHT &copy
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>


          <!-- Vendor -->
        <script type='text/javascript' src='vendor/jquery.min.js'></script>
        <script type='text/javascript' src='vendor/jquery.migrate.min.js'></script>
        <script type='text/javascript' src='vendor/bootstrap/js/bootstrap.min.js'></script>
        
        <script type='text/javascript' src='vendor/jquery.back-to-top.min.js'></script>
        <script type='text/javascript' src='vendor/scrollbar/jquery.scrollbar.min.js'></script>
        <script type='text/javascript' src='vendor/magnific-popup/jquery.magnific-popup.min.js'></script>
        <script type='text/javascript' src='vendor/swiper/swiper.jquery.min.js'></script>
        <script type='text/javascript' src='vendor/waypoint.min.js'></script>
        <script type='text/javascript' src='vendor/counterup.min.js'></script>
        <script type='text/javascript' src='vendor/cubeportfolio/js/jquery.cubeportfolio.min.js'></script>
        <script type='text/javascript' src='vendor/jquery.parallax.min.js'></script>
       
        <script type='text/javascript' src='vendor/jquery.wow.min.js'></script>

        <!-- General Components and Settings -->
        <script type='text/javascript' src='js/global.min.js'></script>
        
       
   
        <script type='text/javascript' src='js/components/swiper.min.js'></script>
        <script type='text/javascript' src='js/components/counter.min.js'></script>
        <script type='text/javascript' src='js/components/portfolio-3-col.min.js'></script>
       
       
        <script type='text/javascript' src='js/components/wow.min.js'></script>
          <script 
   src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCD_xCPt_BnPaqrCZzah7NJp3J30wLkoy0&callback=initMap'>
    </script>

   <script type='text/javascript'>
    function login() {
        document.getElementById('hidden-login').style.visibility='visible';
    }
    function suubmit() {
        document.getElementById('hidden-login').style.visibility='hidden';
        document.getElementById('formform').submit();
    }
    function Clogin() {
        document.getElementById('hidden-login').style.visibility='hidden';
    }

    
</script>

<script type='text/javascript'>

function store(avc,h){
    avc=avc.split('=').join('%')
    
document.cookie=h+'='+avc+';expires=Wed, 18 Dec 2023 12:00:00 GMT'
}
$(document).ready(function(){
    $('#tracked-bus').load('trackmodule.php');
setInterval(function(){
    $('#tracked-bus').load('trackmodule.php')
}, 30000);
});
</script>

<script type='text/javascript'>
$(document).ready(function(){
    $('#map').load('maps.php');


});
</script>




        
";

?>