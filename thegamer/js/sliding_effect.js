$(document).ready(function()
{
    slide("#navbar", 10, 0, 150, 1);
});

function slide(navigation_id, pad_out, pad_in, time, multiplier)
{
    // creates the target paths
    var link_elements = navigation_id + " li";
    
    // initiates the timer used for the sliding animation
    var timer = 0;
    
    // creates the hover-slide effect for all link elements 		
    $(link_elements).each(function(i)
    {
	$(this).hover(
	function()
	{
	    $(this).animate({ paddingRight: pad_out }, 150);
	},		
	function()
	{
	    $(this).animate({ paddingRight: pad_in }, 150);
	});
    });
}