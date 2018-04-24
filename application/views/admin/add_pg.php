	<style type="text/css">

.white
{
color: white;
}
button.accordion {
background-color: #eee;
color: #444;
cursor: pointer;
padding: 18px;
width: 100%;
border: none;
text-align: left;
outline: none;
font-size: 15px;
transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
background-color: #ddd;
}

button.accordion:after {
content: '\02795';
font-size: 13px;
color: #777;
float: right;
margin-left: 5px;
}

button.accordion.active:after {
content: "\2796";
}

div.panel {
padding: 0 18px;
background-color: white;
max-height: 0;
overflow: hidden;
transition: 0.6s ease-in-out;
opacity: 0;
}

div.panel.show {
opacity: 1;
max-height: 500px;  
}
</style>
<div id="body" class="container-fluid"><div class="col-sm-12">
	<h2 class="text-primary col-sm-offset-5">Add PG</h2><br/>
	<form action="admin/new_pg_data" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
		<button type="button" class="accordion">Basic Info</button>
		<div class="panel">
			<p>
        <div class="form-group">
			        <label class="control-label col-sm-2" for="PG Name">PG Name:</label>
	            <div class="col-sm-4">          
            <input type="text" id="PG Name" class="form-control" name="PG Name" placeholder="Enter PG Name">
        </div>  
		</div>	
<div class="form-group">
			        <label class="control-label col-sm-2" for="PG Name">PG Description:</label>
	            <div class="col-sm-4">          
            <textarea id="PG Name" class="form-control" name="description" rows="10" cols="20"
           placeholder="Enter PG Name"></textarea>
        </div>  
		</div>	

		<div class="form-group">
			        <label class="control-label col-sm-2" for="Address">Address:</label>
	            <div class="col-sm-4">          
            <input type="text" id="Address" class="form-control" name="address" placeholder="Enter Full Address here!!!">
        </div>  
		</div>	


        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Contact No:</label>
            <div class="col-sm-4">          
                <input type="text" id="contact" class="form-control" name="contact" placeholder="Enter Contact Number">
            </div>
            
        </div>	
        <div class="form-group">
			        <label class="control-label col-sm-2" for="Gender">Gender:</label>
	    	    <div class="col-sm-4">
	    					<div class="radio">
					<label><input type="radio" name="gender" value="Male">Male</label>
				</div>
							<div class="radio">
					<label><input type="radio" name="gender" value="Female">Female</label>
				</div>
			     
        </div>
        
    </div>
	
  	<div class="form-group">
			        <label class="control-label col-sm-2" for="area">Area:</label>
	            <div class="col-sm-4">          
            <input type="text" id="Area" class="form-control" name="area" placeholder="Enter Area">
        </div>
        </div>
        <div class="form-group">
			<label class="control-label col-sm-2" for="latitude">Latitude:</label>
	        <div class="col-sm-4">          
            	<input type="text" id="latitude" class="form-control" name="latitude" placeholder="Enter Latitude">
        	</div>
        </div>

        <div class="form-group">
			<label class="control-label col-sm-2" for="longitude">Longitude:</label>
	        <div class="col-sm-4">          
            	<input type="text" id="longitude" class="form-control" name="longitude" placeholder="Enter Longitude">
        	</div>
        </div>
    </p>
    </div>
<button type="button" class="accordion">Rules & Regulations</button>
<div class="panel">
  <p>	  
	<div class="form-group">
		<div class="col-sm-4">
			    	<?php foreach ($rules as $row):?>
	    		    <?php	
	    		    	if($row['type']=='napspace')
	    		    	{	
	    		    ?>		    	    		

				    <div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="<?=$row['rule']?>">
					<?=$row['rule']?></label>
					</div>
							 
				<?php } ?>
				<?php	endforeach;?>

				  	</div>
				  	<div class="col-sm-offset-2 col-sm-4">
				  	
				<?php foreach ($rules as $row):?>
	    		<?php	
    		    	if($row['type']=='Owner')
    		    	{	
    		    ?>    
		    	    		
	    		    <div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="<?=$row['rule']?>">
					<?=$row['rule']?></label>
					</div>					    		
							 
				<?php } ?>
				<?php	endforeach;?>
					</div>
    </div>
	</p>
</div>
	<button type="button" class="accordion">Amenities</button>
		<div class="panel">
	<p>	  
	<div class="form-group">
			    	<div class="col-sm-4">
			    	<?php foreach ($amenities as $row):?>
	    		    <?php	
	    		    	if($row['id']<18)
	    		    	{	
	    		    ?>    
		    	    		

				    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="<?=$row['id']?>"> <?=$row['name']?> </label>
							</div>
							 
				<?php } ?>
				<?php	endforeach;?>
				  	</div>
				  	<div class="col-sm-offset-2 col-sm-4">
				  	<?php foreach ($amenities as $row):?>
	    		    <?php	
	    		    	if($row['id']>=18)
	    		    	{	
	    		    ?>    
		    	    		

				    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="<?=$row['id']?>"> <?=$row['name']?> </label>
							</div>
							 
				<?php } ?>
				<?php	endforeach;?>
					</div>
				
	</div></p>
			 
        
    </div>
	<button type="button" class="accordion">Room Sharing & Price info</button>
		<div class="panel">
	<p>
	<div class="form-group">
			        <label class="control-label col-sm-2" for="Room sharing &amp; Rates">Room sharing &amp; Rates:</label>
	            <div class="col-sm-4">          
            <input type="text" id="Room sharing &amp; Rates" class="form-control" name="room_price" placeholder="Enter Room sharing &amp; Rates">
        </div>
        
    </div>	<div class="form-group">
			        <label class="control-label col-sm-2" for="Number of vacant rooms">Number of vacant beds:</label>
	            <div class="col-sm-4">          
            <input type="text" id="Number of vacant rooms" class="form-control" name="vacant_beds" placeholder="Enter Number of vacant beds">
        </div>
        
    </div>	<div class="form-group">
			        <label class="control-label col-sm-2" for="City">City:</label>
	            <div class="col-sm-4">          
            <input type="text" id="City" class="form-control" name="city" placeholder="Enter City">
        </div>
        
    </div>	<div class="form-group">
			        <label class="control-label col-sm-2" for="Price From">Price From:</label>
	            <div class="col-sm-4">          
            <input type="text" id="Price From" class="form-control" name="price_from" placeholder="Enter Price From">
        </div>
        
    </div>	<div class="form-group">
			        <label class="control-label col-sm-2" for="Price To">Price To:</label>
	            <div class="col-sm-4">          
            <input type="text" id="Price To" class="form-control" name="price_to" placeholder="Enter Price To">
        </div>
        
    </div>	<div class="form-group">
			        <label class="control-label col-sm-2" for="Type">Type:</label>
	            <div class="col-sm-4">
	            <select class="form-control" name="type">
	            	<option value="Premium">Premium</option>
	            	<option value="Executive">Executive</option>
	            	<option value="Backpacker">Backpacker</option>
	            </select>          
        </div>
        
    </div>	
    </p> 
    </div>	
	<button type="button" class="accordion">Add Images</button>
		<div class="panel">
	<p>
        <div class="form-group has-feedback" style="">
            <label class="control-label col-sm-2" for="file">Images:</label>  
            <div class="col-sm-2 file_div">
                <input type="button" class="form-control btn btn-primary file_trigger" value="Upload Images">
                <span class="glyphicon glyphicon-picture form-control-feedback white"></span>
                <input type="file" class="file" name="image[]" accept="image/*" multiple style="display: none">
            </div>
            
        </div>	 </p>
        </div>

        <div class="clearfix"></div><br>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-8">
                <button class="btn btn-success col-sm-7">
                    <span class="glyphicon glyphicon-ok"></span> Submit
                </button>
            </div>  
        </div>
    	</form>
	</div>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show"); 
  }
}
$(document).ready(function()
{
	$(".file_trigger").click(function()
	{
		$(this).parents(".file_div").find(".file").trigger('click');
	});
});
</script>