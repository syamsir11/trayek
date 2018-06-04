<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Zem-Indigo">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Zem-Indigo">
  <link rel="shortcut icon" href="<?= base_url()?>assets/images/dishub.png">

  <title>Login Page Admin | Creative - Zem-Indigo</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <!-- <link href="<?php echo base_url();?>assets/assets/style.css" rel="stylesheet"> -->
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />

    <!-- =======================================================
      Author: Zem-Indigo
      Author URL: Comming Soon
    ======================================================= -->
    <style type="text/css">
      .login{
        background-color: #dadcda;
        border-radius: 6px;
        border: 1px solid #dadcda;
        /*padding: 6px;*/
        width: 40%;
        padding-bottom: 20px;
      }
      form{
        margin: 20px;
      }
      body{
        margin: 10% 0% 10% 30%;
      }
      .intext{
        width: 96%;
      }
      .inlogo{
        width: 100%;
      }
    </style>
</head>

<body class="login-img3-body">

  <div class="login">
    
    <form class="login-form" action="<?php echo base_url('masuk/aksi_login');?>" method="post">
      <img class="inlogo" src="assets/images/izin2.png">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control intext" name="username" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control intext" name="password" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
      </div>
    </form>
    <div class="text-center">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="">Izin Trayek</a> by <a href="">Dishub</a>
        </div>
    </div>
  </div>


</body>

</html>
