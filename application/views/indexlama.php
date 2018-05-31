<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dishub Bulukumba">
  <meta name="author" content="zem-indigo">
  <meta name="keyword" content="Dishub Bulukumba">
  <!-- <link rel="shortcut icon" href=""> -->

  <title>Admin Dishub Bulukumba</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url();?>assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url();?>assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url();?>assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url();?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css" type="text/css">
  <link href="<?php echo base_url();?>assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.css">
  <link href="<?php echo base_url();?>assets/css/widgets.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="<?php echo base_url();?>assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="<?php echo base_url();?>" class="logo">DISHUB <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url()?>assets/img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="sub-menu">
            <a class="" href="<?php echo base_url();?>">
              <i class="icon_house_alt"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>Master</span>
                <span class="menu-arrow arrow_carrot-right"></span>
            </a>
              <ul class="sub">
                <li><a id="kendaraan">Master Kendaraan</a></li>
                <li><a id="rute">Master Jalur</a></li>
              </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_desktop"></i>
              <span>Setting</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
              <ul class="sub">
                <li><a class="" href="<?php echo base_url('utama/kecamatan');?>">Kecamatan</a></li>
                <li><a class="" href="">Kategori Pembayaran</a></li>
                <li><a class="" href="">Pembayaran Per 6 Bulan</a></li>
                <li><a class="" href="">Uji Kir Per 6 Bulan</a></li>
              </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_table"></i>
              <span>Ijin Trayek </span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
              <ul class="sub">
                <li><a class="" href="<?php echo base_url('utama/penerbitan');?>">Penerbitan</a></li>
                <li><a class="" href="<?php echo base_url('utama/baru');?>">Perpanjangan</a></li>
                <li><a class="" href="">Pencabutan</a></li>
                <li><a class="" href="">Balik Nama</a></li>
                <li><a class="" href="">Pergantian / Peremajaan</a></li>
              </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>About</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="">Profile</a></li>
              <li><a class="" href=""><span>Login Page</span></a></li>
              <li><a class="" href=""><span>Contact Page</span></a></li>
              <li><a class="" href="">Blank Page</a></li>
              <li><a class="" href="<?php echo base_url('masuk/logout')?>">Logout</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="">
              <i class="icon_genius"></i>
              <span>Widgets</span>
            </a>
          </li>
          <li>
            <a class="" href="">
              <i class="icon_piechart"></i>
              <span>Charts</span>
            </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       


        <div class="row">   <!-- Awal isi -->
           <div class="col-lg-12 isi">
            
           
          </div>
        </div>        <!-- End Row Isi-->

      <div id="coba">
        
      </div>

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="<?php echo base_url();?>">DISHUB BULUKUMBA</a> by <a href="<?php echo base_url();?>">DISHUB</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.4.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url();?>assets/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url();?>assets/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url();?>assets/js/calendar-custom.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url();?>assets/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url();?>assets/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url();?>assets/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url();?>assets/js/xcharts.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.autosize.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/gdp-data.js"></script>
    <script src="<?php echo base_url();?>assets/js/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/sparklines.js"></script>
    <script src="<?php echo base_url();?>assets/js/charts.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript">
      
      $(function()
        {
            // Easy pie charts
           // $('#coba').load('<?= base_url('utama/kendaraan') ?>')
        });  
        $('#kendaraan').click(function() {
            $('#coba').load('<?= base_url('utama/kendaraan') ?>')
        })
        $('#kecamatan').click(function() {
            $('#coba').load('<?= base_url('utama/kecamatan')?>')
        }) 
        $('#rute').click(function() {
            $('#coba').load('<?= base_url('utama/rute')?>')
        }) 
        $('#pembuatan').click(function() {
            $('#coba').load('<?= base_url('utama/penerbitan')?>')
        }) 
        $('#user').click(function() {
            $('#coba').load('<?= base_url('utama/user')?>')
        }) 
    </script>
  </body>

</html>
