$(document).ready(function()
{
	var nav = $('div.nav');
	
	nav.mouseenter(function()
	{
		$(this).fadeTo('fast',0.75);
	});
	
	nav.mouseleave(function()
	{
		$(this).fadeTo('fast',1);
	});
});