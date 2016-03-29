		function center(classe, vert){
			if (vert){
				$(classe).css({
					left:'50%',
					marginLeft:-(2 * parseInt($(classe).css('padding-left'), 10) + $(classe).width())/2,
					top: '50%',
					marginTop:-(2 * parseInt($(classe).css('padding-top'), 10) + $(classe).height())/2		
				});
			}
			else {	
				$(classe).css({
					left:'50%',
					marginLeft:-(2 * parseInt($(classe).css('padding-left'), 10) + $(classe).width())/2,
				});
			}
		}
		
		function scroll(){
			$('body').scrollTo('#headerwrapper', 1000, {easing: 'easeInOutQuad'});
		}
		
		$( window ).load( function(){
			var vertalign = true;
			if ($(window).width() < 750 || navigator.userAgent.indexOf('iPhone') != -1 || navigator.userAgent.indexOf('iPad') != -1 || navigator.userAgent.indexOf('Blackberry') != -1 || navigator.userAgent.indexOf('Android') != -1) {
				$('#cloud1').attr("src", 'techspeak/mobile/cloud1.svg').css({top:'30px'});
				$('#cloud2').attr("src", 'techspeak/mobile/cloud2.svg').css({top:'30px'});
				$('#testo').attr("src", 'techspeak/mobile/testo.svg').css({top:'30px'});
				vertalign = false;
			}
		
			center('.logo', vertalign);
			center('.enter', false);
			center('#header', false);
			if ($(window).width() > 1000)
				center('#contentwrapper', false);
			else
				center('.minilogo', false);
			
		});
		
		$(window).scroll(function(e) {
    
		  if ($(this).scrollTop() > $('#wrapper').height() - 1) {
			$('#headerwrapper').addClass("fixed");
			$('#contentwrapper').css({top:'100px'});
		  } else {
			$('#headerwrapper').removeClass("fixed");
			$('#contentwrapper').css({top:'0px'});

		  }
		  
		});
		
		$(document).ready(function() {
			// MENU
			//$("#nav-mobile").html($("#nav-main").html());
			$("#nav-trigger span").click(function(){
				if ($("nav#nav-mobile ul").hasClass("expanded")) {
					$("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
					$(this).removeClass("open");
				} else {
					$("nav#nav-mobile ul").addClass("expanded").slideDown(250);
					$(this).addClass("open");
				}
			});
		});