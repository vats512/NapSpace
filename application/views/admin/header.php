<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HHSPG</title>
	<base href="<?= $this->config->item('base_url');?>/hhspg"/>
	<meta
		content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
		name="viewport">
	<link rel="stylesheet" type="text/css" href="others/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.css">
	<link rel="stylesheet" type="text/css" href="others/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" type="text/css" href="others/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/select2.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-confirm.css">
	<link rel="stylesheet" type="text/css" href="js/square/purple.css">
	
	<script type="text/javascript" src="others/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script type="text/javascript" src="others/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-confirm.js"></script>
	<script type="text/javascript" src="js/icheck.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/admin.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.dropdown-toggle').dropdown();
		});
	</script>
	<script type="text/javascript" src="js/select2.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
	<script type="text/javascript" src="others/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="others/dist/js/app.min.js"></script>
</head>
<body class="skin-blue sidebar-mini">
	<div id="wrapper">
		<header class="main-header"  style="position: fixed; width: 100%">
			<a href="javascript:void(0)" class="logo"> <span
				class="logo-mini"><b>AP</b></span> <span class="logo-lg"><b>Admin Panel</b></span>
			</a>
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas"
					role="button"> <span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu"><a href="#"
							class="dropdown-toggle" data-toggle="dropdown"> <img
								src="others/dist/img/user2-160x160.jpg"
								class="user-image" alt="User Image"> <span
								class="hidden-xs">HHSPG</span>
						</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header"><img
									src="others/dist/img/user2-160x160.jpg"
									class="img-circle" alt="User Image">
									<p>
										HHSPG - Admin <small>Member since
											Nov. 2012</small>
									</p></li>
								<!-- Menu Body -->
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-right">
										<a href="admin/logout" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul></li>
						<!-- Control Sidebar Toggle Button -->
						
					</ul>
				</div>
			</nav>
		</header>
