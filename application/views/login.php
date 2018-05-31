<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Zem-Indigo">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Zem-Indigo">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page Admin | Creative - Zem-Indigo</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url();?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- =======================================================
      Author: Zem-Indigo
      Author URL: Comming Soon
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="<?php echo base_url('masuk/aksi_login');?>" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="">DISHUB BULUKUMBA</a> by <a href="">Zem-Indigo</a>
        </div>
    </div>
  </div>


</body>

</html>
