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
			<div class="col-sm-2 head_cell">
				<p class="h3">Firstname</p>
			</div>
			<div class="col-sm-3 head_cell">
				<p class="h3">Email</p>
			</div>
			<div class="col-sm-4 head_cell">
				<p class="h3">Password</p>
			</div>
			<div class="col-sm-2 head_cell">
				<p class="h3">Contact</p>
			</div>
		</div>
		<?php foreach ($result as $row):?>
			<div class="row" rel="<?= $row['id'];?>">
				<div class="content_grp col-sm-1 lr0pad" rel="<?= 'id@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
						<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['id'] ?></p>
					</div>
				</div>		
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'Firstname@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
						<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['name'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-3 lr0pad" rel="<?= 'email@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
						<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['email'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-4 lr0pad" rel="<?= 'password@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
						<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['password'] ?></p>
					</div>
				</div>
				<div class="content_grp col-sm-2 lr0pad" rel="<?= 'contact@'.$row['id'];?>">
					<div class="edit_btn_div col-sm-2 lr0pad">
						<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</div>
					<div class="content_div col-sm-10 lr0pad">
						<p class="h4 content"><?= $row['contact'] ?></p>
					</div>
				</div>
				
			</div> 
		<?php endforeach;?>
	</div>
</div>
