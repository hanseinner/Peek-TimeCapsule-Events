<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Capsule Events | Corporate Tours</title>

    <link rel="stylesheet" href="_/css/tcstyles.css">
    <link rel="stylesheet" href="_/css/corpstyles.css">
    <link rel="stylesheet" href="_/css/bootstrap.css">

    <!-- FontAweseome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body id="home">

<!-- PHP navbar include -->
    <?php
        $corpactive = 'class = "corplink active"';
        $bg_color = 'dark_blue';
        $svgpath = '_/svg/tc_logo_'.$bg_color.'.svg';
        include ('_/includes/navbar.php') 
    ?>
   
    <div class="jumbotron header_msg bg_white">
        <div class="container">

            <div class="jumbo_title">
                <h1 class="font-bebas big_timeless"><span class="<?php echo $bg_color ?>">CORPORATE</span></h1>
                <h1 class="font-bebas">TOURS</h1>
            </div>
            
            <div class="jumbo_content col col-lg-5">
                <p class="big_p">We can help you to create a timeless buzz. <br/>Organizing events is what we do best, and we have all the time you need to help you create a quality event.</p>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->
    
    
    <div class="row">
         <img class="arrow_down center-block" src="_/svg/arrow_down/arrow_down_dark_blue.svg" alt="Arrow down icon in dark blue" />
    </div>

    <div class="jumbotron doforall bg_<?php echo $bg_color ?>">
        <div class="container">
            <div class="row pushdown70px">
                <div class = "col col-lg-8 col-lg-offset-2">
                    <h1 class="font-bebas2 header_color">CORPORATE SERVICES</h1>
                    <p class="med_p text_color">
                        We understand the stress and time strain attached to the corporate world. Our coordinators have been there, and we can help you get it under control. </p>
                    <p class="med_p text_color"> We understand the corporate world. All it takes is one phone call and the corporate event organizing is someone else’s problem. We take care of the entertainment, food, venue, invites, transport and everything in between. 
                    </p>
                </div>

            </div>
                

            <div class="jumbo_content col-lg-8 col-lg-offset-2 pushdown70px">
			<div class="row">
               <div class="col-md-4 ">
                    <img src="_/svg/corporate_annual.svg" alt="Icon of Annual Meeting" class="corp_icon"/>
                    <h3 class="corp_options">Annual General Meeting</h3>

                </div>

                <div class="col-md-4">
                    <img src="_/svg/corporate_party.svg" alt="Icon of Staff Parties" class="corp_icon"/>
                    <h3 class="corp_options">Staff Parties</h3>

                </div>

                <div class="col-md-4">
                    <img src="_/svg/corporate_new.svg" alt="Icon of Welcome Party" class="corp_icon"/>
                    <h3 class="corp_options">New Recruit Welcome Party</h3>

                </div>
			</div>
            </div> <!-- /.jumbo_content .row -->
			
			<div class="jumbo_content col-lg-8 col-lg-offset-2 pushdown70px">
			<div class="row">
               <div class="col-md-4 ">
                    <img src="_/svg/corporate_award.svg" alt="Icon of Annual Meeting" class="corp_icon"/>
                    <h3 class="corp_options">Awards &amp; Launch ceremony</h3>

                </div>

                <div class="col-md-4">
                    <img src="_/svg/corporate_workshop.svg" alt="Icon of Staff Parties" class="corp_icon"/>
                    <h3 class="corp_options">Workshops and Expos</h3>

                </div>

                <div class="col-md-4">
                    <img src="_/svg/corporate_training.svg" alt="Icon of Welcome Party" class="corp_icon"/>
                    <h3 class="corp_options">Training Sessions</h3>

                </div>
			</div>
            </div> <!-- /.jumbo_content .row -->

       


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