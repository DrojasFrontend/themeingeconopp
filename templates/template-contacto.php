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
?>

<main>
  <section class="customSeccionContacto pt-lg-11 pt-11">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h1 class="fs-1-medium fw-semibold letter-spacing-4 mb-2">¿Quieres cotizar tu proyecto?</h1>
          <p class="fs-1 text-secondary-100 mb-4">
            ¡Hablemos!
          </p>
          <div class="customSeccionContacto__img position-relative float-end">
            <img src="<?php echo THEME_IMG; ?>hero-contactanos.webp" alt="Contacto" class="d-block img-fluid">
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="pt-5">
            <?php echo do_shortcode('[contact-form-7 id="dc8d042" title="Formulario de contacto"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer('contacto'); ?>