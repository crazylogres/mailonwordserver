<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Green Edge Technology</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri();?> /css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?> /css/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>
  <body>
    <section id="naVbar">
      <section id="menubar">
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?> /image/logo.png" alt="Green Edge" class="img-responsive" width="150" height="250" style="margin-top: -20px;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#naVbar">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#device">Product</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="https://webmail.gets.com.np/">Mail</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </section>
      <section id="header" style="background-image: url('<?php echo get_template_directory_uri();?> ./image/rawpixel-659503-unsplash.jpg');">
        <div class="container">
          <div class="plan">
            <strong><h1 class="text-center">PLANNING TO BE WITH SUCCESS PARTNER</h1></strong>
            <p class="text-center">We are the service based company. We are here to give a complete solution for you. We are working for those who want to<br> go Faster & Higher. We encourage the public towards the use of IT and focused to give them the complete IT solutions from<br> the world, efficiently.</p>
          </div>
          <div class="text-center textone">
            <a href="#">Get Started</a>
          </div>
        </div>
      </section>
    </section>