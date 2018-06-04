<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="<?php echo base_url('assets/images/dishub.png');?>" type="image/x-icon" />
        <title>Izin Trayek Kabupaten Bulukumba</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url()?>assets/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/sweet/dist/sweetalert.css"> -->
        <script type="text/javascript" src="<?= base_url('assets/sweet/dist/sweetalert.min.js') ?>"></script>
    </head>
    
    <body>
        <script src="<?php echo base_url();?>assets/vendors/jquery-1.9.1.min.js"></script>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> 
                                    <i class="icon-user"></i> Admin <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="<?php echo base_url('goon/logout')?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a id="judul" href="<?php echo base_url('run')?>">Pengelolaan Izin Trayek Kabupaten Bulukumba</a>
                            </li>                          
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li></li>
                        <li style="border-radius: 0px">
                            <a style="min-height: 90px"><img id="dishub" style="height: 90px;width: 90px;" src="<?= base_url('assets/images/dishub.png')?>"></a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="kendaraan"){echo "active";}?> dropdown">
                           <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-chevron-right"></i>Master Kendaraan</a>
                           <ul class="dropdown-menu" id="menu1">
                                <li class="<?php if($this->uri->segment(1)=="kendaraan"){echo "active";}?>">  
                                    <a id="kendaraan"><i class="icon-chevron-right"></i>Kendaraan</a>
                                </li>
                                <li class="<?php if($this->uri->segment(1)=="rute"){echo "active";}?>"> 
                                    <a id="rute"><i class="icon-chevron-right"></i>Rute</a>
                                </li>
                                 <li class="<?php if($this->uri->segment(1)=="jkendaraan"){echo "active";}?>"> 
                                    <a id="jkendaraan"><i class="icon-chevron-right"></i>Jenis Kendaraan</a>
                                </li>
                           </ul>
                        </li>

                        <li class="<?php if($this->uri->segment(2)=="info"){echo "active";}?>dropdown">
                           <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-chevron-right"></i>Master Kabupaten</a>
                           <ul class="dropdown-menu" id="menu1">
                                <li>
                                    <a id="kecamatan"><i class="icon-chevron-right"></i> Kecamatan</a>
                                </li>
                                <li>
                                    <a id="desa"><i class="icon-chevron-right"></i>Desa</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="klptani"){echo "active";}?>">
                            <a href=""><i class="icon-chevron-right"></i>Uji Kir</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-chevron-right"></i>Ijin Trayek</a>
                            <ul class="dropdown-menu" id="menu1">
                                <li>
                                    <a id="pembuatan"><i class="icon-chevron-right"></i>Pembuatan</a>
                                </li>
                                <li>
                                    <a href=""><i class="icon-chevron-right"></i>Balik Nama</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="bantuan"){echo "active";}?>">
                            <a href=""><i class="icon-chevron-right"></i> Bantuan</a>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="struktur"){echo "active";}?>dropdown">
                             <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-chevron-right"></i>Laporan</a>
                             <ul class="dropdown-menu" id="menu1">
                                <li>
                                    <a href=""><i class="icon-chevron-right"></i>Kendaraan Beroprasi</a>
                                </li>
                                <li>
                                    <a href=""><i class="icon-chevron-right"></i>Uji Kir</a>
                                </li>
                                <li>
                                    <a href=""><i class="icon-chevron-right"></i>Ijin Trayek</a>
                                </li>
                                <li>
                                    <a href=""><i class="icon-chevron-right"></i>Kartu Pengawasan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="akunt"){echo "active";}?>">
                            <a id="user"><i class="icon-chevron-right"></i>User</a>
                        </li>
                        <li>
                            <a href=""><i class="icon-chevron-right"></i> Logout</a>
                        </li>
                    </ul>
                   
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    
                    <div id="coba" class="row-fluid">
                    