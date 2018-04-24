<link rel="stylesheet" type="text/css" href="css/tabular.css"/>
<script type="text/javascript" src="js/user_edit.js"></script>
<div id="user_data_div">
	<div class="container" id="main_table">
		<div class="row bg-info">
			<div class="col-sm-2 head_cell">
				<p class="h3">ID</p>
			</div>
			<div class="col-sm-3 head_cell">
				<p class="h3">Hostel Name</p>
			</div>
			<div class="col-sm-3 head_cell">
				<p class="h3">Area</p>
			</div>
			<div class="col-sm-2 head_cell">
				<p class="h3">No. of user added this to shortlist</p>
			</div>
			<div class="col-sm-2 head_cell">
				<p class="h3">SEARCH COUNT-No. of hits on this PG</p>
			</div>
		</div>
		<?php foreach ($result as $row):?>
			<div class="row owner_row" rel="<?= $row['id'];?>">
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'id@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['id'] ?></p>
					</div>
				</div>	
				<div class="content_grp col-sm-3 lr0pad" rel="<?= 'name@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['name'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-3 lr0pad" rel="<?= 'area@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['area'] ?></p>
					</div>
				</div>	
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'list@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['list_count'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'search@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['search_count'] ?></p>
					</div>
				</div>
			</div> 
		<?php endforeach;?>
	</div>
</div>