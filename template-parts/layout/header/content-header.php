<?php
/**
 * Header principal del sitio
 */
$grupo_header_top = get_field('grupo_header_top', 'options');
$texto_header_top = $grupo_header_top['texto_header_top'] ?? '';
?>
<header class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s"">
    <div class="headerTop bg-gray-100 py-lg-4 py-3">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <?php if ($texto_header_top) { ?>
                        <div class="text-white fw-light"><?php echo wp_kses_post($texto_header_top); ?></div>
                    <?php } ?>
                </div>
                <div class="col text-end text-white">
                    <?php get_template_part('template-parts/componentes/bloque-traductor'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="headerBottom position-fixed w-100 py-lg-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <!-- Logo -->
                    <?php get_template_part('template-parts/layout/header/content-logo'); ?>
                </div>
                <div class="d-none d-lg-block col-12 col-lg-6">
                    <div class="headerMenu h-100">
                        <!-- Menu -->
                        <?php get_template_part('template-parts/layout/header/content-menu'); ?>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <!-- Button -->
                    <div class="d-flex justify-content-end align-items-center h-100">
                        <?php get_template_part('template-parts/layout/header/content-button'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php get_template_part('template-parts/layout/header/content-menu-mobile'); ?>