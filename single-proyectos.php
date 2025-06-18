<?php
/**
 * Template para mostrar posts individuales
 */

get_header('single');
?>
<main>
    <div class="container py-5">
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
                                    <span class="d-flex gap-2 align-items-center parrafo-small bg-secondary p-2 rounded-3 fw-regular">
                                        <?php get_template_part('template-parts/componentes/icono-corazon'); ?>
                                        Obra civil
                                    </span>
                                    <span class="d-flex gap-2 align-items-center parrafo-small bg-secondary p-2 rounded-3 fw-regular">
                                        <?php get_template_part('template-parts/componentes/icono-en-proceso'); ?>
                                        En proceso
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <img src="<?php echo THEME_IMG; ?>/post-llaves-en-mano.webp" alt="<?php the_title(); ?>" class="img-fluid rounded-4 overflow-hidden">
                        </div>
                    </header>
                    
                    <div>
                        <div class="row">
                            <div class="col-12 col-lg-3 border-end border-secondary-100">
                                <div class="d-flex flex-column gap-4">
                                    <div class="">
                                        <p class="fs-5 fw-semibold text-white-200">Fecha de inicio</p>
                                        <p class="fs-5 fw-normal text-white-200">02 Jun 2025</p>
                                    </div>
                                    <div class="">
                                        <p class="fs-5 fw-semibold text-white-200">Ubicación</p>
                                        <p class="fs-5 fw-normal text-white-200">Barranquilla</p>
                                    </div>
                                    <div class="">
                                        <p class="fs-5 fw-semibold text-white-200">Tipo de proyecto</p>
                                        <p class="fs-5 fw-normal text-white-200">Industrial</p>
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
