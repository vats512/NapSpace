var list_ind;
var list_max;
var search_allow = 1;
$(document).ready(function()
{
	$(document).mouseup(function(e)
	{
	    var container = $("#search_header");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        $("#search_header_list").hide();
	    }
	});
	$("#search_pgs").click(function()
	{
		if(search_allow == 0)
		{
			$("#area").focus();
			return;
		}
		else
		{
			$("#search_form").submit();
		}	
	});
	$("#area").keyup(function(event)
	{
		if(event.which <= 45 && event.which != 8)
			return;

		var city = $("#city").val();
		var area = $("#area").val();
		if(area.trim()!="")
		{
			$.ajax
			({
				type: "GET",
				url: "home/get_area_suggestion",
				data: { city: city, area: area},
				success: function(response)
				{
					if(response.trim() == "")
					{
						$("#search_header_list").hide();
					}
					else
					{
						var regex = new RegExp(area,"gi");
						$("#search_header_list").html(response);
						$("#search_header_list p").each(function()
						{
							tmp_txt = $(this).html().replace(regex, '<strong>$&</strong>');
							$(this).html(tmp_txt);
						});
						$("#search_header_list").show();
					}
					list_max = $("#search_header_list p").length;
					list_ind = null;
				}
			});
		}
		else
		{
			$("#search_header_list").hide();
			$("#search_header_list").html('');
		}
	});
	$("#area").keydown(function(event)
	{
		if(event.which == "40")
		{
			if(list_ind == null)
				list_ind = 0;

			list_ind++;
			
			if(list_ind > list_max)
			{
				list_ind = 1;
			}
			
			goto_select(list_ind);
		}
		else if(event.which == "38")
		{
			event.preventDefault();
			if(list_ind == null)
				list_ind = list_max+1;

			list_ind--;

			if(list_ind <= 0)
			{
				list_ind = list_max;
			}
			
			goto_select(list_ind);
		}
		else if(event.which == "13")
		{
			if(search_allow == 1)
				$("#search_pgs").trigger('click');
			select_area(list_ind);
		}
	});
	$(document).on("mouseenter","#search_header_list p",function()
	{
		list_ind = $(this).index()+1
		goto_select(list_ind);
	});
	$(document).on("click","#search_header_list p",function()
	{
		select_area($(this).index()+1);	
	});
	$(document).on("click",".click_remove",function()
	{
		$(this).remove();
	});
});
function goto_select(index)
{
	$("#search_header_list p").removeClass("list_hover");
	$("#search_header_list p:nth-child("+index+")").addClass("list_hover");
}

function select_area(index)
{
	tmp = $("#search_header_list p:nth-child("+index+")").text();

	if(tmp.trim() == "")
		return;

	$("#area").val(tmp);
	search_allow = 1;
	$("#search_header_list").html('');
	$("#search_header_list").hide();
}