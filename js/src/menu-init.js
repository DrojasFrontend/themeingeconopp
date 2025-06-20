import $ from "jquery";

// Evento de scroll
$(window).on("scroll", function() {
	if ($(window).scrollTop() > 5) {
		$(".headerBottom").removeClass("py-lg-5 py-3").addClass("scrolled py-3");
	} else {
		$(".headerBottom").removeClass("scrolled py-3").addClass("py-lg-5 py-3");
	}
});

$("[data-toggle-menu]").on("click", function () {
	$("[data-menu-mobile]").toggleClass("active");
});

$("[data-cerrar-menu]").on("click", function () {
	$("[data-menu-mobile]").removeClass("active");
});