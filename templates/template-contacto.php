<?php
/**
 * Template Name: Página de Contacto
 * 
 * @package ThemeIngeconopp
 */

if (!defined('ABSPATH')) {
  exit;
}

get_header();
$grupo_formulario     = get_field('grupo_formulario');
$titulo_formulario    = $grupo_formulario['titulo'] ?? '';
$texto_formulario     = $grupo_formulario['texto'] ?? '';
$imagen_formulario    = $grupo_formulario['imagen']['ID'] ?? '';
$shortcode_formulario = $grupo_formulario['shortcode_formulario'] ?? '';

// Convertir imagen a entero solo si existe
if ($imagen_formulario) {
  $imagen_formulario = intval($imagen_formulario);
}
?>

<main>
  <section class="customSeccionContacto pt-lg-11 pt-11">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <?php if ($titulo_formulario) { ?>
            <h1 class="fs-1-medium fw-semibold letter-spacing-4 mb-2"><?php echo esc_html($titulo_formulario); ?></h1>
          <?php } ?>
          <?php if ($texto_formulario) { ?>
            <p class="fs-1 text-secondary-100 mb-4">
              <?php echo wp_kses_post($texto_formulario); ?>
            </p>
          <?php } ?>
          <div class="customSeccionContacto__img position-relative float-end">
            <?php if ($imagen_formulario) { ?>
              <?php echo generar_image_responsive($imagen_formulario, 'custom-size', 'd-block img-fluid', ''); ?>
            <?php } ?>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="pt-5">
            <?php if ($shortcode_formulario) { ?>
              <?php echo do_shortcode($shortcode_formulario); ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer('contacto'); ?>