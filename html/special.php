<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Capsule Events | Welcome</title>

    <link rel="stylesheet" href="_/css/tcstyles.css">
    <link rel="stylesheet" href="_/css/specialstyles.css">
    <link rel="stylesheet" href="_/css/bootstrap.css">

    <!-- FontAweseome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body id="home">

<!-- PHP navbar include -->
    <?php
        $specialactive = 'class = "speciallink active"';
        $bg_color = 'pink';
        $svgpath = '_/svg/tc_logo_'.$bg_color.'.svg';
        include ('_/includes/navbar.php') 
    ?>

   
    <div class="jumbotron header_msg bg_white">
        <div class="container">

            <div class="jumbo_title">
                <h1 class="font-bebas big_timeless"><span class="<?php echo $bg_color ?>">SPECIAL</span></h1>
                <h1 class="font-bebas">EVENTS</h1>
            </div>
            
            <div class="jumbo_content col col-lg-5">
                <p class="big_p"><span class="pink">&lsquo;I will remember this forever&rsquo;</span> is the soul and heart of the events we make.
               Time Capsule events can help you out in putting a special event together, to suit your budget and vision. </p>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->
    
    <div class="row">
         <img class="arrow_down center-block" src="_/svg/arrow_down/arrow_down_pink.svg" alt="Arrow down icon in purple" />
    </div>

    <div class="jumbotron special_why bg_<?php echo $bg_color ?>">
        <div class="container">
            <h1 class="font-bebas2">WHY WE&rsquo;RE HERE</h1>
            <div class="row">
                <div class="jumbo_content col-lg-8 col-lg-offset-2">
                    <p class="med_p special_p"> Time Capsule Events can help you organize a special event to suit your budget and vision.
					Whether it’s a formal celebration, a warm home event or a grand event, we have wedding coordinators to plan and enhance events such as: 
                    </p>

                    <!--<p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>-->
                   <div class="row">
                        <div class="col-md-4">
                             <img src="_/svg/cake_copy.svg" alt="Responsive image" class="img-responsive_social">
                              <h3 class="names_service">Birthdays</h3>
                        </div>
                        <div class="col-md-4">
                                <img src="_/svg/cupcake_copy.svg" alt="Responsive image" class="img-responsive_social">
                                 <h3 class="names_service">Kids Birthdays</h3>
                        </div>
                        <div class="col-md-4">
                              <img src="_/svg/cross_copy.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_service">Christening</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                              <img src="_/svg/glass_copy.svg" alt="Responsive image" class="img-responsive_social">
                              <h3 class="names_service">Hen's/Buck's Party</h3>
                        </div>
                        <div class="col-md-4">
                             <img src="_/svg/ring_copy.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_service">Engagements</h3>
                        </div>
                        <div class="col-md-4">
                             <img src="_/svg/heart_copy.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_service">Anniversary</h3>
                        </div>
                    </div>

					 <h3 class="font-bebas2">We can make it special and make it to reflect your personality.</h3>
            
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.jumbotron-->
    
    <div class="jumbotron special_packages bg_white">
        <div class="container">

            <h1 class="font-bebas2_special">SPECIAL PACKAGES</h1>
            
            <div class="jumbo_content">
                <!-- package 1 -->
                 <div class="row">
                    <div class="first-third col col-lg-4">
                        <h2 class="pink">Wedding Consultation</h2>
                    
                         <p class="pkg_desc small_p">Shush! I wouldn’t tell them I planned, but I will be there to help you. 
                        <br/> 
                       So you said ‘I do’, but you don’t know how it works, and don’t know how to create your wedding day. You don’t have the time to find out, nor the money to hire a planner to take your idea and build it into something exciting and vivid. 
                        <br/>
                        What we do is a different consulting service. We meet with you face-to–face, and build your vision and connect you to suppliers. You save time 
						and money, and we’ll tell you the best secrets to make your wedding day the timeless event that you dreamed of.  
						<br/>
						After we create a plan, you meet with the suppliers, and we’ll always have checkpoints to make sure everything fits according to that plan. 
                        </p>

                        <img class="pkg_icons" src="_/svg/cost-icon.svg" alt="Icon of a sun" />
                        <h4 class="pkg_info font-bebas">$1200.00<!--<span class="pkg_info_sm">per person</span>--></h4>
                    </div> <!-- first-third -->

                     <div class="second-third col col-lg-4">
                        <img class="pkg_thumb_pic1 img-circle" src="images/rahwa_images/wedding_2.jpg" alt="Image of Brisbane" />
                    </div> <!-- second-third -->
                     <div class="third-third col col-lg-4">
                        <img class="pkg_thumb_pic1 img-circle" src="images/rahwa_images/wedding_6.jpg" alt="Image of Brisbane" />
                    </div> <!-- /.third-third -->
                </div> <!-- /.row -->

                <!-- package 2 -->
                 <div class="row spacing">
                    <div class="first-third col col-lg-4">
                        <h2 class="pink">Wedding Directing</h2>
                    
                        <p class="pkg_desc small_p">This is for the bride who has planned everything. We realise that you can’t be the show and run the show at the same time. We meet with you before the wedding to discuss what is expected, map it out and watch an unforgettable day unfold. We can be there all day, to make sure everything goes smoothly and you are enjoying the happiest day of your life. </p>

                        <img class="pkg_icons" src="_/svg/cost-icon.svg" alt="Icon of a sun" />
                        <h4 class="pkg_info font-bebas">$50.00<span class="pkg_info_sm">per hour</span></h4>
                    </div> <!-- first-third -->

                     <div class="second-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle" src="images/rahwa_images/wedding_3.jpg" alt="Image of Brisbane" />
                    </div> <!-- second-third -->
                     <div class="third-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle" src="images/rahwa_images/wedding_1.jpg" alt="Image of Brisbane" />
                    </div> <!-- /.third-third -->
                </div> <!-- /.row -->

                <!-- package 3 -->

                 <div class="row spacing1">
                    <div class="first-third col col-lg-4">
                        <h2 class="pink">An Exclusive Wedding</h2>
                    
                        <p class="pkg_desc small_p">The dream of a great beginning is what people value, and weddings celebrate the first united step. Take it with
						us and we’ll show you what a truly timeless, spectacular event looks like.
						</p>

                        <img class="pkg_icons" src="_/svg/cost-icon.svg" alt="Icon of a sun" >
                        <h4 class="pkg_info font-bebas">Quote<!--<span class="pkg_info_sm">per person</span><br/>
                        $70.00<span class="pkg_info_sm">for children</span>--></h4>
                    </div> <!-- first-third -->

                     <div class="second-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle" src="images/rahwa_images/wedding_5.jpg" alt="Image of Brisbane" />
                    </div> <!-- second-third -->
                     <div class="third-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle" src="images/rahwa_images/eritrian_wedding.jpg" alt="Image of Brisbane" />
                    </div> <!-- /.third-third -->
                </div> <!-- /.row -->

            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron wedding_talks bg_<?php echo $bg_color ?>">
        <div class="container">

             <h1 class="font-bebas2">WEDDING TALKS</h1>
            <div class="row">
                <div class="jumbo_content col-lg-8 col-lg-offset-2">
                    <p class="med_p special_p"> You have a vision of how your big day should look, and we catch that and make it a reality. Part of the
					journey is identifying what you really want. We will work with you and understand you. We know people and meeting their expectations
					is what we do best. We sit with you and discuss some of the following: 
                    </p>
                    <div class="row">
                   
                        <div class="col-md-6">
                             <img src="_/svg/special/guests.svg" alt="Responsive image" class="img-responsive_social">
                              <h3 class="names_options">Guests</h3>
                        </div>
                        <div class="col-md-6">
                                <img src="_/svg/special/theme.svg" alt="Responsive image" class="img-responsive_social">
                                 <h3 class="names_options">Theme</h3>
                        </div>
                        <div class="col-md-6">
                              <img src="_/svg/special/shopping.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_options change1">Shopping</h3>
                        </div>
                        <div class="col-md-6">
                              <img src="_/svg/special/makeup.svg" alt="Responsive image" class="img-responsive_social">
                              <h3 class="names_options">Makeup</h3>
                        </div>
                        <div class="col-md-6">
                             <img src="_/svg/special/money.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_options">Budget</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                             <img src="_/svg/special/buffet.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_options">Catering</h3>
                        </div>
                         <div class="col-md-6">
                             <img src="_/svg/special/flower.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_options change2">Decorations</h3>
                        </div>
                         <div class="col-md-6">
                             <img src="_/svg/special/camera.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_options change2">Photography</h3>
                        </div>
                         <div class="col-md-6">
                             <img src="_/svg/special/music.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_options">Music</h3>
                        </div>
                         <div class="col-md-6">
                             <img src="_/svg/special/wedding_day.svg" alt="Responsive image" class="img-responsive_social">
                             <h3 class="names_options">Wedding Day</h3>
                        </div>
                    </div>
					  <h3 class="font-bebas2"> We are there from the very beginning till after your wedding day, and it will be an 
					  event you will always cherish.
                    </h3>
                </div>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron startsection bg_white">
        <div class="container">

                <div class="row">
                    <div class="col-md-3 col-md-offset-4">
                         <img src="<?php echo $svgpath ?>" class="tcnyou" alt="Responsive image" />
                         <h1 class="font-bebas">& YOU </h1>
                        
                    </div>
                </div>

                <button id="getstarted" type="button" class="btn btn-success center-block">Let's Get Started</button>
            
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

<!-- PHP footer include -->
    <?php include('_/includes/footer.php') ?>

     <!-- scripts -->
        <script src="_/js/bootstrap.js"></script>
        <script src="_/js/tcscripts.js"></script>
    </body>

    </html>