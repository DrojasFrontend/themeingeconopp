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
                                <div class="d-flex justify-content-start align-items-start gap-2">
                                    <?php
                                        $post_id          = get_the_ID();
                                        $grupo_proyectos  = get_field('grupo_proyectos', $post_id);
                                        $servicio         = $grupo_proyectos['servicio'] ?? '';
                                        $estatus          = $grupo_proyectos['estatus'] ?? '';

                                        if ($estatus) {
                                            $estatus = esc_html($estatus);
                                        }

                                        if ($servicio) {
                                            $servicio = esc_html($servicio);
                                        }
                                    ?>
                                    <?php if ($servicio) { ?>
                                        <span class="d-flex gap-2 align-items-center parrafo-small bg-secondary p-2 rounded-3 fw-regular">
                                            <?php get_template_part('template-parts/componentes/icono-corazon'); ?>
                                            <?php echo $servicio; ?>
                                        </span>
                                    <?php } ?>
                                    
                                    <?php if ($estatus) { ?>
                                        <span class="d-flex gap-2 align-items-center parrafo-small bg-secondary p-2 rounded-3 fw-regular">
                                            <?php get_template_part('template-parts/componentes/icono-en-proceso'); ?>
                                            <?php echo $estatus; ?>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <?php
                                $grupo_imagen   = get_field('grupo_imagen', $post_id);
                                $imagen_grande  = $grupo_imagen['imagen'] ?? '';
                                if ($imagen_grande) {
                                    $imagen_grande = $imagen_grande['ID'];
                                }
                            ?>
                            <?php if ($imagen_grande) { ?>
                                <?php echo generar_image_responsive($imagen_grande, 'custom-size', 'img-fluid rounded-4 overflow-hidden', ''); ?>
                            <?php } ?>
                        </div>
                    </header>
                    
                    <div>
                        <div class="row">
                            <div class="col-12 col-lg-3 border-end border-secondary-100">
                                <div class="d-flex flex-column gap-4">
                                    <?php
                                        $fecha_de_inicio  = $grupo_proyectos['fecha_de_inicio'] ?? '';
                                        $ubicacion        = $grupo_proyectos['ubicacion'] ?? '';
                                        $tipo_de_proyecto = $grupo_proyectos['tipo_de_proyecto'] ?? '';

                                        if ($fecha_de_inicio) {
                                            $fecha_de_inicio = esc_html($fecha_de_inicio);
                                        }

                                        if ($ubicacion) {
                                            $ubicacion = esc_html($ubicacion);
                                        }

                                        if ($tipo_de_proyecto) {
                                            $tipo_de_proyecto = esc_html($tipo_de_proyecto);
                                        }
                                    ?>
                                    <div class="d-flex flex-column gap-2">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-9">
                                <div class="d-flex flex-column justify-content-center gap-4 ps-3 h-100">
                                    <h2 class="fs-3 fw-semibold text-white-200">Planta Industrial - Procaps S.A.</h2>
                                    <p class="fs-5 text-white-200 mb-0">
                                        Obras civiles para la construcción de cimentaciones para Microturbina y equipos auxiliares, inlcuye obras de urbanismo, albañileria , Carpinteria Metálica. 
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
