<style type="text/css">
	.white
	{
		color: white;
	}
</style>
<div id="pg_form_content" class="container-fluid"><div class="col-sm-12">
	<h2 class="text-primary col-sm-offset-2">Add PG</h2><br/>
	<form action="admin/new_pg_data" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
		
        <div class="form-group">
			        <label class="control-label col-sm-2" for="PG Name">PG Name:</label>
	            <div class="col-sm-4">          
            <input type="text" id="PG Name" class="form-control" name="PG Name" placeholder="Enter PG Name">
        </div>  
		</div>	

		 <div class="form-group">
			        <label class="control-label col-sm-2" for="Address">Address:</label>
	            <div class="col-sm-4">          
            <input type="text" id="Address" class="form-control" name="address" placeholder="Enter Full Address here!!!">
        </div>  
		</div>	

        <div class="form-group">
            <label class="control-label col-sm-2" for="contact">Contact:</label>
            <div class="col-sm-4">          
                <input type="text" id="contact" class="form-control" name="contact" placeholder="Contact No:">
            </div>
            
        </div>	<div class="form-group">
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
			        <label class="control-label col-sm-2" for="rules">Rules &amp; Regulations:</label>
	    	    <div class="col-sm-4">
	    		    		<div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="Smoking is not allowed in paying guest.">Smoking is not allowed in paying guest.</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="Alcohol or any other toxic substance not allowed in paying guest.">Alcohol or any other toxic substance not allowed in paying guest.</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="Non-veg food is not allowed in paying guest.">Non-veg food is not allowed in paying guest.</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="1 month notice period.">1 month notice period.</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="Ac electricity bill different.">Ac electricity bill different.</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="No boys are allowed in paying guest.">No boys are allowed in paying guest.</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="No girls are allowed in paying guest">No girls are allowed in paying guest</label>
				</div>
			     
        </div>
        
    </div>
	<div class="form-group">
			        <label class="control-label col-sm-2" for="amenities">Amenities:</label>
	    	    <div class="col-sm-4">
	    		    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="1">24 Hours Security</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="2">Air Conditioner</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="3">Bed & Pillow</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="4">Breakfast</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="5">CCTV</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="6">Common Area</label>
				</div>
							<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="7">Cooking</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="8">CupBoard</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="9">Dinner</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="10">Geyser</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="11">Laundry</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="12">Lift</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="13">Lunch</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="14">Medical Treatment</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="15">Parking</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="16">Penthouse</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="17">R/O</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="18">Reading Space</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="19">Refigerator</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="20">TV</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="21">Tea</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="22">Terrace Garden</label>
				</div>
				    		<div class="checkbox">
					<label><input type="checkbox" name="amenities[]" value="23">Wifi</label>
				</div>
			     
        </div>
        
    </div>	<div class="form-group">
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
            <input type="text" id="Type" class="form-control" name="type" placeholder="Enter Type">
        </div>
        
    </div>	<div class="form-group">
			        <label class="control-label col-sm-2" for="Form Number">Form Number:</label>
	            <div class="col-sm-4">          
            <input type="text" id="Form Number" class="form-control" name="form_no" placeholder="Enter Form Number">
        </div>
        
    </div>	
        <div class="form-group has-feedback" style="">
            <label class="control-label col-sm-2" for="file">Image1:</label>  
            <div class="col-sm-2">
                <input type="button" class="form-control btn btn-primary file_trigger" value="Upload Image">
                <span class="glyphicon glyphicon-picture form-control-feedback white"></span>
                <input type="file" class="file" name="image" style="display: none">
            </div>
            
        </div>	<div class="form-group has-feedback" style="">
			        <label class="control-label col-sm-2" for="Image">Image2:</label>
	                <div class="col-sm-2">
                <input type="button" class="form-control btn btn-primary file_trigger" value="Upload Image">
                <span class="glyphicon glyphicon-picture form-control-feedback pull-left white"></span>
                <input type="file" class="file" name="Image" accept="image/*," style="display: none">
            </div>
            
	</div>
	<div class="form-group has-feedback" style="">
            <label class="control-label col-sm-2" for="file">Image3:</label>  
            <div class="col-sm-2">
                <input type="button" class="form-control btn btn-primary file_trigger" value="Upload Image">
                <span class="glyphicon glyphicon-picture form-control-feedback white"></span>
                <input type="file" class="file" name="image" style="display: none">
            </div>
            
        </div>
		<div class="form-group has-feedback" style="">
            <label class="control-label col-sm-2" for="file">Image4:</label>  
            <div class="col-sm-2">
                <input type="button" class="form-control btn btn-primary file_trigger" value="Upload Image">
                <span class="glyphicon glyphicon-picture form-control-feedback white"></span>
                <input type="file" class="file" name="image" style="display: none">
            </div>
            
        </div>
		<div class="form-group has-feedback" style="">
            <label class="control-label col-sm-2" for="file">Image5:</label>  
            <div class="col-sm-2">
                <input type="button" class="form-control btn btn-primary file_trigger" value="Set Image">
                <span class="glyphicon glyphicon-picture form-control-feedback white"></span>
                <input type="file" class="file" name="image" style="display: none">
            </div>
            
        </div>

        <div class="clearfix"></div><br>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <button class="btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Submit
                </button>
            </div>
            
        </div>
    	</form>
	</div>
</div>