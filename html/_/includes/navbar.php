<?php echo '

	<div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top clearfix ">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                  <img src="'.$svgpath.'" class="tc_logo img-responsive hidden-xs" alt="Responsive image" />
                   <h3 class="font-bebas">
                        <span class="'.$bg_color.'">Time</span>Capsule<br/><span class="font-bebas-sm">Events</span>
                    </h3>
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" style="margin-top: 30px;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> <!-- /.navbar-toggle -->

                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li '.$toursactive.' ><a class="lightblue-hover" href="tours.php"><i class="fa fa-sun-o fa-fw"></i> Tours</a></li>
                        <li '.$corpactive.' ><a class="dark_blue-hover" href="corporate.php"><i class="fa fa-suitcase fa-fw"></i> Corporate Tours</a></li>
                        <li '.$specialactive.' ><a class="pink-hover" href="special.php"><i class="fa fa-glass fa-fw"></i> Special Events</a></li>
                        <li><a href="http://eventstc.wordpress.com/"><i class="fa fa-book fa-fw"></i> Blog</a></li>
                        <li '.$mystoryactive.' ><a class="orange-hover" href="mystory.php"><i class="fa fa-quote-right fa-fw"></i> My Story</a></li>
                        <li '.$contactactive.' ><a class="purple-hover" href="contact.php"><i class="fa fa-phone fa-fw"></i> Contact Us</a></li>
                    </ul> <!-- /.navbar-nav -->
                </div> <!-- /.navHeaderCollapse -->    
            </div> <!-- /.container -->   
        </div> <!-- /.navbar-fixed-top -->

    </div> <!-- /.container -->

'
?>