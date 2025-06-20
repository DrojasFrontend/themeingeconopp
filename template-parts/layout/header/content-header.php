<?php
/**
 * Header principal del sitio
 */
$grupo_header_top = get_field('grupo_header_top', 'options');
$texto_header_top = $grupo_header_top['texto_header_top'] ?? '';
?>
<header class="">
    <div class="headerTop bg-gray-100 py-lg-4 py-3">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <?php if ($texto_header_top) { ?>
                        <div class="text-white fw-light"><?php echo wp_kses_post($texto_header_top); ?></div>
                    <?php } ?>
                </div>
                <div class="col text-end text-white">
                    <?php 
                    global $TRP_LANGUAGE;
                    $trp = TRP_Translate_Press::get_trp_instance();
                    $url_converter = $trp->get_component('url_converter');
                    
                    $idiomas = array(
                        'es_CO' => 'Español',
                        'en_US' => 'Ingles'
                    );
                    ?>
                    
                    <div class="d-inline-block">
                        <div class="w-auto d-flex flex-row-reverse align-items-center gap-lg-2 gap-1 bg-gray-300 py-1 px-2 rounded-5">
                            <?php foreach ($idiomas as $codigo => $nombre): ?>
                                <?php if ($codigo === $TRP_LANGUAGE): ?>
                                    <span class="parrafo-small bg-gray-200 px-lg-3 px-2 py-1 rounded-5 language-active"><?php echo $nombre; ?></span>
                                <?php else: ?>
                                    <a class="parrafo-small px-3 py-1" href="<?php echo $url_converter->get_url_for_language($codigo); ?>" class="language-inactive">
                                        <?php echo $nombre; ?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
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