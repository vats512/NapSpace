<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
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
<script type="text/javascript" src="js/request.js"></script>
<form method="post" action="user/finding_friends_keyword"> 

Name: <input type="text" name="name">

Searching Attribute:
<input type="radio" name="keyword" value="City"> City </input>
<input type="radio" name="keyword" value="Area"> Area </input>
<input type="radio" name="keyword" value="Name"> Name </input>

<input type="submit" value="Find" name="find_friends_submit" value=""></input>

</form>

#name,city


<div class="col-sm-12">
					<table border="1" align="left">
<?php
	print_r($friends)
?>