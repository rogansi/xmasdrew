// Pop-Up Embedder Script by David Battino, www.batmosphere.com
// Version 2006-05-31 
// OK to use if this notice is included
   
function BatmoAudioPop(popuptitle,imgpath,imgwidth,imgheight,caption,soundpath,UniqueID) { // Add error handling?
	var myCap = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    var winWidth  = Number(imgwidth) + 100;
    var rawHeight = Number(imgheight) + 168 + caption.length/7; // calculate window height based on caption length
    var winHeight = Math.round(rawHeight * Math.pow(10,0))/Math.pow(10,0); // round to integer
    
    MediaWin = window.open('',UniqueID,'width=' + winWidth + ',height=' + winHeight + ',top=0,left=0,resizable=1,scrollbars=0,titlebar=0,toolbar=0,menubar=0,status=0,directories=0,personalbar=0,location=0');
    MediaWin.focus();
    
    var winContent = "<html><head><title>" + popuptitle + "</title></head>";
    winContent += "<body bgcolor='#9E9E9E' background='/images/oreilly/digitalmedia/2005/10/metal_tile.jpg'>"; // check image path
    winContent += "<div align='center'>";
    winContent += "<br /><br />"; // could use CSS padding instead
    winContent += "<img src='" + imgpath + "' id='image1' border='2' alt='" + popuptitle + "' width='" + imgwidth + "' height='" + imgheight + " 'title='" + popuptitle + "' />";
    winContent += "<br />";
    winContent += "<object width='" + imgwidth + "' height='70' >";
    winContent += "<param name='src' value='" + soundpath + "'>";
    winContent += "<param name='autoplay' value='1'>";
    winContent += "<param name='controller' value='1'>";
    winContent += "<param name='bgcolor' value='#9e9e9e'>";
    winContent += "<embed src ='" + soundpath + "' autostart='1' loop='0' width='" + imgwidth + "' height='70' controller='1' bgcolor='#9e9e9e'>";
    winContent += "</embed></object>";
    winContent += "<div style='width: " + imgwidth + "px; margin: 0px; padding: 0px; text-align:left;'>"; // restrict caption width to image width
    winContent += "<p style='font-size:12px;font-family:Verdana,sans-serif'>" + myCap + "</p>";
    winContent += "</div>";
    winContent += "<p style='font-size:12px;font-family:Verdana,sans-serif'><a href='" + soundpath + "'>Download audio file</a> <span style='font-size:10px'>(right-click or Option-click)</span>";
    winContent += " &#8226; <a href='#' onClick='javascript:window.close();'>Close this window</a></p>";
    winContent += "</div>";
    winContent += "</body></html>";

    MediaWin.document.write(winContent);
    MediaWin.document.close(); // "Finalizes" new window
}