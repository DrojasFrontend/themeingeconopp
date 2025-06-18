<?php
/**
 * Template para mostrar el archivo de proyectos con tabs por etiquetas
 */

get_header(); ?>

<main id="primary" class="site-main">
    <section class="customSeccionBannerImagen position-relative">
        <img class="d-none d-lg-block img-fluid" src="<?php echo THEME_IMG; ?>/hero-proyectos.webp" alt="Hero proyectos" title="Hero proyectos">
        <img class="d-lg-none img-fluid" src="<?php echo THEME_IMG; ?>/hero-proyectos-mobile.webp" alt="Hero proyectos" title="Hero proyectos">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-lg-center align-items-end py-5">
            <div class="container">
                <header>
                    <h1 class="fs-1-medium text-white fw-semibold"><?php post_type_archive_title(); ?></h1>
                </header>
            </div>
        </div>
    </section>

    <section class="customSeccionMarquee py-2">
      <div class="swiper marqueeSwiper">
        <div class="swiper-wrapper">
          <?php for ($i = 0; $i < 5; $i++) { ?>
          <div class="swiper-slide">
            <div class="d-flex align-items-center">
              <h2 class="d-none d-lg-block fs-1"> Cada proyecto, una historia construida con <strong>calidad</strong>, técnica y confianza.</h2>
              <h2 class="d-lg-none fs-4"> <strong>Diseñamos, gestionamos y ejecutamos soluciones</strong> constructivas a la medida de cada proyecto. </h2>
            </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <section class="customSeccionArchiveProyectos pt-lg-7 pt-4">
        <div class="container px-lg-3 px-0">
            <?php
            // Obtener todos los términos de la taxonomía 'proyectos'
            $terms = get_terms(array(
                'taxonomy' => 'proyectos',
                'hide_empty' => true,
            ));
            ?>
            <!-- Nav tabs -->
            <ul class="row gx-0 gap-3 border-bottom border-secondary-100 pb-3" id="serviciosTabs" role="tablist">
                <?php foreach ($terms as $index => $term) : ?>
                    <li class="col d-flex justify-content-center list-style-none" role="presentation">
                        <button class="position-relative w-100 border-0 p-0 parrafo text-secondary-100 <?php echo $index === 0 ? 'nav-link active' : ''; ?>" id="tab-<?php echo $term->slug; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $term->slug; ?>" type="button" role="tab" aria-controls="<?php echo $term->slug; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"><?php echo $term->name; ?></button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="container">
            <!-- Tab panes -->
            <div class="tab-content pt-5" id="serviciosTabsContent">
                <!-- Tabs por término -->
                <?php foreach ($terms as $index => $term) : ?>
                    <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" id="<?php echo $term->slug; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $term->slug; ?>">
                        <?php
                        $servicios_query = new WP_Query(array(
                            'post_type' => 'proyectos',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'proyectos',
                                    'field'    => 'slug',
                                    'terms'    => $term->slug,
                                ),
                            ),
                        ));
                        ?>
                        <?php if ($servicios_query->have_posts()) : ?>
                            <div class="proyectos-grid">
                                <?php while ($servicios_query->have_posts()) : $servicios_query->the_post(); ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('customSeccionArchiveProyectos__grid d-lg-grid gap-3 mb-lg-5 pb-lg-5 mb-4 pb-4 border-bottom border-secondary-100'); ?>>
                                        <div class="d-flex flex-column d-lg-none justify-content-between">
                                            <p class="parrafo-small fw-semibold">Colombia</p>
                                            <h2 class="fs-4 fw-regular">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            <p class="parrafo fw-normal">Construcción</p>
                                            <div class="d-flex align-items-center justify-content-end gap-2">
                                                <a href="<?php the_permalink(); ?>" class="btn btn-blanco bg-transparent border-0 p-0">
                                                    <span class="sr-only">Leer más</span>
                                                    <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-between gap-3">
                                            <div class="d-none d-lg-flex justify-content-between">
                                                <div class="d-flex flex-column gap-2">
                                                    <p class="parrafo-small fw-semibold">Colombia</p>
                                                    <h2 class="fs-4 fw-regular">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h2>
                                                    <p class="parrafo fw-normal">Construcción</p>
                                                </div>
                                                <div class="d-flex align-items-start gap-2">
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-blanco bg-transparent border-0 p-0">
                                                        <span class="sr-only">Leer más</span>
                                                        <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="fs-5">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="d-flex justify-content-center">
                                                <?php the_post_thumbnail('large', array('class' => 'd-lg-block img-fluid')); ?>
                                            </div>
                                        <?php endif; ?>
                                    </article>
                                <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <p>No se encontraron proyectos en esta categoría.</p>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="customSeccionMarcas pt-lg-7 pt-4">
      <div class="container">
        <div class="text-center">
          <h2 class="fs-2 mb-lg-5 mb-4">Ellos confiaron en <strong>nosotros</strong></h2>
        </div>
        <div class="row">
          <div class="swiper marcaSwiper">
            <div class="swiper-wrapper">
              <?php for ($i = 0; $i < 2; $i++) { ?>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-1.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-2.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-3.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-4.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-5.png" alt="" title="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo THEME_IMG; ?>/marca-6.png" alt="" title="">
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="customSeccionTarjetaNumero pt-lg-7 pt-4">
        <div class="px-lg-3">
            <div class="bg-gray-400 rounded-4 py-4">
                <div class="container">
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
                <div class="container px-lg-3 px-0">
                    <div class="mt-5">
                        <div class="swiper tarjetaNumeroSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="customSeccionTarjetaNumero__item position-relative d-flex flex-column justify-content-end bg-primary-100 p-3 pb-5 rounded-4 h-100">
                                        <img class="customSeccionTarjetaNumero__numero position-absolute" src="<?php echo THEME_IMG; ?>/numero-01.svg" alt="Numero 1" title="Numero 1">
                                        <h3 class="position-relative z-1 fs-2 text-white mb-2">Cuéntanos <br> tu idea</h3>
                                        <p class="parrafo-small text-white">
                                            Diligencia nuestro formulario o contáctanos directamente. Solo necesitamos los datos clave de tu proyecto: tipo de obra, ubicación, necesidades y objetivos.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="customSeccionTarjetaNumero__item position-relative d-flex flex-column justify-content-end bg-primary-100 p-3 pb-5 rounded-4 h-100">
                                        <img class="customSeccionTarjetaNumero__numero position-absolute" src="<?php echo THEME_IMG; ?>/numero-02.svg" alt="Numero 2" title="Numero 2">
                                        <h3 class="position-relative z-1 fs-2 text-white mb-2">Evaluamos y estructuramos tu propuesta</h3>
                                        <p class="parrafo-small text-white">
                                            Nuestro equipo técnico analiza la información, valida los alcances y te arma una propuesta ajustada, clara y transparente.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="customSeccionTarjetaNumero__item position-relative d-flex flex-column justify-content-end bg-primary-100 p-3 pb-5 rounded-4 h-100">
                                        <img class="customSeccionTarjetaNumero__numero position-absolute" src="<?php echo THEME_IMG; ?>/numero-03.svg" alt="Numero 3" title="Numero 3">
                                        <h3 class="position-relative z-1 fs-2 text-white mb-2">Recibe tu cotización y da el siguiente paso</h3>
                                        <p class="parrafo-small text-white">
                                            En pocos días tendrás una propuesta clara, adaptada a tu proyecto. Estamos listos para construir contigo desde la planeación hasta la ejecución.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSeccionMarquee pt-lg-7 pt-4">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-4">
            <?php get_template_part('template-parts/layout/header/content-logo'); ?>
          </div>
        </div>
      </div>
      <div class="swiper marqueeSwiper">
        <div class="swiper-wrapper">
          <?php for ($i = 0; $i < 5; $i++) { ?>
          <div class="swiper-slide">
            <div class="d-flex align-items-center">
              <h2 class="d-none d-lg-block fs-1"><strong> Garantizamos</strong> cumplimiento, eficiencia y resultados. </h2>
              <h2 class="d-lg-none fs-4"><strong> Garantizamos</strong> cumplimiento, eficiencia y resultados. </h2>
            </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>