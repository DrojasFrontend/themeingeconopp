<?php
/**
 * Template para mostrar posts individuales
 */

get_header('single');
?>
<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-9 mx-auto">
                <article>
                    <div class="d-flex justify-content-between align-items-center mb-5 gap-5">
                        <p class="fs-5 text-white-200"><?php the_title(); ?></p>
                        <button type="button" class="border-0 bg-transparent text-white-200" onclick="history.back()">
                            <?php get_template_part('template-parts/componentes/icono-cerrar'); ?>
                        </button>
                    </div>
                    <header>
                        <div class="row">
                            <div class="d-flex flex-lg-row flex-column justify-content-between gap-2">
                                <div class="col-12 col-lg-6">
                                    <h1 class="fs-1-big text-white fw-semibold text-white-200"><?php the_title(); ?></h1>
                                </div>
                                <div class="d-flex flex-column justify-content-between align-items-end h-100 gap-2">
                                    <?php 
                                    $post_id        = get_the_ID();
                                    $grupo_descarga = get_field('grupo_descarga', $post_id);
                                    $cta             = $grupo_descarga['cta'] ?? '';

                                    $grupo_imagen   = get_field('grupo_imagen', $post_id);
                                    $imagen_grande  = $grupo_imagen['imagen'] ?? '';
                                    if ($imagen_grande) {
                                        $imagen_grande = $imagen_grande['ID'];
                                    }

                                    $grupo_items    = get_field('grupo_items', $post_id);
                                    $items          = $grupo_items['items'] ?? '';
                                    if ($items) {
                                        foreach ($items as $item) {
                                            $titulo  = $item['titulo'] ?? '';
                                            $detalle = $item['detalle'] ?? '';
                                        }
                                    }

                                    ?>
                                    <?php if ($cta) { ?>
                                        <a href="<?php echo $cta['url']; ?>" class="btn btn-gris" target="<?php echo $cta['target']; ?>" title="<?php echo $cta['title']; ?>">
                                        Descargar brochure
                                        </a>
                                    <?php } ?>
                                    <a href="/contactanos/" class="btn btn-blaco px-0 mt-lg-0 mt-2 text-white-200 d-flex align-items-center gap-2">
                                        Cotiza tu proyecto
                                        <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <?php if ($imagen_grande) { ?>
                                <?php echo generar_image_responsive($imagen_grande, 'custom-size', 'img-fluid rounded-4 overflow-hidden', ''); ?>
                            <?php } ?>
                        </div>
                    </header>
                    
                    <div class="postContent fs-5 text-white-200 mb-4">
                        <?php the_content(); ?>
                    </div>
    
                    <div class="px-lg-5">
                        <ul class="list-unstyled">
                            <?php if ($items) { ?>
                                <?php foreach ($items as $item) { ?>
                                    <li class="parrafo text-white-200 mb-lg-4 pb-lg-4 mb-3 pb-3 border-bottom border-secondary-100">
                                        <h2 class="fs-4 fw-regular text-white-200"><?php echo $item['titulo']; ?></h2>
                                        <?php echo $item['detalle']; ?>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </article>
                <section class="customSeccionTarjetaNumero customSeccionTarjetaNumero__single pt-4">
                    <div class="bg-gray-400 rounded-4 py-4">
                        <div class="px-3">
                            <div class="row d-flex flex-lg-row flex-column-reverse">
                                <div class="col-12 col-lg-6">
                                    <h2 class="fs-1 text-white fw-semibold">¿Cómo funciona?</h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="d-flex justify-content-lg-end h-100">
                                        <a href="/contactanos/" class="customSeccionTarjetaNumero__link text-secondary-100 d-flex align-items-center gap-2">
                                            Hazlo simple. Construye con respaldo.
                                            <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-lg-3 px-0 px-lg-0 ps-3 pe-0">
                            <div class="mt-5">
                                <div class="swiper tarjetaNumeroSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="customSeccionTarjetaNumero__item position-relative d-flex flex-column justify-content-end bg-primary-100 p-3 pb-5 rounded-4 h-100">
                                                <div class="position-absolute top-0 start-0 pt-4 ps-3 text-secondary-100">
                                                    <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                                </div>
                                                <img class="customSeccionTarjetaNumero__numero position-absolute" src="<?php echo THEME_IMG; ?>/numero-01.svg" alt="Numero 1" title="Numero 1">
                                                <h3 class="position-relative z-1 fs-2 text-white mb-2">Cuéntanos <br> tu idea</h3>
                                                <p class="parrafo-small text-white pe-lg-5">
                                                Diligencia nuestro formulario o contáctanos directamente.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="customSeccionTarjetaNumero__item position-relative d-flex flex-column justify-content-end bg-primary-100 p-3 pb-5 rounded-4 h-100">
                                                <div class="position-absolute top-0 start-0 pt-4 ps-3 text-secondary-100">
                                                    <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                                </div>
                                                <img class="customSeccionTarjetaNumero__numero position-absolute" src="<?php echo THEME_IMG; ?>/numero-02.svg" alt="Numero 2" title="Numero 2">
                                                <h3 class="position-relative z-1 fs-2 text-white mb-2">Evaluamos y estructuramos tu propuesta</h3>
                                                <p class="parrafo-small text-white pe-lg-5">
                                                    Nuestro equipo técnico analiza la información, valida los alcances y te arma una propuesta personalizada.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="customSeccionTarjetaNumero__item position-relative d-flex flex-column justify-content-end bg-primary-100 p-3 pb-5 rounded-4 h-100">
                                                <div class="position-absolute top-0 start-0 pt-4 ps-3 text-secondary-100">
                                                    <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                                </div>
                                                <img class="customSeccionTarjetaNumero__numero position-absolute" src="<?php echo THEME_IMG; ?>/numero-03.svg" alt="Numero 3" title="Numero 3">
                                                <h3 class="position-relative z-1 fs-2 text-white mb-2">Recibe tu cotización y da el siguiente paso</h3>
                                                <p class="parrafo-small text-white pe-lg-5">
                                                    En pocos días tendrás una propuesta clara, adaptada a tu proyecto. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php
get_footer('single');
?>
