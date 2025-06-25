<?php
/**
 * Template para mostrar posts individuales
 */

get_header('single');
?>
<main>
    <div class="container py-5 mb-5">
        <div class="row">
            <div class="col-12 col-lg-11 mx-auto">
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
                                <div class="d-flex flex-column justify-content-between align-items-start gap-2">
                                    <?php
                                        $post_id             = get_the_ID();
                                        $grupo_proyectos     = get_field('grupo_proyectos', $post_id);
                                        $categoria           = $grupo_proyectos['categoria'] ?? '';
                                        $estatus             = $grupo_proyectos['estatus'] ?? '';
                                        $tiempo_de_ejecucion = $grupo_proyectos['tiempo_de_ejecucion'] ?? '';

                                        if ($estatus) {
                                            $estatus = esc_html($estatus);
                                        }

                                        if ($categoria) {
                                            $categoria = esc_html($categoria);
                                        }

                                        if ($tiempo_de_ejecucion) {
                                            $tiempo_de_ejecucion = esc_html($tiempo_de_ejecucion);
                                        }
                                    ?>
                                    <div class="d-flex justify-content-start align-items-start gap-2">
                                        <?php if ($categoria) { ?>
                                            <span class="d-flex gap-2 align-items-center parrafo-small bg-secondary p-2 rounded-3 fw-regular">
                                                <?php get_template_part('template-parts/componentes/icono-corazon'); ?>
                                                <?php echo $categoria; ?>
                                            </span>
                                        <?php } ?>
                                        
                                        <?php if ($estatus !== 'Completado') { ?>
                                            <span class="d-flex gap-2 align-items-center parrafo-small bg-secondary p-2 rounded-3 fw-regular">
                                                <?php get_template_part('template-parts/componentes/icono-en-proceso'); ?>
                                                <?php echo $estatus; ?>
                                            </span>
                                        <?php } else { ?>
                                            <span class="d-flex gap-2 align-items-center parrafo-small bg-secondary p-2 rounded-3 fw-regular">
                                                <?php get_template_part('template-parts/componentes/icono-completado'); ?>
                                                <?php echo $estatus; ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                    <?php if ($tiempo_de_ejecucion) { ?>
                                        <div class="text-lg-end mt-lg-0 mt-3">
                                            <p class="fs-5 fw-semibold text-white-200">Tiempo de ejecución</p>
                                            <p class="fw-normal text-white-200"><?php echo $tiempo_de_ejecucion; ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <?php
                                $grupo_imagen   = get_field('grupo_imagen', $post_id);
                                $imagen_grande  = $grupo_imagen['imagen'] ?? '';
                                // if ($imagen_grande) {
                                //     $imagen_grande = $imagen_grande['ID'];
                                // }
                            ?>
                           <?php if ($imagen_grande) { ?>
                                <div class="swiper gallerySwiper">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($imagen_grande as $imagen) { 
                                            $imagen_url = $imagen['ID'];
                                        ?>
                                        <div class="swiper-slide">
                                            <?php echo generar_image_responsive($imagen_url, 'custom-size', 'img-fluid rounded-4 overflow-hidden', ''); ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </header>
                    
                    <div>
                        <div class="row">
                            <div class="col-12 col-lg-4 border-end border-secondary-100">
                                <div class="d-flex flex-column gap-4">
                                    <?php
                                        $fecha_de_inicio  = $grupo_proyectos['fecha_de_inicio'] ?? '';
                                        $ubicacion        = $grupo_proyectos['ubicacion'] ?? '';
                                        $tipo_de_proyecto = $grupo_proyectos['tipo_de_proyecto'] ?? '';
                                        $ejecutado_por    = $grupo_proyectos['ejecutado_por'] ?? '';

                                        if ($fecha_de_inicio) {
                                            $fecha_de_inicio = esc_html($fecha_de_inicio);
                                        }

                                        if ($ubicacion) {
                                            $ubicacion = esc_html($ubicacion);
                                        }

                                        if ($tipo_de_proyecto) {
                                            $tipo_de_proyecto = esc_html($tipo_de_proyecto);
                                        }

                                        if ($ejecutado_por) {
                                            $ejecutado_por = esc_html($ejecutado_por);
                                        }
                                    ?>
                                    <div class="d-flex flex-column gap-4">
                                        <?php if ($fecha_de_inicio) { ?>
                                            <div>
                                                <p class="fs-5 fw-semibold text-white-200">Fecha de inicio</p>
                                                <p class="fs-5 fw-normal text-white-200"><?php echo $fecha_de_inicio; ?></p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($ubicacion) { ?>
                                            <div>
                                                <p class="fs-5 fw-semibold text-white-200">Ubicación</p>
                                                <p class="fs-5 fw-normal text-white-200"><?php echo $ubicacion; ?></p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($tipo_de_proyecto) { ?>
                                            <div>
                                                <p class="fs-5 fw-semibold text-white-200">Tipo de proyecto</p>
                                                <p class="fs-5 fw-normal text-white-200"><?php echo $tipo_de_proyecto; ?></p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($ejecutado_por) { ?>
                                            <div>
                                                <p class="fs-5 fw-semibold text-white-200">Contratista principal</p>
                                                <p class="fs-5 fw-normal text-white-200"><?php echo $ejecutado_por; ?></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="d-flex flex-column justify-content-center gap-4 ps-lg-3 mt-lg-0 mt-3 h-100">
                                    <h2 class="fs-3 fw-semibold text-white-200"><?php the_excerpt(); ?></h2>
                                    <p class="fs-5 text-white-200 mb-0">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
<?php
get_footer('single');
?>
