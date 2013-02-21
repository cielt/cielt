jQuery(document).ready(function($) {
//lab 
var launchLab = function(){
	var menulist = jQuery("#menu-list-experiments"),
		showframe = jQuery("#frame-ideas"),
		demopath = siteURL+"/wp-content/demo/";
		//console.log("demo URL : "+demopath);
	
	if(menulist.length>0){
		//click on link to load experiment
		menulist.find("li a").on("click", function(e){
			e.preventDefault();
			console.log("clicked :"+$(this).attr("name"));
			var experimentpage = $(this).attr("href");
			var frameheight = $(this).attr("frameh");
			
			//classupdate
			menulist.find("li").each(function(i){
				$(this).removeClass("current");
			});
			$(this).parent().addClass("current");
			showframe.attr({"src" : demopath+experimentpage, "height" : frameheight});
		})
		
		//load first
		menulist.find("li a").first().trigger("click");
	}
	
}

launchLab();
});