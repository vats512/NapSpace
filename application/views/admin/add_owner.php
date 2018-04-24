<div id="body" class="container-fluid"><div class="col-sm-12">
	<h2 class="text-primary col-sm-offset-5">Add Owner</h2><br/>
	<form action="admin/new_owner_data" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
        <div class="form-group">
			        <label class="control-label col-sm-2" for="PG Name">Owner Name:</label>
	            <div class="col-sm-4">          
            <input type="text" id="PG Name" class="form-control" name="name" placeholder="Enter Owner Name">
        </div>  
		</div>	


        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-4">          
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            
        </div>	
	<div class="form-group">
            <label class="control-label col-sm-2" for="contact">Contact No:</label>
            <div class="col-sm-4">          
                <input type="text" id="email" class="form-control" name="contact" placeholder="Enter Email">
            </div>
    </div>     
    <div class="form-group">
            <label class="control-label col-sm-2" for="contact">Password:</label>
            <div class="col-sm-4">          
                <input type="text" id="password" class="form-control" name="password" placeholder="Enter Password">
            </div>            
        </div>	

    <div class="clearfix"></div><br>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button class="btn btn-success col-sm-4">
                    <span class="glyphicon glyphicon-ok"></span> Submit
                </button>
            </div>  
        </div>
    	</form>
    </div>
</div>