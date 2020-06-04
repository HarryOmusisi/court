<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome | Virtual courtroom</title>

    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- //js -->
    <!-- font-awesome-icons -->
    <link href="/assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>
<!-- banner -->
<?php
include '../layouts/header.php';
?>
<div class="header-bottom">
    <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span>Eagle </span>Courtroom</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="link-effect-2" id="link-effect-2">
                <ul class="nav navbar-nav">
                    <li class="active "><a href="../pages/index.php"><span data-hover="Home">Home</span></a></li>
                    <!--                    <li><a href="../pages/public.php"><span data-hover="Lessons">Lessons</span></a></li>-->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Public">Public</span><b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="login.php">Sign in</a></li>
                            <li><a href="request.php">Send request</a></li>
                            <li><a href="list.php">Cause list</a></li>
                            <li><a href="calendars.php">Calendars</a></li>
                        </ul>
                    </li>
                    <!--                    <li><a href="../pages/judge.php"><span data-hover="Membership">Membership</span></a></li>-->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Jury">Jury</span><b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="../dbconfig/register.php">sign in</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="about.php">Host case</a></li>
                            <li><a href="about.php">Verdicts</a></li>
                            <li><a href="about.php">Logout</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Prosecutor">Prosecutor</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="about.php">sign in</a></li>
                            <?php
                            include 'pages/register.php'
                            ?>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="about.php">Join case</a></li>
                            <li><a href="about.php">Verdicts</a></li>
                            <li><a href="about.php">Logout</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Registry">Registry</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="#bookings">Booking</a></li>
                            <li><a href="feedback.php">cause lists</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

    </nav>
</div>
<div class="banner">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="agileits_w3layouts_banner_info">
                            <h3>Virtual courtroom brought near</h3>
                            <p>Become part of the largest community of members who are practising law in the touch of their homes.
                                 </p>
                            <div class="agileits_w3layouts_banner_info_pos">
                                <ul>
                                    <li><a href="#">Facebook</a><label></label></li>
                                    <li><a href="#">Twitter</a><label></label></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agileits_w3layouts_banner_info">
                            <h3>Law and order</h3>
                            <p>Get access to all the amazing courtroom services in the comfort of a smartphone</p>
                            <div class="agileits_w3layouts_banner_info_pos">
                                <ul>
                                    <li><a href="#">Facebook</a><label></label></li>
                                    <li><a href="#">Twitter</a><label></label></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agileits_w3layouts_banner_info">
                            <h3>Law and Stability</h3>
                            <p>Able to get transparent and credible services from the jury and law abiding citizens via modern technology</p>
                            <div class="agileits_w3layouts_banner_info_pos">
                                <ul>
                                    <li><a href="#">Twitter</a><label></label></li>
                                    <li><a href="#">Facebook</a><label></label></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <script defer src="../assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->

    </div>
</div>
<!-- //banner -->
<!-- banner-bottom-icons -->
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom-icons -->
<!--	<div class="banner-bottom-icons">-->
<!--		<div class="container">-->
<!--			<div class="w3l-heading">-->
<!--				<h2 class="w3ls_head">Our Services </h2>-->
<!--			</div>-->
<!--		<div class="col-md-4 w3_banner_bottom_icons_left hover15">-->
<!--			<div class="col-xs-12 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<i class="fa-car"></i>-->
<!--					<h3>Car Insurance</h3>-->
<!--					<p>Provide exemplary insurance services to AA Kenya members as an added benefit.-->
<!--						With over 1500 annual policy holders.</p>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-12 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<i class="fa-user"></i>-->
<!--					<h3>Driver Reference Bureau</h3>-->
<!--					<p>Employers looking for suitable drivers and drivers looking for employment</p>-->
<!--				</div>-->
<!--			</div>-->

<!--		</div>-->
<!--		<div class="col-md-8 w3_banner_bottom_icons_right">-->
<!--			<div class="col-xs-6 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<i class="fa-book"></i>-->
<!--					<h3>Leagal and Technical Advice</h3>-->
<!--					<p>Provides free legal advice to members on matters-->
<!--						pertaining to use and ownership of a motor vehicle and technical advice. </p>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-6 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<i class="fa-bell"></i>-->
<!--					<h3>Valuation and Inspection</h3>-->
<!--					<p>Rest assured of the roadworthiness of any motor vehicle inspected by AA Kenya Technical Officers.</p>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-6 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<i class="fa-cogs"></i>-->
<!--					<h3>Road Side Assistance</h3>-->
<!--					<p>Our roadside rescue is free to members. The Rescue Control unit is on call 24/7 all year round.</p>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-6 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<i class="fa-thumbs-up"></i>-->
<!--					<h3>Driving Success</h3>-->
<!--					<p>Being a role model for safe and responsible drivers and-->
<!--						as a way of ensuring that we have competent drivers and motorists on our roads.</p>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="clearfix"> </div>-->
<!--		</div>-->
<!--		<div class="clearfix"> </div>-->
<!--		</div>-->

<!--	</div>-->
<!--&lt;!&ndash; //banner-bottom-icons &ndash;&gt;-->
<!-- register -->
<div class="register">
    <div class="container">
        <div class="col-md-6 w3layouts_register_right">
            <form action="#" method="post">
                <input name="Name" placeholder="First Name" type="text" required="">
                <input name="Name" placeholder="Last Name" type="text" required="">
                <input name="Email" placeholder="Email" type="email" required="">
                <input name="Subject" placeholder="Subject" type="text" required="">
                <input type="submit" value="Book Now">
            </form>
        </div>
        <div class="col-md-6 w3layouts_register_left">
            <h3><span>Book </span> now</h3>
            <p>Book a proceeding in advance</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //register -->
<!-- about-us -->
<div class="about">
    <div class="container">
        <div class="w3l-heading">
            <h3 class="w3ls_head">Testmonials </h3>
        </div>

        <div class="about-grids">
            <div class="col-md-6 about-grid">
                <div class="about-grid1">
                    <div class="itis">
                        <h4>Cause lists Available</h4>
                    </div>
                    <div class="hji">
                        <p>Abide by the law and the law shall protect you</p>
                    </div>
                    <div class="about-grid1-pos">
                        <img src="images/court3.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 about-grid">
                <div class="about-grid2">
                    <div class="col-xs-2 about-grid2-left">
                        <p>01.</p>
                    </div>
                    <div class="col-xs-10 about-grid2-right">
                        <p>Every citizen is subject to the law and no one is above the law.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="about-grids">
            <div class="col-md-6 about-grid">
                <div class="about-grid2">
                    <div class="col-xs-2 about-grid2-left">
                        <p>02.</p>
                    </div>
                    <div class="col-xs-10 about-grid2-right">
                        <p>Enhance virtual courtroom system using modern technology.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 about-grid">
                <div class="about-grid1 about-grd1">
                    <div class="itis">
                        <h4>Virtual court system</h4>
                    </div>
                    <div class="hji">
                        <p>Good people do not need laws to tell them to act responsibly, while bad people will find a way around the laws.</p>
                    </div>
                    <div class="about-grid1-pos1">
                        <img src="images/court3.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about-us -->
<!-- news-letter -->
<div class="news-letter">
    <div class="container">
        <div class="w3l-heading">
            <h3 class="w3ls_head">Subscribe Here for the Constitution </h3>
        </div>
        <div class="agileinfo-subscribe">
            <form action="#" method="post">
                <input type="text" placeholder="Name" name="Name"  required="">
                <input type="email" placeholder="Email" name="Email"  required="">
                <input type="submit" value="Subscribe">
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
</div>
<!-- //news-letter -->
<!-- banner-bottom-icons -->
<!--<div class="banner-bottom-icons">-->
<!--	<div class="container">-->
<!--		<div class="w3l-heading">-->
<!--			<h2 class="w3ls_head">ISO Accreditations </h2>-->
<!--		</div>-->
<!--		<div class="col-md-4 w3_banner_bottom_icons_left hover15">-->
<!--			<div class="col-xs-12 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<img src="http://aakenya.com/assets/images/posts/eb65c2d10dee13130a6ae7d37302aba7.png" alt="AA kenya" width="100px;">-->
<!--				</div>-->
<!--			</div>-->


<!--		</div>-->
<!--		<div class="col-md-8 w3_banner_bottom_icons_right">-->
<!--			<div class="col-xs-6 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<img src="http://aakenya.com/assets/images/posts/ada69dac4597c3f64fa5b5dcb581355a.png" alt="ISO 1720" width="100px;">-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-6 w3_banner_bottom_icons1">-->
<!--				<div class="w3_banner_bottom_icons1_effect">-->
<!--					<img src="http://aakenya.com/assets/images/posts/e6a69a13a4f7ebae1ad1602692f2f23d.png" alt="QMS" width="100px;">-->
<!--				</div>-->
<!--			</div>-->

<!--			<div class="clearfix"> </div>-->
<!--		</div>-->
<!--		<div class="clearfix"> </div>-->
<!--	</div>-->

<!--</div>-->
<!-- //banner-bottom-icons -->

<!--&lt;!&ndash; welcome &ndash;&gt;-->
<!--<div class="welcome">-->
<!--<div class="container">-->
<!--<div class="w3l-heading">-->
<!--<h3 class="w3ls_head">Our Cars </h3>-->
<!--</div>-->
<!--<div class="bs-example bs-example-tabs welcome-tabs" role="tabpanel" data-example-id="togglable-tabs">-->
<!--<ul id="myTab" class="nav nav-tabs" role="tablist">-->
<!--<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">01</a></li>-->
<!--<li role="presentation" class=""><a href="#Feature1" role="tab" id="Feature1-tab" data-toggle="tab" aria-controls="Feature1" aria-expanded="false">02</a></li>-->
<!--<li role="presentation" class=""><a href="#Feature2" role="tab" id="Feature2-tab" data-toggle="tab" aria-controls="Feature2" aria-expanded="false">03</a></li>-->
<!--<li role="presentation" class=""><a href="#Feature3" role="tab" id="Feature3-tab" data-toggle="tab" aria-controls="Feature3" aria-expanded="false">04</a></li>-->
<!--</ul>-->
<!--<div id="myTabContent" class="tab-content">-->
<!--<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">-->
<!--<div class="w3agile_tabs">-->
<!---->
<!---->
<!--<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">-->
<!--<img src="images/7.jpg" alt=" " class="img-responsive" />-->
<!--</div>-->
<!--<div class="col-md-7 w3agile_tab_left">-->
<!--<h4>Crossovers (3 cars)</h4>-->
<!--<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat.eget auctor eros -->
<!--ultrices. Vestibulum non erat ut odio euismod accumsan.</p>-->
<!--<p>-->
<!--Phasellus libero tellus, pulvinar vitae et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non  sem sit amet, -->
<!--faucibus consectetur neque.</p>-->
<!---->
<!--</div>-->
<!--<div class="clearfix"> </div>-->
<!--</div>-->
<!--</div>-->
<!--<div role="tabpanel" class="tab-pane fade" id="Feature1" aria-labelledby="Feature1-tab">-->
<!--<div class="w3agile_tabs">-->
<!---->
<!--<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">-->
<!--<img src="images/4.jpg" alt=" " class="img-responsive" />-->
<!--</div>-->
<!--<div class="col-md-7 w3agile_tab_left">-->
<!--<h4>Luxury car (1 car)</h4>-->
<!--<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros -->
<!--ultrices. </p>-->
<!--<p>Vestibulum non erat ut odio euismod accumsan. -->
<!--Phasellus libero tellus, pulvinar vitae et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non  sem sit amet, -->
<!--faucibus consectetur neque.</p>-->
<!--</div>-->
<!--<div class="clearfix"> </div>-->
<!--</div>-->
<!--</div>-->
<!--<div role="tabpanel" class="tab-pane fade" id="Feature2" aria-labelledby="Feature2-tab">-->
<!--<div class="w3agile_tabs">-->
<!---->
<!---->
<!--<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">-->
<!--<img src="images/5.jpg" alt=" " class="img-responsive" />-->
<!--</div>-->
<!--<div class="col-md-7 w3agile_tab_left">-->
<!--<h4>Business class sedan (2 cars)</h4>-->

<!--<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros -->
<!--ultrices. Vestibulum non erat ut odio euismod accumsan.</p>-->
<!--<p> -->
<!--Phasellus libero tellus, pulvinar vitae et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non  sem sit amet, -->
<!--faucibus consectetur neque.</p>-->
<!---->
<!--</div>-->
<!--<div class="clearfix"> </div>-->
<!--</div>-->
<!--</div>-->
<!--<div role="tabpanel" class="tab-pane fade" id="Feature3" aria-labelledby="Feature3-tab"><div class="w3agile_tabs">-->
<!---->
<!--<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">-->
<!--<img src="images/6.jpg" alt=" " class="img-responsive" />-->
<!--</div>-->
<!--<div class="col-md-7 w3agile_tab_left">-->
<!--<h4>Coupe (1 car)</h4>-->
<!--<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros -->
<!--ultrices.</p>-->
<!--<p> Vestibulum non erat ut odio euismod accumsan. -->
<!--Phasellus libero tellus,et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non   pulvinar vitae sem sit amet, -->
<!--faucibus consectetur neque.</p>-->
<!---->
<!--</div>-->
<!--<div class="clearfix"> </div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--&lt;!&ndash; //welcome&ndash;&gt;-->


<!-- footer -->
<div class="w3-agile-footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <div class="footer-grid-heading">
                    <h4>Office Hours</h4>
                </div>
                <div class="footer-grid-info">
                    <p>Monday-Friday:
                        <span>8.00am - 5.00pm</span>
                    </p>
                    <p>Closed on Sundays & Public holidays</p>
                </div>
                <br>
                <div class="footer-grid-heading">
                    <h4>24 hours Court System</h4>
                </div>
                <div class="footer-grid-info">
                    <p class="phone">Phone : +254 701 175 959
                    </p>
                    <p class="phone">Phone : 020 6979999.

                    </p>

                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <div class="footer-grid-heading">
                    <h4>Address</h4>
                </div>
                <div class="footer-grid-info">
                    <p>Edutabs software solutions
                        <span>Ngong road,Nairobi, Kenya</span>
                    </p>
                    <p class="phone">Phone : +254 719 518 082
                        <span>Email : <a href="eaglegroupint.net">Eagle group int</a></span>
                    </p>
                </div>
            </div>
            <!--<div class="col-md-3 footer-grid">-->
            <!--<div class="footer-grid-heading">-->
            <!--<h4>24 Hour Rescue</h4>-->
            <!--</div>-->
            <!--<div class="footer-grid-info">-->
            <!--<p class="phone">Phone : +254720227267.-->
            <!--</p>-->
            <!--<p class="phone">Phone : 020 6979999.-->

            <!--</p>-->

            <!--</div>-->
            <!--</div>-->
            <div class="col-md-3 footer-grid">
                <div class="footer-grid-heading">
                    <!--						<h4>Latest Posts</h4>-->
                    <!--					</div>-->
                    <!--					<div class="w3agile_footer_grid_list">-->
                    <!--						<ul>-->
                    <!--							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Vestibulum ante ipsum</li>-->
                    <!--							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus at eros</li>-->
                    <!--							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Mauris eleifend aliquet</li>-->
                    <!--							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Aliquam vitae tristique</li>-->
                    <!--							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Pellentesque lobortis</li>-->
                    <!--							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Class aptent taciti</li>-->
                    <!--						</ul>-->
                    <!--					</div>-->
                    <!--				</div>-->

                    <!--				<div class="col-md-3 footer-grid">-->
                    <!--					<div class="footer-grid-heading">-->
                    <!--						<h4>Twitter Posts</h4>-->
                    <!--					</div>-->
                    <!--					<div class="w3agile_footer_grid_list w3agile-post">-->
                    <!--						<ul>-->
                    <!--							<li>Ut aut reiciendis voluptatibus <a href="#">http://example.com</a> alias, ut aut.-->
                    <!--								<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>-->
                    <!--							<li>Itaque earum rerum hic tenetur a sapiente <a href="#">http://example.com</a> ut aut.-->
                    <!--							<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>-->
                    <!--						</ul>-->
                    <!--					</div>-->
                    <!--				</div>-->
                    <div class="clearfix"> </div>
                </div>
                <div class="agileits-w3layouts-copyright">
                    <p>© 2020 Eagle group . All Rights Reserved | Design by <a href="">harry omusisi</a> </p>
                </div>
            </div>
        </div>
        <!-- //footer -->

        <!-- start-smooth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- start-smooth-scrolling -->
        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                    };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
<!--        --><?php
//        include '../layouts/footer.php';
//        ?>
<!--        --><?php
//        include '../layouts/scripts.php';
//        ?><!--      <!-- //here ends scrolling icon -->-->
</body>
</html>
<!-- //iso accreditations-->
