<?php

echo "<pre>";

if($result==null)
{
	print_r($result);
}
else
{
?>
<table border='1'>
<tr>
	<th></th>
	<th>Id</th>
	<th>Name</th>
	<th>Address</th>
	<th>area</th>
	<th>amenities</th>
	<th>Room price</th>
	<th>Rules</th>
	<th>Gender</th>
	<th>City</th>
</tr>
<form action="admin/approve_pg" method="post">
<?php
	foreach($result as $k)
	{
		$temp=$k['id'];
		echo "<tr><td><input type='checkbox' id='.$temp.'></td><td>".$k['id']."</td><td>".$k['name']."</td><td>".$k['address']."</td><td>".$k['area']."</td><td>".$k['amenities']."</td><td>".$k['room_price']."</td><td>".$k['rules']."</td><td>".$k['gender']."</td><td>".$k['city']."</td></tr>";

	}	
}

?>
</table>
<input type="submit" name="approve"/>
</form>