<?php
/**
 * Created by PhpStorm.
 * User: rethe
 * Date: 26/04/2018
 * Time: 20:45
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Virtual courtroom</title>

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
<div class="header">
    <div class="header_left">
        <ul>
            <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Nairobi, Kenya</li>
            <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+254720227267</li>
        </ul>
    </div>
    <div class="header_right">
        <div class="w3_agile_login">
            <div class="cd-main-header">
                <a class="cd-search-trigger" href="#cd-search"> <span></span></a>
                <!-- cd-header-buttons -->
            </div>
            <div id="cd-search" class="cd-search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

</div>
<div class="header-bottom">
    <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href=""><span>AA </span>Kenya</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="link-effect-2" id="link-effect-2">
                <ul class="nav navbar-nav">
                    <li><a href="../pages/index.php"><span data-hover="Home">Home</span></a></li>
                    <li class="active"><a href="../pages/lessons.php"><span data-hover="Lessons">Lessons</span></a></li>
                    <li><a href=""><span data-hover="Membership">Membership</span></a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="About">About</span><b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Driver Bureau">Driver Bureau</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="">Seeking Drivers </a></li>
                            <li><a href="">Seeking Employment</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Services">Services</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="#bookings">Booking</a></li>
                            <li><a href="">Feedback Card</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

    </nav>
</div>
<div class="banner1">
</div>

<!-- news-letter -->
<div class="news-letter">
    <div class="container">
        <div class="w3l-heading">
            <h3 class="w3ls_head">Subscribe Here </h3>
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
<!-- footer -->
<div class="w3-agile-footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <div class="footer-grid-heading">
                    <h4>24 Hour Rescue</h4>
                </div>
                <div class="footer-grid-info">
                    <p class="phone">Phone : +254720227267.
                    </p>
                    <p class="phone">Phone : 020 6979999.
                    </p>

                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <div class="footer-grid-heading">
                    <h4>Office Hours</h4>
                </div>
                <div class="footer-grid-info">
                    <p>Monday-Friday:
                        <span>9.00am - 5.00pm</span>
                    </p>
                    <p>Saturday:
                        <span>9.00am - 1.00pm</span>
                    </p>
                    <p>Closed on Sundays & Public holidays</p>
                </div>
                <br>

            </div>
            <div class="col-md-3 footer-grid">
                <div class="footer-grid-heading">
                    <h4>Address</h4>
                </div>
                <div class="footer-grid-info">
                    <p>Automobile Association of Kenya
                        <span>Airport North Road,Nairobi, Kenya</span>
                    </p>
                    <p class="phone">Phone : +254 720 227 267
                        <span>Email : <a href="#">aak@aakenya.co.ke</a></span>
                    </p>
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <div class="footer-grid-heading">
                    <h4>Twitter Posts</h4>
                </div>
                <div class="w3agile_footer_grid_list w3agile-post">
                    <ul>
                        <li>Ut aut reiciendis voluptatibus <a href="#">http://example.com</a> alias, ut aut.
                            <span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
                        <li>Itaque earum rerum hic tenetur a sapiente <a href="#">http://example.com</a> ut aut.
                            <span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="agileits-w3layouts-copyright">
            <p>© 2018 AA KENYA . All Rights Reserved | Design by <a href="">rethes</a> </p>
        </div>
    </div>
</div>
<!-- //footer -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="../assets/js/move-top.js"></script>
<script type="text/javascript" src="../assets/js/easing.js"></script>
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
<script src="../assets/js/bootstrap.js"></script>
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
<!-- //here ends scrolling icon -->
</body>
</html>


<div class="welcome">
<div class="container">
<div class="w3l-heading">
<h3 class="w3ls_head">Our Cars </h3>
</div>
<div class="bs-example bs-example-tabs welcome-tabs" role="tabpanel" data-example-id="togglable-tabs">
<ul id="myTab" class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">01</a></li>
<li role="presentation" class=""><a href="#Feature1" role="tab" id="Feature1-tab" data-toggle="tab" aria-controls="Feature1" aria-expanded="false">02</a></li>
<li role="presentation" class=""><a href="#Feature2" role="tab" id="Feature2-tab" data-toggle="tab" aria-controls="Feature2" aria-expanded="false">03</a></li>
<li role="presentation" class=""><a href="#Feature3" role="tab" id="Feature3-tab" data-toggle="tab" aria-controls="Feature3" aria-expanded="false">04</a></li>
</ul>
<div id="myTabContent" class="tab-content">
<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
<div class="w3agile_tabs">


<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
<img src="images/7.jpg" alt=" " class="img-responsive" />
</div>
<div class="col-md-7 w3agile_tab_left">
<h4>Crossovers (3 cars)</h4>
<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat.eget auctor eros
ultrices. Vestibulum non erat ut odio euismod accumsan.</p>
<p>
Phasellus libero tellus, pulvinar vitae et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non  sem sit amet,
faucibus consectetur neque.</p>

</div>
<div class="clearfix"> </div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="Feature1" aria-labelledby="Feature1-tab">
<div class="w3agile_tabs">

<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
<img src="images/4.jpg" alt=" " class="img-responsive" />
</div>
<div class="col-md-7 w3agile_tab_left">
<h4>Luxury car (1 car)</h4>
<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros
ultrices. </p>
<p>Vestibulum non erat ut odio euismod accumsan.
Phasellus libero tellus, pulvinar vitae et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non  sem sit amet,
faucibus consectetur neque.</p>
</div>
<div class="clearfix"> </div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="Feature2" aria-labelledby="Feature2-tab">
<div class="w3agile_tabs">


<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
<img src="images/5.jpg" alt=" " class="img-responsive" />
</div>
<div class="col-md-7 w3agile_tab_left">
<h4>Business class sedan (2 cars)</h4>

<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros
ultrices. Vestibulum non erat ut odio euismod accumsan.</p>
<p>
Phasellus libero tellus, pulvinar vitae et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non  sem sit amet,
faucibus consectetur neque.</p>

</div>
<div class="clearfix"> </div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="Feature3" aria-labelledby="Feature3-tab"><div class="w3agile_tabs">

<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
<img src="images/6.jpg" alt=" " class="img-responsive" />
</div>
<div class="col-md-7 w3agile_tab_left">
<h4>Coupe (1 car)</h4>
<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros
ultrices.</p>
<p> Vestibulum non erat ut odio euismod accumsan.
Phasellus libero tellus,et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non   pulvinar vitae sem sit amet,
faucibus consectetur neque.</p>

</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
</div>
</div>
</div>
&lt;!&ndash; //welcome&ndash;&gt;


