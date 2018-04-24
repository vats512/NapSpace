var list_ind;
var list_max;
var search_allow = 1;
$("#header").children().each(function()
{
	$(this).css('backgroundColor','transparent');
});
$(document).ready(function()
{
	$(function()
	{
		$("#type_anim_1").typed
		({
			strings: ["Right"],
			typeSpeed: 100,
			callback: function()
			{
				$("#type_anim_1").next().remove();
				$("#type_anim_2").typed
				({
					strings: ["Accommodation.","Place.","Time.","Price."],
					typeSpeed: 100,
					backDelay: 800,
					backSpeed: 50,
					callback: function()
					{
						setTimeout(function()
						{
							$("#type_anim_2").next().remove();
						},1000);
					},
				});
			},
		});
	});
	$(document).mouseup(function(e)
	{
	    var container = $("#search_container");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        $("#search_list").hide();
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
						$("#search_list").hide();
					}
					else
					{
						var regex = new RegExp(area,"gi");
						$("#search_list").html(response);
						$("#search_list p").each(function()
						{
							tmp_txt = $(this).html().replace(regex, '<strong>$&</strong>');
							$(this).html(tmp_txt);
						});
						$("#search_list").show();
					}
					list_max = $("#search_list p").length;
					list_ind = null;
				}
			});
		}
		else
		{
			$("#search_list").hide();
			$("#search_list").html('');
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
	$(document).on("mouseenter","#search_list p",function()
	{
		list_ind = $(this).index()+1
		goto_select(list_ind);
	});
	$(document).on("click","#search_list p",function()
	{
		select_area($(this).index()+1);	
	});
	$(document).on("click",".click_remove",function()
	{
		$(this).remove();
	});
	$(".city_div").click(function()
	{
		var city = $(this).find(".city_txt").text();
		var content = $(this).find(".description").text().replace(/\n/g, '<br/>') + $(this).find(".explore_div").html();
		$.dialog
		({
			icon: 'glyphicon glyphicon-map-marker',
			columnClass: 'col-sm-6 col-sm-offset-3 ',
			boxWidth: '100%',
			type: 'green',
			title: 'Why '+city+"?",
			content: content,
			confirmButton: 'Delete',
            confirmButtonClass: 'btn-danger',
			closeIcon: true,
            closeIconClass: 'glyphicon glyphicon-remove',
            backgroundDismiss: true,

		});
	});
});
function goto_select(index)
{
	$("#search_list p").removeClass("list_hover");
	$("#search_list p:nth-child("+index+")").addClass("list_hover");
}

function select_area(index)
{
	tmp = $("#search_list p:nth-child("+index+")").text();

	if(tmp.trim() == "")
		return;

	$("#area").val(tmp);
	search_allow = 1;
	$("#search_list").html('');
	$("#search_list").hide();
}