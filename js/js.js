$(document).ready(function() {
	$(document).scroll(function() {
		console.log($(this).scrollTop());
		$('header').attr("scroll", $(this).scrollTop()>80 ? "true":"false");

		if($(".menu:eq(0)").offset().top < $(".exp:eq(0)").offset().top){
			unselect();
			$("#menu_about").attr("activated", "true");
		}
		else if($(".menu:eq(0)").offset().top < $(".skills:eq(0)").offset().top){
			unselect();
			$("#menu_exp").attr("activated", "true");
		}
		else{
			unselect();
			$("#menu_skills").attr("activated", "true");
		}
	});

	$(".menu .iconed").each(function(){
		$(this).on('click', function() {
			var id = $(this).attr("id");
		    $.smoothScroll({
		    	offset: -80,
		    	scrollTarget: "#" + id.substring(5, id.length)
		    });
		    return false;
		});
	});
});

function unselect(){
	$(".menu .iconed").each(function(){
		$(this).attr("activated", "false");
	});
}