<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="indoterra" />
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- ====a========================================
        Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/font" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/retina.css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css"  />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/colors.php" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/tipsy.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/ls/css/layerslider.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/font-awesome.css">

    <!-- ============================================
        External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/greensock.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/plugins.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/layerslider.transitions.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/jquery.layerslider.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/bootstrap.min.js"></script>



    <!-- ============================================
        Document Title
    ============================================= -->
	<title>Indoterra - Home</title>

    <style type="text/css">

    .layer-features p {
      font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif;
      padding: 0px 10px;
      height: 30px;
      line-height: 30px;
      box-shadow: 0px 4px 10px -5px black;
      color: white;
      font-size: 20px;
      background: #8bae4e;
      background: -moz-linear-gradient(left, #8bae4e 0%, #b1c758 100%);
      background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8bae4e), color-stop(100%,#b1c758));
      background: -webkit-linear-gradient(left, #8bae4e 0%,#b1c758 100%);
      background: -o-linear-gradient(left, #8bae4e 0%,#b1c758 100%);
      background: -ms-linear-gradient(left, #8bae4e 0%,#b1c758 100%);
      background: linear-gradient(to right, #8bae4e 0%,#b1c758 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8bae4e', endColorstr='#b1c758',GradientType=1 );
    }

    .l1-s4 {
      font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif;
      padding: 0px 10px;
      height: 40px;
      line-height: 40px;
      box-shadow: 0px 4px 10px -5px black;
      color: white;
      text-shadow: none;
      font-size: 28px;
      color: #4f6716;
      background: white;
		}

    </style>


</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">

        <!-- ============================================
                     Menu Fixed Top
        ============================================= -->

        <div id="sticky-menu" class="clearfix">

            <div class="container clearfix">

                <div class="sticky-logo">
                    <a href="index.php"><img src="<?= base_url() ?>assets/front_assets/images/stickylogo2.png" alt="indoterra" title="indoterra" /></a>
                </div>

                <div class="sticky-search-trigger">
                    <a href="#"><i class="fa fa-search"></i></a>
                </div>


                <div class="sticky-menu-wrap">
                    <ul>
                        <?php if ($page == 'home') { ?>
                                <li class="current"><?php echo anchor('homepage/index','<div>Home</div><span>Lets Start here</span>')?></li>
                        <?php } else { ?>
                                <li><?php echo anchor('homepage/index','<div>Home</div><span>Lets Start here</span>')?></li>
                        <?php } ?>

                        <?php if ($page == 'about' || $page == 'services' || $page == 'products') { ?>
                                <li class="current"><a href="#"><div>About Us</div><span>Know Us More</span></a>
                        <?php } else { ?>
                                <li><a href="#"><div>About Us</div><span>Know Us More</span></a>
                        <?php } ?>
                                  <ul>
                                      <li><div><?php echo anchor('homepage/about','<i class="fa fa-laptop"></i> Indoterra')?></div></li>
                                      <li><div><?php echo anchor('homepage/services','<i class="fa fa-picture-o"></i> Our Services')?></div></li>
                                      <li><div><?php echo anchor('homepage/products','<i class="fa fa-laptop"></i> Our Products')?></div></li>
                                  </ul>
                                </li>

                        <?php if ($page == 'team1' || $page == 'team2' || $page == 'team3') { ?>
                                <li class="current"><a href="#"><div>Our Team</div><span>Yes We Are</span></a>
                        <?php } else { ?>
                                <li><a href="#"><div>Our Team</div><span>Yes We Are</span></a>
                        <?php } ?>
                                  <ul>
                                      <li><div><?php echo anchor('homepage/team1','<i class="fa fa-laptop"></i> SoftDev Team')?></div></li>
                                      <li><div><?php echo anchor('homepage/team2','<i class="fa fa-picture-o"></i> IT-Networking Team')?></div></li>
                                      <li><div><?php echo anchor('homepage/team3','<i class="fa fa-picture-o"></i> IT-Infrastructure Team')?></div></li>
                                  </ul>
                                </li>

                        <?php if ($page == 'news' || $page == 'newsFull')  { ?>
                                <li class="current"><?php echo anchor('homepage/news','<div>News</div><span>Our activities</span>')?></li>
                        <?php } else {?>
                                <li><?php echo anchor('homepage/news','<div>News</div><span>Our activities</span>')?></li>
                        <?php } ?>


                        <?php if ($page == 'clients') { ?>
                                <li class="current"><?php echo anchor('homepage/clients','<div>Clients</div><span>Our Partner</span>')?></li>
                        <?php } else { ?>
                                <li><?php echo anchor('homepage/clients','<div>Clients</div><span>Our Partner</span>')?></li>
                        <?php } ?>

                        <?php if ($page == 'contact') { ?>
                                <li class="current"><?php echo anchor('homepage/contact','<div>Contact Us</div><span>Get In Touch With Us</span>')?></li>
                        <?php } else { ?>
                                <li><?php echo anchor('homepage/contact','<div>Contact Us</div><span>Get In Touch With Us</span>')?></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="sticky-search-area">
                    <form id="sticky-search" action="search-results.php" method="get">
                        <input type="text" id="sticky-search-input" name="q" placeholder="Type &amp; Hit Enter" value="" />
                    </form>
                    <div class="sticky-search-area-close">
                        <a href="#"><i class="fa fa-remove"></i></a>
                    </div>
                </div>

            </div>

        </div>

        <!-- ============================================
                     Menu Ordinary Page
        ============================================= -->

        <div id="top-bar">
            <div class="container clearfix">

                <div id="top-menu">
                    <ul>
                        <li><span>/</span><a href="index.php">Home</a></li>
                        <li>
                            <span>/</span><a href="#">EN <i class="fa fa-angle-down norightmargin"></i></a>
                            <ul>
                                <li><a href="#"><img src="<?= base_url() ?>assets/front_assets/images/icons/flags/id.png" alt="indonesia" title="bahasa" /> Indonesia</a></li>
                            </ul>
                        </li>
                        <li><span>/</span><a href="contact-us.php">Contact</a></li>
                    </ul>
                </div>


                <div id="top-social">
                    <ul>
                        <li class="ts-facebook"><a href="#"><div class="ts-icon"></div><div class="ts-text">Facebook</div></a></li>
                        <li class="ts-twitter"><a href="#"><div class="ts-icon"></div><div class="ts-text">Twitter</div></a></li>
                        <li class="ts-gplus"><a href="#"><div class="ts-icon"></div><div class="ts-text">Google+</div></a></li>
                        <li class="ts-pinterest"><a href="#"><div class="ts-icon"></div><div class="ts-text">Pinterest</div></a></li>
                        <li class="ts-rss"><a href="#"><div class="ts-icon"></div><div class="ts-text">RSS</div></a></li>
                        <li class="ts-vimeo"><a href="#"><div class="ts-icon"></div><div class="ts-text">Vimeo</div></a></li>
                        <li class="ts-phone"><a href="#"><div class="ts-icon"></div><div class="ts-text">+62.271.7461975</div></a></li>
                        <li class="ts-mail"><a href="#"><div class="ts-icon"></div><div class="ts-text">indoterra@gmail.com</div></a></li>
                    </ul>
                </div>

            </div>
        </div>


        <div id="header">
            <div class="container clearfix">
                <div id="logo">
                    <a href="index.php" class="standard-logo"><img src="<?= base_url() ?>assets/front_assets/images/logo4.png" alt="CoWorker" title="CoWorker" /></a>
                    <a href="index.php" class="retina-logo"><img src="<?= base_url() ?>assets/front_assets/images/logo@2x.png" alt="CoWorker" title="CoWorker" width="204" height="120" /></a>
                </div>

                <div id="primary-menu">
                    <div class="rs-menu"><i class="fa fa-align-justify"></i></div>
                    <ul id="main-menu">

                        <?php if ($page == 'home') { ?>
                                <li class="current"><?php echo anchor('homepage/index','<div>Home</div><span>Lets Start here</span>')?></li>
                        <?php } else { ?>
                                <li><?php echo anchor('homepage/index','<div>Home</div><span>Lets Start here</span>')?></li>
                        <?php } ?>

                        <?php if ($page == 'about' || $page == 'services' || $page == 'products') { ?>
                                <li class="current"><a href="#"><div>About Us</div><span>Know Us More</span></a>
                        <?php } else { ?>
                                <li><a href="#"><div>About Us</div><span>Know Us More</span></a>
                        <?php } ?>
                                  <ul>
                                      <li><div><?php echo anchor('homepage/about','<i class="fa fa-laptop"></i> Indoterra')?></div></li>
                                      <li><div><?php echo anchor('homepage/services','<i class="fa fa-picture-o"></i> Our Services')?></div></li>
                                      <li><div><?php echo anchor('homepage/products','<i class="fa fa-laptop"></i> Our Products')?></div></li>
                                  </ul>
                                </li>

                        <?php if ($page == 'team1' || $page == 'team2' || $page == 'team3') { ?>
                                <li class="current"><a href="#"><div>Our Team</div><span>Yes We Are</span></a>
                        <?php } else { ?>
                                <li><a href="#"><div>Our Team</div><span>Yes We Are</span></a>
                        <?php } ?>
                                  <ul>
                                      <li><div><?php echo anchor('homepage/team1','<i class="fa fa-laptop"></i> SoftDev Team')?></div></li>
                                      <li><div><?php echo anchor('homepage/team2','<i class="fa fa-picture-o"></i> IT-Networking Team')?></div></li>
                                      <li><div><?php echo anchor('homepage/team3','<i class="fa fa-picture-o"></i> IT-Infrastructure Team')?></div></li>
                                  </ul>
                                </li>

                        <?php if ($page == 'news' || $page == 'newsFull')  { ?>
                                <li class="current"><?php echo anchor('homepage/news','<div>News</div><span>Our activities</span>')?></li>
                        <?php } else {?>
                                <li><?php echo anchor('homepage/news','<div>News</div><span>Our activities</span>')?></li>
                        <?php } ?>

                        <?php if ($page == 'clients') { ?>
                                <li class="current"><?php echo anchor('homepage/clients','<div>Clients</div><span>Our Partner</span>')?></li>
                        <?php } else { ?>
                                <li><?php echo anchor('homepage/clients','<div>Clients</div><span>Our Partner</span>')?></li>
                        <?php } ?>

                        <?php if ($page == 'contact') { ?>
                                <li class="current"><?php echo anchor('homepage/contact','<div>Contact Us</div><span>Get In Touch With Us</span>')?></li>
                        <?php } else { ?>
                                <li><?php echo anchor('homepage/contact','<div>Contact Us</div><span>Get In Touch With Us</span>')?></li>
                        <?php } ?>

                    </ul>

                </div>
            </div>
        </div>
