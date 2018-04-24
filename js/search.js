$(document).ready(function()
{
	$(document).on("click",".add_to_wishlist",function()
	{
		id = $(this).attr('rel');
		url = window.location.href;
		elem = $(this);

		$.ajax
		({
			type: "POST",
			url: "home/add_to_wishlist",
			data: { pg_id: id, url: url },
			success: function(response)
			{
				if(response == "TRUE")
				{
					elem.addClass("remove_from_wishlist").removeClass("add_to_wishlist");
				}
				else
				{
					window.location.href = "user/?return_url="+response;
				}
				
			}
		});
	});
	$(document).on("click",".remove_from_wishlist",function()
	{
		id = $(this).attr('rel');
		url = window.location.href;
		elem = $(this);

		$.ajax
		({
			type: "POST",
			url: "home/remove_from_wishlist",
			data: { pg_id: id, url: url },
			success: function(response)
			{
				if(response == "TRUE")
				{
					elem.addClass("add_to_wishlist").removeClass("remove_from_wishlist");
				}
				else
				{
					window.location.href = "user/?return_url="+response;
				}
				
			}
		});
	});
	
	$(".pg_result_div").click(function()
    {	
    	$("#disp").hide();
    	id = $(this).attr('id');
    	$.ajax
    	({
    		type: 'POST',
    		url: "home/get_modal_pg", 
    		data: {id: id},
    		success: function(result)
    		{
        		$("#tar").html(result);
        		$("#disp").fadeIn("slow");
    		}
    	});
    	
    });
    $(document).on("click","#close_button",function()
    {
    	$("#disp").fadeOut("slow");
    });
    $(document).mouseup(function(e)
	{
	    var container = $("#disp");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        $("#disp").fadeOut("slow");
	    }
	});
});