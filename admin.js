$("input").change(function() {
	$(this).addClass("touched");
})

$(".switch").click(function() {
	$(".form-panel").toggleClass("shift");
	$(".info").toggleClass("shift");
})