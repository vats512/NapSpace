<div id="ajax_load_result_div">
	<?php
		if(count($search_result) == 0)
			$temp = $popular;
		else
			$temp = $search_result;

		$name = array_column($temp, 'name');
		$price = array_column($temp, 'price_from');
		$gender = array_column($temp, 'gender');
		$lat = array_column($temp, 'latitude');
		$long = array_column($temp, 'longitude');
		$myNames = json_encode($name);
		$price = json_encode($price);
		$gender = json_encode($gender);
		$myLat = implode(',', $lat);
		$myLong = implode(',', $long);
		$imgs = array();
		foreach($temp as $pg)
		{
			array_push($imgs, "img/pg_images/".$pg['form_no']."/1.jpg");
		}
	?>
	<link rel="stylesheet" type="text/css" href="css/rating.css"/>
	<script type="text/javascript" src="js/search.js"></script>
	
	<?php if($map_load):?>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBRNM1pWrb94tlegwrj9LbZQcGGmotNl4"></script>
		<script type="text/javascript" src="js/rating.js"></script>
	<?php endif;?>

	<script type="text/javascript">
		var lat = [<?= $myLat;?>];
		var long = [<?= $myLong;?>];
		var names = <?= $myNames;?>;
		var price = <?= $price;?>;
		var gender = <?= $gender;?>;
		var imgs = <?= json_encode($imgs);?>;
	</script>
	<script type="text/javascript" src="js/map.js"></script>
	<div id="main_div" style="position: relative">
		<div class="col-sm-12 lr0pad">
			<div class="col-sm-3" id="results_pane" style="overflow-y: scroll; height: 530px">
			<?php if(count($search_result) > 0):?>
			<?php foreach($search_result as $pg):?>
				<?php
					if(in_array($pg['id'], $wishlist))
						$wish = "remove_from_wishlist";
					else
						$wish = "add_to_wishlist";
				?>
				<?php if($mobile):?>
					<a href="home/view_pg/<?= $pg['name'];?>_<?= $pg['id'];?>">
						<div class="col-sm-12 pg_result_div" id=<?= $pg['id'];?>>
							<div class="col-sm-4 img_div">
								<img src="img/pg_images/<?= $pg['form_no'];?>/1.jpg" class="img-responsive pull-left" style="height: 80px; width: 100%;"/>
							</div>
							<div class="col-sm-8 data_div">
								<span class="pg_name"><?= $pg['name'];?></span>
								<span class="wishlist_icon <?= $wish;?>" rel="<?= $pg['id'];?>" title="Add to wishlist">
									<i class="fa fa-heart"></i>
								</span>
								<h4>Located near <?= $pg['area'];?></h4>


								<!-- <ul class="c-rating"></ul> -->
							</div>
						</div>
					</a>
				<?php else:?>
					<div class="col-sm-12 pg_result_div" id=<?= $pg['id'];?>>
						<div class="col-sm-4 img_div">
							<img src="img/pg_images/<?= $pg['form_no'];?>/1.jpg" class="img-responsive pull-left" style="height: 80px; width: 100%;"/>
						</div>
						<div class="col-sm-8 data_div">
							<span class="pg_name"><?= $pg['name'];?></span>
							<span class="wishlist_icon <?= $wish;?>" rel="<?= $pg['id'];?>" title="Add to wishlist">
								<i class="fa fa-heart"></i>
							</span>
							<br/><phr/>
							<h4>Located near <?= $pg['area'];?></h4>
							<!-- <ul class="c-rating"></ul> -->
						</div>
					</div>
				<?php endif;?>
				
			<?php endforeach;?>
			<?php else:?>
				<div class="col-sm-12" style="text-align: center">
					<h3>We will be arriving there soon! Thank you.</h3>
				</div>
			<?php endif;?>
			<div class="clearfix"></div><br/>
			<?php if(isset($popular)):?>
				<h3>Popular in your city.</h3>
				<hr/>
			<?php foreach($popular as $pg):?>
				<?php
					if(in_array($pg['id'], $wishlist))
						$wish = "remove_from_wishlist";
					else
						$wish = "add_to_wishlist";
				?>
				<div class="col-sm-12 pg_result_div" id=<?= $pg['id'];?>>
					<div class="col-sm-4 img_div">
						<img src="img/pg_images/<?= $pg['form_no'];?>/1.jpg" class="img-responsive pull-left" style="height: 80px; width: 100%;"/>
					</div>
					<div class="col-sm-8 data_div">
						<span class="pg_name"><?= $pg['name'];?></span>
						<span class="wishlist_icon <?= $wish;?>" rel="<?= $pg['id'];?>" title="Add to wishlist">
							<i class="fa fa-heart"></i>
						</span>
						<br>
				
						<phr/>

						<h4>Located near <?= $pg['area'];?></h4>
						<!-- <ul class="c-rating"></ul> -->
					</div>
				</div>
			<?php endforeach;?>
			<?php endif;?>
			</div>
			<div class="col-sm-9">
				<div  id="googleMap" style="width:100%;height:530px;"></div>
			</div>
		</div>
		<div class="col-sm-12 lr0pad" style="position: absolute;display:none;" id="disp">
			<div class="col-sm-offset-3 col-sm-4" style="position: absolute; background: #fff;  height: 530px; overflow-y: scroll;">
				<div id="tar"></div>
			</div>
		</div>
	</div>
	<div id="test_div"></div>
	<!-- <script type="text/javascript">
	    var rat = document.querySelector('.c-rating');
	    var currentRating = 3;
	    var maxRating= 5;
	    var rating;
	    var callback =  function(x)
	                    {
	                        
	                    };
	    var myRating = rating(rat, currentRating, maxRating, callback);
	</script> -->
</div>