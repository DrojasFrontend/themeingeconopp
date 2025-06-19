<?php
/**
 * Template para mostrar el archivo de servicios con tabs por etiquetas
 */

get_header(); 
$paginaServicios     = get_page_by_path('servicios');
$paginaServiciosID   = $paginaServicios ? $paginaServicios->ID : null;
$grupo_hero          = ($paginaServiciosID) ? get_field('grupo_hero', $paginaServiciosID) : null;
$titulo_hero         = $grupo_hero['titulo'] ?? '';
$imagen_hero         = $grupo_hero['imagen'] ?? '';
$imagen_hero_mobile  = $grupo_hero['imagen_mobile'] ?? '';

if ($imagen_hero) {
    $imagen_hero = $imagen_hero['ID'];
}

if ($imagen_hero_mobile) {
    $imagen_hero_mobile = $imagen_hero_mobile['ID'];
}

if (!$titulo_hero) {
    $titulo_hero = $paginaServicios ? get_the_title($paginaServiciosID) : post_type_archive_title('', false);
}
?>

<main id="primary" class="site-main">

    <section class="customSeccionBannerImagen position-relative">
        <?php if ($imagen_hero) { ?>
            <?php echo generar_image_responsive($imagen_hero, 'custom-size', 'd-none d-lg-block img-fluid', ''); ?>
            <?php echo generar_image_responsive($imagen_hero_mobile, 'custom-size', 'd-lg-none img-fluid', ''); ?>
        <?php } ?>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-lg-center align-items-end py-5">
            <div class="container">
                <?php if ($titulo_hero) { ?>
                    <header>
                        <h1 class="fs-1-medium text-white fw-semibold">
                            <?php echo $titulo_hero; ?>
                        </h1>
                    </header>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php 
        // Pasar parámetros al template part - Primera instancia
        set_query_var('page_id_for_acf', $paginaServiciosID);
        set_query_var('custom_class', 'py-2');
        set_query_var('acf_group_name', 'grupo_texto_animado'); // Primer grupo ACF
        get_template_part('template-parts/componentes/bloque-texto-animado'); 
    ?>

    <section class="customSeccionArchiveServicios pt-lg-7 pt-4">
        <div class="container px-lg-3 px-0">
            <?php
            // Obtener todos los términos de la taxonomía 'servicios'
            $terms = get_terms(array(
                'taxonomy' => 'servicios',
                'hide_empty' => true,
            ));
            ?>
            <!-- Nav tabs -->
            <ul class="d-flex justify-content-between gap-3 border-bottom border-secondary-100 pb-3 whitespace-nowrap overflow-x-auto" id="serviciosTabs" role="tablist">
                <?php foreach ($terms as $index => $term) : ?>
                    <li class="list-style-none" role="presentation">
                        <button class="position-relative border-0 p-0 parrafo text-secondary-100 <?php echo $index === 0 ? 'nav-link active' : ''; ?>" id="tab-<?php echo $term->slug; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $term->slug; ?>" type="button" role="tab" aria-controls="<?php echo $term->slug; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"><?php echo $term->name; ?></button>
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
                            'post_type' => 'servicios',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'servicios',
                                    'field'    => 'slug',
                                    'terms'    => $term->slug,
                                ),
                            ),
                        ));
                        ?>
                        <?php if ($servicios_query->have_posts()) : ?>
                            <div class="servicios-grid">
                                <?php while ($servicios_query->have_posts()) : $servicios_query->the_post(); ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('customSeccionArchiveServicios__grid d-lg-grid gap-3 mb-lg-5 pb-lg-5 mb-4 pb-4 border-bottom border-secondary-100'); ?>>
                                        <div class="d-flex flex-column d-lg-none justify-content-between">
                                            <div class="d-flex align-items-center justify-content-between gap-2">
                                                <a href="" class="btn btn-gris">
                                                    Descargar
                                                </a>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-blanco bg-transparent border-0 p-0">
                                                    <span class="sr-only">Leer más</span>
                                                    <?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
                                                </a>
                                            </div>
                                            <h2 class="fs-4 fw-regular">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            
                                        </div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="d-flex justify-content-center">
                                                <?php the_post_thumbnail('large', array('class' => 'd-lg-block img-fluid')); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="d-flex flex-column justify-content-between gap-3">
                                            <div class="d-none d-lg-flex justify-content-between">
                                                <h2 class="fs-4 fw-regular">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                                <div class="d-flex align-items-center gap-2">
                                                    <?php 
                                                        $cta = get_field('grupo_descarga', get_the_ID());
                                                    ?>
                                                    <?php if ($cta) { ?>
                                                        <a href="<?php echo $cta['cta']['url']; ?>" class="btn btn-gris" target="<?php echo $cta['cta']['target']; ?>" title="<?php echo $cta['cta']['title']; ?>">
                                                            <?php echo $cta['cta']['title']; ?>
                                                        </a>
                                                    <?php } ?>
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
                                    </article>
                                <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <p>No se encontraron servicios en esta categoría.</p>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php 
        // Pasar parámetros al template part - Bloque empresas
        set_query_var('page_id_for_acf', $paginaServiciosID);
        set_query_var('custom_class', 'pt-lg-7 pt-4'); // Clase personalizada
        set_query_var('acf_group_name', 'grupo_empresas'); // Grupo ACF específico
        get_template_part('template-parts/componentes/bloque-empresas'); 
     ?>

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

    <?php 
        // Pasar parámetros al template part - Segunda instancia (Footer)
        set_query_var('page_id_for_acf', $paginaServiciosID);
        set_query_var('custom_class', 'pt-lg-7 pt-4');
        set_query_var('acf_group_name', 'grupo_texto_animado_footer'); // Segundo grupo ACF
        get_template_part('template-parts/componentes/bloque-texto-animado'); 
    ?>

    
</main>

<?php get_footer(); ?>