<?php
$grupo_banner_items = get_field('grupo_banner_items');
$imagen             = $grupo_banner_items['imagen']['ID'] ?? '';
$imagen_mobile      = $grupo_banner_items['imagen_mobile']['ID'] ?? '';
$items              = $grupo_banner_items['items'] ?? '';

// Convertir imágenes a entero solo si existen
if ($imagen) {
    $imagen = intval($imagen);
}
if ($imagen_mobile) {
    $imagen_mobile = intval($imagen_mobile);
}
?>
<section class="customSeccionBannerImagen position-relative pt-5">
    <?php if ($imagen) { ?>
        <?php echo generar_image_responsive($imagen, 'custom-size', 'd-none d-lg-block img-fluid', ''); ?>
    <?php } ?>
    <?php if ($imagen_mobile) { ?>
        <?php echo generar_image_responsive($imagen_mobile, 'custom-size', 'd-block d-lg-none img-fluid', ''); ?>
    <?php } ?>
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-center py-5">
    <div class="container">
        <div class="customSeccionBannerImagen__blur py-3 px-5">
        <div class="swiper bannerSwiper">
            <div class="swiper-wrapper">
                <?php if ($items) { ?>
                    <?php foreach ($items as $item) { 
                        $titulo  = $item['titulo'] ?? '';
                        $detalle = $item['detalle'] ?? '';
                        
                        // Aplicar esc_html solo si hay contenido
                        if ($titulo) {
                            $titulo = esc_html($titulo);
                        }
                        if ($detalle) {
                            $detalle = esc_html($detalle);
                        }
                    ?>
                        <div class="swiper-slide">
                            <div class="text-center text-lg-start">
                                <?php if ($titulo) { ?>
                                    <p class="fs-5 text-white"><?php echo $titulo; ?></p>
                                <?php } ?>
                                <?php if ($detalle) { ?>
                                    <span class="fs-1-medium text-white fw-semibold"><?php echo $detalle; ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="customSwiperPagination d-flex justify-content-center swiper-pagination-banner"></div>
        </div>
    </div>
    </div>
</section>