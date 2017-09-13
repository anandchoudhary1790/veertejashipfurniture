<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php base_url();?>img/favicon.png">
    <title>Ci Demo - Admin Panel</title>
    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url(); ?>/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url(); ?>/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo base_url(); ?>/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url(); ?>/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/owl.carousel.css" type="text/css">
	<link href="<?php echo base_url(); ?>/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/css/fullcalendar.css">
	<link href="<?php echo base_url(); ?>/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/css/xcharts.min.css" rel=" stylesheet">	
	<link href="<?php echo base_url(); ?>/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
            <!--logo start-->
            <a href="<?php echo base_url();?>admin/" class="logo">Nice <span class="lite">Admin</span></a>
            <!--logo end-->
            <div class="top-nav notification-row">                
                <ul class="nav pull-right top-menu">
                    
                    <li class="dropdown">
                    <?php 
                   
$username = $this->session->userdata('user_name');
$query = $this->db->get_where('membership',array('user_name' => $username));

$result = $query->row_array(); //For more than one row
                   ?>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url();?>/uploads/<?php echo $result['profile_img'];?>" height="50">
                            </span>
                            <span class="username"><?php echo  $result['user_name'];?>&nbsp;
                            <?php echo $result['last_name'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="<?php echo base_url()?>admin/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                          
                        </ul>
                    </li>
                </ul>
            </div>
      </header>   