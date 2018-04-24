<script type="text/javascript" src="js/visited.js"> </script>
<!-- <div class="col-sm-12" >
	<h4>
	<div class="col-sm-1 " >
		ID
	</div>
	<div class="col-sm-3">
		PG Name
	</div>
	<div class="col-sm-4">
		Descriptio	
	</div>
	<div class="col-sm-2">
		Contact
	</div>
	<div class="col-sm-2">
		Request handled
	</div>
	</h4>
</div>
<?php
foreach ($details as $k) 
{	?>	
	<div class="col-sm-12 owner_row">
		<div class="col-sm-1">
			<?= $k['id'] ?>
		</div>
		<div class="col-sm-3">
			<?= $k['pg'] ?>
		</div>
		<div class="col-sm-4">
			<?= $k['description'] ?>
		</div>
		<div class="col-sm-2">
			<?= $k['contact'] ?>
		</div>
		<div class="col-sm-2">
			<button class="handled" rel="<?= $k['id'] ?>"> Request handled</button>
		</div>
	</div>
<?php
}
?>
**************** -->
<?php

/*[id] => 2
            [username] => admin
            [password] => 5d41402abc4b2a76b9719d911017c592
            [email] => admin@mydomain.com
            [status] => active
            [phone] => 
            [shortlist] => 2,4,6,6*/
?>
<link rel="stylesheet" type="text/css" href="css/tabular.css"/>
 <script type="text/javascript" src="js/user_edit.js"></script>
<div id="user_data_div">
	<div class="container" id="main_table">
		<div class="row bg-info">
			<div class="col-sm-1 head_cell">
				<p class="h3">ID</p>
			</div>
			<div class="col-sm-3 head_cell">
				<p class="h3">Hostel Name</p>
			</div>
			<div class="col-sm-4 head_cell">
				<p class="h3">Description</p>
			</div>
			<div class="col-sm-2 head_cell">
				<p class="h3">Contact</p>
			</div>
			<div class="col-sm-2 head_cell">
				<p class="h3"></p>
			</div>
		</div>
		<?php foreach ($details as $row):?>
			<div class="row owner_row" rel="<?= $row['id'];?>">
				<div class="content_grp col-sm-1 lr0pad" rel="<?= 'id@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['id'] ?></p>
					</div>
				</div>		
				<div class="content_grp col-sm-3 lr0pad" rel="<?= 'pg@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-1 lr0pad">
					</div>
					<div class="content_div col-sm-11 lr0pad">
						<p class="h4 content"><?= $row['pg'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-4 lr0pad" rel="<?= 'description@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-1 lr0pad">
					</div>
					<div class="content_div col-sm-11 lr0pad">
						<p class="h4 content"><?= $row['description'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'contact@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-1 lr0pad">
					</div>
					<div class="content_div col-sm-11 lr0pad">
						<p class="h4 content"><?= $row['contact'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'request@'.$row['id'];?>">
					<div class="content_div col-sm-10 lr0pad">
						<button class="handled btn btn-primary" rel="<?= $k['id'] ?>"> Request handled</button>
					</div>
				</div>
				
			</div> 
		<?php endforeach;?>
	</div>
</div>


