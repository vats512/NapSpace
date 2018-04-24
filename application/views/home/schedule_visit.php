<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
    
    function date() {
               alert ("Thanks your date is submitted to NapSpace");
               document.write ("Your Date is Submitted to us!");
            }
    alert
  });
  </script>
<div class="col-sm-5 col-sm-offset-3">
	<h2>
		<span class="glyphicon glyphicon-time"></span>
		Schedule Visit
	</h2><hr/>
	<form action="user/save_scheduled_visit" method="post">
	Contact no:<br>
		<input type="text" name="contact" class="form-control" required oninvalid="this.setCustomValidity('Please enter a valid phone number')" pattern="[0-9]{10}">
		<br>
		Date:
		<input class="form-control" id="datepicker" value="Click here to Select your convinient Date" name="Cal1" onclick="date();"/>
		<br>
		Time:
		<input type="time" name="time" required class="form-control"></input>
		<br>
		<input type="hidden" name="pg_id" value="<?= $id;?>"/>
		<input type="submit" class="btn btn-success">
	</form>
</div>
