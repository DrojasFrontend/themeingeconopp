<?php
$grupo_bloque_contenido = get_field('grupo_bloque_contenido');
$clases_para_grilla     = $grupo_bloque_contenido['clases_para_grilla'] ?? '';
$titulo                 = $grupo_bloque_contenido['titulo'] ?? '';
$texto                  = $grupo_bloque_contenido['texto'] ?? '';
$cta                    = $grupo_bloque_contenido['cta'] ?? '';
$imagen                 = $grupo_bloque_contenido['imagen']['ID'] ?? '';
$imagen_mobile          = $grupo_bloque_contenido['imagen_mobile']['ID'] ?? '';

if ($clases_para_grilla) {
    $clases_para_grilla = esc_html($clases_para_grilla);
}
if ($texto) {
    $texto = esc_html($texto);
}
if ($imagen) {
    $imagen = intval($imagen);
}
if ($imagen_mobile) {
    $imagen_mobile = intval($imagen_mobile);
}

?>
<section class="customHeroTextoImagen pt-lg-11 pt-11 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
    <div class="container">
        <div class="row">
            <div class="<?php echo $clases_para_grilla; ?>">
                <?php if ($titulo) { ?>
                    <h1 class="fs-1"><?php echo $titulo; ?></h1>
                <?php } ?>
                <?php if ($cta && !empty($cta['url'])) { ?>
                    <a href="<?php echo esc_url($cta['url']); ?>" 
                       class="btn btn-blaco px-0 mt-3" 
                       target="<?php echo esc_attr($cta['target'] ?? '_self'); ?>" 
                       title="<?php echo esc_attr($cta['title'] ?? ''); ?>">
                        <?php echo esc_html($cta['title'] ?? ''); ?>
                        <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                    </a>
                <?php } ?>
            </div>
            <?php if ($texto) { ?>
                <div class="col-12 col-lg-5 px-lg-0">
                    <div class="d-flex flex-lg-column h-100 justify-content-lg-end">
                        <p class="fs-5">
                            Somos una empresa con más de 20 años de experiencia en el desarrollo y construcción de proyectos civiles y arquitectónicos para los sectores público y privado.
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php if ($imagen) { ?>
        <div class="pt-lg-5 mt-lg-5 pt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <?php echo generar_image_responsive($imagen, 'custom-size', 'd-none d-lg-block img-fluid', ''); ?>
            <?php echo generar_image_responsive($imagen_mobile, 'custom-size', 'd-lg-none img-fluid', ''); ?>
        </div>
    <?php } ?>
</section>