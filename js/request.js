$(document).ready(function()
{
	$(document).on("click",".change",function()
		{
			//max pool minpool  password url

			id = $(this).attr('rel');
			name = $('div[data-id="'+id+'"]').find(".name").text();
			$("#myModal").find("#name").val(name);
			
			
		});
});