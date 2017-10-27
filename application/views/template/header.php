
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="<?=base_url()?>assets/img/favicon.png" type="image/gif">
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />

    <!--  CSS for Custom style     -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

    <div class="wrapper">


        <div class="sidebar" data-color="green" data-image="<?php base_url() ?>assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->

            <div class="logo">
                <a href="<?php echo base_url(); ?>" class="simple-text">
                	 <i class="material-icons">home</i><br>Akash
                </a>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="<?php  if($currentPage =='dashboard'){echo 'active';} ?>">
                        <a href="<?php echo base_url(); ?>">
                            <i class="material-icons">home</i>
                            <p>Home</p>
                        </a>
                    </li>
                    <?php if ($session_data==true) { ?>
                    <li class="<?php  if($currentPage =='users'){echo 'active';} ?>">
                        <a href="<?php echo base_url(); ?>admin/users/">
                            <i class="material-icons">person</i>
                            <p>User List</p>
                        </a>
                    </li>
                     <li class="<?php  if($currentPage =='admin'){echo 'active';} ?>">
                        <a href="<?php echo base_url(); ?>admin/">
                            <i class="material-icons">https</i>
                            <p>Admin</p>
                        </a>
                    </li>
                    
                   <?php } ?>
                   <li class="<?php  if($currentPage =='add_user'){echo 'active';} ?>">
                        <a href="<?php echo base_url(); ?>admin/users/add_user">
                            <i class="material-icons">input</i>
                            <p>Add New Entry</p>
                        </a>
                    </li>
                    <li class="<?php  if($currentPage =='contact'){echo 'active';} ?>">
                        <a href="<?php echo base_url(); ?>Contact">
                            <i class="material-icons text-gray">speaker_notes</i>
                            <p>Contact</p>
                        </a>
                    </li>
                    <li class="<?php  if($currentPage =='about'){echo 'active';} ?>">
                        <a href="<?php echo base_url(); ?>about">
                            <i class="material-icons text-gray">info</i>
                            <p>About</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Akash Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <?php if ($session_data) { ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <p class=""><i class="material-icons">person</i>
                                    <?php echo $username; ?></p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="material-icons">person</i>
                                   <p class="">Profile</p>
                                </a></li>
                                    <li><a href="<?php echo base_url() ?>admin/dashboard/logout">
                                    <i class="material-icons">launch</i>
                                   <p class="">Log Out</p>
                                    </a></li>

                                </ul>
                            </li>
                            <?php }else{ ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <p class=""><i class="material-icons">person</i>
                                    <?php echo $username; ?></p>
                                </a>
                                <ul class="dropdown-menu">
                                   
                                    <li><a href="<?php echo base_url() ?>login">
                                    <i class="material-icons">launch</i>
                                   <p class="">Log In</p>
                                    </a></li>

                                </ul>
                            </li>
                            <?php } ?>
                        </ul>

                        

                        <form method="POST" class="navbar-form navbar-right"  action="<?php echo base_url() .'users/search/public_search/'.$name; ?>">
                            <div class="form-group ">
                                <p class="title"> <span style="font-weight: 600;padding: 0px;"> </span>
                                <input style="/*width: 220px;*/" name="search_input" type="text" placeholder="Enter Name to search" class="text-center form-control" ></p>
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i><div class="ripple-container"></div>
                            </button>
                        </form>

                    </div>
                </div>
            </nav>