<?php
$grupo_icono_texto = get_field('grupo_icono_texto');
$items             = $grupo_icono_texto['items'] ?? '';
?>
<section class="my-lg-5 py-lg-5 py-5">
    <div class="container">
        <div class="col-12 col-lg-11 mx-auto">
            <div class="swiper nosotrosSwiper">
                <div class="swiper-wrapper">
                    <?php if ($items) { ?>
                        <?php foreach ($items as $index => $item) { ?>
                            <?php
                            // Asignar variables para cada item individual
                            $imagen = $item['icono']['ID'] ?? '';
                            $texto  = $item['texto'] ?? '';
                            $titulo = $item['titulo'] ?? '';

                            if ($imagen) {
                                $imagen = intval($imagen);
                            }
                            
                            // Clase condicional para el segundo slide
                            $slide_class = ($index === 1) ? 'swiper-slide ps-lg-5' : 'swiper-slide pe-lg-5';
                            ?>
                            <div class="<?php echo $slide_class; ?>">
                                <div class="text-center px-3">
                                    <?php if ($imagen) { ?>
                                        <?php echo generar_image_responsive($imagen, 'custom-size', 'mb-2', ''); ?>
                                    <?php } ?>
                                    <?php if ($titulo) { ?>
                                        <h2 class="fs-1 fw-semibold"><?php echo $titulo; ?></h2>
                                    <?php } ?>
                                    <?php if ($texto) { ?>
                                        <div><?php echo $texto; ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="customSwiperPagination d-flex justify-content-center swiper-pagination-nosotros mt-4"></div>
        </div>
    </div>
</section>