$(document).ready(function() {

	$(".main").onepage_scroll({
		sectionContainer: "section",
		easing: "ease",
		animationTime: 1000,
	   	loop: false,
	   	beforeMove: function(index) {
	    	console.log(index);
	    	if (index != 1) {
	    		$("#header img.header-logo").css('height', '50px');
	    	} else {
	    		$("#header img.header-logo").css('height', '70px');
	    	}
	   	},
	   	updateURL: true,
	});








});

