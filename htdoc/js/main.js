// 
// @param toggle #stack_menu
// 
// @return toggle #stack_menu 
// 
$('#stack_menu').on('click', function() {
	if ($('nav').is(':visible')){
		$('#stack_menu').removeClass('selected');
	} else {
		$('#stack_menu').addClass('selected');
	}
	$('nav').toggle(150);
});


// 
// @param toggle #notification_menu
// 
// @return toggled #notification_menu 
// 
// !CURRENTLY INACTIVE
$('#notification_menu').on('click', function() {
	if ($('#ui-data-menu').is(':visible')){
		$('#notification_menu').css('background-color', '#cccccc'); //#cccccc #B94657
	} else {
		$('#notification_menu').css('background-color', '#ffffff'); //#ffffff
	}
	$('#ui-data-menu').toggle(150);
});


// 
// @param galereya | http://vodkabears.github.io/galereya/
// 
// @return community wall 
// 
$('#wall').galereya({

	// spacing between cells of the masonry grid
    spacing: 3,

    // waving visual effect
    wave: false,

    // speed of the slide show
    slideShowSpeed: 10000,

    // speed of appearance of cells
    cellFadeInSpeed: 100

});