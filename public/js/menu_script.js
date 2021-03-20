
var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 810) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 810) {
		$(".toggleMenu").css("display", "none");
		$(".nav").show();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}

$(document).ready(function(){
    $("#open-drop").click(function(){
        $(".dropdown-menu").toggle();
    });
    $(".dropdown-menu ul li").click(function(){
        $(".dropdown-menu").css('display', 'none');
    });

    $('#monthly-tab-btn').click(function(){
    	$('.slide-bg').css('right','6');
    	$('.slide-bg').css('left','119px');
       /* $('.slide-bg').css('left','43px');*/
    	$('#main-prcing-monthly').show();
        $('.pricing-slide-btn ul li').addClass('clr-pro');
        $('#yearly-tab-btn').removeClass('clr-pro');
    	$('#main-prcing-yearly').hide();
    	$('#monthly-feature-table').show();
    	$('#yearly-feature-table').hide();
        $('.new-tavpart2 new-tabpart1').hide();
        $('.new-tabpart1').show();
        $('.price-data, .plan-feat').addClass('bounceInleft');
    });
    $('#yearly-tab-btn').click(function(){
    	$('.slide-bg').css('left','6px');
    	$('.slide-bg').css('right','auto');
    	$('#main-prcing-monthly').hide();
       $('.pricing-slide-btn ul li').addClass('clr-pro');
        $('#monthly-tab-btn').removeClass('clr-pro');
    	$('#main-prcing-yearly').show();
    	$('#monthly-feature-table').hide();
    	$('#yearly-feature-table').show();
        $('.price-data,.plan-feat').addClass('bounceInleft');
    });
     $('.dropdown-toggle').click(function(){
         $('.dropdown-menu-left').toggle();
             });
});
