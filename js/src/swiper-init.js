import $ from "jquery";
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import "swiper/css/effect-fade";

export const initBannerSwiper = () => {
	const swiper = new Swiper(".bannerSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1,
		spaceBetween: 0,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: false,
		pagination: {
			el: ".swiper-pagination-banner",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			1024: {
				slidesPerView: 3,
				spaceBetween: 0,
			},
		},
	});
};

export const initGallerySwiper = () => {
	const swiper = new Swiper(".gallerySwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1,
		spaceBetween: 10,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: false,
		pagination: {
			el: ".swiper-pagination-gallery",
			type: "bullets",
			clickable: true,
		},
	});
};

export const initServiciosSwiper = () => {
	const swiper = new Swiper(".serviciosSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1,
		spaceBetween: 0,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: false,
		pagination: {
			el: ".swiper-pagination-servicio",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			1024: {
				slidesPerView: 3,
				spaceBetween: 0,
			},
		},
	});
};

export const initSolucionesSwiper = () => {
	const swiper = new Swiper(".solucionesSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1.1,
		spaceBetween: 6,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: false,
		pagination: {
			el: ".swiper-pagination-servicio",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			680: {
				slidesPerView: 2.2,
			},
			1024: {
				slidesPerView: 3.2,
			},
			1200: {
				slidesPerView: 4,
			},
		},
	});
};

export const initTestimoniosSwiper = () => {
	const swiper = new Swiper(".testimoniosSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1,
		spaceBetween: 0,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
};

export const initProyectosSwiper = () => {
	const swiper = new Swiper(".proyectosSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1.1,
		spaceBetween: 12,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: false,
		pagination: {
			el: ".swiper-pagination-proyectos",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			680: {
				slidesPerView: 2.1,
				spaceBetween: 12,
			},
			1024: {
				slidesPerView: 2.1,
				spaceBetween: 18,
			},
			1200: {
				slidesPerView: 2.3,
				spaceBetween: 36,
			},
		},
	});
};

export const initMarcaSwiper = () => {
	const swiper = new Swiper(".marcaSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 2,
		spaceBetween: 10,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: false,
		pagination: {
			el: ".swiper-pagination-marca",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			680: {
				slidesPerView: 3,
			},
			1024: {
				slidesPerView: 4,
			},
			1200: {
				slidesPerView: 6,
			},
		},
	});
};

export const initMarqueeSwiper = () => {
	const swiper = new Swiper(".marqueeSwiper", {
		modules: [Autoplay],
		slidesPerView: 'auto',
		spaceBetween: 10,
		loop: true,
		autoplay: {
			delay: 0,
			disableOnInteraction: false,
		},
		speed: 15000,
	});
};

export const initTarjetaNumeroSwiper = () => {
	const swiper = new Swiper(".tarjetaNumeroSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1.08,
		spaceBetween: 10,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: false,
		pagination: false,
		breakpoints: {
			680: {
				slidesPerView: 2.1,
			},
			1024: {
				slidesPerView: 2.5,
			},
			1200: {
				slidesPerView: 3,
			},
		},
	});
};

export const initNosotrosSwiper = () => {
	const swiper = new Swiper(".nosotrosSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1,
		spaceBetween: 10,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: false,
		pagination: {
			el: ".swiper-pagination-nosotros",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			1024: {
				slidesPerView: 2,
			}
		},
	});
};

export const initExposicionGaleriaSwiper = () => {
	const swiper = new Swiper(".exposicionGaleriaSwiper", {
		modules: [Autoplay],
		slidesPerView: 1.1,
		spaceBetween: 0,
		loop: true,
		speed: 8000,
		centeredSlides: false,
		autoplay: {
			delay: 0,
			disableOnInteraction: false,
		},
		navigation: false,
		breakpoints: {
			1024: {
				slidesPerView: 2,
			}
		},
	});
};

// Inicialización de Swipers
document.addEventListener('DOMContentLoaded', function () {
	initBannerSwiper();
	initServiciosSwiper();
	initSolucionesSwiper();
	initTestimoniosSwiper();
	initProyectosSwiper();
	initMarcaSwiper();
	initMarqueeSwiper();
	initNosotrosSwiper();
	initExposicionGaleriaSwiper();
});
