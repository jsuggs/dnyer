//
//  In my case I want to load them onload, this is how you do it!
// 
Event.observe(window, 'load', loadAccordions, false);

//
//	Set up all accordions
//
function loadAccordions() {
	
	var contactAccordion = new accordion('contactform');
	var loginAccordion = new accordion('login');
	var packagesAccordion = new accordion('packages');
	var featuresAccordion = new accordion('features');
	
	// Open first one
	/*if (openAccordion != 1000)
		bottomAccordion.activate($$('#vertical_container .accordion_toggle')[openAccordion]);*/
	
}