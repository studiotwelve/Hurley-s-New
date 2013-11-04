$(function(){
	window.scrollTo(0,0);$('.carousel').carousel(0);
	var a,b,c,x=location.pathname,q,$p=$('#pushup'),$c=$('#content'),
	d=document.title,s=" | Hurley's Creekside Dining & Rhum Bar",
	r=/\/(.+)/g,y=0,m=r.exec(x),$e=$('#'+((m)?m[1]:'specials'));
	
	$('.menu-item:nth-child(even)').addClass('even');$('.menu-item:nth-child(odd)').addClass('odd');
	$(".row-fluid").each(function(){if($(this).children(".col-fluid")){b=parseInt($(this).children(".col-fluid").length);if(b>0){c=parseInt(12/b);if(c){$(this).children(".col-fluid").each(function(){$(this).addClass("span"+c)});return c}return colFLuidCount}}});a=$p.outerHeight();a=parseInt(a);a+=parseInt($p.css("padding-bottom"));a+=parseInt($p.css("padding-top"));$c.css({"margin-top":a,});$(window).on("mousemove scroll resize focus blur",function(){b=$p.outerHeight();b=parseInt(b);b+=parseInt($p.css("padding-bottom"));b+=parseInt($p.css("padding-top"));$c.css({"margin-top":b,});return b});$(".carousel").on("slid",function(){b=$p.outerHeight();b=parseInt(b);b+=parseInt($p.css("padding-bottom"));b+=parseInt($p.css("padding-top"));$c.css({"margin-top":b,});return b});$(".collapse").on("shown",function(){b=$p.outerHeight();b=parseInt(b);b+=parseInt($p.css("padding-bottom"));b+=parseInt($p.css("padding-top"));$c.css({"margin-top":b,});return b});$(".collapse").on("hidden",function(){b=$p.outerHeight();b=parseInt(b);b+=parseInt($p.css("padding-bottom"));b+=parseInt($p.css("padding-top"));$c.css({"margin-top":b,});return b})
	
	$('a.clean').click(function(e){
		e.preventDefault();
		q=$(this).attr('href'); d=$(this).attr('title')+s;
		m=r.exec(q);
		
		if(m==null){m=r.exec(q);}
		
		if(m){ $e=$('#'+m[1]);
			
			y=(($e.offset()!=undefined)?($e.offset().top-60):(0));
			
			if($e.hasClass('accordion-body')){
				$e.prev().find('a.accordion-toggle').trigger('click');
				
				$e.on('shown', function(){
					y=$e.prev().offset().top-60;
					window.scrollTo(0,y);
				});
			} else {
				window.scrollTo(0,y);
			}
			
			history.pushState("",d,q); document.title=d;
		} else {if(q=='/'){
			window.scrollTo(0,0); history.pushState("",d,q); document.title=d;
		}}
	});
	
	if(m[0]!="/"){
		$('a.clean[href="'+m[0]+'"]').click();
	}
});