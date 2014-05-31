function slideSwitch(target) {
	var $active = $(target+' a.active');
	if ( $active.length == 0 ) $active = $(target+' a:last');
	var $next = $active.next().length ? $active.next()
: $(target+' a:first');
	$active.addClass('last-active');
	$next.css({opacity: 0.0})
		.addClass('active')
		.animate({opacity: 1.0}, 1000, function() {
			$active.removeClass('active last-active');
		});
}
$(document).ready(function(){
	var play1 = setInterval("slideSwitch('#slideshow')", 5000 );
	var play2 = setInterval("slideSwitch('#slideshow2')", 5000 );
	var play3 = setInterval("slideSwitch('#slideshow3')", 5000 );
	$("#slideshow").hover(function() {clearInterval(play1); clearInterval(play2); clearInterval(play3);},function() {play1 = setInterval( "slideSwitch('#slideshow')", 5000 ); slideSwitch("#slideshow"); play2 = setInterval( "slideSwitch('#slideshow2')", 5000 ); slideSwitch("#slideshow2"); play3 = setInterval( "slideSwitch('#slideshow3')", 5000 ); slideSwitch("#slideshow3");});
	$("#slideshow2").hover(function() {clearInterval(play1); clearInterval(play2); clearInterval(play3);},function() {play1 = setInterval( "slideSwitch('#slideshow')", 5000 ); slideSwitch("#slideshow"); play2 = setInterval( "slideSwitch('#slideshow2')", 5000 ); slideSwitch("#slideshow2"); play3 = setInterval( "slideSwitch('#slideshow3')", 5000 ); slideSwitch("#slideshow3");});
	$("#slideshow3").hover(function() {clearInterval(play1); clearInterval(play2); clearInterval(play3);},function() {play1 = setInterval( "slideSwitch('#slideshow')", 5000 ); slideSwitch("#slideshow"); play2 = setInterval( "slideSwitch('#slideshow2')", 5000 ); slideSwitch("#slideshow2"); play3 = setInterval( "slideSwitch('#slideshow3')", 5000 ); slideSwitch("#slideshow3");});
});
