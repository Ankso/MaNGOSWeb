var Browser = {
	a : navigator.userAgent.toLowerCase()
}
Browser = {
	ie : /*@cc_on true || @*/ false,
	ie6 : Browser.a.indexOf('msie 6') != -1,
	ie7 : Browser.a.indexOf('msie 7') != -1,
	moz : Browser.a.indexOf('mozilla/5') != -1,
	opera : !!window.opera,
	safari : Browser.a.indexOf('safari') != -1,
	safari3 : Browser.a.indexOf('applewebkit/5') != -1,
	mac : Browser.a.indexOf('mac') != -1
}
function addStylesheet(href, media) {
	document.getElementsByTagName("head")[0].appendChild(createElement('link', {
		'rel': 'stylesheet',
		'type': 'text/css',
		'media': media || 'screen, projection',
		'href': href
	}));
}
function createElement(name, attrs, doc, xmlns) {
	var doc = doc || document;
	var elm;
	if(doc.createElementNS)
		elm = doc.createElementNS(xmlns || "http://www.w3.org/1999/xhtml", name);
	else
		elm = doc.createElement(name);
	if(attrs)
		for(attr in attrs)
			elm.setAttribute(attr, attrs[attr]);
	return elm;
}
