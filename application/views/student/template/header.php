<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Genius - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/bootstrap-datepicker.css">
      <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/jquery.timepicker.css">


      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><i class="flaticon-university"></i>Genius <br><small>University</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>StudentCourse" class="nav-link">Courses</a></li>
          <li class="nav-item"><a href="teacher.html" class="nav-link">Teacher</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="event.html" class="nav-link">Events</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Apply Now!</span></a></li>
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span ><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                        <p>
                            <?php echo $name; ?>
                            <small><?php echo $role_text; ?></small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>

        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    

