<?php
$grupo_servicios = get_field('grupo_servicios');
$imagen          = $grupo_servicios['imagen']['ID'] ?? '';
$texto           = $grupo_servicios['texto'] ?? '';
$cta             = $grupo_servicios['cta'] ?? '';
$items           = $grupo_servicios['items'] ?? '';

if ($imagen) {
    $imagen = intval($imagen);
}
?>
<section class="customSeccionServicios pt-lg-7 pt-5">
    <div class="container">
    <div class="row">
        <div class="col-12 col-lg-7 pe-6">
            <?php if ($texto) { ?>
                <h2 class="fs-4"><?php echo $texto; ?></h2>
            <?php } ?>
        </div>
        <div class="col-12 col-lg-5">
        <div class="d-flex justify-content-lg-end align-items-end h-100">
            <?php if ($cta && !empty($cta['url'])) { ?>
                <a href="<?php echo esc_url($cta['url']); ?>" 
                   class="btn btn-blaco px-0 mt-lg-0 mt-2" 
                   target="<?php echo esc_attr($cta['target'] ?? '_self'); ?>" 
                   title="<?php echo esc_attr($cta['title'] ?? ''); ?>">
                    <?php echo esc_html($cta['title'] ?? ''); ?>
                    <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                </a>
            <?php } ?>
        </div>
        </div>
    </div>

    <div class="pt-lg-7 pt-4">
        <div class="swiper serviciosSwiper">
            <div class="swiper-wrapper">
                <?php if ($items) { ?>
                    <?php foreach ($items as $item) { 
                        $imagen_item = $item['imagen']['ID'] ?? '';
                        $titulo      = $item['titulo'] ?? '';
                        $texto_item  = $item['texto'] ?? '';
                        
                        if ($imagen_item) {
                            $imagen_item = intval($imagen_item);
                        }
                        if ($titulo) {
                            $titulo = esc_html($titulo);
                        }
                    ?>
                        <div class="swiper-slide">
                            <div class="pe-lg-6">
                                <div class="customSeccionServicios__img mb-1">
                                    <?php if ($imagen_item) { ?>
                                        <?php echo generar_image_responsive($imagen_item, 'custom-size', 'img-fluid', ''); ?>
                                    <?php } ?>
                                </div>
                                <?php if ($titulo) { ?>
                                    <h3 class="fs-4 fw-regular mb-2"><?php echo $titulo; ?></h3>
                                <?php } ?>
                                <?php if ($texto_item) { ?>
                                    <div class="parrafo"><?php echo $texto_item; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="customSwiperPagination d-flex justify-content-center swiper-pagination-servicio mt-4"></div>
    </div>
    </div>
</section>