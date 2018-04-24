$(document).ready(function()
{
	$(".div_head").click(function()
	{
		$(this).next().slideToggle("fast");
	});
});