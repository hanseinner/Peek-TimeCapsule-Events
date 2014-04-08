<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Capsule Events | Tours</title>

    <link rel="stylesheet" href="_/css/bootstrap.css">
    <link rel="stylesheet" href="_/css/tourstyles.css">
    <link rel="stylesheet" href="_/css/tcstyles.css">
    
    

    <!-- FontAweseome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body id="home">


<!-- PHP navbar include -->
    <?php 
        $toursactive = 'class = "tourslink active"';
        $bg_color = 'lightblue';
        $svgpath = '_/svg/tc_logo_'.$bg_color.'.svg';
        include ('_/includes/navbar.php') 
    ?>
   
    <div class="jumbotron header_msg bg_white">
        <div class="container">
            <div class="jumbo_title">
                <h1 class="font-bebas big_timeless"><span class="<?php echo $bg_color ?>">TOURS</span></h1>
                <h1 class="font-bebas tour_slogan">TAKE A TOUR WITH ME</h1>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->
    
    
    <div class="row">
         <img class="arrow_down center-block" src="_/svg/arrow_down/arrow_down_lightblue.svg" alt="Arrow down icon in light blue" />
    </div>

    <div class="jumbotron tours_about bg_<?php echo $bg_color ?>">
        <div class="container">
            <h1 class="font-bebas2 white_txt">ABOUT OUR TOURS</h1>
            <div class="row">
                <div class="jumbo_content col-lg-8 col-lg-offset-2">
                    
                    <p class="med_p"> Are you traveling to Queensland and want to see it through the eye of a local? We’ll hold no secrets back. We’ll show it all to you! Brisbane is one of the least commercial cities in the world, and there is so much to see. Many visitors, and even some locals, don’t realise what it has to offer. 
                    </p>
                    <p class="med_p"> We stand for great customer service, and a fun adventure. Imagine it and we will make it happen! Or run with our idea and be assured that we don’t joke with the events that carry our name. We are determined to make your tour a very memorable one.
                    </p>

                    <h2 class="white_txt">How it works</h2>
					<p class="med_p howitworks">It’s simple, we tap into how adventurous your spirit is! Our mission is to create a timeless event. Contact us and we’ll schedule you into an event you’ll talk about forever. You’ve got to enjoy time and make memories that last. You can either relax or push yourself and have a blast.</p>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.jumbotron-->
    
    
    

    <div class="jumbotron tours_packages bg_white">
        <div class="container">

            <h1 class="font-bebas2">TOUR PACKAGES</h1>
            
            <div class="jumbo_content">
                <div class="row spacing">
                    <div class="first-third col col-lg-4">
                        <h2 class="lightblue">Brisbane From A Local's Eye</h2>
                        <p class="pkg_desc">Why stay in the building Y, office X while you can take a day to enjoy the real Brisbane. Relax, meet the locals, sight see and say G’day to a Riverside Cruise that takes you into a wonderful cafe. Then end your day with a laugh at a sit down comedy.</p>

                        <img class="pkg_icons" src="_/svg/time-icon.svg" alt="Icon of a sun" style="margin-top:3px;"/>
                        <h4 class="pkg_info font-bebas">A Saturday Tour</h4>
                        <br/>
                        <img class="pkg_icons" src="_/svg/cost-icon.svg" alt="Icon of a sun" />
                        <h4 class="pkg_info font-bebas">$89.00<span class="pkg_info_sm">per person</span></h4>
                    </div> <!-- first-third -->

                     <div class="second-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle" src="images/tours_pics/tours_local.jpg" alt="Image of Brisbane" />
                    </div> <!-- second-third -->
                     <div class="third-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle" src="images/tours_pics/tours_local2.jpg" alt="Image of Brisbane" />
                    </div> <!-- /.third-third -->
                </div> <!-- /.row -->

                <div class="row pkg_adventures spacing">
                    <div class="first-third col col-lg-4">
                        <h2 class="lightblue">Adventures You In The Sunshine State</h2>
                        <p class="pkg_desc">Day one, we take on the beautiful Brisbane, Climb the Bridge, go Hiking, sight scene and cruising around the river side. Day 2: We then head to 0'Reilly’s Canungra Valley, enjoy Fine dinning and wine from the boutique vineyard, waterfalls and a Stay in the heritage building. Day 3 we head to the coast and take on Surfing at the Coast after a long day of Sun-baking at the beach we drive back to Brisbane and enjoy the nice view of My Cotta.</p>

                        <img class="pkg_icons" src="_/svg/time-icon.svg" alt="Icon of a sun" style="margin-bottom: 24px;"/>
                        <h4 class="pkg_info font-bebas">A 3 Day, 1 Night Tour. <br/><span style="font-size: 0.8em;">incl. 1 day stay at the Hunter Valley</span></h4>
                        <br/>
                        <img class="pkg_icons" src="_/svg/cost-icon.svg" alt="Icon of a sun" />
                        <h4 class="pkg_info font-bebas">$580.00<span class="pkg_info_sm">per person</span></h4>
                    </div> <!-- first-third -->

                     <div class="second-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle center-block" src="images/tours_pics/tours_sunshine.jpg" alt="Image of Brisbane" />
                    </div> <!-- second-third -->
                     <div class="third-third col col-lg-4">
                       <img class="pkg_thumb_pic img-circle center-block" src="images/tours_pics/tours_sunshine2.jpg" alt="Image of Brisbane" />
                    </div> <!-- /.third-third -->
                </div> <!-- /.row -->

                <div class="row spacing">
                    <div class="first-third col col-lg-4">
                         <h2 class="lightblue">I Want My Family To Be There</h2>
                        <p class="pkg_desc">Make memories, where everyone can tell a story that has you in it. take the kids and head place where you can ali have fun. Brisbane and the coast.</p>

                        <img class="pkg_icons" src="_/svg/time-icon.svg" alt="Icon of a sun" style="margin-bottom: 8px;"/>
                        <h4 class="pkg_info font-bebas">1 Day Tour.</h4>
                        <br/>
                        <img class="pkg_icons" src="_/svg/cost-icon.svg" alt="Icon of a sun" style="margin-bottom: 24px;"/>
                        <h4 class="pkg_info font-bebas">$90.00<span class="pkg_info_sm">per person</span><br/>
                        $70.00<span class="pkg_info_sm">for children</span></h4>
                    </div> <!-- first-third -->

                     <div class="second-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle" src="images/tours_pics/tours_family.jpg" alt="Image of Brisbane" />
                    </div> <!-- second-third -->
                     <div class="third-third col col-lg-4">
                        <img class="pkg_thumb_pic img-circle" src="images/tours_pics/tours_family2.jpg" alt="Image of Brisbane" />
                    </div> <!-- /.third-third -->
                </div> <!-- /.row -->

            </div> <!-- /.jumbo_content -->
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron tailored bg_<?php echo $bg_color ?>">
        <div class="container">

            <h1 class="font-bebas2 white_txt">TAILORED TOURS</h1>
            
            <div class="jumbo_content">
               <div class="first-third col col-lg-4">
                 <img class="tailored_icons center-block" src="_/svg/people-icon.svg" alt="Icon of people"/>
                <h2 class="center-block">For You or a Group</h2>
                <p class="center_txt">We can tailor your tour so that we can accommodate you by yourself, or you and your group as a whole.
                <br/>The flexibility and choice is up to you.
                </p>

            </div>

            <div class="second-third col col-lg-4">
                <img class="tailored_icons center-block" src="_/svg/mixmatch-icon.svg" alt="Icon of mix and match"/>
                <h2 class="center-block" >Mix and Match</h2>
                <p class="center_txt">Mix and match between features of our Tour packages to suit your liking.
                </p>

            </div>

            <div class="third-third col col-lg-4">
                <img class="tailored_icons center-block" src="_/svg/gift-icon.svg" alt="Icon of gift"/>
                <h2 class="center-block">An Exclusive Item</h2>
                <p class="center_txt">With a tailored tour, there is always an exclusive item included to spice up your experience.</p>

            </div>
            </div> <!-- /.jumbo_content -->
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron startsection bg_white">
        <div class="container">

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                         <img src="<?php echo $svgpath ?>" class="tcnyou" alt="Responsive image" />
                         <h1 class="font-bebas">& YOU </h1>
                    </div>
               </div>

                <button id="getstarted" type="button" class="btn btn-<?php echo $bg_color ?> center-block">Let's Get Started</button>
            
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->


<!-- PHP footer include -->
    <?php include('_/includes/footer.php') ?>


     <!-- scripts -->
        <script src="_/js/bootstrap.js"></script>
        <script src="_/js/tcscripts.js"></script>
    </body>

    </html>