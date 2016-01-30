$(document).ready(function() {

	$(".load").on("click", function(e) {
		$(this).html("รอสักครู่...");
		var url = $(this).data("url");
		$(this).parent().load(url);
	});

}); // ready