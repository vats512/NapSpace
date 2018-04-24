$(document).ready(function()
{
	url = window.location.href;
	tmp = url.split('/');
	sidelink = $.trim(tmp[tmp.length-1]);
	$('a[href="admin/'+sidelink+'"]').parents('.treeview').addClass("active");
	$('a[href="admin/'+sidelink+'"]').parent().addClass("active_sidelink");
});