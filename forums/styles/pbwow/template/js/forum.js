function setDisplay(e, display) {
	if (document.getElementById(e))
		document.getElementById(e).style.display = display;
}
function hide(e) {
	setDisplay(e, 'none');
}
function show(e) {
	setDisplay(e, '');
}
function visible(e) {
	return document.getElementById(e).style.display != 'none';
}
function toggle(e) {
	(visible(e) ? hide : show)(e);
}
function setClass(e, changeClass) {
	document.getElementById(e).className = changeClass;
}
function expandChild(e) {
	setClass(e, 'child-view-expand');
}
function collapseChild(e) {
	setClass(e, 'child-view');
}
function childCollapse(e) {
	return document.getElementById(e).className != 'child-view-expand';
}
function toggleChild(e) {
	(childCollapse(e) ? expandChild : collapseChild)(e);
}


function buttonActive(e) {
	setClass(e, 'login-active');
}
function buttonInactive(e) {
	setClass(e, 'login-inactive');
}
function buttonStyle(e) {
	return document.getElementById(e).className != 'login-active';
}
function toggleButton(e) {
	(buttonStyle(e) ? buttonActive : buttonInactive)(e);
}


function confirmMessage(message)
{
var agree=confirm(message);
if (agree)
	return true;
else
	return false;
}

function addEvent(obj, evType, fn) {
	
    if (obj.addEventListener) {

        obj.addEventListener(evType, fn, false);
        return true;
    } else if (obj.attachEvent) {

        var r = obj.attachEvent("on"+evType, fn);
        return r;
    } else {

        return false;
    }
}
function bufferFunc() {
//window.setTimeout("RePos()",250);
}
if(Browser.moz || Browser.safari)
	addEvent(window, 'load', bufferFunc);


	var docWidth;
	var postWidth;
	var obj;
	var styleSheetNum;
	var styleClassNum;
	
	if (document.all) {
		cssRules = 'rules';
	}
	
	else if (document.getElementById) {
		cssRules = 'cssRules';
	}	
	
	try{
		for (var styleCount = 0; styleCount < document.styleSheets.length; styleCount++){
		
			for (var classCount = 0; classCount < document.styleSheets[styleCount][cssRules].length; classCount++) {
			
				if (document.styleSheets[styleCount][cssRules][classCount].selectorText == ".breakWord") {
				
					styleSheetNum = styleCount;
					styleClassNum = classCount;
			
				}
			}
		}	
	
	}catch(err){}
	
	
	if(Browser.safari)
		setActiveStyleSheet2("safari");
	
	function widthCalc() {
		
		try{
		docWidth = document.body.clientWidth;
		if (docWidth > 745) {
			
			postWidth= docWidth - docWidth*.1;
			postWidth= postWidth - 239;
			postWidth= postWidth - postWidth*.1;
			postWidth=Math.round(postWidth);
			document.styleSheets[styleSheetNum][cssRules][styleClassNum].style["width"] = postWidth+"px";
		
		}
		}catch(err){}				
		
	}


window.onresize=widthCalc;
function resizePost(){
	//alert("hi")

	docWidth = document.body.offsetWidth;
	postWidth= docWidth - docWidth*.1;
	postWidth= postWidth - 239;
	postWidth= postWidth - postWidth*.1;
	postWidth=Math.round(postWidth);
	alert(postWidth)
	document.getElementById("contentWrapper").style.width=postWidth+"px";

}

function checkFieldSize(thisField, minLength, fieldName){
	//alert(" this field: " + thisField + " Min: " + minLength + " name: " + fieldName);
	inputText=thisField.value;
	if(inputText.length < minLength){
		alert(fieldName + " requires at least " + minLength + " character(s)");
		return false;
	}
	return true;
}

var overflowBool=0;
function countCharacter(thisField, divId, maxLength){	
	
	inputText=thisField.value;
	if(inputText.length > maxLength){
		try{document.getElementById("errorcontainer").style.display="block";}catch(err){}
		document.getElementById(divId).innerHTML= inputText.length + " / " + maxLength + " characters";
		overflowBool=1;
	}
	else{
		
		if(overflowBool==1){
			try{document.getElementById("errorcontainer").style.display="none";}catch(err){}
			overflowBool=0;
		}
		document.getElementById(divId).innerHTML= "";
		
	}
}


//Ignore functions
function collapse(authorId) {

	var toggle=0;
	var pinfoBg = pinfoBackGround;
	var pinfobackground = pinfoTile;
	var IEpinfobackground = IEpinfoTile;
	
	if (Browser.ie) {
		displayValue="block"
		displayValue2="block"
	} else if (Browser.opera) {
		displayValue="block"
		displayValue2="block"
	} else {
		displayValue="table-cell"
		displayValue2="table-row"
	}
	for (count=0; count<postIdArray.length; count++) {
	
		if (postIdArray[count].indexOf(authorId) != -1) {
			
			if (document.getElementById("body"+postIdArray[count]).style.display == "none") {
				document.getElementById("body"+postIdArray[count]).style.display = displayValue2;
			
				document.getElementById("avatar"+postIdArray[count]).style.display = displayValue;
				document.getElementById("afterAvatar"+postIdArray[count]).style.display = displayValue;
				document.getElementById("hideplayerfooter"+postIdArray[count]).style.display = "block";
				document.getElementById("userpanel"+postIdArray[count]).style.top = "-77px";
				document.getElementById("pinfo"+postIdArray[count]).style.background = pinfoBg;
				document.getElementById("pinfo"+postIdArray[count]).style.padding = "8px 0 0 0";
				document.getElementById("ignore"+postIdArray[count]).src = "/images/icons/ignore-user.gif";
				
				var switchColor = postIdArray[count].split("_switch");
				//alert(switchColor[1]);
	
				document.getElementById("id"+postIdArray[count]).style.backgroundImage = "";
				
				if (Browser.ie) {
					document.getElementById("pinfobackground"+postIdArray[count]).style.filter = IEpinfoTile;
					document.getElementById("pinfobackground"+postIdArray[count]).style.background = pinfobackground;
				} else {
					document.getElementById("pinfobackground"+postIdArray[count]).style.background = pinfobackground;
				}
				toggle="expand";
			} else {
				document.getElementById("body"+postIdArray[count]).style.display = "none";
				document.getElementById("avatar"+postIdArray[count]).style.display = "none";
				document.getElementById("afterAvatar"+postIdArray[count]).style.display = "none";
				document.getElementById("hideplayerfooter"+postIdArray[count]).style.display = "none";
				document.getElementById("userpanel"+postIdArray[count]).style.top = "-4px";
				document.getElementById("pinfo"+postIdArray[count]).style.background = "none";
				document.getElementById("pinfo"+postIdArray[count]).style.padding = "5px 0 0 0";
				document.getElementById("id"+postIdArray[count]).style.backgroundImage = "none";
				document.getElementById("ignore"+postIdArray[count]).src = "/images/icons/unignore-user.gif";
				
				if (Browser.ie) {
				document.getElementById("pinfobackground"+postIdArray[count]).style.filter = "none !important";
				document.getElementById("pinfobackground"+postIdArray[count]).style.background = "none";
				} else {
				document.getElementById("pinfobackground"+postIdArray[count]).style.background = "none";
				}
				toggle="collapse";
			}		
		}
		hideddrivetip();
	}


	if(toggle=="expand") 
		deleteID(authorId)
	else
		addID(authorId)	
}

function collapseSingle(authorId,count) {

	if (Browser.ie) {
		displayValue="block"
	} else {
		displayValue="table-cell"
	}

	if (postIdArray[count].indexOf(authorId) != -1) {

		if (document.getElementById("body"+postIdArray[count]).style.display == "none") {
			
			
			
			document.getElementById("body"+postIdArray[count]).style.display = displayValue;

			document.getElementById("avatar"+postIdArray[count]).style.display = displayValue;
			document.getElementById("hideplayerfooter"+postIdArray[count]).style.display = "block";
			document.getElementById("afterAvatar"+postIdArray[count]).style.display = displayValue;
			document.getElementById("userpanel"+postIdArray[count]).style.top = "-77px";
			document.getElementById("pinfo"+postIdArray[count]).style.background = "transparent url('/images/pinfo-tile.gif') repeat-y 3px 0";
			document.getElementById("pinfo"+postIdArray[count]).style.padding = "8px 0 0 0";
			document.getElementById("id"+postIdArray[count]).style.backgroundImage = "url('/images/avatar-shadow-bg2.gif')";
			document.getElementById("ignore"+postIdArray[count]).src = "/images/icons/ignore-user.gif";
			
				if (Browser.ie) {
					document.getElementById("pinfobackground"+postIdArray[count]).style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=scale, src='/images/back.png')";
				} else {
					document.getElementById("pinfobackground"+postIdArray[count]).style.background = "url('/images/back.png') repeat 0 0";
				}
			
		} else {

			document.getElementById("body"+postIdArray[count]).style.display = "none";
			document.getElementById("avatar"+postIdArray[count]).style.display = "none";
			document.getElementById("hideplayerfooter"+postIdArray[count]).style.display = "none";
			document.getElementById("afterAvatar"+postIdArray[count]).style.display = "none";
			document.getElementById("userpanel"+postIdArray[count]).style.top = "-4px";
			document.getElementById("pinfo"+postIdArray[count]).style.background = "none";	
			document.getElementById("pinfo"+postIdArray[count]).style.padding = "5px 0 0 0";
			document.getElementById("id"+postIdArray[count]).style.backgroundImage = "none";
			document.getElementById("ignore"+postIdArray[count]).src = "/images/icons/unignore-user.gif";
			
				if (Browser.ie) {
					document.getElementById("pinfobackground"+postIdArray[count]).style.filter = "none";
				} else {
					document.getElementById("pinfobackground"+postIdArray[count]).style.background = "none";
				}

		}	
	}	
}

var theIgnoreArray = new Array; //array of all IDs to be ignored
var theIgnoreArrayUnsorted = new Array; //array of all IDs to be ignored - Unsorted

function getexpirydate(nodays){
 var UTCstring;
 Today = new Date();
 nomilli=Date.parse(Today);
 Today.setTime(nomilli+nodays*24*60*60*1000*10);
 UTCstring = Today.toUTCString();
 return UTCstring;
}

function sortNumber(a, b) {
//function that sorts the array
 return a - b
}


function getcookie(cookiename) {
//function to get the value of the cookie
  var cookiestring=""+document.cookie;
  var index1=cookiestring.indexOf(cookiename);
  if (index1==-1 || cookiename=="") return ""; 
  var index2=cookiestring.indexOf(';',index1);
  if (index2==-1) index2=cookiestring.length; 
  return unescape(cookiestring.substring(index1+cookiename.length+1,index2));
}
 
function setcookie(name,value){
//function to set the value of the cookie

 cookiestring=name+"="+escape(value)+";EXPIRES="+ getexpirydate(365)+";PATH=/";
 document.cookie=cookiestring;

}



function setIgnoreIDArray(){
//function to initialize the cookie or get the IDs that should be ignored
 var tempString;
 if(!(tempString = getcookie("ignoreID2"))){ //cookie doesn't exist
  setcookie('ignoreID2', ''); //set the cookie with no IDs to be ignored
 } else {         //cookie exists
  theIgnoreArray = tempString.split(","); //set the array of cookies
  theIgnoreArrayUnsorted = tempString.split(",");
  Quicksort(theIgnoreArray, 0, theIgnoreArray.length);
 }
 
}


function deleteID(unignoreID){

	var foundIndex = -1;
	for (count2=0; count2<=theIgnoreArrayUnsorted.length; count2++) {
	
		if(theIgnoreArrayUnsorted[count2]==unignoreID)
			foundIndex = count2;
	
	}
	if(foundIndex != -1){
		theIgnoreArrayUnsorted.splice(foundIndex, 1);
		setcookie('ignoreID2', theIgnoreArrayUnsorted); 
	}
}
 
function addID (ignoreID){

	 lastElement = theIgnoreArrayUnsorted.length;

	 if (lastElement >= 60){
		
		deleteID(theIgnoreArrayUnsorted[0])
		lastElement = theIgnoreArrayUnsorted.length;
	}
	 
	  theIgnoreArrayUnsorted[lastElement] = ignoreID;
	  setcookie('ignoreID2', theIgnoreArrayUnsorted);

}


 function Quickfind(entry, resetTemp, loBound, hiBound)
 //returns 0 if it doesn't find anything
 //Use: Quickfind(theNumberYouWanttofind, 1)
 /**************************************************************
  This function adapted from the algorithm given in:
   Data Abstractions & Structures Using C++, by
   Mark Headington and David Riley, pg. 586.
 
  Quicksort is the fastest array sorting routine for
  unordered arrays.  Its big O is n log n.
  **************************************************************/
 {

 vec = theIgnoreArray;
 
  if (!resetTemp) {
   temp = 0;
   loBound = 0;
   hiBound = theIgnoreArray.length - 1;
  }
  
 
  if (hiBound - loBound <= 3) {
  
   if (vec[loBound] == entry || vec[hiBound] == entry || vec[hiBound-1] == entry || vec[loBound+1] == entry) {
    temp++;
   }
  }
 
  // Three or more items to sort
  pivot = vec[parseInt((loBound + hiBound) / 2)];
  loSwap = loBound + 1;
  hiSwap = hiBound;
 
 
  
  do {

   // Find the right loSwap
   while (loSwap <= hiSwap && vec[loSwap] <= pivot)
    loSwap++;
 
   // Find the right hiSwap
   while (vec[hiSwap] > pivot)
    hiSwap--;
 
   // Swap values if loSwap is less than hiSwap
   if (loSwap < hiSwap)
   {
    temp = vec[loSwap];
   }
  } while (loSwap < hiSwap);
 
  // 2 or more items in first section  
  if (loBound < hiSwap - 1)
   temp = Quickfind(entry, 1, loBound, hiSwap - 1);
 

  // 2 or more items in second section
  if (hiSwap + 1 < hiBound)
   temp = Quickfind(entry, 1, hiSwap + 1, hiBound);
  
  return temp;
 }
 
 
 function Quicksort(vec, loBound, hiBound)
 /**************************************************************
  This function adapted from the algorithm given in:
   Data Abstractions & Structures Using C++, by
   Mark Headington and David Riley, pg. 586.
 
  Quicksort is the fastest array sorting routine for
  unordered arrays.  Its big O is n log n.
  **************************************************************/
 {
 
  var pivot, loSwap, hiSwap, temp;

  // Two items to sort
  if (hiBound - loBound == 1)
  {
   if (vec[loBound] > vec[hiBound])
   {
    temp = vec[loBound];
    vec[loBound] = vec[hiBound];
    vec[hiBound] = temp;
   }
   return;
  }
 
  // Three or more items to sort
  pivot = vec[parseInt((loBound + hiBound) / 2)];
  vec[parseInt((loBound + hiBound) / 2)] = vec[loBound];
  vec[loBound] = pivot;
  loSwap = loBound + 1;
  hiSwap = hiBound;
 
  do {
   // Find the right loSwap
   while (loSwap <= hiSwap && vec[loSwap] <= pivot)
    loSwap++;
 
   // Find the right hiSwap
   while (vec[hiSwap] > pivot)
    hiSwap--;
 
   // Swap values if loSwap is less than hiSwap
   if (loSwap < hiSwap)
   {
    temp = vec[loSwap];
    vec[loSwap] = vec[hiSwap];
    vec[hiSwap] = temp;
   }
  } while (loSwap < hiSwap);
 
  vec[loBound] = vec[hiSwap];
  vec[hiSwap] = pivot;
 

  // Recursively call function...  the beauty of quicksort
 
  // 2 or more items in first section  
  if (loBound < hiSwap - 1)
   Quicksort(vec, loBound, hiSwap - 1);
 

  // 2 or more items in second section
  if (hiSwap + 1 < hiBound)
   Quicksort(vec, hiSwap + 1, hiBound);
 }
 
setIgnoreIDArray();


 


 function openWindow (url,name,features){
	 
	 var NewWindow = window.open(url,name,features);

}

<!--

// ----------------------------------------------
// StyleSwitcher functions written by Paul Sowden
// http://www.idontsmoke.co.uk/ss/
// - - - - - - - - - - - - - - - - - - - - - - -
// For the details, visit ALA:
// http://www.alistapart.com/stories/alternate/

function setActiveStyleSheet(title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      if(a.getAttribute("title") != "safari") a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }
  createCookie("style", getActiveStyleSheet(), 365);
}

function setActiveStyleSheet2(title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      if(a.getAttribute("title") == title){ a.disabled = false;}
    }
  }
}

function getActiveStyleSheet() {

  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       ) return a.getAttribute("title");
  }
  return null;
}

function createCookie(name,value,days) {

  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function initTheme(e) {

  var cookie = readCookie("style");
  var title = cookie ? cookie : getPreferredStyleSheet();
  setActiveStyleSheet(title);
}

var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);

// Copyright (c) 1996-1997 Athenia Associates.
// http://www.webreference.com/js/
// License is granted if and only if this entire
// copyright notice is included. By Tomer Shiran.

function setCookie (name, value, expires, path, domain, secure) {
    var curCookie = name + "=" + escape(value) + ((expires) ? "; expires=" + expires.toGMTString() : "") + ((path) ? "; path=" + path : "/") + ((domain) ? "; domain=" + domain : "") + ((secure) ? "; secure" : "");
    document.cookie = curCookie;
}

function getCookie (name) {
    var prefix = name + '=';
    var c = document.cookie;
    var nullstring = '';
    var cookieStartIndex = c.indexOf(prefix);
    if (cookieStartIndex == -1)
        return nullstring;
    var cookieEndIndex = c.indexOf(";", cookieStartIndex + prefix.length);
    if (cookieEndIndex == -1)
        cookieEndIndex = c.length;
    return unescape(c.substring(cookieStartIndex + prefix.length, cookieEndIndex));
}

function deleteCookie (name, path, domain) {
    if (getCookie(name))
        document.cookie = name + "=" + ((path) ? "; path=" + path : "/") + ((domain) ? "; domain=" + domain : "") + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
}

function fixDate (date) {
    var base = new Date(0);
    var skew = base.getTime();
    if (skew > 0)
        date.setTime(date.getTime() - skew);
}

function rememberMe (f) {
    var now = new Date();
    fixDate(now);
    now.setTime(now.getTime() + 365 * 24 * 60 * 60 * 1000);
    setCookie('mtcmtauth', f.author.value, now, '', HOST, '');
    setCookie('mtcmtmail', f.email.value, now, '', HOST, '');
    setCookie('mtcmthome', f.url.value, now, '', HOST, '');
}

function forgetMe (f) {
    deleteCookie('mtcmtmail', '', HOST);
    deleteCookie('mtcmthome', '', HOST);
    deleteCookie('mtcmtauth', '', HOST);
    f.email.value = '';
    f.author.value = '';
    f.url.value = '';
}

function warn(url){
	if(url.hostname == ''){
		return false;
	}
    if(url.search.indexOf('interceptedURL') == 1){     	
    	url.href = 'interceptor.html' +  '?interceptedURL=' + url.search.substr(16);
    }else{
		url.href = 'interceptor.html' +  '?interceptedURL=' + url.href;
	}
	return true;
}
//-->
