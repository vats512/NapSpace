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
			
			<div class="col-sm-1 head_cell lr0pad">
				<p class="h3">Name</p>
			</div>
			<div class="col-sm-3 head_cell lr0pad">
				<p class="h3">Email</p>
			</div>
			<div class="col-sm-2 head_cell lr0pad">
				<p class="h3">Contact</p>
			</div>
			<div class="col-sm-2 head_cell lr0pad">
				<p class="h3">Shortlisted PG</p>
			</div>
			<div class="col-sm-1 head_cell lr0pad">
				<p class="h3">Login Count</p>
			</div>
			<div class="col-sm-2 head_cell lr0pad">
				<p class="h3">Scheduled Visit</p>
			</div>
			<div class="col-sm-1">
				<p class="h3">Y/N?</p>
			</div>
		</div>
		<?php foreach ($result as $row):?>
			<div class="row owner_row" rel="<?= $row['id'];?>">
				<div class="content_grp col-sm-1 lr0pad" rel="<?= 'name@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['name'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-3 lr0pad" rel="<?= 'email@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['email'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'contact@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['contact'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'shortlist@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['shortlist'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-1 lr0pad" rel="<?= 'login_Count@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['login_count'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'scheduled_visit@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['scheduled_visit'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-1 lr0pad" rel="<?= 'status@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['status'] ?></p>
					</div>
				</div>
			</div> 
		<?php endforeach;?>
		
	</div>
</div>
