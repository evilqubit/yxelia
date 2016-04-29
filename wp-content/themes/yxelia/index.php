<?php
 /**
 * Template Name: Home Page
 */

get_header(); ?>

<?php

if(isset($_GET['lang']) && ($_GET['lang'] == 'fr') ){
	$lang = 'fr';
}
else{
	$lang = 'en';
}
?>

<?php
//$array['en'] = 231;

$array['en'] = 240;
$array['fr'] = 306;

$menu = get_field('menu', $array[$lang]); 
?>
<div class="Gaia body_page" id="Gaia">
    
    <div id="header_menu">
    
        <!--<div class="header_bar"></div>-->
        
        <div id="header">

            <div id="menu_mobile"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/responsive_menu.png" /></div>

            <div id="logo"><a href="index.php"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" /></a></div>
            
            <div id="menu">
                <div id="menu_">
                	
                    <?php 
					$i = 0;
					foreach ($menu as $row){
						$i += 1;
						
						if($i != 1){?>
							 <div class="menu_line"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/menu_bar.png" /></div>
                        <?php
						}
						?>
                    	<div class="menu"><a class="menu_a <?php if ($i == 1){?> chosen <?php } ?> " href="#<?php echo $row['href'];?>"><?php echo $row['page'];?></a></div>
                    <?php } ?>
                    
                    <div class="menu"><?php do_action('icl_language_selector'); ?></div>
                    
                </div>

                <div id="menu_mobile_list">

                    <?php
                    $i = 0;
                    foreach ($menu as $row){
                        $i += 1;
                        ?>
                        <div class="menu"><a class="menu_a m_responsive <?php if ($i == 1){?> chosen <?php } ?> " href="#<?php echo $row['href'];?>"><?php echo $row['page'];?></a></div>
                    <?php } ?>

                    <div class="menu"><?php do_action('icl_language_selector'); ?></div>

                </div>

            </div>
            
            <div style="clear:both"></div>
            
        </div>
        
        <!--<div class="header_bar"></div>-->
        
    </div>
    
<?php

//$array['en'] = 285;

$array['en'] = 6;
$array['fr'] = 274;

$title = get_field('title', $array[$lang]);
$slider = get_field('slider', $array[$lang]);
?>
    
    <div id="home_page">
    
        <div id="home_title"><?php echo $title;?></div>
        

        <div id="slider">
            <div id="slider_">
            	<?php
				$i = 0;
				foreach ($slider as $row){
					$i += 1;
					?>
                <div class="slider"><img src="<?php echo $row['image'];?>" /></div>
                <?php } ?>
            </div>
        </div>
        
        <div id="pagination">
        	<?php 
			if($i > 1){
			for($j = 0; $j < $i; $j++){?>
            <div id="page<?php echo $j;?>" class="pagination <?php if($j == 0){?>pagination_chosen <?php } ?>"></div>
			<?php } 
			}?>
        </div>
    
    </div>
    
    
    
    
    
    
    
    
    <!-- ABOUT US FIRST PART -->
 
        
<div style="clear:both;"></div>
    
    
    
    
<?php 

$array['en'] = 8;
$array['fr'] = 282;

$about = get_field('brief_description', $array[$lang]);
$about_charts = get_field('about_charts', $array[$lang]);
?>    


<div class="body_page" id="about_body">    
    <!-- ABOUT US first PART -->
    <div id="about_body_1">
    
        <div id="about_part1">
        
            <div id="about_text">
 				<?php echo $about;?>
             </div>
            
            <?php foreach ($about_charts as $row){?>
            <div class="about_details">
                <div class="about_details_">
                	<p><?php echo $row['title'];?></p>
                    <div><img src="<?php echo $row['image'];?>" /></div>
                    
                </div>
                <div style="clear:both"></div>
            </div>
            <?php } ?>
            
            <div style="clear:both"></div>
       </div> 
        
        <div style="clear:both;"></div>
        

    </div>
    
    
    
<?php
//$array['en'] = 291;

$array['en'] = 363;
$array['fr'] = 382;

$title = get_field('title', $array[$lang]);
$red = get_field('red', $array[$lang]);
$blue = get_field('blue', $array[$lang]);
$title_list = get_field('title_list', $array[$lang]);
$list = get_field('list', $array[$lang]);
?>       
      
    <!-- ABOUT US second PART -->
    <div id="about_body_2">
    
        <div id="about_part2">
        
            <div class="about_text2_title"><?php echo $title;?></div>
            
            <div class="about_text2_red"><?php echo $red;?></div>
            
            <div class="about_text2_blue"><?php echo $blue;?></div>
            
            <div class="about_text2_title_list"><?php echo $title_list;?></div>
            
            <div class="about_text2_list">
            	<ul>
                	<?php foreach ($list as $row){?>
                	<li><?php echo $row['text'];?></li>
                    <?php } ?>
                </ul>
            </div>
            
            <div style="clear:both"></div>
       </div> 
        
        <div style="clear:both;"></div>
        

    </div>

<?php
$array['en'] = 12;
$array['fr'] = 310;
?>
     <!-- ORGA FIRST PART -->     
    <div id="organization_body_1">

        <div id="org_parent">
    
            <div class="organization_1">
            
                <div id="org_left">
                    <div class="verticle_title"><?php the_field('title', $array[$lang]); ?></div>
                    <div id="org_tree"><img src="<?php the_field('image', $array[$lang]); ?>" /></div>
                </div>
                <div style="clear:both"></div>
            </div>

        </div>
        
     
     </div>

<?php

//$array['en'] = 246;

$array['en'] = 238;
$array['fr'] = 304;

$gallery = get_field('gallery', $array[$lang]);
?>

     <!-- ORGA Second PART -->
    <div id="gov_body">

        <div id="gov_parent">
    		
            <div id="gov_title"><?php the_field('title2', $array[$lang]); ?></div>
            
            <div class="gov">
            
                <div id="org_left">
                    <div class="verticle_title" style="color: #fff"><?php the_field('title', $array[$lang]); ?></div>
                    <div id="gov_gallery">
                    
                    <?php foreach ($gallery as $row){?>
                    	<div class="gov_gallery">
                        	<div class="gove_img"><img src="<?php echo $row['image'];?>" /></div>
                            <div class="gov_info">
                            	<span><?php echo $row['title'];?></span><br />
								<?php echo $row['description'];?>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>

        </div>
        
     
     </div>

</div>



<?php
//$array['en'] = 301;

$array['en'] = 374;
$array['fr'] = 396;

$exp = get_field('expertises', $array[$lang]);

?>

    <!-- Experteses PART -->
    <div class="body_page" id="exp_body">
            <div id="exp_body_">
                <div style=" vertical-align: middle; display: table-cell;">
                    <div id="exp_body_gal">

                        <?php
                            $i = 0;
                            $j = 0;
                            foreach($exp as $row){
                                $i += 1;
                                $max_list = count($row['list']);

                                $styling = "43%";
                                if($max_list == 1){
                                    $styling = "93%";
                                }
                        ?>

                        <div class="exp_gal">
                            <div class="exp_gal_">
                                <div class="exp_logo"><img src="<?php echo $row['logo'];?>"></div>
                                <div class="exp_title"><?php echo $row['title'];?></div>


                                <div class="exp_desc"><?php echo $row['description'];?></div>
                                <div class="exp_color"><?php echo $row['color'];?></div>
                                <div class="exp_list">
                                    <ul>
                                    <?php

                                    foreach ($row['list'] as $list){?>
                                        <li  style="width: <?php echo $styling; ?>" ><?php echo $list['text'];?></li>
                                    <?php } ?>

                                    </ul>
                                </div>
                            </div>
                            <img class="dot_h" src="<?php bloginfo('stylesheet_directory'); ?>/img/dots_h.png">


                            <?php
                            if($i > 4){

                                $j += 1;

                                if($j > 4){
                                    $j = 1;
                                }

                                if($j == 1) {
                                    ?>
                                    <img class="dot_v dot_v_left"
                                         src="<?php bloginfo('stylesheet_directory'); ?>/img/dots_v.png">
                                <?php
                                }
                                if($i % 4 == 0) {
                                    ?>
                                    <img class="dot_v dot_v_right" src="<?php bloginfo('stylesheet_directory'); ?>/img/dots_v.png">
                                <?php
                                }
                            }
                            ?>

                        </div>

                        <?php } ?>


                    </div>
                </div>

            </div>
    </div>



    <div id="lightbox">
        <div id="lightbox_box">

            <div id="light_logo"><img src=""></div>
            <div id="light_title"></div>
            <div id="light_desc"></div>
            <div id="light_list"></div>

        </div>
    </div>

<?php
//$array['en'] = 311;

$array['en'] = 402;
$array['fr'] = 413;

$gallery = get_field('gallery', $array[$lang]);

$i = 0;
?>

    <!-- Press Releases PART -->
    <div class="body_page" id="press_body">

        <div id="press_part">
            <div id="press_part_">

                <div id="press_left">

                    <?php foreach($gallery as $row){
                        $i += 1;
                        if($i == 1){
                            $title = $row['title'];
                            $text = $row['text'];
                        }
                        ?>
                    <div class="press_gallery <?php if($i == 1){ ?> press_chosen <?php } ?>">
                        <div class="press_image"><img class="press_shadow" src="<?php echo $row['image'];?>"></div>
                        <div class="press_title press_shadow"><?php echo $row['title'];?></div>
                        <div class="hidden"><?php echo $row['text'];?></div>
                    </div>
                    <?php
                        if($i % 2 == 0){
                            echo '<div class="press_clear"></div>';
                        }
                    } ?>


                    <div style="clear: both"></div>
                </div>

                <div id="press_line"><img style="height: 100%" src="<?php bloginfo('stylesheet_directory'); ?>/img/press_line.png""></div>

                <div id="press_right">
                    <div id="press_right_title" class="press_shadow"><?php echo $title;?></div>
                    <div id="press_right_text">
                        <?php echo $text;?>
                    </div>
                </div>

                <div style="clear: both"></div>
            </div>

        </div>


        <div style="clear:both;"></div>


    </div>

<script>
    $(document).ready(function(){

       /* var height = $("#press_part_").height();
        $("#press_line img").height(height);*/

        var padding = $("#press_part_").css('padding-top');

        $(".press_gallery").click(function(){
            $(".press_gallery").removeClass("press_chosen");
            $(this).addClass("press_chosen");

            var title = $(this).children(".press_title").html();
            var text = $(this).children(".hidden").html();

            $("#press_right_title").html(title);
            $("#press_right_text").html(text);

        });
    });

    $(window).resize(function(){
        var height = 0;
        $("#press_line img").height("0px");

        var height = $("#press_part_").height();
        var padd = $("#press_part_").height();
        //$("#press_line img").height(height);
    });

</script>


<?php
$array['en'] = 14;
$array['fr'] = 307;

$news = get_field('news', $array[$lang]);

$i = 0;
?>
     <!-- News PAGE-->
    <div class="body_page" id="news_body">
        <div id="news">
            <div id="news_">

                <div id="news_inner">

                    <?php foreach($news as $row){

                        if($i != 0){?>
                            <div class="news_line"></div>
                        <?php
                        }
                        $i += 1;
                    ?>
                    <div class="news_category">
                        <div class="news_date"><?php echo $row['date'];?></div>
                        <div class="news_title"><?php echo $row['title'];?></div>
                        <div class="news_info">
                            <?php echo $row['text'];?>
                        </div>
                        <?php if($row['read_more'] != ''){ ?>
                        <div class="news_readmore"><a href="<?php echo $row['read_more'];?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/readmore.png"> Read More</a></div>
                        <?php } ?>
                        <div class="news_button">
                            <?php if($row['video'] != ''){?>
                            <div class="news_button_"><a href="<?php echo $row['video'];?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/video.png"></a></div>
                            <?php }
                            if($row['pdf'] != ''){ ?>
                            <div class="news_button_"><a href="<?php echo $row['pdf'];?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/pdf.png"></a></div>
                            <?php } ?>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
     

<?php 
$array['en'] = 707;
$array['fr'] = 715;

$i = 0;
$rows = get_field('infos', $array[$lang]);

?>
     
     <!-- Contact US PAGE-->
    <div class="body_page" id="contact_body">
    	<div id="contact_body_">
        	<div id="contact_body_inner">
                <div id="contact_map">
                    <div id="map_body">

                        <?php /*
                        <img id="map" src="<?php bloginfo('stylesheet_directory'); ?>/img/contact_map.png">
                    <?php foreach ($rows as $row) {
                            $i += 1;
                            
                            if($i == 1){
                                $title = $row['title'];
                                $logo = $row['logo'];
                                $description = $row['description'];
                            }
                            $top = $row['y'] . 'px';
                            $left = $row['x'] . 'px';
                        ?>
                        <img class="pin <?php if($i == 1){ echo 'pin_chosen';}?>" data-logo="<?php echo htmlspecialchars($row['logo']);?>" data-title="<?php echo htmlspecialchars($row['title']);?>" data-desc="<?php echo htmlspecialchars($row['description']);?>" style="top:<?php echo $top;?>; left: <?php echo $left;?>" src="<?php echo $row['pin'];?>" />
                    <?php } ?>
                        </div>

                </div>

                <div id="contact_bar"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/shadow.png"></div>

                <div id="contact_info">
                    <div id="contact_info_">
                        
                        <div id="contact_logo"><img src="<?php echo $logo;?>" /></div>
                        <div id="contact_title"><?php echo $title;?></div>
                        
                        <div style="margin-bottom:10px"><img style="width: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/contact_bar_1.jpg" /></div>
                        
                        <div id="contact_desc"><?php echo $description;?></div>
                        
                        <div style="margin-top: 10px;"><img style="width: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/contact_bar_2.jpg" /></div>
                        
                    </div>
                </div>

                <?php */ ?>

                        <img id="map" src="<?php bloginfo('stylesheet_directory'); ?>/img/contact_map_new.png">


                        <?php
                        $i = 0;
                        foreach ($rows as $row) {
                            $i += 1;
                            ?>

                            <div id="cicon_<?php echo $i;?>" class="c_icons" data-direction="<?php echo $row['connect_side'];?>" style="margin-top: <?php echo $row['top_icon'];?>%; margin-left: <?php echo $row['left_icon'];?>%;"><img src="<?php echo $row['icon'];?>"></div>

                            <div class="c_table" style="margin-left: <?php echo $row['left_info'];?>%; margin-top: <?php echo $row['top_info'];?>%">
                                <div class="c_logo"><a href="<?php echo $row['url'];?>" target="_blank"><img src="<?php echo $row['logo'];?>"></a></div>
                                <div id="cline_<?php echo $i;?>" class="c_line"></div>
                                <div class="c_info" style="line-height: 20px;"><?php echo $row['text'];?></div>
                            </div>

                        <?php } ?>

                    </div>
                </div>

                <?php foreach ($rows as $row) {?>

                <div class="contact_info">
                    <div class="contact_info_">

                        <div class="contact_logo"><img src="<?php echo $row['logo'];?>" /></div>
                        <!--<div class="contact_title"><?php echo $row['title'];?></div>-->

                        <div style="margin-bottom:10px"><img style="width: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/contact_bar_1.jpg" /></div>

                        <div class="contact_desc"><?php echo $row['text'];?></div>

                        <div style="margin-top: 10px;"><img style="width: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/contact_bar_2.jpg" /></div>

                    </div>
                </div>

                <?php } ?>






                
                <div style="clear:both"></div>
            </div>
        </div>

    </div>

<script>

    $(document).ready(function(){
        var height = $(window).height() - 138;
        $("#map_body").height(height);
    });

    function connect(div1, div2, direction, color, thickness) {
        var off1 = div1;
        var off2 = div2;
        var parents = $("#map_body");

        // bottom right
        var x1 = (off1.offset().left - parents.offset().left) + (off1.width() / 2);
        var y1 = (off1.offset().top  - parents.offset().top) + off1.height() / 2;

        var y1_width = off2.width();

        if(direction == 'Left'){
            y1_width = 0;
        }

        // top right
        var x2 = (off2.offset().left - parents.offset().left) + y1_width;
        var y2 = (off2.offset().top  - parents.offset().top);


        // distance
        var length = Math.sqrt(((x2-x1) * (x2-x1)) + ((y2-y1) * (y2-y1)));

        var one = 0;
        if(y1_width == 0){
            one = 1;
        }

        // center
        var cx = ((x1 + x2) / 2) - (length / 2) + one;
        var cy = ((y1 + y2) / 2) - (thickness / 2);
        // angle
        var angle = Math.atan2((y1-y2),(x1-x2))*(180/Math.PI);
        // make hr
        var htmlLine = "<div style='padding:0px; margin:0px; height:" + thickness + "px; background-color:" + color + "; line-height:1px; position:absolute; left:" + cx + "px; top:" + cy + "px; width:" + length + "px; -moz-transform:rotate(" + angle + "deg); -webkit-transform:rotate(" + angle + "deg); -o-transform:rotate(" + angle + "deg); -ms-transform:rotate(" + angle + "deg); transform:rotate(" + angle + "deg);' />";

        var totals = $("#map_body").html() + htmlLine;

        $("#map_body").html(totals);
    }

    function getOffset( el ) {
        var rect = el.getBoundingClientRect();
        return {
            left: rect.left + window.pageXOffset,
            top: rect.top + window.pageYOffset,
            width: rect.width || el.offsetWidth,
            height: rect.height || el.offsetHeight
        };
    }

    $(window).load(function() {

        /*var div1 = document.getElementById('c_icon');
         var div2 = document.getElementById('c_line');*/

        var div1 = '';
        var div2 = '';
        var direction = '';

        var i = 0;

       $(".c_icons").each(function() {
           i += 1;

           div1 = $('#cicon_' + i);
           div2 = $('#cline_' + i);
           direction = $(this).data("direction");

           connect(div1, div2, direction,"#808080", 1);
       });

    });
</script>
  
<script>
$(document).ready(function(){
	$(".pin").click(function(){
		
		$(".pin").removeClass("pin_chosen");
		$(this).addClass("pin_chosen");
		
		var logo = $(this).data("logo");
		var title = $(this).data("title");
		var desc = $(this).data("desc");
		
		$("#contact_logo img").attr("src", logo);
		$("#contact_title").html(title);
		$("#contact_desc").html(desc);
	});
});

</script>  
    
    
</div>

</body>
</html>



<script>
$(window).load(function(e) {
    run_slider();
});
</script>

