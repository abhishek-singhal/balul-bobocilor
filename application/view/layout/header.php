<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Balul Bobocilor</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="<?php echo URL;?>lte/bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
	<link rel="stylesheet" href="<?php echo URL;?>lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="<?php echo URL;?>lte/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>lte/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>lte/bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>lte/plugins/datepicker/datepicker3.css">
	<!-- <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css')}}"> -->
	<!-- <link rel="stylesheet" href="{{asset('lte/plugins/datatables/dataTables.bootstrap.css')}}"> -->
	<?php $user = $this->model->fetchUser($_SESSION['user_id']);?>
</head>

<body class="hold-transition skin-purple sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="#" class="logo">
				<span class="logo-mini"><b></b></span>
				<span class="logo-lg"><b></b></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">

						<li class="dropdown user user-menu">
							<a href="<?php echo URL;?>user/logout">Logout</a>
						</li>
						<!-- <li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li> -->
					</ul>
				</div>
			</nav>
		</header>

		<!-- NAVBAR -->

		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo URL;?>img/default.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?php echo $user->name;?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<ul class="sidebar-menu">
					<li class="header text-center">MAIN NAVIGATION</li>
					<li <?php if($page == "dashboard"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>user">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>
					<?php if($user->rank >= 2){?>
					<li <?php if($page == "sell"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>ticket/sell">
							<i class="fa fa-money"></i> <span>Sell Ticket</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>
					<?php }?>
					<li <?php if($page == "verify"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>ticket/verify" onclick="loading()">
							<i class="fa fa-search"></i> <span>Verify Ticket</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>
					
					<?php if($user->rank >= 3){?>
					<li class="header text-center">ADMIN CONTROLS</li>
					<li <?php if($page == "create"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>admin/create">
							<i class="fa fa-user-plus"></i> <span>Create Team Member</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>
					<li <?php if($page == "update"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>admin/update">
							<i class="fa fa-user-md"></i> <span>Update Team Members</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>
					<li <?php if($page == "ticket"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>admin/ticket">
							<i class="fa fa-ticket"></i> <span>Generate Tickets</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>
					<li <?php if($page == "stats"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>admin/stats">
							<i class="fa fa-line-chart"></i> <span>Statistics</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>
					<li <?php if($page == "refund"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>admin/refund">
							<i class="fa fa-undo"></i> <span>Refund Ticket</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>

					<li <?php if($page == "school"){?>class="active"<?php }?>>
						<a href="<?php echo URL;?>admin/school">
							<i class="fa fa-graduation-cap"></i> <span>Add School</span>
							<span class="pull-right-container">
								<!--<small class="label pull-right bg-blue">1</small>-->
							</span>
						</a>
					</li>

					<?php }?>
				</ul>
			</section>
		</aside>
		<!-- NAVBAR -->