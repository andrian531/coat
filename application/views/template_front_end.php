<!--
26 November 2016
codeactivis -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Basic Page Needs
    ================================================== -->
    <title>
            Halaman <?php echo $halaman; ?> || <?php echo $title; ?>
        </title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Neshine HTML5 Template - v1.0">
    <meta name="author" content="">
    <!-- Mobile Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- All Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/icofont.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/hover-min.css" media="screen">
    <!--Owl Carousel-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/owl.theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/owl.transitions.css" media="screen">
    <!--Pretty Photo-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/prettyPhoto.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/style.css" media="screen">
    <link href="<?php echo base_url(); ?>assets/front/css/skins/default.css" id="cpswitch" rel="stylesheet">
</head>
<body class="home3 body-innerwrapper">
<?php $urix=uri_string();
if($urix!=""){
        echo '<section id="top-section" class="overlay">';
}
?>
    <header>
        <nav class="navbar" data-spy="affix" data-offset-top="1" id="slide-nav">
            <div class="container">
                <div class="navbar-header col-sm-3 col-md-3 col-xs-12">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="menu-logo"><img src="<?php echo base_url(); ?>assets/front/images/logo.png" alt="logo"></a>
                </div>
                <!--Nav links-->
                <div class=" navbar-collapse col-sm-9 col-md-9" id="menu_nav">
                    <a href="#" class="closs"><i class="icofont icofont-close-line"></i></a>
                    <ul class="nav navbar-nav">
                        <li class="active dropdown">
                            <a href="index.html">Home</a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index.html">Default Home</a></li>
                                <li><a href="home-03.html">Slider Home</a></li>
                                <li><a href="parallax-home.html">Parallax Home</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                        <li class="dropdown">
                            <a href="services.html">Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services.html">Services v1</a></li>
                                <li><a href="services-v2.html">Services v2</a></li>
                                <li><a href="service-detail.html">Service-detail</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="portfolio.html">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio.html">portfolio v1</a></li>
                                <li><a href="portfolio-v2.html">portfolio v2</a></li>
                                <li><a href="portfolio-detail.html">single portfolio</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Other Pages</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#Blog">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog</a> </li>
                                        <li><a href="blog-detail.html">Blog Detail</a> </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#team">Team</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="team.html">Team</a> </li>
                                        <li><a href="team-detail.html">Team Detail</a> </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#price">Price Plans</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="price-plan.html">Price Plans</a> </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#elements">Elements</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="elements.html">Elements</a> </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">More Page</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li class="dropdown search">
                                <a href="#"><i class="icofont icofont-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form class="navbar-form" action="#" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="search" placeholder="Search...">
                                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </div>
        </nav>
    </header>
            <?php echo $contents ?>
            
    <!--Footer-->
    <footer id="footer" class="space">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <a href="#"><img src="images/logo.png" alt="Logo"></a>
                    <p>© 2016 Neshine, All Rights Reserved</p>
                </div>
                <div class="col-sm-5 footer-block">
                    <ul class="main-link">
                        <li><a href="#">Pricing</a> </li>
                        <li><a href="#">SignUp</a> </li>
                        <li><a href="#">Apps</a> </li>
                        <li><a href="#">Services</a> </li>
                        <li><a href="#">Our Story</a> </li>
                        <li><a href="#">Find a stockist</a> </li>
                        <li><a href="#">About</a> </li>
                        <li><a href="#">Blog</a> </li>
                        <li><a href="#">Support</a> </li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-block">
                    <ul class="address">
                        <li>29A2 Dich Vong Str, NShine Building, Caugiay, Hanoi</li>
                        <li><a href="tel:+840123456789">+84 (01)2 345 6789</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>        
    <a href="#0" class="cd-top radius-2x"><i class="icofont icofont-hand-drawn-up"></i></a>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap.js"></script>
    <script src="../../use.fontawesome.com/e18447245b.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/count-down.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/switcher.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/appear.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/dots.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/steller.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/custom.js"></script>
</body>


<!-- Mirrored from html.nhatthemes.com/neshine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2016 04:15:45 GMT -->
</html>
           