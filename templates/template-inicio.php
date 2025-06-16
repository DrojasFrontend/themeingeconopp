<?php
/**
 * Template Name: Página de Inicio
 * 
 * @package ThemeIngeconopp
 */

if (!defined('ABSPATH')) {
  exit;
}

get_header();
?>
  <main>
    <section class="customHeroTextoImagen pt-lg-11 pt-11">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-9">
            <h1 class="fs-1">Tu <strong>aliado estratégico</strong> en proyectos de ingeniería y construcción</h1>
            <a href="" class="btn btn-blaco px-0 mt-3">
              Contáctanos
              <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="customSeccionBannerImagen position-relative pt-5">
      <img class="d-none d-lg-block img-fluid" src="<?php echo THEME_IMG; ?>/fondo-seccion-banner-imagen.webp" alt="" title="">
      <img class="d-block d-lg-none img-fluid" src="<?php echo THEME_IMG; ?>/fondo-seccion-banner-imagen-mobile.webp" alt="" title="">
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-center py-5">
        <div class="container">
          <div class="customSeccionBannerImagen__blur py-3 px-5">
            <div class="swiper bannerSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="text-center text-lg-start">
                    <p class="fs-5 text-white">Proyectos completados</p>
                    <span class="fs-1-big text-white fw-semibold">+18</span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="text-center text-lg-start">
                    <p class="fs-5 text-white">Clientes felices</p>
                    <span class="fs-1-big text-white fw-semibold">+20</span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="text-center text-lg-start">
                    <p class="fs-5 text-white">Años de experiencia</p>
                    <span class="fs-1-big text-white fw-semibold">+20</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="customSwiperPagination d-flex justify-content-center swiper-pagination-banner"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="customSeccionServicios pt-lg-7 pt-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-7 pe-6">
            <h2 class="fs-4">
              Desarrollamos y ejecutamos <strong>obras civiles y arquitectónicas para el sector público y privado</strong> en Panamá y Colombia
            </h2>
          </div>
          <div class="col-12 col-lg-5">
            <div class="d-flex justify-content-lg-end align-items-end h-100">
              <a href="" class="btn btn-blaco px-0 mt-lg-0 mt-2">
                Conocer servicios
                <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
              </a>
            </div>
          </div>
        </div>

        <div class="pt-lg-7 pt-4">
          <div class="swiper serviciosSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="pe-lg-6">
                  <div class="customSeccionServicios__img mb-1">
                    <img class="img-fluid" src="<?php echo THEME_IMG; ?>/servicio-1.webp" alt="" title="">
                  </div>
                  <h3 class="fs-4 fw-regular mb-2">Ingeniería</h3>
                  <p class="parrafo">
                    Soluciones técnicas a la medida, con visión estratégica y respaldo operativo
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pe-lg-6">
                  <div class="customSeccionServicios__img mb-1">
                    <img class="img-fluid" src="<?php echo THEME_IMG; ?>/servicio-2.webp" alt="" title="">
                  </div>
                  <h3 class="fs-4 fw-regular mb-2">Arquitectura</h3>
                  <p class="parrafo">
                    Diseño funcional y eficiente, adaptado a los retos del entorno y el proyecto.
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pe-lg-6">
                  <div class="customSeccionServicios__img mb-1">
                    <img class="img-fluid" src="<?php echo THEME_IMG; ?>/servicio-3.webp" alt="" title="">
                  </div>
                  <h3 class="fs-4 fw-regular mb-2">Construcción</h3>
                  <p class="parrafo">
                    Ejecución precisa, cumplimiento riguroso y resultados que perduran.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="customSwiperPagination d-flex justify-content-center swiper-pagination-servicio"></div>
        </div>
      </div>
    </section>

    <section class="customSeccionSoluciones pt-lg-7 pt-4">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="fs-3 mb-4">Explora nuetras <strong>soluciones</strong></h2>
          </div>
        </div>
      </div>
      <div class="swiper solucionesSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="position-relative">
              <img class="img-fluid" src="<?php echo THEME_IMG; ?>/soluciones-1.webp" alt="" title="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-start p-4">
                <h3 class="fs-5 text-white">Servicios de <br> <strong>Construcción</strong></h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="position-relative">
              <img class="img-fluid" src="<?php echo THEME_IMG; ?>/soluciones-2.webp" alt="" title="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-start p-4">
                <h3 class="fs-5 text-white">Ampliación & <br> <strong>Reformas</strong></h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="position-relative">
              <img class="img-fluid" src="<?php echo THEME_IMG; ?>/soluciones-3.webp" alt="" title="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-start p-4">
                <h3 class="fs-5 text-white">Mantenimiento<br> <strong>de edificaciones</strong></h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="position-relative">
              <img class="img-fluid" src="<?php echo THEME_IMG; ?>/soluciones-4.webp" alt="" title="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-start p-4">
                <h3 class="fs-5 text-white">Impermeabilización <br> <strong>de superficies</strong></h3>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section class="customSeccionImagenItems pt-lg-7 pt-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <h2 class="fs-2 mb-lg-0 mb-4">Más que construir, <strong>creamos confianza</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-5">
            <img class="img-fluid mb-lg-0 mb-4" src="<?php echo THEME_IMG; ?>/creaamos-confianza.webp" alt="" title="">
          </div>
          <div class="col-12 col-lg-7">
            <ul>
              <li class="position-relative pe-6 clickeable mb-4 list-style-none">
                <h3 class="fs-4 fw-regular mb-2">Experiencia que respalda</h3>
                <p class="parrafo">Más de 18 años construyendo obras con ética, cumplimiento y resultados comprobables.</p>
                <a href="#" class="position-absolute top-0 end-0">
                  <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                </a>
              </li>
              <li class="position-relative pe-lg-5 pe-4 clickeable mb-4 list-style-none">
                <h3 class="fs-4 fw-regular mb-2">Innovación con propósito</h3>
                <p class="parrafo">Diseñamos soluciones constructivas modernas, funcionales y adaptadas a tus necesidades.</p>
                <a href="#" class="position-absolute top-0 end-0">
                  <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                </a>
              </li>
              <li class="position-relative pe-lg-5 pe-4 clickeable mb-4 list-style-none">
                <h3 class="fs-4 fw-regular mb-2">Control total del proceso</h3>
                <p class="parrafo">Acompañamos cada etapa con seguimiento técnico, financiero y legal para minimizar riesgos.</p>
                <a href="#" class="position-absolute top-0 end-0">
                  <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                </a>
              </li>
              <li class="position-relative pe-lg-5 clickeable list-style-none">
                <h3 class="fs-4 fw-regular mb-2">Optimización de recursos</h3>
                <p class="parrafo">Analizamos costos a profundidad para ofrecerte precios justos y obras más eficientes.</p>
                <a href="#" class="position-absolute top-0 end-0">
                  <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="customSeccionTestimonios pt-lg-7 pt-4"> 
      <div class="px-3">
        <div class="bg-white pt-5 pb-lg-6 pb-5 rounded-5">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-5">
                <div class="col-12 col-lg-10">
                  <h2 class="fs-2 fw-semibold mb-2">Confianza, cumplimiento y calidad</h2>
                  <p class="fs-5 fw-light mb-3">Así se siente trabajar con nosotros.</p>
                  <div class="col-12 col-lg-5 p-0">
                    <div class="customSwiperPagination position-relative">
                      <div class="swiper-button-prev swiper-prev-testimonio"></div>
                      <div class="swiper-button-next swiper-next-testimonio"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-7">
                <div class="swiper testimoniosSwiper">
                  <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                      <div class="swiper-slide">
                        <div class="col-12 col-lg-11 ps-lg-3">
                          
                          <div class="d-flex flex-lg-column flex-column-reverse">
                            <div class="position-relative d-flex flex-column pt-4">
                              <img class="position-absolute top-0 comillas" width="72" height="49" src="<?php echo THEME_IMG; ?>/iconos/icono-comilla.png" alt="" title="">
                              <p class="fs-5">Ingeconoop es una empresa seria y cumplida, <strong>comprometida con la calidad, el presupuesto y los tiempos</strong>, respaldada por un gran talento humano.</p>
                            </div>
                            <div class="d-lg-flex align-items-center mt-4">
                              <div class="customSeccionTestimonios__img">
                                <img class="rounded-circle" src="<?php echo THEME_IMG; ?>/testimonio-1.png" alt="" title="">
                              </div>
                              <div class="ps-lg-3">
                                <p class="fs-4 text-gray-300 fw-semibold">Claudia Pinilla</p>
                                <p class="fs-5 text-secondary-100">Conconcreto Panamá</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="customSeccionProyectos pt-lg-7 pt-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h2 class="fs-2">Proyectos <strong>destacados</strong></h2>
          </div>
          <div class="col-12 col-lg-6">
            <div class="d-flex justify-content-lg-end">
              <a href="" class="btn btn-blaco px-0">
                Ver todos
                <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
              </a>
            </div>
          </div>
          <div class="col-12"><span class="linea-horizontal bg-gray-200 mt-3"></span></div>
          <div class="col-12 mt-3">
            <p class="parrafo">
              +20 años de experiencia y un equipo técnico-administrativo que garantiza cumplimiento, eficiencia y resultados
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 pe-0 pt-lg-5 pt-3 ps-3">
        <div class="swiper proyectosSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="img-fluid mb-3" src="<?php echo THEME_IMG; ?>/proyecto-1.webp" alt="" title="">
              <h3 class="fs-4 fw-regular">U-Storage Granadillo</h3>
              <a href="" class="btn btn-blaco p-0 justify-content-between">
                Proyecto Dirigido
                <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
              </a>
            </div>
            <div class="swiper-slide">
              <img class="img-fluid mb-3" src="<?php echo THEME_IMG; ?>/proyecto-2.webp" alt="" title="">
              <h3 class="fs-4 fw-regular">Hotel Movich</h3>
              <a href="" class="btn btn-blaco p-0 justify-content-between">
                Hotel Movich
                <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
              </a>
            </div>
            <div class="swiper-slide">
              <img class="img-fluid mb-3" src="<?php echo THEME_IMG; ?>/proyecto-1.webp" alt="" title="">
              <h3 class="fs-4 fw-regular">Sura</h3>
              <a href="" class="btn btn-blaco p-0 justify-content-between">
                Proyecto Dirigido
                <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
              </a>
            </div>
          </div>
        </div>
        <div class="customSwiperPagination d-flex d-lg-none justify-content-center swiper-pagination-proyectos mt-4"></div>
      </div>
    </section>

    <section class="customSeccionMarcas pt-lg-7 pt-4">
      <div class="container">
        <div class="text-center">
          <h2 class="fs-2 mb-lg-5 mb-4">Ellos confiaron en <strong>nosotros</strong></h2>
        </div>
        <div class="row">
          <div class="swiper marcaSwiper">
            <div class="swiper-wrapper">
              <?php for ($i = 0; $i < 2; $i++) { ?>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-1.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-2.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-3.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-4.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-5.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-6.png" alt="" title="">
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="customSeccionMarquee pt-lg-7 pt-4">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-4">
            <?php get_template_part('template-parts/layout/header/content-logo'); ?>
          </div>
        </div>
      </div>
      <div class="swiper marqueeSwiper">
        <div class="swiper-wrapper">
          <?php for ($i = 0; $i < 5; $i++) { ?>
          <div class="swiper-slide">
            <div class="d-flex align-items-center">
              <h2 class="d-none d-lg-block fs-1"><strong> Garantizamos</strong> cumplimiento, eficiencia y resultados. </h2>
              <h2 class="d-lg-none fs-4"><strong> Garantizamos</strong> cumplimiento, eficiencia y resultados. </h2>
            </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
    
  </main>
<?php 
get_footer();
?>