$(document).ready(function(){window.scrollTo(0,0);$(".carousel").carousel(0);$(".row-fluid").each(function(){if($(this).children(".col-fluid")){var b=parseInt($(this).children(".col-fluid").length);if(b>0){var c=parseInt(12/b);if(c){$(this).children(".col-fluid").each(function(){$(this).addClass("span"+c)});return c}return colFLuidCount}}});var a=$("#pushup").outerHeight();a=parseInt(a);a+=parseInt($("#pushup").css("padding-bottom"));a+=parseInt($("#pushup").css("padding-top"));$("#content").css({"margin-top":a,});$(window).on("mousemove scroll resize focus blur",function(){var b=$("#pushup").outerHeight();b=parseInt(b);b+=parseInt($("#pushup").css("padding-bottom"));b+=parseInt($("#pushup").css("padding-top"));$("#content").css({"margin-top":b,});return b});$(".carousel").on("slid",function(){var b=$("#pushup").outerHeight();b=parseInt(b);b+=parseInt($("#pushup").css("padding-bottom"));b+=parseInt($("#pushup").css("padding-top"));$("#content").css({"margin-top":b,});return b});$(".collapse").on("shown",function(){var b=$("#pushup").outerHeight();b=parseInt(b);b+=parseInt($("#pushup").css("padding-bottom"));b+=parseInt($("#pushup").css("padding-top"));$("#content").css({"margin-top":b,});return b});$(".collapse").on("hidden",function(){var b=$("#pushup").outerHeight();b=parseInt(b);b+=parseInt($("#pushup").css("padding-bottom"));b+=parseInt($("#pushup").css("padding-top"));$("#content").css({"margin-top":b,});return b})});