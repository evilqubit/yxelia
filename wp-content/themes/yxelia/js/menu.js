$(document).ready(function(){

	$('.menu a').click(function(){

		$('html, body').animate({

			scrollTop: $('[id="' + $.attr(this, 'href').substr(1) + '"]').offset().top

		}, 500);

		return false;

	});

    $("#menu_mobile").click(function(){
        if($("#menu_mobile_list").is(":visible")) {
            $("#menu_mobile_list").slideUp();
        }
        else{
            $("#menu_mobile_list").slideDown();
        }
    });

    $(".m_responsive").click(function(){
        $("#menu_mobile_list").slideUp();
    });

});

$(window).resize(function(){
    if($("#menu_").is(":visible")) {
        $("#menu_mobile_list").css({"display" : "none"});
    }
});



$(window).on('scroll', function() {
    $('.body_page').each(function() {
        if($(window).scrollTop() >= $(this).position().top) {
            var id = $(this).attr('id');
            $('#menu a').removeClass('chosen');
            $('#menu a[href=#'+ id +']').addClass('chosen');
        }
		menu_scrolling();
    });
});



function menu_scrolling(){

	if($(this).scrollTop() < 50){
		transform_header_back();
	}
	else{
		transform_header();
	}

}



function transform_header(){

	$("#logo img").width("96px");

	$("#header_menu").css({"background-color" : "rgba(255, 255, 255, 0.75)"});

	$(".header_bar").css({"display" : "none"});

}

function transform_header_back(){

	$("#logo img").width("130px");

	$("#header_menu").css({"background-color" : "rgba(255, 255, 255, 1)"});

	$(".header_bar").css({"display" : "block"});

}