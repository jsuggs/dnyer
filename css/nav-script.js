function showNav1 () {
	var lnh1 = document.getElementById('lnh1');
	var lnh2 = document.getElementById('lnh2');
	var lnh3 = document.getElementById('lnh3');
	var nav1 = document.getElementById('nav1');
	var nav2 = document.getElementById('nav2');
	var nav3 = document.getElementById('nav3');
	nav1.style.display = "block";
	nav2.style.display = "none";
	nav3.style.display = "none";
	/*lnh1.style.background = "url(../images/left-nav-header-hover.gif) no-repeat top left";
	lnh2.style.background = "url(../images/left-nav-header.gif) no-repeat top left";
	lnh3.style.background = "url(../images/left-nav-header.gif) no-repeat top left";*/
}

function showNav2 () {
	var lnh1 = document.getElementById('lnh1');
	var lnh2 = document.getElementById('lnh2');
	var lnh3 = document.getElementById('lnh3');
	var nav1 = document.getElementById('nav1');
	var nav2 = document.getElementById('nav2');
	var nav3 = document.getElementById('nav3');
	nav1.style.display = "none";
	nav2.style.display = "block";
	nav3.style.display = "none";
	/*lnh1.style.background = "url(../images/left-nav-header.gif) no-repeat top left";
	lnh2.style.background = "url(../images/left-nav-header-hover.gif) no-repeat top left";
	lnh3.style.background = "url(../images/left-nav-header.gif) no-repeat top left";*/
}

function showNav3 () {
	var lnh1 = document.getElementById('lnh1');
	var lnh2 = document.getElementById('lnh2');
	var lnh3 = document.getElementById('lnh3');
	var nav1 = document.getElementById('nav1');
	var nav2 = document.getElementById('nav2');
	var nav3 = document.getElementById('nav3');
	nav1.style.display = "none";
	nav2.style.display = "none";
	nav3.style.display = "block";
	/*lnh1.style.backgroundImage = "url(../images/left-nav-header.gif)";
	lnh2.style.backgroundImage = "url(../images/left-nav-header.gif)";
	lnh3.style.backgroundImage = "url(../images/left-nav-header-hover.gif)";*/
}

function showWelcome () {
	var inner = document.getElementById ('inner');
	var popIn = document.getElementById ('popIn');
	inner.innerHTML = '<div class="innerBox"><div class="popInHeader">WELCOME TO DNYER SITE DEV!</div>Please, feel free to explore the site, test the features that are currently installed, and come up with your own ideas for your website! Then, when you are done developing your magnificant ideas, contact us with what you are looking for and how we may be of service! Based on your descriptions and ideas, we will be able to generate a quote! Pricing will vary based on the design and programming necessary for your dream site to be created! Thank you for visiting Dnyer Site Dev!</div>';
	inner.style.display = "block";
	inner.style.top = "250px";
	popIn.style.display = "block";
}

function showSEO () {
	var inner = document.getElementById ('inner');
	var popIn = document.getElementById ('popIn');
	inner.innerHTML = '<div class="innerBox"><div class="popInHeader">Search Engine Optimization</div>SEO consists of the use of image alt tags, meta tags, and title tags, as well as the use of page formatting in order to optimize the visibility of your site.';
	inner.style.display = "block";
	popIn.style.display = "block";
}

function showBasic () {
	var inner = document.getElementById ('inner');
	var popIn = document.getElementById ('popIn');
	inner.innerHTML = '<div class="innerBox"><div class="popInHeader">Basic Design</div>This package consists of 4 basic elements: Header, Left Navigation, Body, and Footer.</div>';
	inner.style.display = "block";
	popIn.style.display = "block";
}

function hideAllPopIns () {
	var inner = document.getElementById ('inner');
	var popIn = document.getElementById ('popIn');
	inner.style.display = "none";
	inner.style.top = "455px";
	popIn.style.display = "none";
}