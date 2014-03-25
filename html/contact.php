<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Capsule Events | Contact</title>

    <link rel="stylesheet" href="_/css/tcstyles.css">
    <link rel="stylesheet" href="_/css/bootstrap.css">
    <link rel="stylesheet" href="_/css/contactstyles.css">
	

    <!-- FontAweseome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	

</head>
<body id="home">

<!-- PHP navbar include -->
    <?php
        $contactactive = 'class = "contactlink active"';
        $bg_color = 'purple';
        $svgpath = '_/svg/tc_logo_'.$bg_color.'.svg';
        include ('_/includes/navbar.php') 
    ?>

   
    <div class="jumbotron header_msg bg_white">
        <div class="container">

            <div class="jumbo_title pushdown70px">
                <h1 class="font-bebas">SAY HELLO,</h1>
                <h1 class="font-bebas big_timeless"><span class="<?php echo $bg_color ?>">CONTACT US</span></h1>
            </div>

            <div class="row contactdeets">
                <div class="col col-md-4">
                    <img src="_/svg/phone.svg" alt="" class="img-circle center-block"/>
                    <h4>+61 413 838 884</h4>
                </div>

                <div class="col col-md-4">
                    <img src="_/svg/email.svg" alt="" class="img-circle center-block"/>
                    <h4>events@<br/>tcevents.com.au</h4>
                </div>

                <div class="col col-md-4">
                    <img src="_/svg/map.svg" alt="" class="img-circle center-block"/>
                    <h4>Brisbane City<br/>Brisbane QLD 4000<br/> Australia</h4>
                </div>
            </div>

            

        </div> <!-- /.container-->


    </div> <!-- /.jumbotron-->
    
    <div class="row">
                <img class="arrow_down center-block" src="_/svg/arrow_down/arrow_down_purple.svg" alt="Arrow down icon in purple" />
    </div>

    <div class="jumbotron contactmsg bg_<?php echo $bg_color ?>">
        <div class="container">
            <h1 class="font-bebas2 white_txt pushdown70px">DROP US A LINE</h1>
            
            <div class="row">

                <div class="col col-md-8 col-md-offset-2">
                
                	<div class="alert alert-success hide">
                		<h4><i class="fa fa-smile-o fa-2x"></i>   
                		Thank you for your message. It was sent successfully. Whoo hoo!</h4>
                	</div>
                	
                	<div class="alert alert-danger hide">
                		<h4><i class="fa fa-frown-o fa-2x"></i>
                		Oh snap! Sorry, something went wrong there. Please try again.</h4>
                	</div>
                    
                    <form id="enquiry_form" class="enquiry_form small_p bold_txt" action="enquiry.php" method="POST" >
                        <div class="container pushdown20px">
                            Hi, my name is <input type="text" required name="name" placeholder="your fullname" />
                        </div> <!-- name field -->
                        <div class="container pushdown20px">
                            I would like to
                            <select name="contact_type">
                                <option value="Enquiry" selected>enquire about a </option>
                                <option value="Booking">book a</option>
                                <option value="Question">ask about a</option>
                                <option value="Thank You">thank you for a</option>
                                <option value="Hi">just say hi </option>                       
                            </select>

                            <select name="service_type">
                                <option value="none"> . </option>
                                <option value="Tours" selected>Tour.</option>
                                <option value="Corporate Tour" >Corporate Tour.</option>
                                <option value="Special Event" >Special Event.</option>
                            </select>
                        </div> <!-- introduction -->

                        <div class="container pushdown20px">
                            <textarea class="required" required name="message" placeholder ="your super friendly message" cols="30" row="10"></textarea>
                        </div> <!-- message area -->
						
						

                        
                        <div class="container pushdown50px">
                            You can contact me at
                            <input class="email" required type="email" name="email" placeholder="your email" /> <!-- person's email -->
                        </div>

                        <div class="msgbuttons pull-right">
                        		<button type="reset" id="resetmsgbutton" class="btn btn-warning btn-lg">
                        			<span class="glyphicon glyphicon-remove"></span>Clear</button>
                            	<button type="submit" id="sendmsgbutton" class="btn btn-success btn-lg" >
                            		<span class="glyphicon glyphicon-send"></span>Send</button>
						</div>
						
                    </form>
                    
                </div>
                
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.jumbotron-->


<!-- PHP footer include -->
    <?php include('_/includes/footer.php') ?>

     <!-- scripts -->
        <script src="_/js/bootstrap.js"></script>
        <script src="_/js/tcscripts.js"></script>
		<script src="_/js/ajax_enquiry.js"></script>
		<script src="_/js/jquery.validate.js"></script>
		
	
    </body>

    </html>