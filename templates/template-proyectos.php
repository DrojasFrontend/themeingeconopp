<?php
/**
 * Template Name: Página de Proyectos
 * 
 * @package ThemeIngeconopp
 */

if (!defined('ABSPATH')) {
  exit;
}

get_header();
$data                 = get_page_by_path('contactanos')->ID;
$grupo_formulario     = ($data) ? get_field('grupo_formulario', $data) : null;
$titulo_formulario    = $grupo_formulario['titulo'] ?? '';
$texto_formulario     = $grupo_formulario['texto'] ?? '';
$imagen_formulario    = $grupo_formulario['imagen']['ID'] ?? '';
$shortcode_formulario = $grupo_formulario['shortcode_formulario'] ?? '';

// Convertir imagen a entero solo si existe
if ($imagen_formulario) {
  $imagen_formulario = intval($imagen_formulario);
}

/* Grupo Hero */
$grupo_hero       = get_field('grupo_hero');
$logo_hero        = $grupo_hero['logo'] ?? [];
$titulo_hero      = $grupo_hero['titulo'] ?? '';
$descripcion_hero = $grupo_hero['descripcion'] ?? '';
$cta_hero         = $grupo_hero['cta'] ?? [];
$pdf_hero         = $grupo_hero['pdf'] ?? [];

/* Grupo Galeria */
$grupo_galeria    = get_field('grupo_galeria');
$galeria          = $grupo_galeria['galeria'] ?? [];

/* Grupo Easy System */
$grupo_tarjetas       = get_field('grupo_tarjetas');
$imagen_tarjeta       = $grupo_tarjetas['imagen'] ?? '';
$titulo_tarjeta       = $grupo_tarjetas['titulo'] ?? '';
$descripcion_tarjeta  = $grupo_tarjetas['descripcion'] ?? '';
$tarjetas_tarjetas    = $grupo_tarjetas['tarjetas'] ?? [];
$cta_tarjeta          = $grupo_tarjetas['cta'] ?? [];
$pdf_tarjeta          = $grupo_tarjetas['pdf'] ?? [];

/* Como funciona */
$grupo_como_funciona  = get_field('grupo_como_funciona');
$titulo_como_funciona = $grupo_como_funciona['titulo'] ?? '';
$items_como_funciona  = $grupo_como_funciona['items'] ?? [];

/* Preguntas frecuentes */
$grupo_faq        = get_field('grupo_faq');
$titulo_faq       = $grupo_faq['titulo'] ?? '';
$descripcion_faq  = $grupo_faq['descripcion'] ?? '';
$formulario_faq   = $grupo_faq['formulario'] ?? '';
$items_faq        = $grupo_faq['items'] ?? [];

/* Imagen + texto */
$grupo_imagen_texto       = get_field('grupo_imagen_texto');
$logo_imagen_texto        = $grupo_imagen_texto['logo'] ?? '';
$imagen_imagen_texto      = $grupo_imagen_texto['imagen']['ID'] ?? '';
$titulo_imagen_texto      = $grupo_imagen_texto['titulo'] ?? '';
$descripcion_imagen_texto = $grupo_imagen_texto['descripcion'] ?? '';
$cta_imagen_texto        = $grupo_imagen_texto['cta'] ?? '';

/* Texto animado 2 */
$grupo_texto_animado_2    = get_field('grupo_texto_animado_2');

/* Video */
$grupo_video       = get_field('grupo_video');
$video             = $grupo_video['video'] ?? '';

?>
<main>
  <!-- Hero -->
  <section class="bg-green py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 mx-auto text-center">
          <?php if ($logo_hero) { ?>
            <img class="mb-2 mx-auto" width="124" height="50" src="<?php echo esc_url($logo_hero); ?>" alt="Logo Easy System - Ingeniería y Construcción" title="Logo Easy System">
          <?php } ?>
          <?php if ($titulo_hero) { ?>
            <h1 class="fs-3 text-white fw-semibold mb-2"><?php echo esc_html($titulo_hero); ?></h1>
          <?php } ?>
          <?php if ($descripcion_hero) { ?>
            <p class="parrafo text-white mb-5"><?php echo esc_html($descripcion_hero); ?></p>
          <?php } ?>
          <?php if ($cta_hero) { ?>
            <div class="d-flex justify-content-center mb-2">
              <a href="<?php echo esc_url($cta_hero['url']); ?>" class="btn btn-primary"><?php echo esc_html($cta_hero['title']); ?></a>
            </div>
          <?php } ?>
          <?php if ($pdf_hero) { ?>
            <div class="d-flex justify-content-center">
              <a href="<?php echo esc_url($pdf_hero['url']); ?>" class="btn btn-blaco text-white fw-semibold" target="_blank" title="Ver catálogo técnico">
                Ver catálogo técnico
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Galeria -->
  <section>
    <?php if( $galeria ): ?>
      <div class="swiper exposicionGaleriaSwiper">
        <div class="swiper-wrapper">
          <?php foreach( $galeria as $image ): ?>
            <div class="swiper-slide">
              <?php echo generar_image_responsive($image['ID'], 'custom-size', 'd-block img-fluid', ''); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </section>

  <!-- Servicios -->
  <?php get_template_part('template-parts/componentes/bloque-servicios'); ?>

  <!-- Easy System -->
   <div class="my-5"></div>
  <section class="position-relative pt-5">
    <div class="position-absolute top-0 start-0 w-100 h-100">
      <img class="w-100 h-100 d-none d-lg-block" src="<?php echo THEME_IMG; ?>/ellipse.svg" alt="Easy System - Ingeniería y Construcción">
      <img class="w-100 h-100 object-fit-cover d-block d-lg-none" src="<?php echo THEME_IMG; ?>/ellipse.svg" alt="Easy System - Ingeniería y Construcción">
    </div>
    <div class="container position-relative">
      <div class="row">
        <div class="col-12 text-center mb-lg-5 mb-4">
          <img src="<?php echo $imagen_tarjeta; ?>" alt="<?php echo $titulo_tarjeta; ?>">
          <?php if ($titulo_tarjeta) { ?>
            <h2 class="fs-4 fw-semibold mb-2"><?php echo $titulo_tarjeta; ?></h2>
          <?php } ?>
          <?php if ($descripcion_tarjeta) { ?>
            <div class="fs-5"><?php echo $descripcion_tarjeta; ?></div>
          <?php } ?>
        </div>

        <?php if ($tarjetas_tarjetas) { ?>
          <?php foreach ($tarjetas_tarjetas as $tarjeta) { 
            $icono        = $tarjeta['icono'] ?? '';
            $titulo       = $tarjeta['titulo'] ?? '';
            $detalle      = $tarjeta['detalle'] ?? '';
          ?>
            <div class="col-12 col-lg-4 px-lg-2 mb-lg-0 mb-4">
              <div class="bg-white-200 p-4 rounded-4 shadow-sm h-100">
                <?php if ($icono) { ?>
                  <img class="d-block mb-3" width="40" height="40" src="<?php echo $icono; ?>" alt="<?php echo $titulo; ?>">
                <?php } ?>
                <?php if ($titulo) { ?>
                  <h3 class="fs-4 fw-regular mb-2"><?php echo $titulo; ?></h3>
                <?php } ?>
                <?php if ($detalle) { ?>
                  <p class="parrafo fw-light"><?php echo $detalle; ?></p>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
        <?php } ?>

        <div class="py-3"></div>

        <div class="col-12">
          <?php if ($cta_tarjeta) { ?>
            <div class="d-flex justify-content-center mb-2">
              <a href="<?php echo esc_url($cta_tarjeta['url']); ?>" class="btn btn-primary"><?php echo esc_html($cta_tarjeta['title']); ?></a>
            </div>
          <?php } ?>
          <?php if ($pdf_tarjeta) { ?>
            <div class="d-flex justify-content-center">
              <a href="<?php echo esc_url($pdf_tarjeta['url']); ?>" class="btn btn-blaco fw-semibold" target="_blank" title="Ver catálogo técnico">
                Ver catálogo técnico
              </a>
            </div>
          <?php } ?>
        </div>

      </div>
    </div>
    <div class="py-lg-5 py-4"></div>
  </section>

  <!-- Texto animado -->
  <?php 
    set_query_var('custom_class', 'pt-0 pb-1 bg-green text-white');
    get_template_part('template-parts/componentes/bloque-texto-animado'); 
  ?>

  <section class="">
    <div class="container-fluid gx-0">
      <div class="row m-0">
        <div class="col-12 p-0">
          <?php if ($video) { ?>
            <video class="w-100 h-auto" autoplay loop muted playsinline>
              <source src="<?php echo esc_url($video['url']); ?>" type="video/mp4">
              Tu navegador no soporta la reproducción de videos.
            </video>
          <?php } ?>
        </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Titulo imagen items iconos -->
  <?php get_template_part('template-parts/componentes/bloque-titulo-imagen-items-iconos'); ?>

  <!-- Como funciona -->
  <section class="customSeccionTarjetaNumero pt-lg-7 pt-5">
    <div class="px-lg-3">
      <div class="bg-gray-400 py-4">
        <div class="container">
          <div class="row d-flex flex-lg-row flex-column-reverse">
            <div class="col-12 col-lg-6">
              <?php if ($titulo_como_funciona) { ?>
                <h2 class="fs-1 text-white fw-semibold"><?php echo $titulo_como_funciona; ?></h2>
              <?php } ?>
            </div>
            <div class="col-12 col-lg-6 d-none">
              <div class="d-flex justify-content-lg-end h-100">
                <a href="" class="customSeccionTarjetaNumero__link text-secondary-100 d-flex align-items-center gap-2">
                  Hazlo simple. Construye con respaldo.
                  <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container px-lg-3 px-0">
          <div class="mt-5">
            <div class="swiper tarjetaNumeroSwiper">
              <div class="swiper-wrapper">
                <?php if ($items_como_funciona) { ?>
                  <?php foreach ($items_como_funciona as $key => $item) { 
                    $titulo       = $item['titulo'] ?? '';
                    $detalle      = $item['detalle'] ?? '';
                  ?>
                    <div class="swiper-slide">
                      <div class="customSeccionTarjetaNumero__item position-relative d-flex flex-column justify-content-end bg-primary-100 p-3 pb-5 rounded-4 h-100">
                        <img class="customSeccionTarjetaNumero__numero position-absolute" src="<?php echo THEME_IMG; ?>/numero-0<?php echo $key + 1; ?>.svg" alt="Numero <?php echo $key + 1; ?>" title="Numero <?php echo $key + 1; ?>">
                        <?php if ($titulo) { ?>
                          <h3 class="position-relative z-1 fs-2 text-white mb-2"><?php echo $titulo; ?></h3>
                        <?php } ?>
                        <?php if ($detalle) { ?>
                          <p class="parrafo-small text-white">
                            <?php echo $detalle; ?>
                          </p>
                        <?php } ?>
                      </div>
                    </div>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preguntas frecuentes -->
  <section class="">
    <div class="py-lg-5 py-4"></div>
    <div class="container">
      <div class="row d-flex flex-lg-row flex-column-reverse">
        <div class="col-12 col-lg-7 px-lg-3 px-0">
          <div class="bg-transparent border-top" id="accordionExample">
            <?php if ($items_faq) { ?>
              <?php foreach ($items_faq as $idx => $item) { 
                $pregunta = $item['pregunta'] ?? '';
                $respuesta = $item['respuesta'] ?? '';
              ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading<?php echo $idx + 1; ?>">
                    <button class="accordion-button d-flex justify-content-between w-100 fs-5 p-3 fw-regular text-start bg-transparent border-0 border-bottom border-gray-400" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $idx + 1; ?>" aria-expanded="false" aria-controls="collapse<?php echo $idx + 1; ?>">
                      <?php echo $pregunta; ?>
                    </button>
                  </h2>
                  <div id="collapse<?php echo $idx + 1; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $idx + 1; ?>" data-bs-parent="#accordionExample">
                    <div class="p-3">
                      <?php echo $respuesta; ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
        <div class="col-12 col-lg-5 ps-lg-5">
          <?php if ($titulo_faq) { ?>
            <h2 class="fs-1 fw-semibold"><?php echo $titulo_faq; ?></h2>
          <?php } ?>
          <?php if ($descripcion_faq) { ?>
            <p class="parrafo mb-4"><?php echo $descripcion_faq; ?></p>
          <?php } ?>
          <?php if ($formulario_faq) { ?>
            <?php echo do_shortcode($formulario_faq); ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Imagen + texto -->
  <section>
    <div class="py-lg-5 py-4"></div>
    <div class="container-fluid gx-0">
      <div class="row gx-0">
        <div class="col-12 col-lg-5">
          <?php if ($imagen_imagen_texto) { ?>
            <?php echo generar_image_responsive($imagen_imagen_texto, 'custom-size', 'd-block img-fluid h-100 object-fit-cover', ''); ?>
          <?php } ?>
        </div>
        <div class="col-12 col-lg-7 position-relative">
          <?php if ($logo_imagen_texto) { ?>
            <div class="position-absolute d-none d-lg-block" style="top:50%; left:-90px; transform: translate(0, -50%);">
              <img width="190" height="190" src="<?php echo $logo_imagen_texto; ?>" alt="<?php echo $titulo_imagen_texto; ?>">
            </div>
            <div class="position-absolute d-block d-lg-none" style="top:0%; left:50%; transform: translate(-50%, -50%);">
              <img width="100" height="100" src="<?php echo $logo_imagen_texto; ?>" alt="<?php echo $titulo_imagen_texto; ?>">
            </div>
          <?php } ?>
          <div class="p-lg-5 py-5 bg-green h-100 d-flex align-items-center">
            <div class="p-lg-5 d-flex flex-column justify-content-center">
              <div class="px-lg-4 px-xl-5 px-3">
                <?php if ($titulo_imagen_texto) { ?>
                  <h2 class="fs-1 fw-semibold text-white mb-4"><?php echo $titulo_imagen_texto; ?></h2>
                <?php } ?>
                <?php if ($descripcion_imagen_texto) { ?>
                  <p class="parrafo text-white mb-4"><?php echo $descripcion_imagen_texto; ?></p>
                <?php } ?>
                <?php if ($cta_imagen_texto) { ?>
                  <div class="d-flex">
                    <a href="<?php echo esc_url($cta_imagen_texto['url']); ?>" class="btn btn-primary"><?php echo esc_html($cta_imagen_texto['title']); ?></a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section class="customSeccionContacto pt-lg-11 pt-11" id="contactanos">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <?php if ($titulo_formulario) { ?>
            <h1 class="fs-1-medium fw-semibold letter-spacing-4 mb-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><?php echo esc_html($titulo_formulario); ?></h1>
          <?php } ?>
          <?php if ($texto_formulario) { ?>
            <p class="fs-1 text-secondary-100 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
              <?php echo wp_kses_post($texto_formulario); ?>
            </p>
          <?php } ?>
          <div class="customSeccionContacto__img position-relative float-end wow fadeInUp d-none" data-wow-duration="1s" data-wow-delay=".7s">
            <?php if ($imagen_formulario) { ?>
              <?php echo generar_image_responsive($imagen_formulario, 'custom-size', 'd-block img-fluid', ''); ?>
            <?php } ?>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="pt-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
            <?php if ($shortcode_formulario) { ?>
              <?php echo do_shortcode($shortcode_formulario); ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Texto animado 2 -->
  <?php 
    // Pasar parámetros al template part - Segunda instancia (Footer)
    set_query_var('custom_class', 'pt-lg-7 pt-5');
    set_query_var('acf_group_name', 'grupo_texto_animado_2'); // Segundo grupo ACF
    get_template_part('template-parts/componentes/bloque-texto-animado'); 
  ?>
</main>
<?php get_footer(); ?>
