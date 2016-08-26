<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 with codeigniter 3</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url();?>adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>adminlte/plugins/font-awesome/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>adminlte/plugins/font-awesome/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>adminlte/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>adminlte/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue fixed" data-spy="scroll" data-target="#scrollspy">
  

    <div class="wrapper">



	  
	  
	  <header class="main-header">
	  <a href="../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <div class="container-fluid">
    
			
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
			</a>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
	  

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <div class="sidebar" id="scrollspy">

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="nav sidebar-menu">
            <li class="header">TABLE OF CONTENTS</li>
            <li class="active"><a href="#introduction"><i class="fa fa-circle-o"></i> Introduction</a></li>
            <li><a href="#download"><i class="fa fa-circle-o"></i> Download</a></li>
            <li><a href="#dependencies"><i class="fa fa-circle-o"></i> Dependencies</a></li>
            <li><a href="#advice"><i class="fa fa-circle-o"></i> Advice</a></li>
            <li><a href="#layout"><i class="fa fa-circle-o"></i> Layout</a></li>
            <li><a href="#adminlte-options"><i class="fa fa-circle-o"></i> Javascript Options</a></li>
            <li class="treeview" id="scrollspy-components">
              <a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Components</a>
              <ul class="nav treeview-menu">
                <li><a href="#component-main-header">Main Header</a></li>
                <li><a href="#component-sidebar">Sidebar</a></li>
                <li><a href="#component-control-sidebar">Control Sidebar</a></li>
                <li><a href="#component-info-box">Info Box</a></li>
                <li><a href="#component-box">Boxes</a></li>
                <li><a href="#component-direct-chat">Direct Chat</a></li>
              </ul>
            </li>
            <li><a href="#plugins"><i class="fa fa-circle-o"></i> Plugins</a></li>
            <li><a href="#browsers"><i class="fa fa-circle-o"></i> Browser Support</a></li>
            <li><a href="#upgrade"><i class="fa fa-circle-o"></i> Upgrade Guide</a></li>
            <li><a href="#implementations"><i class="fa fa-circle-o"></i> Implementations</a></li>
            <li><a href="#faq"><i class="fa fa-circle-o"></i> FAQ</a></li>
            <li><a href="#license"><i class="fa fa-circle-o"></i> License</a></li>
          </ul>
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <h1>
            AdminLTE Documentation
            <small>Current version 2.3.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Documentation</li>
          </ol>
        </div>

        <!-- Main content -->
        <div class="content body">
