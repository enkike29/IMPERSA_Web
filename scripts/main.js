$(document).ready(function(){
	$("body").hide();
	$("body").transit();
});

$(document).on("load",".transit", function(){
	$("body").transit();
});

$(document).on("click", ".div1", function(){
	$(".transitDiv").transit();
});
