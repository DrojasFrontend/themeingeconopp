<?php 
$grupo_footer   = get_field('grupo_footer');
$titulo_footer  = $grupo_footer['titulo'] ?? '';
$texto_footer   = $grupo_footer['texto'] ?? '';
$cta_correo     = $grupo_footer['cta_correo'] ?? '';

$grupo_contacto = get_field('grupo_contacto', 'options');
$items          = $grupo_contacto['items'] ?? '';
?>

  <footer class="bg-gray-200 py-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
    <div class="py-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="col-12 col-lg-10 mx-auto">
              <?php if ($titulo_footer) { ?>
                <h2 class="fs-1-medium text-white fw-semibold mb-lg-0 mb-2"><?php echo esc_html($titulo_footer); ?></h2>
              <?php } ?>
              <?php if ($texto_footer) { ?>
                <p class="fs-5 text-white mb-lg-0 mb-5">
                  <?php echo wp_kses_post($texto_footer); ?>
                </p>
              <?php } ?>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="mb-5">
              <?php if ($cta_correo) { ?>
                <h3 href="" class="fs-5 text-secondary-100"><?php echo esc_html($cta_correo['title']); ?></h3>
              <?php } ?>
                <a href="<?php echo esc_url($cta_correo['url']); ?>" class="fs-5 text-white-100" target="<?php echo esc_attr($cta_correo['target']); ?>" title="Correo electrónico">
                  <?php 
                  // Eliminar "mailto:" si existe para mostrar solo el email
                  $display_email = str_replace('mailto:', '', $cta_correo['url']);
                  echo esc_html($display_email); 
                  ?>
                </a>
            </div>
            <div>
            <h3 class="fs-5 text-secondary-100 mb-2">Visitanos</h3>
            <div class="row">
              <!-- Banderas -->
              <?php if ($items) { ?>
                <?php foreach ($items as $index => $item) { 
                  $par_class = ($index % 2 == 1) ? ' col-12 col-lg-8' : 'col-12 col-lg-4 mb-4';
                  $imagen    = $item['imagen']['ID'] ?? '';
                  $texto     = $item['texto'] ?? '';
                ?>
                  <div class="<?php echo esc_attr($par_class); ?>">
                    <?php if ($imagen) { ?>
                      <?php echo generar_image_responsive($imagen, 'custom-size', 'rounded-circle mb-3', ''); ?>
                    <?php } ?>
                    <div class="d-grid gap-1 text-white-100">
                      <?php if ($texto) { ?>
                        <?php echo wp_kses_post($texto); ?>
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
  </footer>

  <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css">
    <script>
      wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100,
          callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
          }
        }
      );
      wow.init();
      document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
      };
    </script>
</body>
</html>