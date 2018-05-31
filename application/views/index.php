<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
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
    </head>
    
    <body>
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
                                <a id="judul" href="<?php echo base_url('run')?>">Pengelolaan Ijin Trayek Kabupaten Bulukumba</a>
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
                            <a style="min-height: 90px"><img style="height: 90px;width: 80px;" src="<?= base_url('assets/images/bulkum.png')?>"> <img style="height: 90px;width: 90px;" src="<?= base_url('assets/images/dishub.png')?>"></a>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="info"){echo "active";}?>dropdown">
                           <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-chevron-right"></i>Master Kendaraan</a>
                           <ul class="dropdown-menu" id="menu1">
                                <li class="<?php if($this->uri->segment(2)=="kabupaten"){echo "active";}?>">  <!-- Membandingkan segmen kedua dr url jika sama maka dikerja -->
                                    <a id="kendaraan"><i class="icon-chevron-right"></i>Kendaraan</a>
                                </li>
                                <li class="<?php if($this->uri->segment(2)=="kabupaten"){echo "active";}?>">  <!-- Membandingkan segmen kedua dr url jika sama maka dikerja -->
                                    <a id="rute"><i class="icon-chevron-right"></i>Rute</a>
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
                        <li class="<?php if($this->uri->segment(2)=="user"){echo "active";}?>">
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
                        
                    </div>     <!-- Row-fluid -->
                    
                </div>
            </div>
            
            
        </div>
        <footer class="footer">
            <p>DISHUB &copy; Bulukumba 2018</p>
        </footer>
        <!--/.fluid-container-->
        <script src="<?php echo base_url();?>assets/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url();?>assets/assets/scripts.js"></script>
        
        <script>
        $(function()
        {
            // Easy pie charts
            $('#coba').load('<?= base_url('utama/kendaraan') ?>')
            //$('.chart').easyPieChart({animate: 1000});
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