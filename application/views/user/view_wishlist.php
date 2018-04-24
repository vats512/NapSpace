<div id="main_div" style="position: relative">
	<?php if(count($wishlist) > 0 ):?>
		<?php foreach ($wishlist as $key => $pg):?>
			<div class="col-sm-12 pg_result_div" id=<?= $pg['id'];?>>
				<div class="col-sm-2 img_div">
					<img src="img/pg_images/<?= $pg['form_no'];?>/1.jpg" class="img-responsive pull-left" style="height: 120px; width: 100%;"/>
				</div>
				<div class="col-sm-2">
					<span class="h2"><?= $pg['name'];?></span>
					<phr/>
					<h4>Located near <?= $pg['area'];?></h4>
				</div>
				<div class="col-sm-2">
					<?php if($pg['price_from'] == $pg['price_to']):?>
						<h4>Price: Rs. <?= $pg['price_from'];?></h4>
					<?php else: ?>
						<h4>Price: Rs. <?= $pg['price_from'];?> - <?= $pg['price_to'];?></h4>
					<?php endif;?>
				</div>
				<div class="col-sm-2 col-sm-offset-4">
					<a href="home/view_pg/<?= $pg['name'].'_'.$pg['id'];?>" target="_blank">
						<button class="btn btn-primary">
							View Full info
						</button>
					</a>
				</div>
			</div>
		<?php endforeach;?>
	<?php endif;?>
</div>
