<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/request.js"></script>

<div class="col-sm-12">
					<table border="1" align="left">

<?php
#id,name,address,area,city,room_price,gender
				foreach ($details as $k) 
{		
	?>
			<div class="col-sm-4 btn btn-info"  style="margin-top:3.5%; " >
			<br/>
			<br/>
				<div data-id="<?= $k['id'] ?>">
					<h4 class="name"><?= $k['name'] ?></h4>
				</div>
			<br/>
			<br/>
			</div>
			<div class="col-sm-6">					
							<ul class="list-group">
							  <li class="list-group-item"> <?= $k['address'] ?></li>
							  <li class="list-group-item"><?= $k['area'] ?></li>
							  <li class="list-group-item"><?= $k['city'] ?></li>
							  <li class="list-group-item"> <?= $k['room_price'] ?></li>
							  <li class="list-group-item"><?= $k['gender'] ?></li>
							</ul>
			</div>
			<div class="col-sm-2" style="margin-top: 7%">
				<button class="btn btn-orange change" rel="<?= $k['id'] ?>" data-toggle="modal" data-target="#myModal">Request for Change</button>
			</div>
					
	<?php
}

?>

</table>
			</div>
<div class="clearfix"></div>
<h2 align="center"><a href="owner/add_pg">Click here to add pg</a></h2>
<br>


<h3 align="center">Click here to request change in details of your pg<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Request</button></h3>

<div id="myModal" class="modal fade modal-lg" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div style="padding:50px ">
     <form action="owner/submit_change" method="post">
     	Contact:<input type="text" class="form-control" name="contact"><br>
     	PG:<input type="text" class="form-control" name="pg" id="name"><br>
     	Write in brief about changes you want to submit<br>
     	<textarea name="description" class="form-control"></textarea>
     	<br>
     	<input type="submit" class="btn btn-danger">
     	</form>
     	</div>
      </div>
    </div>

  </div>
</div>



