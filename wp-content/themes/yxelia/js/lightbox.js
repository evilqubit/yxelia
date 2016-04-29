(function($){
    $(window).load(function(){

        $('#lightbox').on('click', function(e) {
            if (e.target !== this) return;
            $(this).fadeOut();
            $("body").css({"overflow" : "visible"});
        });

        $(".exp_gal_").click(function(){

            var logo = $(this).find('img').attr("src");
            var title = $(this).children(".exp_title").html();
            var desc = $(this).children(".exp_desc").html();
            var color_list = $(this).children(".exp_color").html();
            var list = $(this).children(".exp_list").html();

            var color = color_list.split("_");
            var color_class = '';

            if(color[0] == 1){
                color_class = 'light_red';
            }else{
                color_class = 'light_blue';
            }

            $("#light_logo img").attr("src", logo);
            $("#light_title").html(title);
            $("#light_desc").html(desc);
            $("#light_list").html(list);
            $("#light_desc").removeClass("light_red light_blue").addClass(color_class);

            $("#lightbox").fadeIn(function() {

                resize_box();


            /*
                // Get an array of all element heights
                var elementWidth = $('#light_list ul li').map(function() {
                    return $(this).width();
                }).get();

                // Math.max takes a variable number of arguments
                // `apply` is equivalent to passing each height as an argument
                var maxWidth = Math.max.apply(null, elementWidth);

                var parentWidth = ($("#light_list").width() - 12) / 2;

                if(maxWidth < parentWidth){
                    maxWidth = parentWidth;
                }
*/
                // Set each height to the max height
                //$('#light_list ul li').width("45%");



                $("#lightbox").css({"opacity" : 1});
                $("body").css({"overflow" : "hidden"});

                $("#light_list").mCustomScrollbar("destroy");
                $("#light_list").mCustomScrollbar({
                    scrollButtons: {
                        enable: true
                    }
                });


                $('#light_list ul').masonry({
                    // set itemSelector so .grid-sizer is not used in layout
                    itemSelector: '#light_list ul li',
                    // use element for option
                    columnWidth: '#light_list ul li',
                    percentPosition: true
                });

                $("#light_list").mCustomScrollbar("destroy");
                $("#light_list").mCustomScrollbar({
                    scrollButtons: {
                        enable: true
                    }
                });

            });
        });

    });

    $(window).resize(function(){
       resize_box();
    });
})(jQuery);



function resize_box(){
    var light_width = $("#lightbox_box").width() / 2;
    var light_height = $("#lightbox_box").height() / 2;

    $("#lightbox_box").css({
        "margin-left" : -light_width,
        "margin-top" : -light_height
    });
}