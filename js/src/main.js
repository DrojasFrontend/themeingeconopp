import 'bootstrap/dist/css/bootstrap.min.css';
import { Modal, Collapse, Dropdown, Tab } from 'bootstrap';
import {} from "./menu-init";
import { inicializarContadores } from "./contador";

import {
	initBannerSwiper,
	initServiciosSwiper,
	initSolucionesSwiper,
	initTestimoniosSwiper,
	initProyectosSwiper,
	initMarcaSwiper,
	initTarjetaNumeroSwiper,
	initNosotrosSwiper,
} from "./swiper-init";
import { initClickableCards } from "./card-click-init";


let Main = {
	init: async function () {
		document.addEventListener("DOMContentLoaded", () => {
			if (document.querySelector(".heroSwiper")) {
				initHeroSwiper();
			}
			if (document.querySelector(".bannerSwiper")) {
				initBannerSwiper();
			}
			if (document.querySelector(".serviciosSwiper")) {
				initServiciosSwiper();
			}
			if (document.querySelector(".solucionesSwiper")) {
				initSolucionesSwiper();
			}
			if (document.querySelector(".swiperTestimonios")) {
				initTestimoniosSwiper();
			}
			if (document.querySelector(".proyectosSwiper")) {
				initProyectosSwiper();
			}
			if (document.querySelector(".marcaSwiper")) {
				initMarcaSwiper();
			}
			if (document.querySelector(".tarjetaNumeroSwiper")) {
				initTarjetaNumeroSwiper();
			}
			if (document.querySelector(".nosotrosSwiper")) {
				initNosotrosSwiper();
			}
			initClickableCards(".clickeable");
			inicializarContadores();
		});
	},
};
Main.init();
