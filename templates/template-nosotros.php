<?php
/**
 * Template Name: Página de Nosotros
 * 
 * @package ThemeIngeconopp
 */

if (!defined('ABSPATH')) {
  exit;
}

get_header();
?>

<main>
  <section class="customSeccionTextoImagen pt-lg-11 pt-11">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="fs-1-medium fw-semibold letter-spacing-4 mb-2">Construimos confianza. Desarrollamos futuro.</h2>
            </div>
            <div class="col-12 col-lg-5 px-lg-0">
                <div class="d-flex flex-lg-column h-100 justify-content-lg-end">
                    <p class="fs-5">
                        Somos una empresa con más de 20 años de experiencia en el desarrollo y construcción de proyectos civiles y arquitectónicos para los sectores público y privado.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-lg-5 mt-lg-5 pt-4">
        <img src="<?php echo THEME_IMG; ?>/hero-nosotros.webp" alt="Nosotros" class="d-none d-lg-block img-fluid">
        <img src="<?php echo THEME_IMG; ?>/hero-nosotros-mobile.webp" alt="Nosotros" class="d-lg-none img-fluid">
    </div>
  </section>

  <section class="my-lg-5 py-lg-5 py-5">
    <div class="container">
        <div class="col-12 col-lg-11 mx-auto">
            <div class="swiper nosotrosSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide pe-lg-5">
                        <div class="text-center px-">
                            <img src="<?php echo THEME_IMG; ?>mision.svg" alt="Misión" class="mb-2">
                            <h2 class="fs-1 fw-semibold">Misión</h2>
                            <p>
                                Desarrollar y construir proyectos de ingeniería civil y arquitectura con altos estándares de calidad, eficiencia y compromiso, generando soluciones integrales para los sectores público y privado.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide ps-lg-5">
                        <div class="text-center">
                            <img src="<?php echo THEME_IMG; ?>/vision.svg" alt="Visión" class="mb-2">
                            <h2 class="fs-1 fw-semibold">Visión</h2>
                            <p>
                                Para el año 2029, consolidarnos como una empresa referente en soluciones constructivas integrales en Latinoamérica, reconocida por su solidez técnica, cumplimiento, capacidad de adaptación a nuevos mercados y compromiso con el progreso social.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customSwiperPagination d-flex justify-content-center swiper-pagination-nosotros mt-4"></div>
        </div>
    </div>
  </section>

  <section class="customSeccionTarjetaHorizontal">
    <div class="container-fluid">
        <div class="row d-flex flex-lg-row flex-column-reverse">
            <div class="col-12 col-lg px-0">
                <div class="bg-secondary d-flex flex-column justify-content-end pt-5 px-lg-4 px-3 pb-4 h-100">
                    <h2 class="fs-1-medium fw-semibold mb-3">Construimos con propósito</h2>
                    <p class="fs-5">
                        Un sistema innovador que utiliza estructuras en steel framing y un diseño arquitectónico inspirado en el Estilo Victoriano para crear viviendas sismo resistentes, de bajo costo, y con mínimo impacto ambiental.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg px-0">
                <img src="<?php echo THEME_IMG; ?>/construimos-con-propositos.webp" alt="Construimos con propósito" class="img-fluid d-block">
            </div>
        </div>
    </div>
  </section>

  <section class="customSeccionTarjetaHorizontal">
    <div class="container-fluid">
        <div class="row d-flex flex-lg-row-reverse flex-column-reverse">
            <div class="col px-0">
                <div class="bg-secondary d-flex flex-column justify-content-end pt-5 px-lg-4 px-3 pb-4 h-100">
                    <h2 class="fs-1-medium fw-semibold mb-3">¿Qué nos motiva?</h2>                    
                    <p class="fs-5">
                        En cada proyecto, nos mueve una convicción profunda: construir con propósito. Nos inspira la innovación como motor de avance, y trabajamos con enfoque en la eficiencia, optimizando procesos para reducir tiempos y costos sin comprometer la calidad.
                    </p>
                </div>
            </div>
            <div class="col px-0">
                <img src="<?php echo THEME_IMG; ?>/que-nos-motiva.webp" alt="Construimos con propósito" class="img-fluid d-block">
            </div>
        </div>
    </div>
  </section>

  <section class="customSeccionTarjetaHorizontal2">
    <div class="container-fluid px-0">
        <div class="bg-gray-400">
            <div class="row gx-0 d-flex flex-lg-row flex-column-reverse">
                <div class="col-12 col-lg-8 px-0">
                    <div class="d-flex flex-column justify-content-center p-lg-5 px-4 py-5 h-100">
                        <p class="fs-4 text-secondary-100 letter-spacing-4">Ricardo A. Escobar</p>
                        <h2 class="fs-1-medium fw-semibold text-white letter-spacing-4 mb-2">Liderazgo con experiencia</h2>
                        <div class="fs-5 text-white">
                            Liderando con más de 15 años de experiencia en construcción en Colombia y Centroamérica.

                            <ul class="ps-4 mt-3">
                                <li class="list-style-disc">Especialista en Gerencia y control de la Construcción (Universidad del norte) </li>
                                <li class="list-style-disc">MBA en Dirección de Proyectos (Viña del Mar, Chile)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 px-0">
                    <img src="<?php echo THEME_IMG; ?>/ricardo-escobar.webp" alt="Ricardo A. Escobar" class="img-fluid d-block h-100 object-fit-cover">
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="customSeccionTarjetaHorizontal">
    <div class="container-fluid">
        <div class="row d-flex flex-lg-row flex-column-reverse">
            <div class="col-12 col-lg px-0">
                <div class="bg-secondary d-flex flex-column justify-content-end pt-5 px-lg-4 px-3 pb-4 h-100">
                    <h2 class="fs-1-medium fw-semibold mb-3 pe-5">Barranquilla, Colombia</h2>
                    <div class="fs-5">
                        <a href="tel:+573133312459" target="_blank" title="Llamar a Panamá">+57 313 331 2459</a>
                        <p>Centro Empresarial World Trade Center, Oficina 403</p>
                        <p> Calle 76 No 54-11</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg px-0">
                <img src="<?php echo THEME_IMG; ?>/barranquilla-colombia.webp" alt="Construimos con propósito" class="img-fluid d-block">
            </div>
        </div>
    </div>
  </section>

  <section class="customSeccionTarjetaHorizontal">
    <div class="container-fluid">
        <div class="row d-flex flex-lg-row-reverse flex-column-reverse">
            <div class="col px-0">
                <div class="bg-secondary d-flex flex-column justify-content-end pt-5 px-lg-4 px-3 pb-4 h-100">
                    <h2 class="fs-1-medium fw-semibold mb-3">Panamá</h2>                    
                    <div class="fs-5">
                        <a href="tel:+50764252401" target="_blank" title="Llamar a Panamá">+507 6425 2401</a>
                        <p>Edificio Plaza 2000, Piso 11.</p>
                        <p>Calle 53 Marbella</p>
                    </div>
                </div>
            </div>
            <div class="col px-0">
                <img src="<?php echo THEME_IMG; ?>/ciudad-panama.webp" alt="Construimos con propósito" class="img-fluid d-block">
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

<?php get_footer(); ?>