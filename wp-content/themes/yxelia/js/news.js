$(document).ready(function(){
		
	// If the browser type if Mozilla Firefox
	if ( ($.browser.mozilla && $.browser.version >= "1.8" ) || ($.browser.msie && $.browser.version > 6) ){ 
		$(".news_drop_button").css({"display" : "none"});
	}


	$("#drop_pdf").click(function(){
		var element = $("#dropdown_pdf")[0],
			worked = false;
		if(document.createEvent) { // all browsers
			var e = document.createEvent("MouseEvents");
			e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
			worked = element.dispatchEvent(e);
		} else if (element.fireEvent) { // ie
			worked = element.fireEvent("onmousedown");
		}
		if (!worked) { // unknown browser / error
			alert("It didn't worked in your browser.");
		}
	});
	
	$("#drop_video").click(function(){
		var element = $("#dropdown_video")[0],
			worked = false;
		if(document.createEvent) { // all browsers
			var e = document.createEvent("MouseEvents");
			e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
			worked = element.dispatchEvent(e);
		} else if (element.fireEvent) { // ie
			worked = element.fireEvent("onmousedown");
		}
		if (!worked) { // unknown browser / error
			alert("It didn't worked in your browser.");
		}
	});
});