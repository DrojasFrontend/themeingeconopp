<?php
$grupo_banner_items = get_field('grupo_banner_items');
$imagen             = $grupo_banner_items['imagen']['ID'] ?? '';
$imagen_mobile      = $grupo_banner_items['imagen_mobile']['ID'] ?? '';
$video              = $grupo_banner_items['video'] ?? '';
$items              = $grupo_banner_items['items'] ?? '';


if ($imagen) {
    $imagen = intval($imagen);
}
if ($imagen_mobile) {
    $imagen_mobile = intval($imagen_mobile);
}
?>
<section class="customSeccionBannerImagen position-relative <?php echo $video ? 'customSeccionBannerImagen__video' : ''; ?> pt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
    
    <?php if ($video) { 
        $video_url = is_array($video) ? $video['url'] : $video;
        if ($video_url) { ?>
            <video class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 0;" autoplay muted loop playsinline>
                <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
            </video>
        <?php } 
    } else { ?>
        <?php if ($imagen) { ?>
            <?php echo generar_image_responsive($imagen, 'custom-size', 'd-none d-lg-block img-fluid', ''); ?>
        <?php } ?>
        <?php if ($imagen_mobile) { ?>
            <?php echo generar_image_responsive($imagen_mobile, 'custom-size', 'd-block d-lg-none img-fluid', ''); ?>
        <?php } ?>
    <?php } ?>
    
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-center py-5" style="z-index: 2;">
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
                                        <p class="fs-5 text-white wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><?php echo $titulo; ?></p>
                                    <?php } ?>
                                    <?php if ($detalle) { ?>
                                        <span class="fs-1-medium text-white fw-semibold wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><?php echo $detalle; ?></span>
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