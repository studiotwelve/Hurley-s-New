$(function(){
	$(".content").hide();
	$("a.toggle").click(function(e){
		e.preventDefault();
		if($(this).parent().siblings(".content").is(":visible")){
			$(this).parent().siblings(".content").slideToggle();
			$(this).removeClass("show").addClass("hide");
		} else {
			$(".cat .content").slideUp();
			$("a.toggle").removeClass("show");
			$(this).parent().siblings(".content").slideToggle(function(){
				$.scrollTo($(this).parent(), "slow");
			});
			$(this).removeClass("hide").addClass("show");
		}
	});
	$("#click-tap").each(function(e){
		if(parseInt($(window).width())<767){
			$("#click-tap").text("[tap to expand]");
		} else {
			$("#click-tap").text("[click to expand]");
		}
	});
});