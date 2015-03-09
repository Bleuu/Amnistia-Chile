<?php define('PAGE', 'test'); ?>
<?php include('header.php'); ?>
<!--
<script>
    
	$(function()
	{			
		$("html").swipe({
			swipeLeft:function(event, direction, distance, duration, fingerCount)
			{
				 $(this).find('#text1').text("You swiped " + direction );
				 $(this).find('.menu-lateral').css("visibility", "visible");
				 $(this).find('.menu-lateral').css("right", "0");

			},
			swipeRight:function(event, direction, distance, duration, fingerCount)
			{
				 $(this).find('#text1').text("You swiped " + direction );
				 $(this).find('.menu-lateral').css('right','-300px');
                 
			},
			threshold:0,
            fallbackToMouseEvents:false
		});
		
	});

</script>
<div id="hola" style="width:100%; height:500px; background:#98e0e6; color:#fff;">
    <div id="text1" style="text-align:center; font-size:40px; line-height:500px;"></div>
</div>
<div class="menu-lateral">
    <ul>
        <li>losjkdnsañld</li>
        <li>losjkdnsañld</li>
        <li>losjkdnsañld</li>
        <li>losjkdnsañld</li>
        <li>losjkdnsañld</li>
        <li>losjkdnsañld</li>
    </ul>
</div>
-->
<scrip>
    var site = new Bamboo({
	menu: true,
	breakpoint: 768,
	menuWidth: 265,
	headerHeight: 50,
	resize: function(){
		// function to call on page resize/orientation change
	}
});
</scrip>
<div id="main-nav" class="navigation overflow">
    <ul>
        <li><a href="#" title="asdasd">Menu item</a></li>
        <li><a href="#" title="asdasd">Menu item</a></li>
    </ul>
</div>
<div id="container">
    <div class="primary">
        <span class="open icon">&#9776;</span>
        <hgroup><h1>Title</h1></hgroup>
    </div>
    <div id="scroller" class="overflow">
        <div id="content">
            content goes here
        </div>
    </div>
</div>
<?php include('footer.php'); ?>