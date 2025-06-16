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
	$(this).toggleClass("active");
	$("[data-menu-mobile]").toggleClass("active");
	// Reset cualquier submenú abierto cuando se cierra el menú principal
	if (!$(this).hasClass("active")) {
		$(".submenu-container").removeClass("active");
		$(".menu-item").removeClass("d-none");
		$(".menu-item-header").removeClass("d-none");
	}
});

$(".submenu-toggle").on("click", function (e) {
	e.preventDefault();
	e.stopPropagation();
	const $menuItem = $(this).closest("li");
	const $submenu = $menuItem.find(".submenu-container").first();

	// Activar el submenú con slide
	$submenu.addClass("active");
	// Ocultar los items del nivel actual
	// $menuItem.siblings().addClass("d-none");
	// Ocultar el header del item actual
	// $menuItem.find(".menu-item-header").first().addClass("d-none");
});