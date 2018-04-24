<!DOCTYPE html>
<html>
<head>
	<base href="<?= $this->config->item('base_url');?>/"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<title>HHS PG</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div id="header">
        <nav class="navbar navbar-default navigation-clean-button navbar-head">
            <div class="container_div">
                <div class="navbar-header">
                <a class="navbar-brand" href="">HHSPG</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div id="search_container">
					<div id="city_div" class="pull-left">
						<select class="center_input" name="city" id="city" data-placeholder="City">
							<option value="Ahmedabad" selected>Ahmedabad</option>
							<option value="Jaipur">Jaipur</option>
							<option value="Jodhpur">Jodhpur</option>
						</select>
					</div>
					<div id="area_div" class="pull-left">
						<input type="search" class="center_input" name="area" id="area" placeholder="Search by locality..." autocomplete="off" autofocus="true" />
						<div id="search_list" style="display: none">
							
						</div>
					</div>
					<div id="gender_div" class="pull-left">
						<select class="center_input" name="gender" id="gender" data-placeholder="Pg for">
							<option value="male"><span class="fa fa-mars" aria-hidden="true">Boys</span></option>
							<option value="female">Girls</option>
						</select>
					</div>
					<div id="search_btn_div" class="pull-left">
						<button type="button" id="search_pgs" class="btn center_input">
							<span class="glyphicon glyphicon-search"></span>
							 Search
						</button>
					</div>
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
                    <?php if($this->session->userdata('user_id')==null and $this->session->userdata('owner_id')==null){?>	
	                    <p class="navbar-text navbar-right actions">
		                    <a class="navbar-link login" href="owner">Owner</a>
		                    <a class="btn btn-default action-button" role="button" href="user">User</a>
		                </p>

	                <?php
	            		} 
	                	else
	                	{
	                ?>
							<p class="navbar-text navbar-right actions">
							<a class="btn btn-default action-button" role="button" href="user/logout">Logout</a>
							</p>
					<?php 
						}
					?>
                </div>
            </div>
        </nav>
    </div>
	
	<div id="body">
	<?php 
	$t=$this->session->userdata('user_id')==null Or $this->session->userdata('owner_id')==null;

	echo $t; ?>



<link rel="stylesheet" type="text/css" href="css/font-awesome.css">




