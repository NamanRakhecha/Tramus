<?php require('webpage header.php'); ?>
        
        <!--===========GOOGLE MAPS==========-->
        
        <!--===========END GOOGLE MAPS==========-->
         <!-- Portfolio Filter -->
         <head> 
          <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
           <style>  
            button {
              border: 0;
              
              border-radius: 4px;
              box-shadow: 0 6px 0 #006599;
              color: #fff;
              cursor: pointer;
              font: inherit;
              margin: 0;
              outline: 0;
              padding: 12px 20px;
              transition: all .1s linear;
            }
            button:active {
              box-shadow: 0 2px 0 #006599;
              transform: translateY(3px);
            }
                       ul{  
                              
                            cursor:pointer;  
                       }  
                       li{  
                            padding:13px;  
                       }  
           </style> 
    </head>


          <div  style="border: 4px inset black; position: relative;top: 125px;left: 0px;">
            <!-- <div id="map"></div> -->
            <iframe width="100%" src="maps.php"  name="frameform" height="400px" seamless="true" ></iframe>
   
    
        </div>
        
        <div class="container g-padding-y-130--xs"><form method="post" action="maps.php" name="formform" target="frameform" >
            <div class="input-group input-group-lg">
                
                     <span class="input-group-addon">View </span>
                     <span><input type="" class="form-control" autocomplete="off" placeholder="From" id="from" name="sourceName" required></span>
                     <span><input type="" class="form-control" autocomplete="off" placeholder="To" id="to" name="DestinationName" required></span>
                     <span><input type="" class="form-control" autocomplete="off" placeholder="Via" id="via" name="via"></span>
                     <div id="fromList"></div>
                     <div id="toList"></div> 
                     <div id="viaList"></div> 
                     <span>View Path<input type="radio"  id="rb1" value="1" name="markers"></span><br>
                     <span>View Bus Stops<input type="radio"  id="rb2" value="2" checked name="markers"></span>
                     
                     <span class="input-group-btn"><button class="btn btn-primary btn-lg" onclick="submit()" >Search</button></span>
                
                 </div>
             </form>
            <!-- <div class="g-text-center--xs g-margin-b-40--xs">
               <h4>View Bus Stops from<input> to<input ><button type="button" class="btn btn-primary btn-lg">Search</button></h4>
            </div> -->
                 </div



        <!-- End Portfolio Filter -->


        <!-- Portfolio Gallery -->
        <div class="container g-margin-b-100--xs">
            <div id="js__grid-portfolio-gallery" class="cbp">
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/05.png" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                           <form action="source-to-destination.php" method="get" autocomplete="off">
                               <input style=" border:none; border-bottom:2px solid blue;background: transparent;" placeholder="Source" id="src" name="txt-source" required>
                               <div id="srcList"></div>
                               <input placeholder="Destination" style=" border:none; border-bottom:2px solid blue;background: transparent;" id="dest" name="txt-destination" required><br>
                               <div id="destList"></div>
                               <input type="submit" name="search" value="Search">
                           </form>
                        </div>
                        
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/06.png" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <form action="bus-deatil.php" method="get" autocomplete="off">
                            <input type="search" style=" border:none; border-bottom:2px solid blue;background: transparent;"  name="txt-bus-name" id="bname" placeholder="Bus Name" required>
                            <input type="submit"  name="search" value="Search">
                            <div id="bnameList"></div>
                        </form>
                      
                    </div>
                </div>
               
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/04.png" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <form action="bus-stops.php" autocomplete="off">
                            <input type="search" style=" border:none; border-bottom:2px solid blue;background: transparent;" name="txt-bus-stop-name" id="bstop" placeholder="Bus Stops" required>
                            <input type="submit"  name="search" value="Search">
                            <div id="bstopList"></div>
                        </form>

                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Portfolio Gallery -->
        </div>
        <!-- End Portfolio -->

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/02.png');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">A Mobile Experience<br>that Inspires Travel</h1>
                        </div>
                        
                    </div>
                </div>
                  <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/003.png');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Track your bus<br>at the click of a button</h1>
                        </div>
                        
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/01.png');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Tramus</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">We Help You Track Your Bus <br> So You Never Miss Your Journey!</h2>
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <span class="glyphicon glyphicon-check"></span>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Real Time</h3>
                            <p class="g-margin-b-0--xs">You Can Track Your Bus At Real Time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                               <span class="glyphicon glyphicon-phone-alt"></span>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">User Friendly</h3>
                            <p class="g-margin-b-0--xs">It Is Very Simple To track Your Bus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                <span class="glyphicon glyphicon-phone"></span>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Full Bus Info aT Your Fingertips</h3>
                            <p class="g-margin-b-0--xs">Know Every detail of your Bus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
            <div class="row">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <span class="glyphicon glyphicon-edit"></span>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Helpful Feedback</h3>
                            <p class="g-margin-b-0--xs">With the Feedback Feature you can rate your travelling experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Know Your driver</h3>
                            <p class="g-margin-b-0--xs">Get to Know Who your driver IS!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <span class="glyphicon glyphicon-question-sign"></span>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Dont know Which Bus??</h3>
                            <p class="g-margin-b-0--xs">Just tell us which stop you are on and we will let you know which bus is on the way to pick you up.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
        </div>
        <!-- End Features -->

        
<!-- Counter -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/005.png) 50% 0 no-repeat fixed;">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">2</figure>
                                <span class="g-font-size-40--xs g-color--white">k</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Passengers</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">50</figure>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">BusStops</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">20</figure>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Buses</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">1</figure>
                                
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Tramus</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter -->
       

        <!-- Culture -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">About</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Tramus</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-18--xs">Tramus aims to develop an android plus web-based Bus Tracking Management System to ease the travelling efforts of citizens throughout the major urban cities of South-Goa.
                        It provides real time tracking of buses and offers services in which passengers can track the location of the desired bus, and browse through the various buses that travel in a given location.</p>
                        <p class="g-font-size-18--xs">Passengers can aso give their feedback regarding the condition of the bus, the way of driving and so on...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="img/970x970/03.png" alt="Image">
            </div>
        </div>
        <!-- End Culture -->

        
        <?php require('webpage footer.php'); ?>

          
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>
        
        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
      
        <!--========== END JAVASCRIPTS ==========-->

    
<body>
    <script>  
        $(document).ready(function(){  
              $('#from').keyup(function(){  
                   var query = $(this).val();  
                   if(query != '')  
                   {  
                        $.ajax({  
                             url:"source.php",  
                             method:"POST",  
                             data:{query:query},  
                             success:function(data)  
                             {  
                                  $('#fromList').fadeIn();    
                                  $('#fromList').html(data);
                             }  
                        });  
                   }  
              });  
              $('#fromList').on('click', 'li', function(){  
                   $('#from').val($(this).text());  
                   $('#fromList').fadeOut(); 
              });  
         });  

         $(document).ready(function(){  
              $('#to').keyup(function(){  
                   var query = $(this).val();  
                   if(query != '')  
                   {  
                        $.ajax({  
                             url:"destination.php",  
                             method:"POST",  
                             data:{query:query},  
                             success:function(data)  
                             {  
                                  $('#toList').fadeIn();    
                                  $('#toList').html(data);
                             }  
                        });  
                        
                   }  
              });  
              $('#toList').on('click', 'li', function(){        
                   $('#to').val($(this).text());  
                   $('#toList').fadeOut();  
                
              });  
         });  


        $(document).ready(function(){  
              $('#via').keyup(function(){  
                   var query = $(this).val();  
                   if(query != '')  
                   {  
                        $.ajax({  
                             url:"via.php",  
                             method:"POST",  
                             data:{query:query},  
                             success:function(data)  
                             {  
                                  $('#viaList').fadeIn();  
                                  $('#viaList').html(data);
                             }  
                        });  
                   }  
              });  
              $('#viaList').on('click', 'li', function(){  
                   $('#via').val($(this).text());  
                   $('#viaList').fadeOut();  
              });  
         });  

         $(document).ready(function(){  
              $('#src').keyup(function(){  
                   var query = $(this).val();  
                   if(query != '')  
                   {  
                        $.ajax({  
                             url:"source.php",  
                             method:"POST",  
                             data:{query:query},  
                             success:function(data)  
                             {  
                                  $('#srcList').fadeIn();  
                                  $('#srcList').html(data);  
                             }  
                        });  
                   }  
              });  
              $('#srcList').on('click', 'li', function(){  
                   $('#src').val($(this).text());  
                   $('#srcList').fadeOut();  
              });  
         });  

         $(document).ready(function(){  
              $('#dest').keyup(function(){  
                   var query = $(this).val();  
                   if(query != '')  
                   {  
                        $.ajax({  
                             url:"destination.php",  
                             method:"POST",  
                             data:{query:query},  
                             success:function(data)  
                             {  
                                  $('#destList').fadeIn();  
                                  $('#destList').html(data);
                             }  
                        });  
                   }  
              });  
              $('#destList').on('click', 'li', function(){  
                   $('#dest').val($(this).text());  
                   $('#destList').fadeOut();  
              });  
         });  

         $(document).ready(function(){  
              $('#bname').keyup(function(){  
                   var query = $(this).val();  
                   if(query != '')  
                   {  
                        $.ajax({  
                             url:"busname.php",  
                             method:"POST",  
                             data:{query:query},  
                             success:function(data)  
                             {  
                                  $('#bnameList').fadeIn();  
                                  $('#bnameList').html(data); 
                             }  
                        });  
                   }  
              });  
              $('#bnameList').on('click', 'li', function(){  
                   $('#bname').val($(this).text());  
                   $('#bnameList').fadeOut();  
              });  
         });  

         $(document).ready(function(){  
              $('#bstop').keyup(function(){  
                   var query = $(this).val();  
                   if(query != '')  
                   {  
                        $.ajax({  
                             url:"stopname.php",  
                             method:"POST",  
                             data:{query:query},  
                             success:function(data)  
                             {  
                                  $('#bstopList').fadeIn();  
                                  $('#bstopList').html(data); 
                             }  
                        });  
                   }  
              });  
              $('#bstopList').on('click', 'li', function(){  
                   $('#bstop').val($(this).text());  
                   $('#bstopList').fadeOut();  
              });
         });  
    </script>  
</body>
    <!-- End Body -->
</html>
