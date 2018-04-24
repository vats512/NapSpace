<script type="text/javascript" src="js/visited.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/tabular.css"/>
 <script type="text/javascript" src="js/user_edit.js"></script> -->
<div id="user_data_div">
	<div class="container" id="main_table">
		<div class="row bg-info">
			<div class="col-sm-1 head_cell">
				<p class="h3">ID</p>
			</div>
			<div class="col-sm-1 head_cell">
				<p class="h3">OwnerID</p>
			</div>
			<div class="col-sm-3 head_cell">
				<p class="h3">Address</p>
			</div>
			<div class="col-sm-2 head_cell">
				<p class="h3">Landmark</p>
			</div>
			<div class="col-sm-3 head_cell">
				<p class="h3">Contact</p>
			</div>
			<div class="col-sm-2 head_cell">
				<p class="h3">Visited</p>
			</div>
		</div>
		<?php foreach ($details as $row):?>
			<div class="row request_row" rel="<?= $row['id'];?>">
				<div class="content_grp col-sm-1 lr0pad" rel="<?= 'id@'.$row['id'];?>">
					<div class="content_div col-sm-12 lr0pad">
						<p class="h4 content"><?= $row['id'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-1 lr0pad" rel="<?= 'owner_id@'.$row['id'];?>">
					<div class="content_div col-sm-12 lr0pad">
						<p class="h4 content"><?= $row['owner_id'] ?></p>
					</div>
				</div>		
				<div class="content_grp col-sm-3 lr0pad" rel="<?= 'address@'.$row['id'];?>">
					<div class="content_div col-sm-12 lr0pad">
						<p class="h4 content"><?= $row['address'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'landmark@'.$row['id'];?>">
					<div class="content_div col-sm-12 lr0pad">
						<p class="h4 content"><?= $row['landmark'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-3 lr0pad" rel="<?= 'contact@'.$row['id'];?>">
					<div class="content_div col-sm-12 lr0pad">
						<p class="h4 content"><?= $row['contact'] ?></p>
					</div>
				</div>
				
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'request@'.$row['id'];?>">
					<div class="content_div col-sm-12 lr0pad">
						<button class="visited btn btn-primary" rel="<?= $row['id'] ?>"> Request handled</button>
					</div>
				</div>
				
			</div> 
		<?php endforeach;?>
	</div>
</div>