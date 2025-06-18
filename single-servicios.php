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
                        <button type="button" class="border-0 bg-transparent" onclick="history.back()">
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
                                    <a href="" class="btn btn-gris">Descargar brochure</a>
                                    <a href="" class="btn btn-blaco px-0 mt-lg-0 mt-2 text-white-200 d-flex align-items-center gap-2">
                                        Cotiza tu proyecto
                                        <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <img src="<?php echo THEME_IMG; ?>/post-llaves-en-mano.webp" alt="<?php the_title(); ?>" class="img-fluid rounded-4 overflow-hidden">
                        </div>
                    </header>
                    
                    <div class="postContent fs-5 text-white-200 mb-4">
                        Este enfoque permite que el cliente delegue completamente el desarrollo de la obra, confiando en un equipo que garantiza cumplimiento, calidad y eficiencia en cada etapa. Al entregar proyectos listos para operar, facilitamos la toma de decisiones y liberamos a nuestros clientes de la carga operativa y técnica del proceso constructivo.
                    </div>
    
                    <div class="px-lg-5">
                        <ul class="list-unstyled">
                            <li class="parrafo text-white-200 mb-lg-4 pb-lg-4 mb-3 pb-3 border-bottom border-secondary-100">
                                <h2 class="fs-4 fw-regular text-white-200">Ahorro de tiempo y recursos</h2>
                                Un solo equipo coordina todo, lo que reduce retrasos y costos por reprocesos.
                                
                            </li>
                            <li class="parrafo text-white-200 mb-lg-4 pb-lg-4 mb-3 pb-3 border-bottom border-secondary-100">
                                <h2 class="fs-4 fw-regular text-white-200">Mayor control del proyecto</h2>
                                Centralizamos la comunicación, decisiones y ejecución para garantizar resultados sin desviaciones.
                            </li>
                            <li class="parrafo text-white-200 mb-lg-4 pb-lg-4 mb-3 pb-3 border-bottom border-secondary-100">
                                <h2 class="fs-4 fw-regular text-white-200">Tranquilidad total para ti</h2>
                                Nos hacemos cargo de cada detalle técnico, legal y operativo.
                            </li>
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
                                        <a href="" class="customSeccionTarjetaNumero__link text-secondary-100 d-flex align-items-center gap-2">
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
