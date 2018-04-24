<html>
<head>
 
<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/stylesheet.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/jquery-confirm.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<title>NapSpace-Home, Experience - all at one place</title>
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/jquery-confirm.js"></script>
</head>
<body>
<div class="col-sm-12">
<span style="color:#2e64ba;font-family:perpetua;font-weight:900;font-size:40px">NapSpace</span>

</div>
<br>

<br>
<br>
<br>
<br>
<br>
<div class="col-sm-5 col-sm-offset-3" style="font-size:20px">
Please enter the otp that is sent on your mobile number. Or You can write it down from below.
</div>

<div>
<button class="btn btn-danger"> <?= $otp; echo $otp;?></button>
</div>
<br>
<br>
<br>
<div class="col-sm-5 col-sm-offset-3">
<form action="check_otp" method="post">
<input type="text" name="otp" class="form-control">
<br>
<br>
<input type="submit" class="form-control">


</form>
