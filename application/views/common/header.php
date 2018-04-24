<!DOCTYPE html>
<html>
<head>
	<base href="<?= $this->config->item('base_url');?>/"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/jquery-confirm.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<title>NapSpace-Home, Experience - all at one place</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-confirm.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
</head>
<body>
	<div id="header">
        <nav class="navbar navbar-default navigation-clean-button navbar-head">
            <div class="container_div">
                <div class="navbar-header">
                	<a class="navbar-brand" href="" style="padding: 0px"> 
                		<span style="color:#2e64ba;font-family:perpetua;font-weight:900;font-size:40px">NapSpace</span>
                	</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <!-- <ul class="nav navbar-nav">
                        <li class="active" role="presentation"><a href="#">First Item</a></li>
                        <li role="presentation"><a href="#">Second Item</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#">First Item</a></li>
                                <li role="presentation"><a href="#">Second Item</a></li>
                                <li role="presentation"><a href="#">Third Item</a></li>
                            </ul>
                        </li>
                    </ul> -->
	                
		      		<div class="dropdown pull-right" id="large_side_links">
						<p class="navbar-text navbar-right actions pointer" data-toggle="dropdown" style="padding: 5px; margin-left: 25px;" >
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</p>
						<ul class="dropdown-menu pull-right">
							<li><a href="home/about_us">About us</a></li>
							<li><a href="blogs">Blogs</a></li>
							<li><a href="home/contact">Contact us</a></li>
						</ul>
					</div>
                    <?php if($this->session->userdata('user_id')==null and $this->session->userdata('owner_id')==null):?>	
	                    <p class="navbar-text navbar-right actions">
		                    <a class="btn btn-default action-button" role="button" href="user" style="background:#2e64ba">Login</a>
		                </p>

	                <?php elseif($this->session->userdata('user_id')!=null):?>
							<p class="navbar-text navbar-right actions">
							<a href="user/view_wishlist">
								<button class="btn btn-danger action-button">
									<i class="fa fa-star"></i> 
									View Wishlist
								</button>
							</a>
							<a href="user/find_friends">
								<button class="btn btn-danger action-button">
									<i class="fa fa-star"></i> 
									Find Friends
								</button>
							</a>
							<a class="btn btn-default action-button" role="button" href="user/logout" style="background:#2e64ba">Logout</a>
							</p>
					<?php elseif($this->session->userdata('owner_id')!=null):?>
							<p class="navbar-text navbar-right actions">
							<a class="btn btn-default action-button" role="button" href="owner/logout" style="background:#2e64ba">Logout</a>
							</p>
					<?php endif;?>	
					<div id="small_side_links">
						<p class="white">
							<a class="navbar-link login white" href="owner">About us</a>
							<a class="navbar-link login white" href="owner">Blogs</a>
							<a class="navbar-link login white" href="owner">Contact us</a>
						</p>
					</div>
                </div>
            </div>
        </nav>
    </div>
	
	<div id="body">
	<?php 
	$t=$this->session->userdata('user_id')==null Or $this->session->userdata('owner_id')==null;
	 ?>
