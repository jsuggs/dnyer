var curr_url = document.URL;

function toggleNextChild(parent) {
	var nextNode = parent.parentNode;
	var divs = nextNode.getElementsByTagName('div');
	for (var i=0; i<divs.length; i++) {
		if (divs[i].className == 'closed')
			divs[i].className = 'open';
		else
			divs[i].className = 'closed';
	}
}

function displayThankYou(frm) {
	frm.innerHTML += "Thank you!";
	return true;
}

function popIn(url,wid,hei) {	
	var scrollHeight = document.body.clientHeight;	
	var scrollWidth = document.body.clientWidth; 
	var centerPt = (parseFloat(scrollWidth) - 731) / 2;	
	var transBg = document.getElementById('dnyerTransBG');	
	transBg.style.height = scrollHeight + "px";	
	var localcontents = '<div id="popInInner"><iframe src="' + url + '" width="' + wid + '" height="' + hei + '" frameborder="0"></iframe></div>';	
	var popInCtnr = document.getElementById('dnyerPopIn');	
	popInCtnr.innerHTML = localcontents;	
	idOffset("dnyerPopIn", 731, hei);	
	var popInInner = document.getElementById('popInInner');	
	popInCtnr.style.display = "block";	
	popInInner.style.width = wid;	
	popInCtnr.style.left = centerPt + "px";
}

function closePopIn() {	
	var transBg = document.getElementById('dnyerTransBG');	
	var ifrm = document.getElementById('dnyerPopIn');	
	transBg.style.height = "0px";	
	ifrm.style.display = "none";
}

function idOffset( id , wid, hei) {	
	var topOff = 60 + document.documentElement.scrollTop;	
	var leftOff = document.body.scrollLeft;	
	if ( typeof( window.innerWidth ) == 'number' ) {
		if ( window.innerWidth > wid ) {
			leftOff += ( window.innerWidth / 2 ) - (wid / 2); 	
		}
	} 
	else if( document.documentElement && document.documentElement.clientWidth ) {
		if ( document.documentElement.clientWidth > wid ) {	
			leftOff += ( document.documentElement.clientWidth / 2 ) - (wid / 2);
		}
	} 
	else if( document.body && document.body.clientWidth ) {	
		if ( document.body.clientWidth > wid ) {
			leftOff += ( document.body.clientWidth / 2 ) - (wid / 2); 
		}
	}
	if ( document.getElementById ) {
		document.getElementById( id ).style.top = topOff + "px";
	}
	else if ( document.layers ) { 	
		document.layers[ id ].style.top = topOff + "px";
	}
	else if ( document.all ) {
		document.all[ id ].style.top = topOff + "px";
	}
}

function stretch( id ) {	
	var fillWidth = "100%";	
	var fillHeight = "100%";
	if ( document.documentElement.scrollHeight < document.body.scrollHeight ) {
		fillHeight = document.body.scrollHeight; 	
	} 
	else if ( document.documentElement && document.documentElement.scrollHeight ) {
		fillHeight = document.documentElement.scrollHeight;
	}
	if ( document.documentElement.scrollWidth < document.body.scrollWidth ) {	
		fillWidth = document.body.scrollWidth; 	
	} 
	else {
		fillWidth = document.documentElement.scrollWidth;
	}	
	if ( fillHeight < screen.height ) {			
		fillHeight = screen.height;	
	}
	if ( fillWidth < screen.width ) {
		fillWidth = screen.width;	
	}
	var styleHei = document.getElementById( id );	
	styleHei.style.height = fillHeight;	
	var styleWid = document.getElementById( id );	
	styleWid.style.width = fillWidth;
}

function hide( id ) {	
	if ( document.getElementById ) {
		document.getElementById( id ).style.visibility = "hidden";
	}	
	else if ( document.layers ) {	
		document.layers[ id ].visibility = "hide"; 	
	}
	else if ( document.all ) {	
		document.all[ id ].style.visibility = "hidden";
	}
}

function show( id ) {	
	if ( document.getElementById ) {	
		document.getElementById( id ).style.visibility = "visible";	
	}  	
	else if ( document.layers ) {	
		document.layers[ id ].visibility = "show"; 	
	}
	else if ( document.all ) {	
		document.all[ id ].style.visibility = "visible";	
	}
} 

function innerDims (id) {
	var newID = document.getElementById(id);
	var x,y;
	if (self.innerHeight) {	
		x = self.innerWidth;y = self.innerHeight;
	}	
	else if (document.documentElement && document.documentElement.clientHeight) {	
		x = document.documentElement.clientWidth;	
		y = document.documentElement.clientHeight;
	}	
	else if (document.body) {
		x = document.body.clientWidth;	
		y = document.body.clientHeight;	
	}
	document.newID.style.height = y;
	document.newID.style.width = x;
}


function toggleQuickContact() {
	var ifrmbg = document.getElementById('quick-contact-frame');
	var ifrm = document.getElementById('qc-iframe');
	if (ifrm.className == "hidden") {
		ifrm.className = "";
		ifrmbg.className = "";
	}
	else {
		ifrm.className = "hidden";
		ifrmbg.className = "hidden";
	}
	ifrm.src += "?currurl=" + curr_url;
}