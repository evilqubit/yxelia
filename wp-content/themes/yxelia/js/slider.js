var refreshIntervalId = '';

var go_left = 0;

var page = 0;



$(document).ready(function(){
		
	$(".pagination").click(function(){
		
		var thisid = $(this).attr("id").replace('page', '');
	
		img_width = $(".slider img").width() + 6
	
		goto = img_width * thisid;
	
		go_left = goto;
	
		
	
		$("#slider_").animate({marginLeft: - goto});
	
		
	
		$(".pagination").removeClass("pagination_chosen");
	
		$(this).addClass("pagination_chosen");
	
		clearInterval(refreshIntervalId);
	
		run_slider();
	
	});
});


function run_slider(){
	
	var accum_width = 0;

	var img_width = 0;

	

	$('#slider_').find('img').each(function() {

		img_width = $(this).width() + 6

		accum_width += img_width;

	});

	

	var img_height = $(this).height();

	

	//$("#slider_").width(accum_width);

	

	//$("#slider").width(img_width);

	//$("#slider").height($("#slider_").height());

	

	refreshIntervalId = setInterval(function() { sliding_left(img_width, accum_width); },4000);

}







function sliding_left(width, max_width){

	if(go_left < max_width - width){

		go_left += width;

		

		page = go_left / width;

		$(".pagination").removeClass("pagination_chosen");

		$("#page"+page).addClass("pagination_chosen");

		

		$("#slider_").animate({marginLeft: - go_left});

	}

	else{

		clearInterval(refreshIntervalId);

		refreshIntervalId = setInterval(function() { sliding_right(width, max_width); },4000);

	}

}



function sliding_right(width, max_width){

	if(go_left > 0){

		go_left -= width;

		

		page = go_left / width;

		$(".pagination").removeClass("pagination_chosen");

		$("#page"+page).addClass("pagination_chosen");

		

		$("#slider_").animate({marginLeft: - go_left});

	}

	else{

		clearInterval(refreshIntervalId);

		refreshIntervalId = setInterval(function() { sliding_left(width, max_width); },4000);

	}

}



